require "config/helpers"
require "fog"

helpers do
  include ApplicationHelpers
end

set :css_dir, "stylesheets"
set :fonts_dir, "fonts"
set :haml, { format: :html5 }
set :images_dir, "images"
set :js_dir, "javascripts"

ready do
  sprockets.append_path File.join(root, JSON.parse(IO.read("#{root}/.bowerrc"))["directory"])
end

configure :build do
  activate :favicon_maker
  activate :smusher
  activate :relative_assets
end

activate :directory_indexes
activate :livereload, host: "aed.dev"
activate :sprockets

activate :google_analytics do |ga|
  ga.tracking_id = "UA-11111111-1"
end
