# UTS-PemWeb
Salik Manahijassu'ada'  (K3519075)

Aplikasi mathematics game penjumlahan sederhana dengan fitur sebagai berikut:
Tebak Angka:
-	Sebelum mulai game, player diminta memasukkan nama dan email terlebih dahulu. Apabila sebelumnya sudah pernah mengisi, maka tidak perlu memasukkan lagi
-	Dalam setiap permainan, player diberikan modal lives sebanyak 5, dan skor awal 0.
-	Setiap kali jawaban yang diberikan salah, maka lives berkurang satu dan skor berkurang 2
-	Setiap kali jawaban yang diberikan benar, maka skor bertambah 10
-	Permainan berakhir (game over) jika livesnya habis
-	Setelah permainan berakhir, maka akan muncul hall of fame yang memunculkan 10 players yang menghasilkan skor tertinggi. Data permainan disimpan ke dalam database MySQL/MariaDB.

Penjelasan:
> cek.php = digunakan untuk mengecek/ melihat jawaban yang diberikan, apakah jawaban itu benar atau salah
> soal.php = memberikan soal penjumlahan secara random
> prosesBenar = digunakan untuk mengatur program aplikasi apabila jawaban yang diberikan benar
> prosesSalah = digunakan untuk mengatur program aplikasi apabila jawaban yang diberikan salah
> looping.php = digunakan untuk melakukan perulangan soal, selama syarat yang diberikan masih terpenuhi/ apabila jumlah lives yang diberikan tidak bernilai 0
> index.php = digunakan untuk menampilkan tampilan awal sebelum memasuki permainan
> koneksi = digunakan untuk mengubungkan ke dalam database MySQL
> gameOver.php = permainan selesai, untuk memunculkan data para pemain berupa nama serta nilai yanng diperoleh

URL aplikasi  : salikjpr.epizy.com
