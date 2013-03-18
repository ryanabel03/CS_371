require 'sinatra'

get '/' do
 send_file 'labs/lab_8/index.html'
end

get '/jquery-1.9.1.min.js' do
 send_file 'labs/lab_8/jquery-1.9.1.min.js'
end

