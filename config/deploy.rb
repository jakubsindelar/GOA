#lock '3.1.0'

set :stages, %w(production)
set :default_stage, 'production'
set :scm, :git
set :format, :pretty
#set :log_level, :debug

#set :pty, true
set :keep_releases, 3

set :linked_files, %w{config/database.yml config/secrets.yml}
# set :linked_dirs, %w{bin log tmp/pids tmp/cache tmp/sockets vendor/bundle public/system}

namespace :deploy do

  desc 'Restart application'
  task :restart do
    on roles(:app), in: :sequence, wait: 5 do
      execute :touch, release_path.join('tmp/restart.txt')
    end
  end

  task :uptime do
    on roles(:web), in: :groups do
      uptime = capture(:uptime)
      #puts "#{host.hostname} reports: #{uptime}"
    end
  end

  after :publishing, :restart
  after :restart, :uptime

end
