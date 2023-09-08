
x = 5
print(type(x))

x = 0.5
print(type(x))

x = "hijau"
print(type(x))
------------------------------

uang = 25000
if uang >= 25000:
  print("uang cukup")

else:
  print("uang tidak cukup")
----------------------------------
price = 25000
uang = 10000
if price == uang:
   print ("uang pas")
elif price < uang:
   print("uang lebih")
else:
  print ("uang tidak cukup")
---------------------------------------
for i in range(10):
    print("saya berjanji tidak akan mengulanginya lagi")
-------------------------------------------
lanjut = True
while(lanjut):
   option = input("Lanjut atau tidak ? (y/n)")
   if(option == 'n'):
    lanjut = False
    print("program berhenti!")
------------------------------------------------------------
username = "smk"
password = "wikrama"
kesempatan = 9

while(kesempatan > 0):
  username_user = input("Masukan Username : ")
  password_user = input("Masukan Password : ")

  if(username == username_user and password == password_user):
    print("Login berhasi")
    break
  else:
    kesempatan = -9
    print("password salah ".format (kesempatan))
------------------------------------------------------------------
# fungsi
def perkalian(angka1, angka2):
  return angka1*angka2

hasil = perkalian(10,2)
print(hasil)
--------------------------------------------------------------------
def tambahHippo():
  hippos = 0
  answer = "y"
  while answer == "y":
    hippos = hippos + 1
    print("ada {} Hippo".format(hippos))
    answer = input("Tambahkan Hippo? (y/n)")

tambahHippo(y)