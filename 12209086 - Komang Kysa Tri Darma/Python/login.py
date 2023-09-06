username = "universitas"
password = "pertamina"
kesempatan = 3

while(kesempatan >= 3):
  username_user = input("Masukkan Username ")
  password_user = input("Masukkan Password ")

  if(username == username_user and password == password_user):
    print("Login berhasil!")
    break
  else:
    kesempatan -= 1
    print("Kesempatan tersisa {} kali lagi".format(kesempatan))