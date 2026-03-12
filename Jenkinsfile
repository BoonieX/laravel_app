node {
    checkout scm

    // Build stage
    stage('Build') {
        docker.image('composer:2').inside('--entrypoint="" -u root') {
            sh '''
                git config --global --add safe.directory "$WORKSPACE"
                composer install --no-interaction --prefer-dist --optimize-autoloader
                [ -f .env ] || cp .env.example .env
                touch database/database.sqlite
                php artisan key:generate --force
                php artisan config:clear
            '''
        }
    }

    // Testing stage
    stage('Testing') {
        docker.image('composer:2').inside('--entrypoint="" -u root') {
            sh '''
                [ -f .env ] || cp .env.example .env
                touch database/database.sqlite
                php artisan test
            '''
        }
    }

    // Deploy to production stage
    stage('Deploy') {
        docker.image('appleboy/drone-rsync').inside('--entrypoint="" -u root') {
            sshagent(credentials: ['ssh-prod']) {
                sh 'mkdir -p ~/.ssh'
                sh 'ssh-keyscan -H $PROD_HOST > ~/.ssh/known_hosts'
                sh 'rsync -rv --delete ./ ubuntu@$PROD_HOST:/home/ubuntu/prod.kilanadevops.xyz/ --exclude=.env --exclude=storage --exclude=.git'
            }
        }
    }
}
