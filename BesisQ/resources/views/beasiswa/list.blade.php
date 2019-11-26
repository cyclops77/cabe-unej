@extends('include.index')
												

@section('konten')


  <!--================ Hero sm Banner start =================-->      
  <section class="hero-banner hero-banner--sm mb-30px">
    <div class="container">
      <div class="hero-banner--sm__content">
        <h1>Beasiswa</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cari Beasiswa</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->

<!-- src="img/blog/cat-post/cat-post-3.jpg" -->

  <!--================Blog Categorie Area =================-->
  <section class="">
    <hr align="center" width="100%">
    <hr align="center" width="100%">
    <hr align="center" width="100%">    
    <hr align="center" width="100%">
    <div class="container">


<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-semua" role="tab" aria-controls="nav-home" aria-selected="true">Semua 
      <span class="badge badge-primary">
        {{$beasiswaFree->count() + $beasiswaFakCuco->count() + $beasiswaCuco->count()}}
      </span>
    </a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-universitas" role="tab" aria-controls="nav-profile" aria-selected="false">Universitas
      <span class="badge badge-primary">
        {{$beasiswaFree->count()}}
      </span>
    </a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-fakultas" role="tab" aria-controls="nav-contact" aria-selected="false">Fakultas
      <span class="badge badge-primary">
        {{$beasiswaFakCuco->count()}}
      </span>
    </a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-prodi" role="tab" aria-controls="nav-contact" aria-selected="false">Prodi
      <span class="badge badge-primary">
        {{$beasiswaCuco->count()}}
      </span>
    </a>
  </div>
</nav>


<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-semua" role="tabpanel" aria-labelledby="nav-home-tab">

<div class="row">
        @foreach($beasiswaCuco as $index => $b)
        <div class="col-sm-6 col-lg-4 mb-4 mb-3 offer-single__content">
          <div class="blog_post">
              <img src="land-page/images/projects/wal{{$r+$index}}.jpg" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
              <div class="blog_details">
            <div class="row">
            <div class="col-md-8">
              <h2><a href="/beasiswa/{{$b->slug_beasiswa}}" class="text-dark">{{$b->nama_beasiswa}}</a></h2>
            </div>
            <div class="col-md-4">
              <h5 class="float-right"><small>Pendaftar : </small>{{$b->pendaftar_beasiswa->count()}}</h5>
            </div>
            </div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis nisi suscipit, aspernatur a, ducimus nemo provident tempore eveniet facere qui eaque fuga nihil vitae, harum! Reiciendis id illo dolore, ullam.  
                <hr>
                Fakultas : {{$b->fakultas->nama_fak}}
                <br>
                Prodi : {{$b->prodi->nama}}
                <br>
                  <a class="button button-blog float-right" href="/beasiswa/{{$b->slug_beasiswa}}">Detail</a>
              </div>
          </div>
      </div>
      @endforeach
        @foreach($beasiswaFakCuco as $index => $b)
        <div class="col-sm-6 col-lg-4 mb-4 mb-3 offer-single__content">
          <div class="blog_post">
              <img src="land-page/images/projects/wal{{$t+$index}}.jpg" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
              <div class="blog_details">
            <div class="row">
            <div class="col-md-8">
              <h2><a href="/beasiswa/{{$b->slug_beasiswa}}" class="text-dark">{{$b->nama_beasiswa}}</a></h2>
            </div>
            <div class="col-md-4">
              <h5 class="float-right"><small>Pendaftar : </small>{{$b->pendaftar_beasiswa->count()}}</h5>
            </div>
            </div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis nisi suscipit, aspernatur a, ducimus nemo provident tempore eveniet facere qui eaque fuga nihil vitae, harum! Reiciendis id illo dolore, ullam.  
                <hr>
                Fakultas : {{$b->fakultas->nama_fak}}
                <br>
                Prodi : Bebas
                <br>
                  <a class="button button-blog float-right" href="/beasiswa/{{$b->slug_beasiswa}}">Detail</a>
              </div>
          </div>
      </div>
      @endforeach

      @foreach($beasiswaFree as $index => $b)
        <div class="col-sm-6 col-lg-4 mb-4 mb-3 offer-single__content">
          <div class="blog_post">
              <img src="land-page/images/projects/wal{{$s+1+$index}}.jpg" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
              <div class="blog_details">
            <div class="row">
            <div class="col-md-8">
              <h2><a href="/beasiswa/{{$b->slug_beasiswa}}" class="text-dark">{{$b->nama_beasiswa}}</a></h2>
            </div>
            <div class="col-md-4">
              <h5 class="float-right"><small>Pendaftar : </small>{{$b->pendaftar_beasiswa->count()}}</h5>
            </div>
            </div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis nisi suscipit, aspernatur a, ducimus nemo provident tempore eveniet facere qui eaque fuga nihil vitae, harum! Reiciendis id illo dolore, ullam.  
                <hr>
                Fakultas : Bebas
                <br>
                Prodi : Bebas
                <br>
                  <a class="button button-blog float-right" href="/beasiswa/{{$b->slug_beasiswa}}">Detail</a>
              </div>
          </div>
      </div>
      @endforeach

      
        
      </div>

