require 'sinatra'

get '/' do
 send_file 'webapps.html'
end

get '/gvsu-logo.png' do
  send_file 'gvsu-logo.png'
end

get '/week1.css' do
  send_file 'week1.css'
end
