<!DOCTYPE html>

<?php
include 'koneksi.php';
session_start();


$id_mobil = '';
$plat_nomor = '';
$merek_mobil = '';
$status ='';
$alamat_pool = '';

if (isset($_GET['ubah'])) {
    $id_mobil = $_GET['ubah'];

    $query = "SELECT * FROM tb_mobil WHERE id_mobil = '$id_mobil';";
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);

    $plat_nomor = $result ['plat_nomor'];
    $merek_mobil = $result ['merek_mobil'];
    $status = $result ['status'];
    $alamat_pool = $result ['alamat_pool'];


    //var_dump($result);

    //die();
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>

    <link rel="apple-touch-icon" sizes="180x180" href="asset/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="asset/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="asset/favicon-16x16.png">
<link rel="manifest" href="asset/site.webmanifest">

    <title>Rental DR.Z</title>
</head>

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
        <div class="container">
            <form method="post" action="proses.php" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $id_mobil?>" name="id_mobil">
                <div class="mb-3 row">
                    <label for="plat_nomor" class="col-sm-2 col-form-label">Plat Nomor</label>
                    <div class="col-sm-10">
                        <input required type="text" name="plat_nomor" class="form-control" id="plat_nomor" placeholder="Ex: B 2374 SSA" value="<?php echo $plat_nomor ?>">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Merek Mobil</label>
                    <div class="col-sm-10">
                        <input required type="text" name="merek_mobil" class="form-control" id="nama" placeholder="Ex: Mercedes-Benz E-Class 300" value="<?php echo $merek_mobil ?>">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="jkel" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select required id="jkel" name="status" class="form-select">
                            <option <?php if($status == 'Beroprasi') {echo "selected";} ?> value="Beroprasi">Beroprasi</option>
                            <option <?php if($status == 'Tak Beroprasi') {echo "selected";} ?> value="Tak Beroprasi">Tak Beroprasi</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="foto" class="col-sm-2 col-form-label">Foto Mobil</label>
                    <div class="col-sm-10">
                        <input <?php if(!isset($_GET['ubah'])){echo "required";} ?> class="form-control" type="file" name="foto" id="foto" accept="image/*">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat_pool" class="col-sm-2 col-form-label">Alamat Pool</label>
                    <div class="col-sm-10">
                        <textarea required class="form-control" name="alamat_pool" id="alamat_pool" rows="3"><?php echo $alamat_pool ?></textarea>
                    </div>
                </div>
                <div class="mb-3 row mt-3">
                    <div class="col">
                        <?php
                        if (isset($_GET['ubah'])) {
                        ?>
                            <button type="submit" name="aksi" value="edit" class="btn btn-primary"><i class="fa fa-floppy-o mx-1" aria-hidden="true"></i>Simpan Perubahan</button>
                        <?php
                        } else {
                        ?>
                            <button type="submit" name="aksi" value="add" class="btn btn-primary"><i class="fa fa-floppy-o mx-1" aria-hidden="true"></i>Tambah</button>
                        <?php
                        }
                        ?>
                        <a href="index.php" type="button" class="btn btn-danger"><i class="fa fa-reply mx-1" aria-hidden="true"></i>Batal</a>
                    </div>
            </form>
        </div>



        <h6>Hello mom</h6>
</body>

</html>