</div>
  <div class="tab-pane fade" id="nav-universitas" role="tabpanel" aria-labelledby="nav-profile-tab">
     <div class="row">
       @foreach($beasiswaFree as $index => $b)
        <div class="col-sm-6 col-lg-4 mb-4 mb-3 offer-single__content">
          <div class="blog_post">
              <img src="land-page/images/projects/wal{{$s+1+$index}}.jpg" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
              <div class="blog_details">
            <div class="row">
            <div class="col-md-8">
              <h2><a href="/beasiswa/{{$b->slug_beasiswa}}" class="text-dark">{{$b->nama_beasiswa}}</a></h2>
            </div>
            <div class="col-md-4">
              <h5 class="float-right"><small>Pendaftar : </small>{{$b->pendaftar_beasiswa->count()}}</h5>
            </div>
            </div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis nisi suscipit, aspernatur a, ducimus nemo provident tempore eveniet facere qui eaque fuga nihil vitae, harum! Reiciendis id illo dolore, ullam.  
                <hr>
                Fakultas : Bebas
                <br>
                Prodi : Bebas
                <br>
                  <a class="button button-blog float-right" href="/beasiswa/{{$b->slug_beasiswa}}">Detail</a>
              </div>
          </div>
      </div>
      @endforeach
     </div>
  </div>

  <div class="tab-pane fade" id="nav-fakultas" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="row">
      @foreach($beasiswaFakCuco as $index => $b)
        <div class="col-sm-6 col-lg-4 mb-4 mb-3 offer-single__content">
          <div class="blog_post">
              <img src="land-page/images/projects/wal{{$t+$index}}.jpg" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
              <div class="blog_details">
            <div class="row">
            <div class="col-md-8">
              <h2><a href="/beasiswa/{{$b->slug_beasiswa}}" class="text-dark">{{$b->nama_beasiswa}}</a></h2>
            </div>
            <div class="col-md-4">
              <h5 class="float-right"><small>Pendaftar : </small>{{$b->pendaftar_beasiswa->count()}}</h5>
            </div>
            </div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis nisi suscipit, aspernatur a, ducimus nemo provident tempore eveniet facere qui eaque fuga nihil vitae, harum! Reiciendis id illo dolore, ullam.  
                <hr>
                Fakultas : {{$b->fakultas->nama_fak}}
                <br>
                Prodi : Bebas
                <br>
                  <a class="button button-blog float-right" href="/beasiswa/{{$b->slug_beasiswa}}">Detail</a>
              </div>
          </div>
      </div>
      @endforeach  
    </div>
  </div>


  <div class="tab-pane fade" id="nav-prodi" role="tabpanel" aria-labelledby="nav-contact-tab">
    <div class="row">
      @foreach($beasiswaCuco as $index => $b)
        <div class="col-sm-6 col-lg-4 mb-4 mb-3 offer-single__content">
          <div class="blog_post">
              <img src="land-page/images/projects/wal{{$r+$index}}.jpg" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
              <div class="blog_details">
            <div class="row">
            <div class="col-md-8">
              <h2><a href="/beasiswa/{{$b->slug_beasiswa}}" class="text-dark">{{$b->nama_beasiswa}}</a></h2>
            </div>
            <div class="col-md-4">
              <h5 class="float-right"><small>Pendaftar : </small>{{$b->pendaftar_beasiswa->count()}}</h5>
            </div>
            </div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis nisi suscipit, aspernatur a, ducimus nemo provident tempore eveniet facere qui eaque fuga nihil vitae, harum! Reiciendis id illo dolore, ullam.  
                <hr>
                Fakultas : {{$b->fakultas->nama_fak}}
                <br>
                Prodi : {{$b->prodi->nama}}
                <br>
                  <a class="button button-blog float-right" href="/beasiswa/{{$b->slug_beasiswa}}">Detail</a>
              </div>
          </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
      
    </div>
    <hr align="center" width="89%">
    <hr align="center" width="91%">    
    <hr align="center" width="93%">
    <hr align="center" width="95%">
  </section>
  <!--================Blog Categorie Area =================-->




