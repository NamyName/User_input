curl -v --request POST \
  --url 'http://localhost:6008/user_input.php?page=page1' \
  --header 'Content-Type: multipart/form-data; boundary=---011000010111000001101001' \
  --header 'X-Access-Token: SECRET_TOKEN' \
  --form one=1 \
  --form two=2 \
  --form three=3
