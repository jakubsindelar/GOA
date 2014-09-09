role :app, %w{fanatik@heroesofmemory.eu}
role :web, %w{fanatik@heroesofmemory.eu}
role :db,  %w{fanatik@heroesofmemory.eu}

set :rails_env, "production"
set :stage, 'production'
set :application, 'web'
set :repo_url, 'git@github.com:jakubsindelar/GOA.git'

set :branch, "master"
set :deploy_to, '/home/fanatik/dev/GOA_TEST'

server 'heroesofmemory.eu', user: 'fanatik', roles: %w{web app}
