<?php

    // melakukan koneksi 
    $connect = mysqli_connect('localhost', 'root', '', 'coba_notifikasi');
    
    //menghitung jumlah pesan dari tabel pesan
    $query= mysqli_query($connect, "Select Count(id) as jumlah From notifikasi");
    
    //menampilkan data
    $hasil = mysqli_fetch_array($query);
    
    //membuat data json
    echo json_encode(array('jumlah' => $hasil['jumlah']));
