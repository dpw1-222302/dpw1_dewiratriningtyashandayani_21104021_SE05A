<?php
// Variabel $conn digunakan untuk menyimpan koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'tugasdbaccounts') or die("Database not found");
// Fungsi mysqli_connect() digunakan untuk membuat koneksi ke database MySQL