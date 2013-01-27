require 'sinatra'

get '/' do
 send_file 'labs/lab_3/index.html'
end

get '/lab_3.js' do
 send_file 'labs/lab_3/lab_3.js'
end
