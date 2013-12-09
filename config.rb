require "config/helpers"
require "fog"

Fog.credentials = { path_style: true }

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
  activate :cache_buster
  activate :favicon_maker
  activate :gzip
  activate :minify_css
  activate :minify_javascript
  activate :smusher
  activate :relative_assets
end

activate :directory_indexes
activate :livereload, host: "aed.dev"
activate :syntax
activate :sprockets

activate :google_analytics do |ga|
  ga.tracking_id = "UA-11111111-1"
end
