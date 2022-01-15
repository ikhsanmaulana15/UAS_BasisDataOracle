## UJIAN AKHIR SEMESTER (UAS) BASIS DATA ORACLE

   Pada kesempatan kali ini saya akan menjawab beberapa poin atau soal berikut ini :
   1. Lanjutkan dari study kasus yang sudah diambil ketika UTS,
   2. Impelementasikan study kasus yang telah dipilih dengan database Oracle ke dalam sebuah sistem minimal ada :
   
      - Ada halaman utama / dashboard
      - Ada halaman master data dengan insert update dan delete
      - Ada Implementasi view dan trigger
      - Ada menu tarnsaksi dan laporan (cetak pdf / excel)
      - Login logout (opsional)
      
   4. Buat laporan, link github dan Buat presentasi dalam bentuk video, upload ke youtube.
   5. Lampirkan link youtube, dan github di laporan.
      
 
   **Untuk poin 1 sudah langsung terjawab dengan adanya laporan github penjelasan ini.**
   
   **Oke , langsung saja berikut adalah penjelasan dari beberapa pertanyaan atau poin di atas :**

-------------------------------------------------------------------------------------------
##  2. Implementasi Studi Kasus

    Disini saya mengambil study kasus sistem informasi penjualan pada Toko Laris sesuai dengan tugas UTS sebelumnya. 
    Berikut adalah hasil dari implementasi yang sudah saya buat dimana ada beberapa feature sesuai dengan soal :
    
    A. Tampilan Halaman Utama/Dashboard
       Berikut adalah tampilan halaman dashboard yang sudah saya buat :
   <img src= "https://user-images.githubusercontent.com/45529723/149625740-1a06b532-f3d3-4d64-b143-02fd0e947c32.PNG" />    
       
-------------------------------------------------------------------------------------------       
    B. Tampilan Halaman Master Data
       Disini saya membuat 4 master data yaitu Data Pelanggan, Data Petugas, Data Barang, dan Data Jenis Barang.
       Setiap halaman master data terdapat feature Create, Update, dan Delete, serta saya tambahkan Search.
       Berikut tampilannya :
       Tampilan Master Petugas
   <img src= "user-images.githubusercontent.com/45529723/149626634-ddc7170a-929d-4a0f-b862-ba6998ad6e57.PNG" />
       
       Tampilan Master Pelanggan
   <img src= "https://user-images.githubusercontent.com/45529723/149626636-140503e6-6613-4899-ab34-08c7bf12fa52.PNG" />
       
       Tampilan Master Jenis_Barang
   <img src= "https://user-images.githubusercontent.com/45529723/149626639-1eb60c3b-a8fc-4765-83e1-972711d62ae0.PNG" />
       
       Tampilan Master Barang
   <img src= "https://user-images.githubusercontent.com/45529723/149626638-15633fe2-8635-4b9f-b6e2-7d733e59df01.PNG" />
       
-------------------------------------------------------------------------------------------      
    C. Implementasi View dan Trigger
       1. Implementasi View
          Disini saya membuat contoh untuk membuat view data pelanggan yang berasal dari Kebumen.
          Nama view yang saya buat adalah pelanggan_kebumen. Berikut query nya :
   <img src= "https://user-images.githubusercontent.com/45529723/149626925-364295a8-73b5-4b92-899a-68013b6193ec.PNG" />
   
          Tampilan Di Database
   <img src= "https://user-images.githubusercontent.com/45529723/149626928-387ebade-7f2a-4b83-a6e3-1e41bfa7d794.PNG" /> 
   
          Tampilan Di Website
   <img src= "https://user-images.githubusercontent.com/45529723/149626929-7a4f1808-77d6-4a0e-a152-0a85b695c8a7.PNG" /> 