<!-- <section class="special_cource padding_top">
       
            <div class="justify-content-center" style="margin-top: -10%;position: relative;">
            </div>
            <div class="row">
            	@foreach($beasiswaCuco as $index => $b)
                <div class="col-sm-6 col-lg-4" style="margin-top: 20px">
                    <div class="single_special_cource">
                        <img src="land-page/images/projects/wal{{$r+$index}}.jpg" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
                        <div class="special_cource_text">
                            <a href="/beasiswa/{{$b->slug_beasiswa}}" class="btn_4">Lihat Beasiswa</a>
                            <h4><small>Pendaftar : </small>{{$b->pendaftar_beasiswa->count()}}</h4>
                            <a href="course-details.html"><h3>{{$b->nama_beasiswa}}</h3></a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <hr>
                            Fakultas : {{$b->fakultas->nama_fak}}
                            <br>
                            Prodi : {{$b->prodi->nama}}
                        </div>

                    </div>
                </div>
                @endforeach
                @foreach($beasiswaFakCuco as $index => $c)
                <div class="col-sm-6 col-lg-4" style="margin-top: 20px">
                    <div class="single_special_cource">
                        <img src="land-page/images/projects/wal{{$s+$index}}.jpg" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
                        <div class="special_cource_text">
                            <a href="/beasiswa/{{$c->slug_beasiswa}}" class="btn_4">Lihat Beasiswa</a>
                            <h4><small>Pendaftar : </small>{{$c->pendaftar_beasiswa->count()}}</h4>
                            <a href="course-details.html"><h3>{{$c->nama_beasiswa}}</h3></a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <hr>
                            Fakultas : {{$c->fakultas->nama_fak}}
                            <br>
                            Prodi : Bebas
                        </div>

                    </div>
                </div>
                @endforeach
                @foreach($beasiswaFree as $index => $d)
                <div class="col-sm-6 col-lg-4" style="margin-top: 20px">
                    <div class="single_special_cource">
                        <img src="land-page/images/projects/wal{{$t+$index}}.jpg" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
                        <div class="special_cource_text">
                            <a href="/beasiswa/{{$d->slug_beasiswa}}" class="btn_4">Lihat Beasiswa</a>
                            <h4><small>Pendaftar : </small>{{$d->pendaftar_beasiswa->count()}}</h4>
                            <a href="course-details.html"><h3>{{$d->nama_beasiswa}}</h3></a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <hr>
                            Fakultas : Bebas
                            <br>
                            Prodi : Bebas
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
 -->
@stop