def tambahHippo():
  hippos = 0
  answer = 'y'

  while answer == 'y':
    hippos = hippos + 1
    print("Ada {} Hippo".format(hippos))
    answer = input("Tambahkan Hippo (y/n)")

tambahHippo()