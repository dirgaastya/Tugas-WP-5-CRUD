<?php
    include 'connect.php';

    $id = $_GET['id'];
    $select_byId = "DELETE FROM book_collections WHERE id=$id";
    $conn->query($select_byId);
    $conn->close();
    header("location:../index.php");
?>