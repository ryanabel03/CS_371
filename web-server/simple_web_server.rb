require 'sinatra'

get '/' do
 send_file 'in_class_assignments/week_2/wake_up.html'
end

get '/alarm.js' do
 send_file 'in_class_assignments/week_2/alarm.js'
end
