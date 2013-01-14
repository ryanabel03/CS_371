require 'sinatra'

get '/' do
 send_file 'labs/lab_1/index.html'
end

