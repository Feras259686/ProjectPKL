<?php include 'templates/sidebar.php'; ?>
<div class="container-fluid">
   <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
   <div class="row">
      <div class="col-md-3">
         <div class="card bg-primary text-white shadow">
            <div class="card-body">
               Total Kategori
               <div class="text-white-50 small">
                  <?php
                  include 'koneksi.php';
                  $query = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM tb_kategori");
                  $result = mysqli_fetch_assoc($query);
                  echo $result['total'];
                  ?>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-3">
         <div class="card bg-success text-white shadow">
            <div class="card-body">
               Total Barang
               <div class="text-white-50 small">
                  <?php
                  $query = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM tb_barang");
                  $result = mysqli_fetch_assoc($query);
                  echo $result['total'];
                  ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include 'templates/footer.php'; ?>