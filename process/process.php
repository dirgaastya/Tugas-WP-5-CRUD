<?php
include 'connect.php';

    $title = $_POST['title'];
    $author = $_POST['author'];

    $sql_create = "INSERT INTO book_collections (judul_buku,nama_penulis) VALUES ('$title','$author')";
    
    $conn->query($sql_create);

    $conn->close();

    header("location:../index.php");
?>