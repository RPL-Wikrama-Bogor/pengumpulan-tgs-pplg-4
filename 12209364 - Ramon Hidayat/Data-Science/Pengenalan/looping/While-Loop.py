#IMPLEMENTASI WHILE LOOPING

pas = True
while pas:
    inp = input('apakah kamu semangat untuk belajar? (y/n)')
    if  inp == 'n':
        print('apakah benar?')
        pas = True
    else:
        print('good tetap semangat ya!')
        pas = False