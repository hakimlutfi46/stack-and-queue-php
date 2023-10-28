<?php
// Inisialisasi antrian pelanggan
$queue = [];

// Pelanggan mengantri untuk pembayaran tiket
array_push($queue, "Pelanggan 1");
array_push($queue, "Pelanggan 2");
array_push($queue, "Pelanggan 3");

// Loket memanggil pelanggan pertama untuk membayar tiket
$firstCustomer = array_shift($queue);
echo "Membayar tiket: $firstCustomer\n"; // Output: Membayar tiket: Pelanggan 1

// Pelanggan yang pertama datang akan dilayani pertama kali (FIFO).
