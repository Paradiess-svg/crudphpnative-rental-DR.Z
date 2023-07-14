<?php
include 'koneksi.php';
session_start();

$query = "SELECT * FROM tb_mobil;";
$sql = mysqli_query($conn, $query);
$no = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="datatables/datatables.css">
    <script src="datatables/datatables.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="asset/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="asset/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="asset/favicon-16x16.png">
<link rel="manifest" href="asset/site.webmanifest">

    <title>Rental DR.Z</title>
</head>

<script>
    $(document).ready(function(){
        $('#dt').DataTable();
    });
</script>

<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                crudphpnative-test
            </a>
        </div>
    </nav>
    <div class="container">
        <h1 class="mt-3">Rental DR.Z</h1>
        <figure>
            <blockquote class="blockquote">
                <p>Data database</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                crud-db <cite title="Source Title"> crudphpnative-test</cite>
            </figcaption>
        </figure>
        <a href="kelola.php" type="button" class="btn btn-primary mb-3"> <i class="fa fa-plus"></i> Tambahkan data</a>
        
        <?php 
        if(isset($_SESSION['eksekusi'])):
        ?>

        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>
                <?php
                echo $_SESSION['eksekusi'];
                ?>
            </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php 

        session_destroy();
        endif;
        ?>

        <div class="table-responsive">
            <table id="dt" class="table align-middle table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            <center>No</center>
                        </th>
                        <th scope="col">Plat Nomor</th>
                        <th scope="col">Merek Mobil</th>
                        <th scope="col">Foto Mobil</th>
                        <th scope="col">Status</th>
                        <th scope="col">Alamat Pool</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while (
                        $result = mysqli_fetch_assoc($sql)
                    ) {
                    ?>
                        <tr>
                            
                            <th scope="row">
                                <center><?php echo ++$no; ?>.</center>
                            </th>
                            <td><?php echo $result['plat_nomor']; ?></td>
                            <td><?php echo $result['merek_mobil']; ?></td>
                            <td><img style="width: 150px;" src="img/<?php echo $result['foto_mobil']; ?>" alt=""></td>
                            <?php if($result['status']=='Beroprasi'): ?>
                            <td class="fw-bolder bg-success text-white">
                                <?php echo $result['status']; ?> 
                            </td>
                            <?php else: ?>
                            <td class="fw-bolder bg-secondary text-warning">
                                <?php echo $result['status']; ?> 
                            </td>
                            <?php endif ?>
                            <td><?php echo $result['alamat_pool']; ?></td>
                            <td><a href="kelola.php?ubah=<?php echo $result['id_mobil']; ?>" type="button" class="btn btn-success btn-sm mt-2"><i class="fa fa-pencil"></i></a>
                                <a href="proses.php?hapus=<?php echo $result['id_mobil']; ?>" type="button" class="btn btn-danger btn-sm mt-2" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut???')"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="m-5 align-middle align-center">    <h6>Hello mom</h6></div>


</body>

</html>