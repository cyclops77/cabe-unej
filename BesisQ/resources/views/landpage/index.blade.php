@extends('include.index')
@section('konten')



  <main class="side-main">
    <!--================ Hero sm Banner start =================-->      
    <section class="hero-banner mb-30px">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="hero-banner__img">
              <img class="img-fluid" src="{{asset('stylers/img/banner/hero-banner.png')}}" alt="">
            </div>
          </div>
          <div class="col-lg-5 pt-5">
            <div class="hero-banner__content">
              @guest<h1>Cari Beasiswa UNEJ</h1>@endguest
              @auth 
              <h1>{{Auth::user()->role=="mahasiswa" ? "Cari Beasiswa UNEJ" : ""}}</h1>
              <h1 style="display: {{Auth::user()->role=="perusahaan" ? "block" : "none"}}">{{Auth::user()->name}}</h1>
              <h1 style="display: {{Auth::user()->role=="admin" ? "block" : "none"}}">Welcome Admin</h1>
              @endauth
              <p>Website ini pilihan tepat sebagai tempat mencari beasiswa sesua dengan kriteria. Terhubung dengan puluhan penyedia beasiswa yang kalian butuhkan. </p>

              @guest
              <a class="button bg" href="{{url('/login')}}">Cari Beasiswa</a>
              @endguest
              @auth
              <a style="width: 45%;text-align: center;display: {{Auth::user()->role=="mahasiswa" ? "block" : "none"}}" class="button bg" href="{{url('/beasiswa')}}">Cari Beasiswa</a>
              <a style="width: 45%;text-align: center;display: {{Auth::user()->role=="perusahaan" ? "block" : "none"}}" class="button bg" href="{{url('/beasiswaku')}}">Beasiswa Saya</a>  
              @endauth
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero sm Banner end =================-->





    <!--================ Feature section start =================-->  
    @guest
    <section class="section-margin">
      <div class="container">
        <div class="section-intro pb-85px text-center">
          <h2 class="section-intro__title">Register</h2>
          <p class="section-intro__subtitle">Selamat datang di Cabe (Cari Beasiswa) Unej miliki kesempatan mendapatkan mahasiswa terbaik di Universitas Jember</p>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-4 offset-2">
              <a href="{{url('/daftar-perusahaan')}}" style="text-decoration: none;">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="ti-package"></i>
                </span>
                <h3 class="card-feature__title">Regitrasi Perusahaan</h3>
                <p class="card-feature__subtitle">Daftarkan perusahaan anda sekarang </p>
              </div>
              </a>
            </div>
            <div class="col-lg-4">
              <a href="{{url('/daftar-mahasiswa')}}" style="text-decoration: none;">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="ti-mouse-alt"></i>
                </span>
                <h3 class="card-feature__title">Registrasi Mahasiswa</h3>
                <p class="card-feature__subtitle">Daftarkan dirimu dan raih kesempatan untuk menjadi tim mereka</p>
              </div>
              </a>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    @endguest
    @auth    
    <section class="section-margin" style="display: {{Auth::user()->role=="perusahaan" ? "block" : "none"}}">
      <div class="container">
        <div class="section-intro pb-85px text-center">
          <h2 class="section-intro__title">Menu Perusahaan</h2>
          <p class="section-intro__subtitle">Vel aliquam quis, nulla pede mi commodo tristique nam hac. Luctus torquent velit felis commodo pellentesque nulla cras. Tincidunt hacvel alivquam quis nulla pede mi commodo tristique nam hac  luctus torquent</p>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-4 offset-2">
              <a href="{{url('/beasiswaku')}}" style="text-decoration: none;">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="ti-list"></i>
                </span>
                <h3 class="card-feature__title">Beasiswaku</h3>
                <p class="card-feature__subtitle">Molestie lorem est faucibus faucibus erat phasellus placerat proin aptent</p>
              </div>
              </a>
            </div>
            <div class="col-lg-4">
              <a href="{{url('/buat-beasiswa')}}" style="text-decoration: none;">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="ti-arrow-circle-right"></i>
                </span>
                <h3 class="card-feature__title">Buat Beasiswa</h3>
                <p class="card-feature__subtitle">Molestie lorem est faucibus faucibus erat phasellus placerat proin aptent</p>
              </div>
              </a>
            </div>
            
          </div>
          <div class="row">
          <div class="col-lg-4 offset-2 mt-3">
              <a href="{{url('/sedang-diverifikasi')}}" style="text-decoration: none;">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="ti-themify-favicon"></i>
                </span>
                <h3 class="card-feature__title">Proses Verifikasi</h3>
                <p class="card-feature__subtitle">Molestie lorem est faucibus faucibus erat phasellus placerat proin aptent</p>
              </div>
              </a>
            </div>
            <div class="col-lg-4 mt-3">
              <a href="{{url('/beasiswa-batas-akhir')}}" style="text-decoration: none;">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="ti-time"></i>
                </span>
                <h3 class="card-feature__title">Beasiswa Batas Akhir</h3>
                <p class="card-feature__subtitle">Molestie lorem est faucibus faucibus erat phasellus placerat proin aptent</p>
              </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endauth
    @auth    
    <section class="section-margin" style="display: {{Auth::user()->role=="admin" ? "block" : "none"}}">
      <div class="container">
        <div class="section-intro pb-85px text-center">
          <h2 class="section-intro__title">Menu Admin</h2>
          <p class="section-intro__subtitle">Vel aliquam quis, nulla pede mi commodo tristique nam hac. Luctus torquent velit felis commodo pellentesque nulla cras. Tincidunt hacvel alivquam quis nulla pede mi commodo tristique nam hac  luctus torquent</p>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-4 offset-2">
              <a href="{{url('/pendaftar')}}" style="text-decoration: none;">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="ti-package"></i>
                </span>
                <h3 class="card-feature__title">Pendaftar Perusahaan</h3>
                <p class="card-feature__subtitle">Molestie lorem est faucibus faucibus erat phasellus placerat proin aptent</p>
              </div>
              </a>
            </div>
            <div class="col-lg-4">
              <a href="{{url('/verifikasi-beasiswa')}}" style="text-decoration: none;">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="ti-mouse-alt"></i>
                </span>
                <h3 class="card-feature__title">Verifikasi Beasiswa</h3>
                <p class="card-feature__subtitle">Molestie lorem est faucibus faucibus erat phasellus placerat proin aptent</p>
              </div>
              </a>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    @endauth
    <!--================ Feature section end =================-->      
    
  @auth    
    <section class="section-margin" style="display: {{Auth::user()->role=="mahasiswa" ? "block" : "none"}}">
      <div class="container">
        <div class="section-intro pb-85px text-center">
          <h2 class="section-intro__title">Menu Mahasiswa</h2>
          <p class="section-intro__subtitle">Di sini anda dapat menggunakan beberapa fitur yang tersedia di bawah ini karena menu tersebut hanya ada di dalam menu milik mahasiswa</p>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-4 offset-2">
              <a href="{{url('/beasiswa')}}" style="text-decoration: none;">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="ti-hand-point-up"></i>
                </span>
                <h3 class="card-feature__title">Cari Beasiswa</h3>
                <p class="card-feature__subtitle">Di sini anda dapat menggunakan beberapa fitur yang tersedia di bawah ini karena menu tersebut hanya ada di dalam menu milik mahasiswa</p>
              </div>
              </a>
            </div>
            <div class="col-lg-4">
              <a href="{{url('/pengumuman-beasiswa')}}" style="text-decoration: none;">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="ti-unlock"></i>
                </span>
                <h3 class="card-feature__title">Pengumuman Beasiswa</h3>
                <p class="card-feature__subtitle">Pada pengumuman beasiswa ini anda dapat meilhat siapa saja yang lolos pada beasiswa</p>
              </div>
              </a>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    @endauth


    <!--================ Testimonial section end =================-->      


    <!--================ Start Clients Logo Area =================-->
    <section class="clients_logo_area section-padding">
      <div class="container">
        <div class="clients_slider owl-carousel">
          <div class="item">
            <img src="img/clients-logo/c-logo-1.png" alt="">
          </div>
          <div class="item">
            <img src="img/clients-logo/c-logo-2.png" alt="">
          </div>
          <div class="item">
            <img src="img/clients-logo/c-logo-3.png" alt="">
          </div>
          <div class="item">
            <img src="img/clients-logo/c-logo-4.png" alt="">
          </div>
          <div class="item">
            <img src="img/clients-logo/c-logo-5.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <!--================ End Clients Logo Area =================-->
  </main>


@stop