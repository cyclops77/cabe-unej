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
              @endauth
              <p>Vel aliquam quis, nulla pede mi commodo tristique nam hac Luctun torquent velit felis commodo pellentesque nulla cras vel aliqua quisan nulla pede mi commoda</p>

              @guest
              <a class="button bg" href="{{url('/login')}}">Cari Beasiswa</a>
              @endguest
              @auth
              <a style="width: 45%;text-align: center;display: {{Auth::user()->role=="mahasiswa" ? "block" : "none"}}" class="button bg" href="{{url('/beasiswa')}}">Cari Beasiswa</a>
              <a style="width: 45%;text-align: center;display: {{Auth::user()->role=="perusahaan" ? "block" : "none"}}" class="button bg" href="{{$perusahaan->status=="terverifikasi" ? "/beasiswaku" : "/danger"}}">Beasiswa Saya</a>  
              @endauth
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero sm Banner end =================-->

    <!--================ Feature section start =================-->  
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
    <!--================ Feature section end =================-->      
    
    <!--================ End Clients Logo Area =================-->
  </main>


@stop