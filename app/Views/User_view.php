<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <title>Data User</title>
  </head>
  <body>
    <div class="container text-center mt-5">
        <h2>Data User</h2>
        <table class="table table-striped table-bordered mt-5">
            <thead class="thead thead-info">
                <tr>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Telp</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($user as $row):?>
                <tr>
                    <td><?= $row['Nama'];?></td>
                    <td><?= $row['Tgl_Lahir'];?></td>
                    <td><?= $row['Alamat'];?></td>
                    <td><?= $row['Telp'];?></td>
                    <td><?= $row['Status'];?></td>
                    <td><a href="/add_new" class="btn btn-primary mb-3">Tambah</a></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div> 
</body>
</html>