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
              <a href="{{$perusahaan->status=="terverifikasi" ? "/beasiswaku" : "/danger"}}" style="text-decoration: none;">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="ti-package"></i>
                </span>
                <h3 class="card-feature__title">Beasiswaku</h3>
                <p class="card-feature__subtitle">Kumpulan beasiswa yang telah dibikin oleh perusahaan ini</p>
              </div>
              </a>
            </div>
            <div class="col-lg-4">
              <a href="{{$perusahaan->status=="terverifikasi" ? "/buat-beasiswa" : "/danger"}}" style="text-decoration: none;" style="text-decoration: none;">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="ti-mouse-alt"></i>
                </span>
                <h3 class="card-feature__title">Buat Beasiswa</h3>
                <p class="card-feature__subtitle">Anda dapat membuat beasiswa anda disini </p>
              </div>
              </a>
            </div>
            
          </div>
          <div class="col-lg-4 mt-4 offset-4">
              <a href="{{$perusahaan->status=="terverifikasi" ? "/sedang-diverifikasi" : "/danger"}}" style="text-decoration: none;" style="text-decoration: none;"> 
                <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  <i class="ti-mouse-alt"></i>
                </span>
                <h3 class="card-feature__title">Sedang Diverifikasi</h3>
                <p class="card-feature__subtitle">Tentukan mahasiswa yang sesuai dengan kebutuhan anda</p>
              </div>
              </a>
            </div>
        </div>
      </div>
    </section>
    @endauth
    <!--================ Feature section end =================-->      
    
    <!--================ about section start =================-->      
    <section class="section-padding--small bg-magnolia">
      <div class="container">
        <div class="row no-gutters align-items-center">
          <div class="col-md-5 mb-5 mb-md-0">
            <div class="about__content">
              <h2>Leading the Digital Entertainment Revolution</h2>
              <p>Molestie lorem est faucibus Faucibus erat phasellus placerat proinint aptent pulvinar fusce nostra porta sem platea nec, donec fusce erat Molestie lorem est faucibus faucibus erat phasellus placerat proin aptent pulvinar fusce nostra port</p>
              <a class="button button-light" href="#">Know More</a>
            </div>
          </div>
          <div class="col-md-7">
            <div class="about__img">
              <img class="img-fluid" src="{{asset('stylers/img/home/about.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ about section end =================-->      
    
    <!--================ Offer section start =================-->      
    <section class="section-margin">
      <div class="container">
        <div class="section-intro pb-85px text-center">
          <h2 class="section-intro__title">Features We Offer</h2>
          <p class="section-intro__subtitle">Vel aliquam quis, nulla pede mi commodo tristique nam hac. Luctus torquent velit felis commodo pellentesque nulla cras. Tincidunt hacvel alivquam quis nulla pede mi commodo tristique nam hac  luctus torquent</p>
        </div>

        <div class="row">
          <div class="col-lg-6">

            <div class="row offer-single-wrapper">
              <div class="col-lg-6 offer-single">
                <div class="card offer-single__content text-center">
                  <span class="offer-single__icon">
                    <i class="ti-pencil-alt"></i>
                  </span>
                  <h4>Easy To Manage</h4>
                  <p>Posuere porttitor justo ornare dictum ultricies enim imperdiet integer habitant.</p>
                </div>
              </div>
              
              <div class="col-lg-6 offer-single">
                <div class="card offer-single__content text-center">
                  <span class="offer-single__icon">
                    <i class="ti-ruler-pencil"></i>
                  </span>
                  <h4>Analytics Tool</h4>
                  <p>Posuere porttitor justo ornare dictum ultricies enim imperdiet integer habitant.</p>
                </div>
              </div>
            </div>

            <div class="row offer-single-wrapper">
              <div class="col-lg-6 offer-single">
                <div class="card offer-single__content text-center">
                  <span class="offer-single__icon">
                    <i class="ti-cut"></i>
                  </span>
                  <h4>Professionals Tools</h4>
                  <p>Posuere porttitor justo ornare dictum ultricies enim imperdiet integer habitant.</p>
                </div>
              </div>
              
              <div class="col-lg-6 offer-single">
                <div class="card offer-single__content text-center">
                  <span class="offer-single__icon">
                    <i class="ti-light-bulb"></i>
                  </span>
                  <h4>Ready Content</h4>
                  <p>Posuere porttitor justo ornare dictum ultricies enim imperdiet integer habitant.</p>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-6">
            <div class="offer-single__img">
              <img class="img-fluid" src="{{asset('stylers/img/home/offer.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Offer section end =================-->      

    <!--================ Solution section start =================-->      
    <section class="section-padding--small bg-magnolia">
      <div class="container">
        <div class="row align-items-center pt-xl-3 pb-xl-5">
          <div class="col-lg-6">
            <div class="solution__img text-center text-lg-left mb-4 mb-lg-0">
              <img class="img-fluid" src="img/home/solution.png" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="solution__content">
              <h2>Simple Solutions for Complex Connections</h2>
              <p>Molestie lorem est faucibus Faucibus erat phasellus placerat proinint aptent pulvinar fusce nostra porta sem platea nec, donec fusce erat Molestie lorem est faucibus faucibus erat phasellus placerat proin aptent pulvinar fusce nostra port</p>
              <a class="button button-light" href="#">Know More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Solution section end =================-->      

    <!--================ Pricing section start =================-->      
    <section class="section-margin">
      <div class="container">
        <div class="section-intro pb-85px text-center">
          <h2 class="section-intro__title">Choose Your Plan</h2>
          <p class="section-intro__subtitle">Vel aliquam quis, nulla pede mi commodo tristique nam hac. Luctus torquent velit felis commodo pellentesque nulla cras. Tincidunt hacvel alivquam quis nulla pede mi commodo tristique nam hac  luctus torquent</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card text-center card-pricing">
              <div class="card-pricing__header">
                <h4>Normal</h4>
                <p>Attend only first day</p>
                <h1 class="card-pricing__price"><span>$</span>45.00</h1>
              </div>
              <ul class="card-pricing__list">
                <li><i class="ti-check"></i>Unlimited Entrance</li>
                <li><i class="ti-check"></i>Comfortable Seat</li>
                <li><i class="ti-check"></i>Paid Certificate</li>
                <li class="unvalid"><i class="ti-close"></i>Day One Workshop</li>
                <li class="unvalid"><i class="ti-close"></i>One Certificate</li>
              </ul>
              <div class="card-pricing__footer">
                <button class="button button-light">Buy Now</button>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card text-center card-pricing">
              <div class="card-pricing__header">
                <h4>Advanced</h4>
                <p>Attend only first day</p>
                <h1 class="card-pricing__price"><span>$</span>55.00</h1>
              </div>
              <ul class="card-pricing__list">
                <li><i class="ti-check"></i>Unlimited Entrance</li>
                <li><i class="ti-check"></i>Comfortable Seat</li>
                <li><i class="ti-check"></i>Paid Certificate</li>
                <li class="unvalid"><i class="ti-close"></i>Day One Workshop</li>
                <li class="unvalid"><i class="ti-close"></i>One Certificate</li>
              </ul>
              <div class="card-pricing__footer">
                <button class="button button-light">Buy Now</button>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card text-center card-pricing">
              <div class="card-pricing__header">
                <h4>Ultimate</h4>
                <p>Attend only first day</p>
                <h1 class="card-pricing__price"><span>$</span>65.00</h1>
              </div>
              <ul class="card-pricing__list">
                <li><i class="ti-check"></i>Unlimited Entrance</li>
                <li><i class="ti-check"></i>Comfortable Seat</li>
                <li><i class="ti-check"></i>Paid Certificate</li>
                <li class="unvalid"><i class="ti-close"></i>Day One Workshop</li>
                <li class="unvalid"><i class="ti-close"></i>One Certificate</li>
              </ul>
              <div class="card-pricing__footer">
                <button class="button button-light">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Pricing section end =================-->      

    <!--================ Testimonial section start =================-->      
    <section class="section-padding bg-magnolia">
      <div class="container">
        <div class="section-intro pb-5 text-center">
          <h2 class="section-intro__title">Client Says Me</h2>
          <p class="section-intro__subtitle">Vel aliquam quis, nulla pede mi commodo tristique nam hac. Luctus torquent velit felis commodo pellentesque nulla cras. Tincidunt hacvel alivquam </p>
        </div>

        <div class="owl-carousel owl-theme testimonial">
          <div class="testimonial__item text-center">
            <div class="testimonial__img">
              <img src="{{asset('stylers/img/testimonial/testimonial1.png')}}" alt="">
            </div>
            <div class="testimonial__content">
              <h3>Stephen Mcmilan</h3>
              <p>Executive, ACI Group</p>
              <p class="testimonial__i">Also made from. Give may saying meat there from heaven it lights face had is gathered god earth light for life may itself shall whales made they're blessed whales also made from give may saying meat. There from heaven it lights face had also made from. Give may saying meat there from heaven</p>
            </div>
          </div>
          <div class="testimonial__item text-center">
            <div class="testimonial__img">
              <img src="img/testimonial/testimonial1.png" alt="">
            </div>
            <div class="testimonial__content">
              <h3>Stephen Mcmilan</h3>
              <p>Executive, ACI Group</p>
              <p class="testimonial__i">Also made from. Give may saying meat there from heaven it lights face had is gathered god earth light for life may itself shall whales made they're blessed whales also made from give may saying meat. There from heaven it lights face had also made from. Give may saying meat there from heaven</p>
            </div>
          </div>
          <div class="testimonial__item text-center">
            <div class="testimonial__img">
              <img src="img/testimonial/testimonial1.png" alt="">
            </div>
            <div class="testimonial__content">
              <h3>Stephen Mcmilan</h3>
              <p>Executive, ACI Group</p>
              <p class="testimonial__i">Also made from. Give may saying meat there from heaven it lights face had is gathered god earth light for life may itself shall whales made they're blessed whales also made from give may saying meat. There from heaven it lights face had also made from. Give may saying meat there from heaven</p>
            </div>
          </div>
        </div>
      </div>
    </section>
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