pipeline {
    agent {
        node {
            label 'master'
        }
    }

    stages {
        stage('Terraform Destroy') {
            steps {
                sh 'terraform destroy -auto-approve'
                sh "rm -rf /${WORKSPACE}/*"
            }
        }
        stage('terraform clone') {
            steps {
                checkout([$class: 'GitSCM', branches: [[name: '*/master']], doGenerateSubmoduleConfigurations: false, extensions: [], submoduleCfg: [], userRemoteConfigs: [[credentialsId: '1b73007b-953c-49db-95ca-2635f9fcc461', url: 'https://github.com/mohamedzoheb/Drupalproject.git']]])
            }
        }
        stage('Success Message'){
            steps {
               script {
			      instance="${params.Instance}"
			          if ("$instance" == "Single"){
                            sh "rm -rf DrupalwithAutoscalingLoadBalancer DrupalwithEC2&MariaDB DrupalwithEC2&RDS"
                            sh "mv /var/lib/jenkins/workspace/DrupalMultiChoice/DrupalSingle/* /var/lib/jenkins/workspace/DrupalMultiChoice"
                            sh 'echo "Everything is Perfect, Go Ahead for Singleserver!!!"'
                      }
					  else if ("$instance" == "MultiServer_with_PrivateEC2db"){
                            sh "rm -rf DrupalwithAutoscalingLoadBalancer DrupalSingle DrupalwithEC2&RDS"
                            sh "mv /var/lib/jenkins/workspace/DrupalMultiChoice/DrupalwithEC2&MariaDB/* /var/lib/jenkins/workspace/DrupalMultiChoice"
		                    sh 'echo "Everything is Perfect, Go Ahead for Multiserver_with_PrivateEC2db!!!"'
		              }
                      else if ("$instance" == "MultiServer_With_RDS"){
                            sh "rm -rf DrupalwithAutoscalingLoadBalancer DrupalwithEC2&MariaDB DrupalSingle"
                            sh "mv /var/lib/jenkins/workspace/DrupalMultiChoice/DrupalwithEC2&RDS/* /var/lib/jenkins/workspace/DrupalMultiChoice"
		                    sh 'echo "Everything is Perfect, Go Ahead for Multiserver_With_RDS!!!"'
		              }
                      else {
                            sh "rm -rf DrupalSingle DrupalwithEC2&MariaDB DrupalwithEC2&RDS"
                            sh "mv /var/lib/jenkins/workspace/DrupalMultiChoice/DrupalwithAutoscalingLoadBalancer/* /var/lib/jenkins/workspace/DrupalMultiChoice"
		                    sh 'echo "Everything is Perfect, Go Ahead for MultiServer_with_AutoScaling&Loadbalancer!!!"'
		              }
                }
                  }
            }
        stage('Parameters'){
            steps {
                sh label: '', script: ''' sed -i \"s/user/$Access_key/g\" /${WORKSPACE}/variables.tf
                sed -i \"s/password/$Secret_key/g\" /${WORKSPACE}/variables.tf
                sed -i \"s/t2.micro/$Instance_type/g\" /${WORKSPACE}/variables.tf
                sed -i \"s/10/$Instance_size/g\" /${WORKSPACE}/variables.tf
                '''
                }
            }
            
        stage('terraform init') {
            steps {
                sh 'terraform init'
            }
        }
        stage('terraform plan') {
            steps {
                sh 'terraform plan'
            }
        }
         stage('terraform apply') {
            steps {
                sh 'terraform apply -auto-approve'
                sleep 210
            }
        } 
        stage("git checkout") {
	     steps {
		    checkout([$class: 'GitSCM', branches: [[name: '*/branchPy']], doGenerateSubmoduleConfigurations: false, extensions: [[$class: 'RelativeTargetDirectory', relativeTargetDir: 'djangocodebase']], submoduleCfg: [], userRemoteConfigs: [[credentialsId: '7e261af1-1211-4b5a-9478-675cac127cce', url: 'https://github.com/GodsonSibreyan/Godsontf.git']]])
           }
        }
		
        stage('SonarQube analysis') {
	     steps {
	       script {
           scannerHome = tool 'sonarqube';
           withSonarQubeEnv('sonarqube') {
		   sh "${scannerHome}/bin/sonar-scanner -Dsonar.projectKey=zippyops:drupal -Dsonar.projectName=drupal -Dsonar.projectVersion=1.0 -Dsonar.projectBaseDir=${WORKSPACE}/drupalcodebase -Dsonar.sources=${WORKSPACE}/drupalcodebase -Dsonar.exclusions=**/drupal/core/modules/**,**/drupal/themes/**,**/drupal/vendor/**,**/drupal/sites/default/files/js/*.js,**/drupal/core/lib/**"
            }
	      }
		}
	    }
        stage("Sonarqube Quality Gate") {
	     steps {
	      script { 
            sleep(80)
            qg = waitForQualityGate() 
		    }
           }
        }
        stage("Dependency Check") {
		 steps {
	      script {
	         sh 'rm -rf ${WORKSPACE}/drupalcodebase/drupal/themes/smallbusiness/includes/flexslider/package.json'
	         sh 'rm -rf ${WORKSPACE}/drupalcodebase/drupal/core/package.json'
	         sh 'rm -rf ${WORKSPACE}/drupalcodebase/drupal/core/assets/vendor/jquery.ui/package.json'
	         sh 'rm -rf ${WORKSPACE}/drupalcodebase/drupal/sites/default/files/js'
			dependencycheck additionalArguments: '', odcInstallation: 'Dependency'
			dependencyCheckPublisher pattern: ''
        }
        archiveArtifacts allowEmptyArchive: true, artifacts: '**/dependency-check-report.xml', onlyIfSuccessful: true
        }
        }
        stage('Deployment'){
            steps {
               script {
			      instance="${params.Instance}"
			          if ("$instance" == "Single"){
                            sh label: '', script: '''pubIP=$(<publicip)
                            echo "$pubIP"
                            ssh -tt -o UserKnownHostsFile=/dev/null -o StrictHostKeyChecking=no ec2-user@$pubIP /bin/bash << EOF
                            git clone -b sourcecode https://github.com/mohamedzoheb/DrupalProject.git
							sleep 5
                            sudo /bin/su - root
                            sleep 5
                            cd /home/ec2-user/DrupalProject
							mysql -u zippyops -pzippyops zippyops_db < zippyops_db.sql
                            yes | cp -Rf drupal /var/www/html/
                            systemctl restart httpd
                            exit
                            sleep 5
                            exit
							EOF
							'''
                            sh 'echo "Application Deployed, Go Ahead for VAPT,OWASP,LinkChecker,SpeedTest!!!"'
                      }
					  else if ("$instance" == "MultiServer_with_PrivateEC2db"){
                            sh label: '', script: '''pubIP=$(<publicip)
                            echo "$pubIP"
						    priIP=$(<privateip)
                            echo "$priIP"
                            MpriIP=$(<privateip2)
                            echo "$MpriIP"
						    ssh -tt -o UserKnownHostsFile=/dev/null -o StrictHostKeyChecking=no ec2-user@$pubIP /bin/bash << EOF
						    git clone -b sourcecode https://github.com/mohamedzoheb/DrupalProject.git
						    sleep 5
                            sudo /bin/su - root
                            sleep 5
                            cd /home/ec2-user/DrupalProject
						    yes | cp -Rf drupal /var/www/html/
						    cd /var/www/html/drupal/sites/default
                            sed -i 's/localhost/$MpriIP/g' settings.php
                            cd /home/ec2-user/DrupalProject
						    mysql -u zippyops -pzippyops -h $MpriIP zippyops_db < zippyops_db.sql
						    systemctl restart httpd
                            exit
                            sleep 5
                            exit
						    EOF
                            '''
		                    sh 'echo "Application Deployed, Go Ahead for VAPT,OWASP,LinkChecker,SpeedTest!!!"'
		              }
                      else if ("$instance" == "MultiServer_With_RDS"){
                            sh label: '', script: '''pubIP=$(<publicip)
                            echo "$pubIP"
						    endpoint=$(<endpoint)
						    echo "$endpoint"
						    ssh -tt -o UserKnownHostsFile=/dev/null -o StrictHostKeyChecking=no ec2-user@$pubIP /bin/bash << EOF
						    git clone -b sourcecode https://github.com/mohamedzoheb/DrupalProject.git
						    sleep 5
                            sudo /bin/su - root
                            sleep 5
						    cd /home/ec2-user/DrupalProject
						    mysql -u zippyops -pzippyops -h $endpoint zippyops_db < zippyops_db.sql
						    yes | cp -Rf drupal /var/www/html/
						    cd /var/www/html/drupal/sites/default
                            sudo sed -i 's/localhost/$endpoint/g' settings.php
						    systemctl restart httpd
                            exit
                            sleep 5
                            exit
						    EOF
                            '''
		                    sh 'echo "Application Deployed, Go Ahead for VAPT,OWASP,LinkChecker,SpeedTest!!!"'
		              }
                      else {
		                    sh 'echo "Application Deployed, Go Ahead for VAPT,OWASP,LinkChecker,SpeedTest!!!"'
		              }
                }
                  }
            }
        stage('VAPT') {
            steps {
                 sh label: '', script: '''pubIP=$(<publicip)
                 echo "$pubIP"
                 ssh -tt root@192.168.5.14 << SSH_EOF
                 echo "open vas server"
                 nohup ./code16.py $pubIP &
                 sleep 5
                 exit
                 SSH_EOF 
                 '''
            }
        }
        stage('OWASP'){
            steps {
                   sh label: '', script: '''pubIP=$(<publicip)
                   echo "$pubIP"
                   mkdir -p $WORKSPACE/out
                   chmod 777 $WORKSPACE/out
                   rm -f $WORKSPACE/out/*.*
                   ls -la
                   sudo docker run --rm --network=host -v /var/lib/jenkins/workspace/DrupalMultiChoice/out:/zap/wrk/:rw -t docker.io/owasp/zap2docker-stable zap-baseline.py -t http://$pubIP/drupal/* -m 15 -d -r Drupal_Dev_ZAP_VULNERABILITY_REPORT_${BUILD_ID}.html -x Drupal_Dev_ZAP_VULNERABILITY_REPORT_${BUILD_ID}.xml || true
                   '''
                   archiveArtifacts artifacts: 'out/**/*'
		    }
        } 
        stage('LinkChecker'){
            steps {
                   sh label: '', script: '''pubIP=$(<publicip)
                   echo "$pubIP"
                   date
                   sudo docker run --rm --network=host ktbartholomew/link-checker --concurrency 30 --threshold 0.05 http://$pubIP/drupal/* > $WORKSPACE/brokenlink_${BUILD_ID}.html || true
                   date
                   '''
                  archiveArtifacts artifacts: '**/brokenlink_${BUILD_ID}.html'
                   }
        }
        stage('SpeedTest') {
	      steps {
                   sh label: '', script: '''pubIP=$(<publicip)
                   echo "$pubIP"
		           cp -r /var/lib/jenkins/speedtest/budget.json  ${WORKSPACE}
                   sudo docker run --rm --network=host -v ${WORKSPACE}:/sitespeed.io sitespeedio/sitespeed.io http://$pubIP/drupal/* --outputFolder junitoutput --budget.configPath budget.json --budget.output junit -b chrome -n 1  || true
		           '''
		           archiveArtifacts artifacts: 'junitoutput/**/*'
		  }
	    }
    }
	post {
        always {
        publishHTML target: [
              allowMissing: false,
              alwaysLinkToLastBuild: true,
              keepAll: true,
              reportDir: '/var/lib/jenkins/jobs/${JOB_NAME}/builds/${BUILD_ID}/archive/junitoutput',
              reportFiles: 'index.html',
              reportName: 'Dev_speedtest'
			  ]
        publishHTML target: [
              allowMissing: false,
              alwaysLinkToLastBuild: true,
              keepAll: true,
              reportDir: '/var/lib/jenkins/jobs/${JOB_NAME}/builds/${BUILD_ID}/archive',
              reportFiles: 'brokenlink_${BUILD_ID}.html',
              reportName: 'Dev_linkcheck'
              ]
		publishHTML target: [
              allowMissing: false,
              alwaysLinkToLastBuild: true,
              keepAll: true,
              reportDir: '/var/lib/jenkins/jobs/${JOB_NAME}/builds/${BUILD_ID}/archive/out',
              reportFiles: 'Drupal_Dev_ZAP_VULNERABILITY_REPORT_${BUILD_ID}.html',
              reportName: 'Dev_owasp'
              ]
            }
        }
}