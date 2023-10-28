<?php
// Inisialisasi tumpukan piring
$stack = [];

// Menambahkan piring ke tumpukan
array_push($stack, "Piring 1");
array_push($stack, "Piring 2");
array_push($stack, "Piring 3");

// Mengambil piring dari tumpukan
$topPlate = array_pop($stack);
echo "Menggunakan piring: $topPlate\n"; // Output: Menggunakan piring: Piring 3

// Piring terakhir yang diletakkan adalah yang pertama diambil (LIFO).
