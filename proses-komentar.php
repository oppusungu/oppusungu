<?php
include "koneksi.php";

if (isset($_POST['nama'], $_POST['email'], $_POST['pesan'])) {
    $nama = $koneksi->real_escape_string($_POST['nama']);
    $email = $koneksi->real_escape_string($_POST['email']);
    $pesan = $koneksi->real_escape_string($_POST['pesan']);

    $simpan = $koneksi->query("INSERT INTO komentar (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')");

    if ($simpan) {
        echo "Pesan berhasil dikirim!";
        header("location:contact.php?pesan=inputBerhasil");
        exit();
    } else {
        echo "Error: " . $koneksi->error; // Debugging error
    }
} else {
    echo "Data tidak lengkap!";
}
