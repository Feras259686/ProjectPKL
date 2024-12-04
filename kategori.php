<?php
include 'templates/header.php';
include 'koneksi.php';

if (isset($_POST['submit'])) {
   $nama = $_POST['kategori_nama'];
   $deskripsi = $_POST['deskripsi'];
   $query = "INSERT INTO tb_kategori (kategori_nama, deskripsi) VALUES ('$nama', '$deskripsi')";
   mysqli_query($koneksi, $query);
   header("Location: kategori.php");
}
?>
<div class="container-fluid">
   <h1 class="h3 mb-4 text-gray-800">Kategori</h1>
   <form method="POST">
      <input type="text" name="kategori_nama" placeholder="Nama Kategori">
      <textarea name="deskripsi" placeholder="Deskripsi"></textarea>
      <button type="submit" name="submit">Tambah</button>
   </form>
   <table>
      <thead>
         <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
         </tr>
      </thead>
      <tbody>
         <?php
         $result = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
         while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                        <td>{$row['kategori_id']}</td>
                        <td>{$row['kategori_nama']}</td>
                        <td>{$row['deskripsi']}</td>
                      </tr>";
         }
         ?>
      </tbody>
   </table>
</div>
<?php include 'templates/footer.php'; ?>