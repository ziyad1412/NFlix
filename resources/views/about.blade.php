@extends('main')
@section('content')
<!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <h2 class="text-center my-3 fw-bold">About Us</h2>
        <div class="row">
          <div data-aos="fade-left">
            <p>
               NFLIX adalah layanan streaming yang didedikasikan untuk menayangkan film-film hit mancanegara dan lokal terbesar, semuanya di satu tempat. Layanan kami menyatukan serial favoritmu, film-film Hollywood blockbuster Marvel, Star Wars, Pixar, National Geographic dan masih banyak lagi, serta pemutaran tayangan Indonesia eksklusif, dan film-film dari studio-studio terkemuka di Indonesia.

            </p>
          </div>
          <div data-aos="fade-right">
            <p>NFLIX menawarkan berbagai fitur menarik untuk dinikmati, berikut beberapa fitur utama:</p>
            <ul>
              <li><i class="bi bi-check-circle"></i>Pengguna dapat menonton di dua layar bersamaan sekaligus di ponsel, desktop.</li>
              <li><i class="bi bi-check-circle"></i> Dapat menonton saat dalam perjalanan dimana pun, dan kapan pun.</li>
              <li><i class="bi bi-check-circle"></i> Layanan kami bebas iklan, jadi anda dapat menonton semua konten kami tanpa gangguan.</li>
            </ul>
            <p>
             Tersedia di layar yang terhubung ke internet, NFLIX menawarkan tontonan bebas iklan dengan berbagai film, serial live-action dan animasi, konten berdurasi pendek dan dokumenter, mencakup serial seperti The Mandalorian dan film seperti Avengers: Endgame, Aladdin dan Frozen 2, serta perpustakaan besar film Indonesia dan hit lokal.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Team Section ======= -->
    <h3 class="text-center my-3 fw-bold">Team</h3>
    <p class="text-center">MSIB NF Computer Kelompok 1 C</p>
    <br>
    <section id="team" class="team">
      <div class="container">

        <div class="row text-center">
          <div class="col-lg-4 col-md-6 d-flex justify-content-around" data-aos="zoom-in">
            <div class="member">
              <img src="{{ asset('img/1.png') }}" alt="" width="100">
              <h4>Mashud Rizki</h4>
              <span>Backend Developer</span>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex justify-content-around" data-aos="zoom-in">
            <div class="member">
              <img src="{{ asset('img/2.png') }}" alt="" width="100">
              <h4>Abdurahman Ziyad</h4>
              <span>Frontend Developer</span>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex justify-content-around" data-aos="zoom-in">
            <div class="member">
              <img src="{{ asset('img/3.png') }}" alt="" width="100">
              <h4>Chika Aulia Zahwa</h4>
              <span>Project Manager</span>
            </div>
          </div>

           <div class="col-lg-4 col-md-6 d-flex justify-content-around" data-aos="zoom-in">
            <div class="member">
              <img src="{{ asset('img/4.png') }}" alt="" width="100">
              <h4>Saniah Azzahra</h4>
              <span>UI UX Designer</span>
            </div>
          </div>

           <div class="col-lg-4 col-md-6 d-flex justify-content-around" data-aos="zoom-in">
            <div class="member">
              <img src="{{ asset('img/5.png') }}" alt="" width="100">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex justify-content-around" data-aos="zoom-in">
            <div class="member">
              <img src="{{ asset('img/6.png') }}" alt="" width="100">
              <h4>David Octavyanto </h4>
              <span>Laporan</span>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->
@endsection