<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <h3 class="container-fluid text-center">Daftar Dosen</h3>
    <table class="table table-dark table-striped w-75 container-fluid text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>nama</th>
                <th>nidn</th>
                <th>pendidikan</th>
                <th>Action</th>
            </tr>
        </thead>
            <tbody>
                <?php 
                    $nomor = 1;
                    foreach($dosen as $dsn){
                ?>
                <tr>
                    <td><?php echo $nomor ?></td>
                    <td><?php echo $dsn->nama  ?></td>
                    <td><?php echo $dsn->nidn  ?></td>
                    <td><?php echo $dsn->pendidikan ?></td>
                    <td><a href="<?php echo base_url("index.php/dosen/detail/$dsn->id") ?>">Detail</a></td>
                </tr>
                <?php 
                    $nomor++;
                }
                ?>
            </tbody>
    </table>
    
</body>
</html>