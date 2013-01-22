require 'sinatra'

get '/' do
 send_file 'labs/lab_2/index.html'
end

get '/quiz.js' do
 send_file 'labs/lab_2/quiz.js'
end
