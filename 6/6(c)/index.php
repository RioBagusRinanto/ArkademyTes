<!DOCTYPE html>
<html lang="en">
<?php include "koneksi.php"; ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ninestars Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Ninestars - v2.0.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span><img src="assets/img/arka.png" class="img-fluid" alt="Responsive image"></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <form class="form-inline">
            <div class="form-group mx-sm-3 mb-2">
            
            <input type="text" size="100" class="form-control" id="inputPassword2" placeholder="Search">
          </div>
          <button type="button" class="btn btn-warning btn-lg "  data-toggle="modal" data-target="#exampleModal">ADD</button>
        </form>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
 
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <table class="table table-borderless table-hover">
      <thead class="thead-dark">
        <tr class="bg-warning">
          <th scope="col">No</th>
          <th scope="col">Cashier</th>
          <th scope="col">Product</th>
          <th scope="col">Category</th>
          <th scope="col">Price</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $data1 = mysqli_query($con,"SELECT product.id AS 'no', cashier.name AS 'cashier', product.name AS 'product', category.name AS 'category', product.price AS 'price'
        FROM product
        INNER JOIN cashier ON product.id_cashier=cashier.id
        INNER JOIN category ON product.id_category=category.id");
        while($hasil1 = mysqli_fetch_assoc($data1)){
        echo "<tr>";
        foreach($hasil1 as $key => $value)
{
echo "<td>".$value."</td>";
}
// $kirim2 = array(array_values(array_slice($kirim1, -2))[0]);
// array_push($kirim2, end($kirim1));
echo "<td><button data-toggle=\"modal\" data-target=\"#edit\"><img src=\"assets/img/edit.png\"></button>|<button data-toggle=\"modal\" data-target=\"#hapus\"><img src=\"assets/img/del.png\"></button></td>
";
echo "</tr>";
        }
        
        
        ?>
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <select class="custom-select">
                      <option selected>Nama</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="custom-select">
                      <option selected>Minum</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" id="produk" placeholder="Es Teh">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="harga" placeholder="Rp. 10000">
                </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">ADD</button>
              </div>
            </div>
          </div>
        </div>
      </tbody>
    </table>
    <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          
          <div class="modal-body mx-auto" style="width: 300px;">
            <h3>Data dari Mark</h3>
            <img src="assets/img/happus.png">
            <h3>Berhasil Dihapus</h3>
          </div>
          
        </div>
      </div>
    </div>
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">EDIT</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <select class="custom-select">
                  <option selected>Nama</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="form-group">
                <select class="custom-select">
                  <option selected>Minum</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="form-group">
                  <input type="text" class="form-control" id="txt1" placeholder="Es Teh">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="txt2" placeholder="Rp. 10000">
            </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">EDIT</button>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

 
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>