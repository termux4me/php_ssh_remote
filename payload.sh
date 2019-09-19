#server side
#read -p 'set directory :' dir
#read -p 'set user :' user

dir=.
user=a

php -S 127.0.0.1:1234 -t $dir
ssh -R $user:80:localhost:1234 serveo.net
