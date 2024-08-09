<?php include 'navbar.php'; ?>
<!-- Header-->
<header class="bg-dark py-5">
  <div class="container px-5">
    <div class="row gx-5 align-items-center justify-content-center">
      <div class="col-lg-8 col-xl-7 col-xxl-6">
        <div class="my-5 text-center text-xl-start">
          <h1 class="display-5 fw-bolder text-white mb-2">
            Selamat Datang di Desa Pulesari
          </h1>
          <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
            <a class="btn btn-primary btn-lg px-4 me-sm-3 mt-3" href="#daftarPaket">Lihat Daftar Paket</a>
          </div>
        </div>
      </div>
      <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
        <img class="img-fluid rounded-3 my-5" src="assets/Heading.jpg" alt="..." />
      </div>
    </div>
  </div>
</header>
<!-- Pricing section-->
<section class="py-2" id="daftarPaket">
  <div class="container px-5 my-5">
    <div class="row">
      <div class="col-lg-2 mb-5 mb-lg-0">
        <h2 class="fw-bolder mb-0">Daftar Paket</h2>
      </div>
      <div class="col-lg-8">
        <div class="row gx-5 row-cols-1 row-cols-md-2">
          <!-- Paket A -->
          <div class="col mb-5 h-100">
            <img src="assets/PaketA.jpg" alt="Cover" style="height: 200px; object-fit: cover" class="rounded-3 mb-4 w-100" />
            <h2 class="h5">Paket A</h2>
            <p class="mb-2">
              - Jumlah Orang: 1 <br>
              - Jumlah Hari: 1 <br>
              - Penginapan: Ya <br>
              - Transportasi: Ya <br>
              - Makan: Ya
            </p>
            <a type="button" class="btn btn-success" href="form.php?paket=A&orang=1&hari=1&penginapan=true&transportasi=true&makan=true">
              Pilih Paket
            </a>
          </div>
          <!-- Paket B -->
          <div class="col mb-5 h-100">
            <img src="assets/PaketB.jpeg" alt="Cover" style="height: 200px; object-fit: cover" class="rounded-3 mb-4 w-100" />
            <h2 class="h5">Paket B</h2>
            <p class="mb-2">
              - Jumlah Orang: 2 <br>
              - Jumlah Hari: 1 <br>
              - Penginapan: Ya <br>
              - Transportasi: Ya <br>
              - Makan: Ya
            </p>
            <a type="button" class="btn btn-success" href="form.php?paket=B&orang=2&hari=1&penginapan=true&transportasi=true&makan=true">
              Pilih Paket
            </a>
          </div>
          <!-- Paket C -->
          <div class="col mb-5 h-100">
            <img src="assets/PaketC.jpg" alt="Cover" style="height: 200px; object-fit: cover" class="rounded-3 mb-4 w-100" />
            <h2 class="h5">Paket C</h2>
            <p class="mb-2">
              - Jumlah Orang: 1 <br>
              - Jumlah Hari: 2 <br>
              - Penginapan: Ya <br>
              - Transportasi: Ya <br>
              - Makan: Ya
            </p>
            <a type="button" class="btn btn-success" href="form.php?paket=C&orang=1&hari=2&penginapan=true&transportasi=true&makan=true">
              Pilih Paket
            </a>
          </div>
          <!-- Paket D -->
          <div class="col h-100">
            <img src="assets/PaketD.jpg" alt="Cover" style="height: 200px; object-fit: cover" class="rounded-3 mb-4 w-100" />
            <h2 class="h5">Paket D</h2>
            <p class="mb-2">
              - Jumlah Orang: 2 <br>
              - Jumlah Hari: 2 <br>
              - Penginapan: Ya <br>
              - Transportasi: Ya <br>
              - Makan: Ya
            </p>
            <a type="button" class="btn btn-success" href="form.php?paket=D&orang=2&hari=2&penginapan=true&transportasi=true&makan=true">
              Pilih Paket
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Video section-->
<section class="mb-4">
  <div class="d-flex justify-content-center flex-wrap">
    <div class="card m-2 pt-2" style="max-width: 24rem">
      <h5 class="card-title text-center">Paket Wisata A</h5>
      <div class="card-img-top">
        <iframe src="https://www.youtube.com/embed/NlUUZudby60?si=ecKwtHdSNWZW1gxz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
    </div>
    <div class="card m-2 pt-2" style="max-width: 24rem">
      <h5 class="card-title text-center">Paket Wisata B</h5>
      <div class="card-img-top">
        <iframe src="https://www.youtube.com/embed/2O4C8UlZGvM?si=JszJp8ryLXPwHA2n" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>