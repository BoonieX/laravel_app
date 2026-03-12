node {
    checkout scm

    // Build stage
    stage('Build') {
        docker.image('composer:2').inside('-u root') {
            sh 'composer install --no-interaction --prefer-dist --optimize-autoloader'
        }
    }

    // Testing stage
    stage('Testing') {
        docker.image('composer:2').inside('-u root') {
            sh 'php artisan test'
        }
    }

    // Deploy to production stage
    stage('Deploy') {
        docker.image('appleboy/drone-rsync').inside('-u root') {
            sshagent(credentials: ['ssh-prod']) {
                sh 'mkdir -p ~/.ssh'
                sh 'ssh-keyscan -H $PROD_HOST > ~/.ssh/known_hosts'
                sh 'rsync -rv --delete ./ ubuntu@$PROD_HOST:/home/ubuntu/prod.kilanadevops.xyz/ --exclude=.env --exclude=storage --exclude=.git'
            }
        }
    }
}
