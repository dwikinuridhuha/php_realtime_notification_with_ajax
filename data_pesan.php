<?php

    // melakukan koneksi 
    $connect = mysqli_connect('localhost', 'root', '', 'coba_notifikasi');

    //mengambil data 5 pesan terbaru 
    $sql = mysqli_query($connect, "SELECT * FROM notifikasi ORDER BY id DESC");
    $result = array();
    
    while ($row = mysqli_fetch_assoc($sql)) {
        $data[] = $row;
    }

    echo json_encode(array("result" => $data));
