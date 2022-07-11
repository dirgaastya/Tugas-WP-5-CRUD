<?php
    include 'process/connect.php';
    $id = $_GET['id'];
    $select_byId = "SELECT id,judul_buku as jb, nama_penulis as np FROM book_collections WHERE id=$id";
    $row = $conn->query($select_byId);
    $result = $row->fetch_array();


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Edit Buku</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
  <div class="w-50 container-fluid my-5">
  <h3 class="text-center">Edit Form Buku</h3>
  
  <form action="process/update.php" method="post">
    <input type="hidden" value="<?php echo $id ?>" name="id">
        <div class="mb-3">
          <label for="title" class="form-label">Judul Buku </label>
          <input
            type="text"
            class="form-control"
            id="title"
            placeholder="Masukan Judul Buku"
            name="title"
            value="<?php echo $result["jb"]; ?>"
          />
        </div>
        <div class="mb-3">
          <label for="title" class="form-label">Penulis Buku </label>
          <input
            type="text"
            class="form-control"
            id="author"
            placeholder="Masukan Penulis Buku"
            name="author"
            value="<?php echo $result["np"]; ?>"
          />
        </div>
        
        <div class="text-end">
            <a href="index.php" class="btn btn-light">Kembali</a>
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
  </form>

  </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>