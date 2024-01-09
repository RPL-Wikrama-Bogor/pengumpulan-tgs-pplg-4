# Deklarasi variabel dinamis
x = 5
y = 0.5
z = 0,5

print(type(x))
print(type(y))
print(type(z))

# Operator
x = 3
y = 2

print(x + y)
print(x - y)
print(x / y)
print(x % y)
print(x ** y)
print(x // y)

#
# Operator pertbandingan

x = 5 == 5
print(x)
x = 5 < 2
print(x)
x = 2 > 1
print(x)
x = 2 >= 1
print(x)
x = 3 <= 1
print(x)

# If statement

x = 2
if x == 3:
    print('x adalah tiga')
else:
    print('x bukan tiga')

# For loop

for i in range(10):
    i += 1
    print(i, 'Hello, World')

# While loop
x = 1
while x <= 5:
    print(x)
    x += 1

# Implementasi if loop
username = 'pertamina'
pw = 'password'

inputUsername = input('Masukan Username')
inputPw = input('Masukan Password')

if inputUsername == username and inputPw == pw:
    print('Berhasil Log-in')
else:
    print('Gagal log-in')

# Implementasi While loop
keyword = True
while keyword:
    inp = input('Lanjutkan? (y/n)')
    if  inp == 'y':
        print('Dilanjutkan')
        keyword = True
    else:
        print('Selesai')
        keyword = False

# Implementasi while loop dan if statement
sn = 'arfan'
pw = 'arfan123'
coba = 3

while coba > 0:
    iusn = input('Masukan Username')
    ipw = input('Masukan Password')

    if iusn == usn and ipw == pw:
        print('Berhasil Log-in')
        coba = 0
    else:
        print('Gagal log-in')
        coba -= 1

# Define function
def tambah(angka, angka1):
    print(angka + angka1)

tambah(1, 3)

# Implementasi define function
def faktor_prima(n):
    faktor = []
    pembagi = 2
    while pembagi <= n:
        if n % pembagi == 0:
            faktor.append(pembagi)
            n = n // pembagi  
        else:
            pembagi += 1

    return faktor  


result = faktor_prima(78)
print(f"Faktor prima nya adalah {result}")