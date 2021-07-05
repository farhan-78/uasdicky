<?php 
// koneksi database
$koneksi = mysqli_connect("localhost","root","","daftar");
 
            // Check connection
            if (mysqli_connect_errno()){
                echo "Koneksi database gagal : " . mysqli_connect_error();
            }

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
mysqli_query($koneksi,"delete from user where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:delete.php");
