require 'sinatra'

get '/' do
 send_file 'labs/lab_3_5/index.html'
end

get '/styles.css' do
 send_file 'labs/lab_3_5/styles.css'
end

get '/lab_3_5.js' do
 send_file 'labs/lab_3_5/lab_3_5.js'
end

get '/images/machine0.jpg' do
  send_file 'labs/lab_3_5/images/machine0.jpg'
end

get '/images/machine1.jpg' do
  send_file 'labs/lab_3_5/images/machine1.jpg'
end

get '/images/machine2.jpg' do
  send_file 'labs/lab_3_5/images/machine2.jpg'
end

get '/images/machine3.jpg' do
  send_file 'labs/lab_3_5/images/machine3.jpg'
end

get '/images/machine4.jpg' do
  send_file 'labs/lab_3_5/images/machine4.jpg'
end

get '/images/machine5.jpg' do
  send_file 'labs/lab_3_5/images/machine5.jpg'
end

get '/images/machine6.jpg' do
  send_file 'labs/lab_3_5/images/machine6.jpg'
end

get '/images/machine7.jpg' do
  send_file 'labs/lab_3_5/images/machine7.jpg'
end

get '/images/machine8.jpg' do
  send_file 'labs/lab_3_5/images/machine8.jpg'
end

get '/images/fred.jpg' do
  send_file 'labs/lab_3_5/images/fred.jpg'
end

get '/images/daphne.jpg' do
  send_file 'labs/lab_3_5/images/daphne.jpg'
end

get '/images/velma.jpg' do
  send_file 'labs/lab_3_5/images/velma.jpg'
end

get '/images/scooby.jpg' do
  send_file 'labs/lab_3_5/images/scooby.jpg'
end

get '/images/shaggy.jpg' do
  send_file 'labs/lab_3_5/images/shaggy.jpg'
end
