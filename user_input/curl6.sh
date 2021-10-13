curl -v --request POST \
  --url 'http://localhost:6008/user_input.php?page=sinisterpage' \
  --header 'Content-Type: application/x-www-form-urlencoded' \
  --header 'X-Access-Token: SECRET_TOKEN' \
  --data one=1 \
  --data two=2 \
  --data three=3
