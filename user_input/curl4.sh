curl -v --request PUT \
  --url 'http://localhost:6008/user_input.php?page=page1' \
  --header 'Content-Type: application/x-www-form-urlencoded' \
  --header 'X-Access-Token: SECRET_TOKEN' \
  --data one=1 \
  --data two=2 \
  --data three=3
