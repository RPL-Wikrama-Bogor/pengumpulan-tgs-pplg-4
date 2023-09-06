# satu 
x = 5
print(type(x))

x = 0.5
print(type(x))

x = "Hijau"
print(type(x))

# dua 
uang = 250000
if uang >= 25000 :
  print("uang cukup")
else :
  print("uang gak cukup")

# tiga
price = 25000
uang = 10000
if price == uang:
  print("uang pas")
elif uang < 25000:
  print("uang gak cukup")
else:
  print("uang lebih")

# empat
for i in range(10):
  print("Saya berjanji tidak akan mengulanginya lagi")

# lima
j = 0
while j<10:
  print(j)
  j = j+1

#enam
total = 0
for i in range(2,6):
  total = total + i

  print(total)

# tujuh
for i in range(1,6):
  for j in range(1,3):
    print("ini lorong ke ", i,"kamar ke ",j)

# delapan
lanjut = True
while(lanjut):
  option = input("lanjut atau tidak? (y/n)")
  if(option == 'n'):
    lanjut = False
    print("Program Berhenti!")

# sembilan
username = "universitas"
password = "pertamina"
kesempatan = 3

while(kesempatan>0):
  username_user = input("masukkan username: ")
  password_user = input("masukkan password: ")

  if(username == username_user and password == password_user):
    print("Login berhasil")
    break
  else:
    kesempatan == 1
    print("Kesempatan tersisa {} kali lagi".format(kesempatan))

# sepuluh
def tambahHippo():
  hippos = 0
  answer = 'y'
  while answer == 'y':
    hippos = hippos + 1
    print("Ada {} Hippo" . format(hippos))
    answer = input("Tambah Hippo? (y/n)")

tambahHippo()