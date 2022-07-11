<?php
include 'connect.php';

    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];

    $sql_create = "UPDATE book_collections SET judul_buku='$title', nama_penulis='$author' WHERE id='$id'";
    
    $conn->query($sql_create);

    $conn->close();

    header("location:../index.php");
?>