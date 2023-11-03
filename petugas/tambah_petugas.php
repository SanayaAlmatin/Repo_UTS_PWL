<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Admin</title>
</head>
<body>
    <h3 class="text-center mt-5">Tambah Petugas</h3>
    <form action="proses_petugas.php" method="post" class="m-5">
        nama petugas :
        <input type="text" name="nama_petugas" value="" class="form-control">
        username : 
        <input type="text" name="username" value="" class="form-control">
        password :
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah petugas" class="btn btn-primary mt-3">
    </form>
    <div style="display: flex; justify-content: center;">
        <h5 class="mt-5 small"><a href="login_admin.php">Login Sebagai Petugas |</a></h5>
        <h5 class="mt-5 small"><a href="index.php"> | Kembali Ke Dashboard Admin</a></h5>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

