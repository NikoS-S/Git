a = raw_input("Vvedite stroku: ") 
def sortby(i):
    sortin = sorted(i)
    strok = ""
    for char in sortin:
        strok = strok + str(char)
    print (strok)
sortby(a)