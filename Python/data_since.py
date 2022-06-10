import numpy as np 
import matplotilib.pyplot as plt

provinsi=["NTB","JAKARTA","SULSEL","JAYAPURA","RIAU"]
plt.bar(provinsi,ump)
plt.title("grafik perbandingan gaji")
plt.xlabel("nama provinsi")
plt.ylabel("gaji")
plt.show()