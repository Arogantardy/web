<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TUGAS 6</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="index.css">
   
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg sticky-top"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Pocket Shop</a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul
            class="navbar-nav me-auto mb-2 mb-lg-0 nav nav-pills"
            id="pills-tab"
            role="tablist"
          >
            <li class="nav-item" role="presentation">
              <button
                class="nav-link active"
                id="pills-home-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-home"
                type="button"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
              >
                Home
              </button>
            </li>
            <li class="menuts">
              <button>
                <a href="#profilea">profile</a>
              </button>
            </li>
             <li class="menuts">
              <button>
                <a href="#jadwal">Jadwal</a>
              </button>
            </li>
            <li class="menuts">
              <button>
                <a href="#article">Article</a>
              </button>
            </li>
               <li class="menuts">
              <button>
                <a href="#galery">Gallery</a>
              </button>
            </li>
           <li class="menuts">
              <button>
                <a href="#guest">Contact</a>
              </button>
         <li style="padding-left: 10px; padding-top: 5px;">
  <button class="night" onclick="ubahwarnadark()">
    <i class="bi bi-moon-stars-fill"></i>
  </button>
</li>
<li style="padding-left: 10px; padding-top: 5px;">
  <button class="day" onclick="ubahwarnaday()">
    <i class="bi bi-brightness-high-fill"></i>
  </button>
</li>
<li class="nav-item">
  <a class="nav-link" href="login.php" target="_blank">Login</a>
</li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-3">
      <div class="tab-content" id="pills-tabContent">
        <div
          class="tab-pane fade show active"
          id="pills-home"
          role="tabpanel"
          aria-labelledby="pills-home-tab"
          tabindex="0"
        >
        <div class="home">
          <section id="profilea" class="container my-5">
  <div class="container my-5">
        <h3 class="fw-bold mb-4 text-center">Profil Mahasiswa</h3>
          


          <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
            <div class="card-body ">

              <div class="row align-items-center">
                <div class="col-md-3 text-center mb-3 mb-md-0">
                  <img src="ardi.png" 
                      alt="Foto Mahasiswa" 
                      class="rounded-circle img-fluid" 
                      style="width: 150px; height: 150px; object-fit: cover;">
                </div>

                <div class="col-md-9">
                  <h5 class=" mb-1 d-flex justify-content-center ">Arsah Cipta Adi Stiyanto</h5>
                  <table class="table-borderless mb-0" >
                    <tbody>
                      <tr>
                        <th style="width: 150px;">NIM</th>
                        <td>: A11.2024.15701</td>
                      </tr>
                      <tr>
                        <th class="text-start">Program Studi</th>
                        <td>: Teknik Informatika</td>
                      </tr>
                      <tr>
                        <th class="text-start">Email</th>
                        <td>: 111202415701@mhs.dinus.ac.id</td>
                      </tr>
                      <tr>
                        <th class="text-start">Telepon</th>
                        <td>: +62 831 0860 4828</td>
                      </tr>
                      <tr>
                        <th class="text-start align-top" >Alamat</th>
                        <td class="align-top">: Jl. Imam Bonjol No.207, Pendrikan Kidul, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50131</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
          <div class="slide">

            <h2 style="text-align: center;">SLIDE</h2>
            <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
          </div>
          <!-- article begin -->
           <div id="article">

             <section id="article" class="text-center p-5">
               <div class="container">
                 <h1 class="fw-bold display-4 pb-3">article</h1>
                 <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                   <?php
                   $sql = "SELECT * FROM article ORDER BY tanggal DESC";
                   $hasil = $conn->query($sql); 
             
                   while($row = $hasil->fetch_assoc()){
                   ?>
                     <div class="col">
                       <div class="card h-100">
                         <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
                         <div class="card-body">
                           <h5 class="card-title"><?= $row["judul"]?></h5>
                           <p class="card-text">
                             <?= $row["isi"]?>
                           </p>
                         </div>
                         <div class="card-footer">
                           <small class="text-body-secondary">
                             <?= $row["tanggal"]?>
                           </small>
                         </div>
                       </div>
                     </div>
                     <?php
                   }
                   ?> 
                 </div>
               </div>
             </section>

           </div>
                  <!-- article end -->

 <div id="jadwal">
  <h1>JADWAL PERKULIAHAN DAN KEGIATAN MAHASISWA</h1>
  <div class="row justify-content g-4">
  <div class="col-md-3">
    <div class="card text-bg-primary mb-3 " style="max-width: 18rem;min-height:300px;">
<div class="card-header" style="text-align: center;">Senin</div>
<div class="card-body" style="background-color: rgb(0, 42, 109); color: rgb(255, 255, 255);text-align: center;">
  <h5><b>10.20 - 12.00</b></h5>
  <p>Basis Data</p>
  <p>Ruang <b>H.5.4</b></p>
  <h5><b>12.30 - 15.00</b></h5>
  <p>Logika Informatika</p>
  <p>Ruang <b>H.5.3</b></p>
</div>
</div>

  </div>
  <div class="col-md-3">

    <div class="card text-bg-secondary mb-3" style="max-width: 18rem;min-height:300px;">
      <div class="card-header" style="text-align: center;">Selasa</div>
<div class="card-body" style="background-color: rgb(85, 84, 84); color: rgb(255, 255, 255);text-align: center;">
  <h5><b>08.40 - 10.20</b></h5>
  <p>Basis Data</p>
  <p>Ruang <b>D.2.K</b></p>
  <h5><b>12.30 - 14.10</b></h5>
  <p>Pendidikan KewargaNegaraan</p>
  <p>Ruang <b>Kulino</b></p>
      </div>
    </div>
  </div>
  <div class="col-md-3">

    <div class="card text-bg-success mb-3" style="max-width: 18rem;min-height:300px;">
      <div class="card-header" style="text-align: center;">Rabu</div>
