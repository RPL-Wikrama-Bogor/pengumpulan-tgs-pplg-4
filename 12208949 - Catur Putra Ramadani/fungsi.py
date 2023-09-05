# username = "universitas"
# password = "pertamina"
# kesempatan = 3

# while kesempatan > 3:
#     username_user = input("Masukkan Username :")
#     password_user = input("Masukkan password :")

#     if username == username_user and password == password_user:
#         print("Ingin berhasil")
#         break
#     else:
#         kesempatan -= 1
#         print("Kesempatan tersisa () Kali lagi".format(kesempatan))


# def perkalian(angka1, angka2):
#     return angka1 * angka2


# hasil = perkalian(10, 2)
# print(hasil)


def tambahhippo():
    hippos = 0
    answer = "y"
    while answer == "y":
        hippos = hippos + 1
        print("Ada {} hippos".format(hippos))
        answer = input("tambahkan hippos? (y/n)")


tambahhippo()
