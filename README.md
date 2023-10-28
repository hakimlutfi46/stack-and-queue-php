# stack-and-queue-php
Contoh penerapan stack dan queue pada pemrograman PHP

Stack adalah struktur data linier yang mengikuti aturan tertentu untuk melakukan operasi. Data yang memiliki struktur stack, tersusun seperti tumpukan, sehingga hanya elemen yang baru dimasukkan yang dapat diakses atau dilihat. Ujung tumpukan yang digunakan untuk melakukan semua operasi disebut bagian atas tumpukan. Stack mengikuti prinsip LIFO (Last In First Out), yang berarti elemen yang dimasukkan terakhir akan menjadi elemen pertama yang keluar dari urutan data.
Queue adalah struktur data linier di mana kita dapat menyisipkan dan menghapus elemen dari daftar data. Akhir daftar dari mana elemen disisipkan disebut ujung belakang dan ujung di mana elemen dihapus adalah ujung depan. Struktur data yang menggunakan queue mengikuti prinsip FIFO (First In First Out), yang berarti elemen yang dimasukkan pertama kali dari ujung belakang akan menjadi elemen pertama yang dihapus dari ujung depan.

1.	Penerapan stack dalam kehidupan sehari-hari
Salah satu contoh penerapannya dalam kehidupan sehari-hari adalah saat seseorang menumpuk piring dalam tumpukan di dapur. Piring terakhir yang diletakkan di atas tumpukan secara otomatis adalah piring pertama yang akan diambil saat ingin menggunakannya.

Algoritma untuk tumpukan piring di dapur:
1.	Inisialisasi tumpukan piring (stack).
2.	Ketika Anda mencuci piring baru, letakkan piring tersebut di atas tumpukan (push).
3.	Ketika Anda ingin menggunakan piring, ambil piring teratas dari tumpukan (pop).
4.	Piring terakhir yang diletakkan adalah yang pertama diambil (prinsip Last-In-First-Out, atau LIFO).
5.	Pastikan untuk mengelola tumpukan piring dengan benar dan tidak menumpuknya terlalu tinggi.

2.	Penerapan queue dalam kehidupaan sehari-hari
Penerapan struktur data queue dalam kehidupan sehari-hari bisa ditemui ketika seseorang mengantri untuk membeli tiket melalui loket pembayaran tiket yang disediakan, itu disebut sebagai enqueue. Adapun contoh dari dequeue adalah setelah membeli tiket, penumpang langsung menuju tempat tunggu kereta api setelah melakukan boarding atau cek tiket.

Algoritma untuk antrian pembayaran tiket di loket:
1.	Inisialisasi antrian pelanggan (queue) di depan loket.
2.	Ketika seorang pelanggan datang untuk membeli tiket, tambahkan pelanggan ke dalam antrian (enqueue).
3.	Setelah pelanggan membeli tiket dan selesai, loket memanggil pelanggan pertama dalam antrian (dequeue) untuk membayar tiketnya.
4.	Pelanggan yang sudah membayar tiketnya akan pergi ke tempat tunggu kereta atau pesawat.
5.	Pelanggan yang pertama datang akan dilayani pertama kali (prinsip First-In-First-Out, atau FIFO).
6.	Pastikan untuk menjaga disiplin dalam antrian dan memastikan semua pelanggan dilayani sesuai urutan kedatangan mereka.
