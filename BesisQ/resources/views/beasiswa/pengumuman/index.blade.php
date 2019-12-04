@extends('include.index')
                        

@section('konten')


  <!--================ Hero sm Banner start =================-->      
  <section class="hero-banner hero-banner--sm mb-30px">
    <div class="container">
      <div class="hero-banner--sm__content">
        <h1>Pengumuman Beasiswa</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pengumuman Beasiswa</li>
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

<div class="input-group mt-3 mr-3">
      <input id="myInput" type="text" class="form-control" placeholder="Cari Beasiswa Disini" style="background-color:#2b4482;color: white;height: 50px;font-size: 20px;">
      <span class="input-group-btn">
          <button class="btn btn-default" type="button"  style="background-color:#2b4482;color: white;height: 50px">
              <i class="lnr lnr-magnifier"></i>
          </button>
      </span>
  </div>
<div class="row" id="myTable">
  <br>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable #bml").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>

        @foreach($beasiswa as $index => $b)
        <div class="col-sm-6 col-lg-4 mb-4 mb-3 offer-single__content" id="bml">
          <div class="blog_post">
              <img src="land-page/images/projects/wal{{$r+$index}}.jpg" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
              <div class="blog_details">
            <div class="row">
            <div class="col-md-8">
              <h2><a href="{{url('/lihat-pengumuman')}}/{{$b->slug_beasiswa}}" class="text-dark">{{$b->nama_beasiswa}}</a></h2>
            </div>
            <div class="col-md-4">
              <h5 class="float-right"><small>Pendaftar : </small>{{$b->pendaftar_beasiswa->count()}}</h5>
            </div>
            </div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis nisi suscipit, aspernatur a, ducimus nemo provident tempore eveniet facere qui eaque fuga nihil vitae, harum! Reiciendis id illo dolore, ullam.  
                <hr>
                @if($b->fakultas == "")
                Fakultas : Bebas
                @else 
                Fakultas : {{$b->fakultas->nama_fak}}
                @endif
                <br>
                @if($b->prodi == "")
                Prodi : Bebas
                @else
                Prodi : {{$b->prodi->nama}}
                @endif
                <br>
                  <a class="button button-blog float-right" href="{{url('/lihat-pengumuman')}}/{{$b->slug_beasiswa}}">Lihat Pengumuman</a>
              </div>
          </div>
      </div>
      @endforeach
    </div>

    </div>
    <hr align="center" width="89%">
    <hr align="center" width="91%">    
    <hr align="center" width="93%">
    <hr align="center" width="95%">
  </section>