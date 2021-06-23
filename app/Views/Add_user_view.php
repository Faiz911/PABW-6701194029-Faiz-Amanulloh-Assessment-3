<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah User</title>
</head>
<body>
<div class="container mt-5 mb-3">
	<div class="card mt-5" >
		<div class="card-header bg-primary text-white text-center">
				Form Tambah User
        </div>
        <div class="card-body">
            <form action="user_cont/save" method="post">
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="Nama">
            </div>
            <div class="mb-3">
                <label>Tanggal Lahir</label>
                <input type="date" name="Tgl_Lahir">
            </div>
            <div class="mb-3">
               <label>Alamat</label>
                <input type="text" name="Alamat">
            </div>
            <div class="mb-3">
                <label>Telepon</label>
                <input type="text" name="Telp">
            </div>
            <div class="mb-3">
                <label>Status</label>
                <input type="number" name="Status">
            </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>