# for i in range(10):
#     print("Saya berjanji tidak akan mengulanginya lagi")

# i = 0
# while 1 < 10:
#     print(i)
#     i = i + 1

# total = 0
# for i in range(3, 6):
#     total = total + 1
#     print(total)

lanjut = True
while lanjut:
    option = input("Lanjut atau tidak? (y/n)")
    if option == "n":
        lanjut = False
        print("Program Berhenti")
