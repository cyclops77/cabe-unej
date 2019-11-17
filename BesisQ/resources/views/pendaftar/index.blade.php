@extends('include.index')
												

@section('konten')


  <!--================ Hero sm Banner start =================-->      
  <section class="hero-banner hero-banner--sm mb-30px">
    <div class="container">
      <div class="hero-banner--sm__content">
        <h1>List Beasiswa</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">List Beasiswa</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->

<!-- src="img/blog/cat-post/cat-post-3.jpg" -->

  <!--================Blog Categorie Area =================-->
  <section class="">
    <hr align="center" width="95%">
    <hr align="center" width="93%">
    <hr align="center" width="91%">    
    <hr align="center" width="89%">
    <div class="container">
      <div class="row">
        @foreach($beasiswaPerusahaan as $index => $b)
        <div class="col-sm-6 col-lg-4 mb-4 mb-3 offer-single__content">
          <div class="blog_post">
              <img src="land-page/images/projects/wal{{$r+$index}}.jpg" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
              <div class="blog_details">
            <div class="row">
            <div class="col-md-8">
              <h2><a href="/beasiswaku/{{$b->slug_beasiswa}}" class="text-dark">{{$b->nama_beasiswa}}</a></h2>
            </div>
            <div class="col-md-4">
              <h5 class="float-right"><small>Pendaftar : </small>{{$b->pendaftar_beasiswa->count()}}</h5>
            </div>
            </div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis nisi suscipit, aspernatur a, ducimus nemo provident tempore eveniet facere qui eaque fuga nihil vitae, harum! Reiciendis id illo dolore, ullam.  
                <hr>
                Fakultas : 
                <br>
                Prodi : 
                <br>
                  <a class="button button-blog float-right" href="/beasiswaku/{{$b->slug_beasiswa}}">View More</a>
              </div>
          </div>
      </div>
      @endforeach
        

        
      </div>
    <div class="offset-5">
    {{$beasiswaPerusahaan->links()}}    
    </div>
    </div>
    <hr align="center" width="89%">
    <hr align="center" width="91%">    
    <hr align="center" width="93%">
    <hr align="center" width="95%">
  </section>
  <!--================Blog Categorie Area =================-->

@stop