<div class="card-body" style="background-color: rgb(1, 80, 1); color: rgb(255, 255, 255);text-align: center;">
  <h5><b>07.00 - 09.30</b></h5>
  <p>Sistem Operasi</p>
  <p>Ruang <b>H.4.9</b></p>
  <h5><b>09.30 - 12.00</b></h5>
  <p>Rekayasa Perangkat Lunak</p>
  <p>Ruang <b>H.3.9</b></p>
      </div>
    </div>
  </div>
<div class="col-md-3">

  <div class="card text-bg-danger mb-3" style="max-width: 18rem;min-height:300px;">
    <div class="card-header" style="text-align: center;">Kamis</div>
<div class="card-body" style="background-color: rgb(181, 1, 1); color: rgb(255, 255, 255);text-align: center;">
  <h5><b>08.40 - 10.20</b></h5>
  <p>Pemrograman Berbasis Web</p>
  <p>Ruang <b>D.2.J</b></p>
  <h5><b>12.30 - 15.00</b></h5>
  <p>Keamanan Sistem Siber</p>
  <p>Ruang <b>H.4.9</b></p>
    </div>
  </div>
</div>
<div class="col-md-3">

  <div class="card text-bg-warning mb-3" style="max-width: 18rem;min-height:300px;">
    <div class="card-header" style="text-align: center;">Jumat</div>
<div class="card-body" style="background-color: rgb(190, 129, 5); color: rgb(255, 255, 255);text-align: center;">
  <h5><b>12.30 - 15.00</b></h5>
  <p>Probabilitas Dan Statistika</p>
  <p>Ruang <b>H.3.2</b></p>
    </div>
  </div>
</div>
<div class="col-md-3">

  <div class="card text-bg-info mb-3" style="max-width: 18rem;min-height:300px;">
   <div class="card-header" style="text-align: center;">Sabtu</div>
<div class="card-body" style="background-color: rgb(1, 133, 169); color: rgb(255, 255, 255);text-align: center;">
  <h5><b>08.30 - 10.30</b></h5>
  <p>Dev Ops</p>
  <p>Ruang <b>H.4.3</b></p>
  <h5><b>12.30 - 15.00</b></h5>
  <p>Logika Informatika</p>
  <p>Ruang <b>H.5.3</b></p>
    </div>
  </div>
</div>
<div class="col-md-3">

  <div class="card text-bg-dark mb-3" style="max-width: 18rem;min-height:300px;">
    <div class="card-header" style="text-align: center;">Minggu</div>
<div class="card-body" style="background-color: rgb(22, 22, 22); color: rgb(255, 255, 255);text-align: center;">
  <h5><b>TIDAK ADA JADWAL</b></h5>
  
    </div>
  </div>
</div>
</div>
</div>
     </div>
        </div>
               <!-- gallery begin -->
                <div id="galery">
                  <section id="gallery" class="text-center p-5">
                    <div class="container">
                      <h1 class="fw-bold display-4 pb-3">Gallery</h1>
                      <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                        <?php
                        $sql = "SELECT * FROM gallery ORDER BY tanggal DESC";
                        $hasil = $conn->query($sql); 
                  
                        while($row = $hasil->fetch_assoc()){
                        ?>
                          <div class="col">
                            <div class="card h-100">
                              <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
                              <div class="card-body">
                                <h5 class="card-title"><?= $row["judul"]?></h5>
                                <p class="card-text">
                                </p>
                              </div>
                              <div class="card-footer">
                                <small class="text-body-secondary">
                                  <?= $row["tanggal"]?>
                                </small>
                              </div>
                            </div>
                          </div>
                          <?php
                        }
                        ?> 
                      </div>
                    </div>
                  </section>
            
<!-- gallery end -->
</div>
<div id="guest">
  <h1>CONTACT</h1>
  <h3> GUEST BOOK</h3>
 <form action="">
 Nama : <br />
 <input type="text" name="nm" size="30" /> <br />
 Jenis Kelamin : <br />
 Laki :<input type="radio" name="jk" value="L" /> Wanita :<input
   type="radio"
   name="jk"
   value="P"
 />
 <br />
 Alamat : <br />
 <input type="text" name="nm" size="50" /> <br />
 Email : <br />
 <input type="text" name="nm" size="30" /> <br />
 Sosial Media <br />
 <input type="checkbox" name="Facebook" value="Ya" />Facebook
 <input type="checkbox" name="Youtube" value="Ya" /> Youtube
 <input type="checkbox" name="Tiktok" value="Ya" /> Tiktok
 <input type="checkbox" name="Instagram" value="Ya" /> Instagram <br />
 Dapat Info Dari : <br />
 <select name="Info">
   <option selected="select">_=Pilih=</option>
   <option value="Web">Web</option>
   <option value="Teman">Teman</option>
   <option value="Brosur">Brosur</option>
 </select>
 <br />
 Pesan : <br />
 <textarea name="Pesan" cols="40" rows="3"></textarea> <br />
 <input type="submit" value="Kirim" />
 <input type="reset" value="Batal" />
 </form>
 </section>
 </div>
 <div
   class="tab-pane fade"
   id="pills-disabled"
   role="tabpanel"
   aria-labelledby="pills-disabled-tab"
   tabindex="0"
 >
   Ini adalah konten tab Disabled.
 </div>
     </div>

</div>
     <footer>
      <h3>@2025 Latihan Bootstrap</h3>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
    <script src="index.js"></script>
  </body>
</html>
