#/bin/bash

python -m SimpleHTTPServer &
./webkit2png -z 2 -F -o retweets-gt2 http://localhost:8000
kill $!
