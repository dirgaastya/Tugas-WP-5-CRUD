<?php
    include 'process/connect.php';

    $show_list = "SELECT id,judul_buku as jb, nama_penulis as np FROM book_collections";
    $sql_query = $conn->query($show_list);
    
    $rows = array();
    while($row = $sql_query->fetch_array()){
      array_push($rows, $row);
    }
    
    
    $conn->close();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Crud</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container-fluid w-50 my-5">
      <h3 class="text-center">Koleksi Buku</h3>

      <form action="process/process.php" method="post">
        <div class="mb-3">
          <label for="title" class="form-label">Judul Buku</label>
          <input
            type="text"
            class="form-control"
            id="title"
            placeholder="Masukan Judul Buku"
            name="title"
          />
        </div>
        <div class="mb-3">
          <label for="author" class="form-label">Penulis Buku</label>
          <input
            type="text"
            class="form-control"
            id="author"
            placeholder="Masukan Penulis Buku"
            name="author"
          />
        </div>
        <div class="text-end">
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>

      <!-- Book Table -->
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Judul Buku</th>
            <th scope="col">Penulis</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($rows as $row): ?>
          <tr>
            <td><?php echo $row['jb'] ?></td>
            <td><?php echo $row['np'] ?></td>
            <td class="text-end">
              <a href="edit.php?id=<?php echo $row['id']; ?> " class="btn btn-warning text-white">Edit</a>
              <a href="process/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
      integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
