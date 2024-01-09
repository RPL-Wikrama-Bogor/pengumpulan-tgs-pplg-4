usn = 'ramon hidayat'
pw = '12209364'
coba = 3

while coba > 0:
    iusn = input('Masukan Username : ')
    ipw = input('Masukan Password : ')
    

    if iusn == usn and ipw == pw:
        print('Anda Berhasil Log-in')
        coba = 0
    else:
        print('Anda Gagal log-in')
        coba -= 1