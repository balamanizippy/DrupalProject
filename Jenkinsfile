pipeline {
    agent {
        node {
            label 'master'
        }
    }

    stages {
          stage('Terraform Destroy') {
            steps {
                script {
			      instance="${params.Terraform_Destroy}"
                  if ("$instance" == "Yes"){
                        sh 'terraform destroy -auto-approve'
                        sh label: '', script: '''rm -rf ${WORKSPACE}/*'''
                }
                else{
                    sh 'echo "Run with same code!!!"'
                }
              }
            }
        }
        stage('terraform clone') {
            steps {
                  checkout([$class: 'GitSCM', branches: [[name: '*/master']], doGenerateSubmoduleConfigurations: false, extensions: [], submoduleCfg: [], userRemoteConfigs: [[credentialsId: '7a67154e-41ab-4ad9-9cb2-1e35ed6698aa', url: 'https://github.com/1996karthick/DrupalProject.git']]])
            }
        }
        stage('Success Message'){
            steps {
               script {
			      instance="${params.Environment}"
			          if ("$instance" == "SingleServer"){
                            sh "rm -rf DrupalwithAutoscalingLoadBalancer DrupalwithEC2_MariaDB DrupalwithEC2_RDS"
                            sh "mv ${WORKSPACE}/DrupalSingle/* ${WORKSPACE}"
                            sh 'echo "Everything is Perfect, Go Ahead for Singleserver!!!"'
                      }
					  else if ("$instance" == "MultiServer_with_MariaDB"){
                            sh "rm -rf DrupalwithAutoscalingLoadBalancer DrupalSingle DrupalwithEC2_RDS"
                            sh "mv ${WORKSPACE}/DrupalwithEC2_MariaDB/* ${WORKSPACE}"
		                    sh 'echo "Everything is Perfect, Go Ahead for Multiserver_with_PrivateEC2db!!!"'
		              }
                      else if ("$instance" == "MultiServer_with_RDS"){
                            sh "rm -rf DrupalwithAutoscalingLoadBalancer DrupalwithEC2_MariaDB DrupalSingle"
                            sh "mv ${WORKSPACE}/DrupalwithEC2_RDS/* ${WORKSPACE}"
		                    sh 'echo "Everything is Perfect, Go Ahead for Multiserver_With_RDS!!!"'
		              }
                      else if ("$instance" == "MultiServer_with_AS_ALB"){
                            sh "rm -rf DrupalSingle DrupalwithEC2_MariaDB DrupalwithEC2_RDS"
                            sh "mv ${WORKSPACE}/DrupalwithAutoscalingLoadBalancer/* ${WORKSPACE}"
		                    sh label: '', script: ''' sed -i \"s/2/$Autoscaling_Max_Value/g\" ${WORKSPACE}/variables.tf
                            sed -i \"s/1/$Autoscaling_Min_Value/g\" ${WORKSPACE}/variables.tf
                            '''
							sh 'echo "Everything is Perfect, Go Ahead for MultiServer_with_AutoScaling&Loadbalancer!!!"'
		              }
					  else {
		                  sh 'echo "Something went Wrong!!!"'
		              }
                }
                  }
            }
        stage('Parameters'){
            steps {
                sh label: '', script: ''' sed -i \"s/user/$Access_key/g\" ${WORKSPACE}/variables.tf
                sed -i \"s/password/$Secret_key/g\" ${WORKSPACE}/variables.tf
                sed -i \"s/t2.micro/$Instance_type/g\" ${WORKSPACE}/variables.tf
                sed -i \"s/10/$Instance_size/g\" ${WORKSPACE}/variables.tf
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
                
            }
        } 
        stage("git checkout") {
	     steps {
		       checkout([$class: 'GitSCM', branches: [[name: '*/sourcecode']], doGenerateSubmoduleConfigurations: false, extensions: [[$class: 'RelativeTargetDirectory', relativeTargetDir: 'drupalcodebase']], submoduleCfg: [], userRemoteConfigs: [[credentialsId: '7a67154e-41ab-4ad9-9cb2-1e35ed6698aa', url: 'https://github.com/1996karthick/DrupalProject.git']]])
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
        sleep 300
        }
        }
         stage('ClamAV') {
	    parallel {
	      stage('Scan') {
	        steps {
	         script {
                build job: 'Drupalmulti_Clamav', wait: false
             } 
	        }
	      }
	    }
        }
        stage('Deployment'){
            steps {
               script {
			      instance="${params.Environment}"
			          if ("$instance" == "SingleServer"){
                            sh label: '', script: '''pubIP=$(<publicip)
                            echo "$pubIP"
                            ssh -tt -o UserKnownHostsFile=/dev/null -o StrictHostKeyChecking=no ec2-user@$pubIP /bin/bash << EOF
                            git clone -b sourcecode https://github.com/1996karthick/DrupalProject.git
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
					  else if ("$instance" == "MultiServer_with_MariaDB"){
                            sh label: '', script: '''pubIP=$(<publicip)
                            echo "$pubIP"
						    priIP=$(<privateip)
                            echo "$priIP"
                            MpriIP=$(<privateip2)
                            echo "$MpriIP"
						    ssh -tt -o UserKnownHostsFile=/dev/null -o StrictHostKeyChecking=no ec2-user@$pubIP /bin/bash << EOF
						    git clone -b sourcecode https://github.com/1996karthick/DrupalProject.git
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
                      else if ("$instance" == "MultiServer_with_RDS"){
                            sh label: '', script: '''pubIP=$(<publicip)
                            echo "$pubIP"
						    endpoint=$(<endpoint)
						    echo "$endpoint"
						    ssh -tt -o UserKnownHostsFile=/dev/null -o StrictHostKeyChecking=no ec2-user@$pubIP /bin/bash << EOF
						    git clone -b sourcecode https://github.com/1996karthick/DrupalProject.git
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
                      else if ("$instance" == "MultiServer_with_AS_ALB"){
		                    sh 'echo "Application Deployed, Go Ahead for VAPT,OWASP,LinkChecker,SpeedTest!!!"'
		              
		                    
		                }
					  else {
		                    sh 'echo "Something went Wrong!!!"'
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
                   sudo docker run --rm --network=host -v ${WORKSPACE}/out:/zap/wrk/:rw -t docker.io/owasp/zap2docker-stable zap-baseline.py -t http://$pubIP/drupal -m 15 -d -r Drupal_Dev_ZAP_VULNERABILITY_REPORT_${BUILD_ID}.html -x Drupal_Dev_ZAP_VULNERABILITY_REPORT_${BUILD_ID}.xml || true
                   '''
                   archiveArtifacts artifacts: 'out/'
		    }
        } 
        stage('LinkChecker'){
            steps {
                   sh label: '', script: '''pubIP=$(<publicip)
                   echo "$pubIP"
                   date
                   sudo docker run --rm --network=host ktbartholomew/link-checker --concurrency 30 --threshold 0.05 http://$pubIP/drupal > $WORKSPACE/brokenlink_${BUILD_ID}.html || true
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
                   sudo docker run --rm --network=host -v ${WORKSPACE}:/sitespeed.io sitespeedio/sitespeed.io http://$pubIP/drupal --outputFolder junitoutput --budget.configPath budget.json --budget.output junit -b chrome -n 1  || true
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
        sh label: '', script: '''pubIP=$(<publicip)
                   echo "http://$pubIP/drupal" '''
            }
        }
}
