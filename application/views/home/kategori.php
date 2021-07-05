<!-- Page Content -->
<div class="container">

<div class="row">

  <!-- Blog Entries Column -->
  <div class="col-md-12">

  <!-- Categories Widget -->
<div class="card my-4">
<h5 class="card-header">List Story champion</h5>
<div class="card-body">
    <div class="row">
        <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
                <li>
                    <a href="<?=base_url("home/veigo")?>">Veigo</a>
                </li>
                <li>
                    <a href="<?=base_url("home/braum")?>">Braum</a>
                </li>
                <li>
                    <a href="<?=base_url("home/brand")?>">Brand</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
                <li>
                    <a href="<?=base_url("home/kindred")?>">Kindred</a>
                </li>
                <li>
                    <a href="<?= base_url("home/reksai") ?>">Rek'sai</a>
                </li>
                <li>
                   <a href="<?= base_url("home/kogmaw") ?>">Kog'maw</a>
              </li>
            </ul>
        </div>
    </div>
</div>
</div>
  
<form action="" method="GET">
<h1 style="color:black">Komentar</h1>
<td><label for="nama lengkap" style="color: white;">Nama Lengkap<br><input type="text" name="nama" id="nama" placeholder="Nama anda" style="width: 200px;"></td><br>
<td><label for="alamat" style="color: white;">Alamat<br></label><input type="text" name="alamat" id="alamat" placeholder="Alamat Anda" style="width: 200px;"></td><br>
<dt><label for="no" style="color: white;">Nomor HP<br></label><input type="text" name="no_hp" id="no" placeholder="No Hp" style="width: 200px;">
<dt><label for="no" style="color: white;">Komentar<br></label><input type="text" name="komentar" id="no" placeholder="komentar" style="width: 200px;">
</dt>
<td><input type="submit" value="Kirim"></td>
 
</form>
<div style="background-color: green; width: 200px;"   >
<?php
if ($_GET) {
    echo 'Nama Anda : ' . $_GET['nama'];
    echo '<br>';
    echo 'Alamat Anda : ' . $_GET['alamat'];
    echo '<br>';
    echo 'Nomor Hp anda : ' . $_GET['no_hp'];
    echo '<br>';
    echo 'komentar anda : ' . $_GET['komentar'];
echo '<br>';
}
?>
</div>
<br>

  <!-- Sidebar Widgets Column -->
  <div class="col-md-4"
    <div class="card-body">

    </div>
  </div>

</div>

</div>
<!-- /.row -->


<!-- /.container -->

