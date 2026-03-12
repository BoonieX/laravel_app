node {
    checkout scm

    // Build stage
    stage('Build') {
        docker.image('composer:2').inside('--entrypoint="" -u root') {
            sh '''
                git config --global --add safe.directory "$WORKSPACE"
                composer install --no-interaction --prefer-dist --optimize-autoloader
                if [ ! -f .env ]; then
                    if [ -f .env.example ]; then
                        cp .env.example .env
                    else
                        printf "APP_ENV=testing\nAPP_KEY=\nAPP_DEBUG=true\nAPP_URL=http://localhost\nDB_CONNECTION=sqlite\nCACHE_STORE=array\nQUEUE_CONNECTION=sync\nSESSION_DRIVER=array\n" > .env
                    fi
                fi
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
                if [ ! -f .env ]; then
                    if [ -f .env.example ]; then
                        cp .env.example .env
                    else
                        printf "APP_ENV=testing\nAPP_KEY=\nAPP_DEBUG=true\nAPP_URL=http://localhost\nDB_CONNECTION=sqlite\nCACHE_STORE=array\nQUEUE_CONNECTION=sync\nSESSION_DRIVER=array\n" > .env
                    fi
                fi
                touch database/database.sqlite
                php artisan test
            '''
        }
    }

    // Deploy to production stage
    stage('Deploy') {
        docker.image('instrumentisto/rsync-ssh:alpine').inside('--entrypoint="" -u root') {
            sshagent(credentials: ['ssh-prod']) {
                sh 'mkdir -p ~/.ssh'
                sh 'ssh-keyscan -H $PROD_HOST > ~/.ssh/known_hosts'
                sh 'rsync -rv --delete ./ ubuntu@$PROD_HOST:/home/ubuntu/prod.kilanadevops.xyz/ --exclude=.env --exclude=storage --exclude=.git'
            }
        }
    }
}
