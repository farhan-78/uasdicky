<!-- Page Content -->
<div class="container">

<div class="row">

  <!-- Blog Entries Column -->
  <div class="col-md-12">

    <!-- Blog Post -->
    <br>
    <div class="card mb-4">
      <img class="card-img-top" src="https://i1.wp.com/hasagi.id/wp-content/uploads/2021/06/E0EuoFEXMAApfR9-1.jpg?resize=1024%2C512&ssl=1" height="350"
        width="300" alt="Image">
      <div class="card-body">
        <h2 class="card-title">Selaraskan dengan Legends of Runeterra, Zilean Dapatkan Peremajaan Visual di League of Legends</h2>
        <div class="text-muted">
         25 juni 2021
          </div>
        <p class="card-text"> Kapan terakhir kali kalian mendengar nama Zilean? Sebelum ekspansi Legends of Runeterra bertajuk Guardians of the Ancient, 
          mungkin kalian sudah lupa dengan keberadaan champion orang tua tersebut.
          Kedatangan Zilean ke Legends of Runeterra disertai dengan sebuah sinematik menarik yang nampaknya disenangi oleh komunitas...</p>
        <a href="https://hasagi.id/selaraskan-dengan-legends-of-runeterra-zilean-dapatkan-peremajaan-visual-di-league-of-legends/" class="btn btn-primary">Selengkapnnya &rarr;</a>
      </div>
    </div>

    <!-- Blog Post -->
    <div class="card mb-4">
      <img class="card-img-top" src="https://i0.wp.com/hasagi.id/wp-content/uploads/2021/06/yordle-mage.jpg?resize=350%2C250&ssl=1" alt="Image" height="350" width="300">
      <div class="card-body">
        <h2 class="card-title">Rilis Masih Lama, Rioter Sebut Mage Yordle Baru Tetap Muncul di Event Sentinels of Light</h2>
        <div class="text-muted">
          28 juni 2021
        </div>
        <p class="card-text">Pastinya banyak dari kalian yang sudah tahu bahwa Akshan akan menjadi champion terbaru yang datang pada event Sentinels of Light.
          Akshan akan menjadi anggota terbaru Sentinels of Light yang membantu Lucian, Senna, dan anggota Sentinel lainnya bertarung melawan Viego dan Black Mist. 
          Selain Akshan, akan ada juga Mage Yordle yang terlibat dalam Ruination ini, namun perilisannya berakhir ditunda karena tim desainer...
         </p>
          <a href="https://hasagi.id/rilis-masih-lama-rioter-sebut-mage-yordle-baru-tetap-muncul-di-event-sentinels-of-light/"
            class="btn btn-primary">Selengkapnnya</a>
      </div>
    </div>               

<!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="<?=base_url("home/index")?>">&larr; Kembali</a>
          </li>
        </ul>
      </div>
  </div>

        <!-- Categories Widget -->
<div class="card my-4">
    <h5 class="card-header">Story champion</h5>
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
<h2 style="color:white">komentar</h2>
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

