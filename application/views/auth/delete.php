<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <th id="1" >
        <table border="1" style="text-align: center;">
        <h1 style="color: yellowgreen;">Daftar Data</h1>
            <tr style="color: yellowgreen;">
                <td>No </td>
                <td>Username</td>
                <td>Email</td>
                <td>Aksi </td>
            </tr>
            <?php
            $koneksi = mysqli_connect("localhost","root","","daftar");
 
            // Check connection
            if (mysqli_connect_errno()){
                echo "Koneksi database gagal : " . mysqli_connect_error();
            }
            $no = 1;
            $data = mysqli_query($koneksi,"select * from user");
            while ($d = mysqli_fetch_array($data)) {

            ?>
                <tr style="color: yellowgreen;">
                    <td><?php echo $no; ?></td>
                    <td><?php echo $d['username']; ?></td>
                    <td><?php echo $d['email']; ?></td>
                    <td>  <a href="<?= base_url('auth/hapus/') . $d['id'] ?>" class="badge badge-danger">Hapus</a></td>
                </tr>
            <?php
                $no++;
            }
            ?>
            
        </table>
        <button><a href="<?=base_url('home') ?>">Kembali</a></button>
    </th>
</body>

</html>