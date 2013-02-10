require 'sinatra'

get '/' do
 send_file 'labs/lab_4/index.php'
end

