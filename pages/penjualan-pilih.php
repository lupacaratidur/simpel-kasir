<!-- 
    created by msaifa
    @ 2020
 -->
 <?php
    require '../conf/init.php' ;
    cek();

    // mengecek adanya produk yang dipilih - start

    if (isset($_GET['p'])){
        $proid = $_GET['p'] ;
        $sql = "SELECT * FROM produk WHERE proid=$proid" ;

        $res = query($sql) ;
        $count = total($sql);

        if ($count == 0){
            $msg = 'Barang yang dipilih tidak ada !' ;
        } else {
            $produk = mysqli_fetch_assoc($res);
            $produk['jumlah'] = 1 ;
            $item[0]= $produk ;
            
            $cart = $_SESSION['cart'] ;
            if (empty($cart)) $cart = [] ;

            $replace = false ;
            foreach($cart as $key => $val){
                if ($val['proid'] == $produk['proid']){
                    $cart[$key]['jumlah'] = $val['jumlah'] + 1; 
                    $replace = true ;
                }
            }
            if (!$replace){
                $cart = array_merge($cart,$item) ;
            }

            $_SESSION['cart'] = $cart ;

            header("Location:{$base_url}pages/penjualan.php") ;
        }
    }

    // end


    $cari = "" ;
    if (isset($_GET['c'])){
        $cari = $_GET['c'];
    }

    $sql = "SELECT * FROM produk where pronama like '%$cari%'" ;
    $res = query($sql) ;
    $count = total($sql);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pilih Item - msaifa</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css?h=3c16114e461561544db42dd299b535e5">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="../assets/css/styles.min.css?h=d41d8cd98f00b204e9800998ecf8427e">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>msaifa</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../index.php"><i class="fas fa-tachometer-alt" style="font-size: 20px;"></i><span style="margin-left: 10px;font-size: 18px;">Dashboard</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="barang.php"><i class="icon-layers" style="font-size: 20px;"></i><span style="margin-left: 10px;font-size: 18px;">Data Barang</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="penjualan.php"><i class="icon-basket" style="font-size: 20px;"></i><span style="margin-left: 10px;font-size: 18px;">Penjualan</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="laporan.php"><i class="icon-list" style="font-size: 20px;"></i><span style="font-size: 18px;margin-left: 10px;">Laporan</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="about.php"><i class="icon-info" style="font-size: 20px;"></i><span style="font-size: 18px;margin-left: 10px;">Tentang msaifa</span></a></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
                                <div class="text-center d-none d-md-inline">
                    <div class="row">
                        <div class="col"><a href="logout.php" class="btn btn-primary" style="background-color: #e74a3b;"><i class="icon-logout" style="margin-right: 10px;font-size: 18px;"></i>Logout</a></div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top"></nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Pilih Produk</h3>
                    <?= $msg ? '<h6 class="text-dark mb-4">'.$msg.'</h6>' : ""?>
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Nama Barang</th>
                                            <th>Sisa Stok</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        while($row = mysqli_fetch_assoc($res)){
                                            ?>
                                                <tr>
                                                    <td><?= $row['pronama'] ?></td>
                                                    <td><?= $row['projumlah'] ?></td>
                                                    <td><?= $row['proharga'] ?></td>
                                                    <td><a href="?p=<?= $row['proid']?>" class="btn btn-primary" style="background-color: #36b9cc;">Pilih</a></td>
                                                </tr>
                                            <?php
                                        }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Menampilkan <?= $count ;?> Data</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination"></ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="../assets/js/script.min.js?h=b86d882c5039df370319ea6ca19e5689"></script>
</body>

</html>