# tugas 2 bagian nested loop
nama_mhs=["saepul", "bahri","saepul bahri","bahri saipul","sopian pranata","lutfi beni","pratama susila"]
ProgDi=["teknik informatika", "sistem informasi","teknik elektro","data analise","data maiining","CEO","enterpreneur"]

# bagian loop
for Nm in nama_mhs:
    for Prodi in ProgDi:
        print(Nm, ": mengambil jurusan : ", Prodi)