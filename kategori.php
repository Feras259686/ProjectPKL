<?php
include 'templates/header.php';
include 'koneksi.php';

// Proses tambah data kategori
if (isset($_POST['submit'])) {
   $nama = $_POST['kategori_nama'];
   $deskripsi = $_POST['deskripsi'];
   $query = "INSERT INTO tb_kategori (kategori_nama, deskripsi) VALUES ('$nama', '$deskripsi')";
   mysqli_query($koneksi, $query);
   header("Location: kategori.php");
}
?>

<div class="container-fluid">
   <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3 d-none d-md-block">
         <!-- Sidebar content sudah otomatis ter-load dari SBAdmin -->
      </div>

      <!-- Main Content -->
      <div class="col-md-9">
         <!-- Page Heading -->
         <h1 class="h3 mb-4 text-gray-800 text-center">Kategori</h1>

         <!-- Form Tambah Kategori -->
         <div class="card shadow mb-4">
            <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary">Tambah Kategori</h6>
            </div>
            <div class="card-body">
               <form method="POST" class="row">
                  <div class="form-group col-md-6">
                     <label for="kategori_nama">Nama Kategori</label>
                     <input type="text" name="kategori_nama" id="kategori_nama" class="form-control"
                        placeholder="Nama Kategori" required>
                  </div>
                  <div class="form-group col-md-6">
                     <label for="deskripsi">Deskripsi</label>
                     <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi" rows="3"
                        required></textarea>
                  </div>
                  <div class="col-md-12 text-right">
                     <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                  </div>
               </form>
            </div>
         </div>

         <!-- Tabel Data Kategori -->
         <div class="card shadow mb-4">
            <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary">Daftar Kategori</h6>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
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
            </div>
         </div>
      </div>
   </div>
</div>

<?php include 'templates/footer.php'; ?>