-------------------------------------------------------------------------------------------
       2. Implementasi Trigger
          Disini saya membuat contoh untuk membuat 2 trigger yaitu :
          - TRIGGER AFTER DELETE pada Tabel JENIS_BARANG bernama log_hapus
          - TRIGGER BEFORE INSERT pada Tabel TRANSAKSI bernama no_otomatis
          
          Trigger log_hapus berfungsi untuk menyimpan data / backup data jenis barang yang dihapus dimana nantinya
          data jenis barang yang dihapus tadi akan masuk ke tabel jb_backup. Berikut query nya :
   <img src= "https://user-images.githubusercontent.com/45529723/149627132-6c5471b9-36e8-4dc7-b9ab-0db80176518a.PNG" />
   
          Hasil data jenis barang yang telah dihapus :
   <img src= "https://user-images.githubusercontent.com/45529723/149627261-c8f2f0e4-8694-422d-9a9b-7c3befaf782b.PNG" /> 
   
          Kemudian, Trigger no_otomatis digunakan untuk membuat no otomatis pada tabel transaksi.
          Berikut querynya :
   <img src= "https://user-images.githubusercontent.com/45529723/149627134-727b5a82-f0fe-47c8-8064-67b94a2640d6.PNG" /> 
   
   
   
-------------------------------------------------------------------------------------------      
    D. Tampilan Menu Transaksi dan Laporan (PDF/Excel)
       1. Tampilan Menu Transaksi
          Digunakan untuk input data tranaksi penjualan pada Toko Laris. Berikut tampilannya :
   <img src= "https://user-images.githubusercontent.com/45529723/149627404-349be79f-214d-4a7e-ac3d-07b9361e1976.PNG" />

-------------------------------------------------------------------------------------------
       2. Tampilan Menu Laporan
          Disini kita dapat print atau mengambil data laporan dengan 2 format yaitu PDF dan juga Excel.
          
          Tampilan Menu Laporan
   <img src= "https://user-images.githubusercontent.com/45529723/149627409-3a44da3c-08b4-4ae8-8358-ea7531447fac.PNG" />
   
          Tampilan Cetak PDF /Print langsung
          Kita tinggal klik tanda Print pada menu laporan, maka hasilnya seperti berikut :
   <img src= "https://user-images.githubusercontent.com/45529723/149627410-6943c5b7-52a1-43b8-8bc0-95d7e5afb044.PNG" /> 
   
          Tampilan Cetak Excel
          Kita tinggal klik tanda Excel pada menu laporan dan secara otomatis akan terdownload file excel seperti berikut :
   <img src= "https://user-images.githubusercontent.com/45529723/149627412-8b3c38b0-8354-4601-964a-cbee973789c6.PNG" /> 
   
   
   
-------------------------------------------------------------------------------------------      
    E. Login dan Logout
       Untuk Login dan Logout sendiri disini saya membuat tabel users terlebih dahulu dimana untuk password saya 
       menggunakan enkripsi MD5. Berikut adalah tampilan login dan juga logout :
       1. Halaman Awal 
          Merupakan halaman awal ketika alamat sistem di akses. Disini kita tinggal klik masuk maka akan di arahkan
          ke halaman login.
  <img src= "https://user-images.githubusercontent.com/45529723/149627643-2a129fac-dd15-4399-815c-c621917616e7.PNG" />    
  
       2. Halaman Login
          Kita gunakan untuk masuk ke dalam sistem dengan menginputkan username dan password.
  <img src= "https://user-images.githubusercontent.com/45529723/149627650-ca47acab-f79d-42a9-941c-61460caa9999.PNG" />
    
       3. Logout
          Untuk logout kita tinggal klik logo/tanda/ tulisan LOGOUT dibawah menu Laporan. Setelah kita klik, otomatis
          akan diarahkan ke halaman awal.
  <img src= "https://user-images.githubusercontent.com/45529723/149627652-f305c2ac-94df-42da-b24a-1d80b7baa6b1.PNG" />
    
-------------------------------------------------------------------------------------------
##  3. Buat laporan, link github dan Buat presentasi dalam bentuk video
       Untuk laporan saya sudah buat menggunakan file PDF.
       Untuk link github sudah saya buat dengan adanya github ini        : https://github.com/ikhsanmaulana15/UAS_BasisDataOracle
       Untuk video presentasi sistem sudah saya buat dan upload Youtube. : https://youtu.be/4Ip_OIYNQcQ
       
-------------------------------------------------------------------------------------------            
##  4. Lampirkan link youtube, dan github di laporan.
       Sudah saya lampirkan link youtube dan github ini di laporan dalam bentuk pdf.
       
 -------------------------------------------------------------------------------------------         
Jika kalian memerlukan tutorial mengenai DATABASE ORACLE, silahkan dapat mengunjungi Youtube saya :
 https://www.youtube.com/c/DuaMasaChannel
 



