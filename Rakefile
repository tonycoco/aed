task :default => :install

desc "Runs both the Bundler and Bower installs"
task :install do
  `bundle install`
  `bower install`
end

desc "Run both the Bundler and Bower updates"
task :update do
  `bundle update`
  `bower update`
end
