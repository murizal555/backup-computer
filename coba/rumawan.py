import os
class stack:
    def __init__(self):
        self.items = []
    def isEmpty(self):
        return self.items ==[]
    def push(self,item):
        self.items.append(item)
    def pop(self):
        return self.items.pop()
    def peek(self):
        return self.items[len(self.items)-1]
    def size(self):
        return len(self.items)
    def mainmenu(self):
        pilih = "y"
        while (pilih =="y"):
            os.system("clear")
            print(" ============")
            print("menu aplikasi")
            print("==============")
            print("push objek")
            print("pop")
            print("cek empty")
            print("tampil objek terakhir")
            print("panjang dari stack")
            print("==============")
            pilihan=str(input(("silak tamak objek d ")))
            if(pilih=="1"):
                os.system("clear")
                obj= str(input("objek yang ingin anda tambahkan"))
                self.push(obj)
                print("objek"+obj+"tlh trombok")
                x=input("")
            elif(pilih=="2"):
                os.system("clear")
                print("objek"+self.pop()+"dihapus")
            elif(pilihan=="3"):
                os.system("clear")
                print("objek"+self.isempty())
                x=input("")
            elif(pilihan=="4"):
                os.system("clear")
                print("objek terakhir : "+self.peek())
                x=input("")
            elif(pilihan=="5"):
                os.system("clear")
                print("panjang dari stack adalah :"+str(self.size()))
                x=input("")
            else:
                pilihan="n"
    if __name__=="__main__":
        s=stack();
        s.mainmenu();
