pipeline {
    agent {
        node {
            label 'master'
        }
    }

    stages {
        stage('terraform started') {
            steps {
                sh 'echo "Started...!" '
            }
        }
        stage('terraform clone') {
            steps {
                checkout([$class: 'GitSCM', branches: [[name: '*/master']], doGenerateSubmoduleConfigurations: false, extensions: [], submoduleCfg: [], userRemoteConfigs: [[credentialsId: 'f833ab8e-825d-4f6b-82d7-b629737cfdc4', url: 'https://github.com/1996karthick/drupal.git']]])
            }
        }
        stage('Parameters'){
            steps {
                sh label: '', script: ''' sed -i \"s/user/$access_key/g\" /var/lib/jenkins/workspace/drupal/variables.tf
sed -i \"s/password/$secret_key/g\" /var/lib/jenkins/workspace/drupal/variables.tf
sed -i \"s/t2.micro/$instance_type/g\" /var/lib/jenkins/workspace/drupal/variables.tf
sed -i \"s/10/$instance_size/g\" /var/lib/jenkins/workspace/drupal/ec2.tf
sed -i \"s/ap-south-1/$instance_region/g\" /var/lib/jenkins/workspace/drupal/variables.tf
sed -i \"s/ap-south-1a/$availability_zone/g\" /var/lib/jenkins/workspace/drupal/variables.tf
sed -i \"s/Karthi-keys/$key/g\" /var/lib/jenkins/workspace/drupal/variables.tf
sed -i \"s/ami-0470e33cd681b2476/$Image/g\" /var/lib/jenkins/workspace/drupal/variables.tf
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
                sh 'terraform apply  -auto-approve'
              
            } 
        }
        stage('drupal deployment') {
            steps {
                sh label: '', script: '''pubIP=$(<publicip)
                echo "$pubIP"
                ssh -tt ec2-user@$pubIP
                echo "yes"
                sleep 5
                git clone -b deploy https://github.com/1996karthick/drupal.git
                cd drupal
                bash deploy.sh
                '''
              
            } 
        }
        
    }
}
