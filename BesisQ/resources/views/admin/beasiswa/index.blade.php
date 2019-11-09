@extends('include.index')
                        

@section('konten')


  <!--================ Hero sm Banner start =================-->      
  <section class="hero-banner hero-banner--sm mb-30px">
    <div class="container">
      <div class="hero-banner--sm__content">
        <h1>Pendaftar Perusahaan </h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
            <li class="breadcrumb-item active">Pendaftar Perusahaan</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->
  <!--================ Hero sm Banner end =================-->
<br>
<br>
<br>
<br>
<div class="container">
   @if(session('sukses'))
    <div class="alert alert-success" >
      {{session('sukses')}}
    </div>
    @endif
    @if(session('gagal'))
    <div class="alert alert-danger" >
      {{session('gagal')}}
    </div>
    @endif
    <div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      <div class="row">
        @foreach($beasiswaCuco as $index => $b)
        <div class="col-sm-6 col-lg-4 mb-4 mb-3 offer-single__content">
          <div class="blog_post">
              <img src="land-page/images/projects/wal{{$r+$index}}.jpg" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
              <div class="blog_details">
            <div class="row">
            <div class="col-md-12">
              <h2><a href="/beasiswa/{{$b->slug_beasiswa}}" class="text-dark">{{$b->nama_beasiswa}}</a></h2>
            </div>
            
            </div>
              <div class="row mt-2">
                <div class="col-md-5">
                Point IPK 
                </div>
                <div class="col-md-5">
                : {{$b->point_ipk}}
                </div>
              </div>  
            
            <div class="row mt-2">
                <div class="col-md-5">
                Point Gaji Ortu
                </div>
                <div class="col-md-5">
                : {{$b->point_gaji}}
                </div>
              </div>  
            
              <div class="row mt-2">
                <div class="col-md-5">          
                Point Sertifikat
                </div>
                <div class="col-md-5">
                : {{$b->point_sertifikat}}
                </div>
              </div>  
            
              <div class="row mt-2">
                <div class="col-md-5">
                Point Organisasi
                </div>
                <div class="col-md-5">
                : {{$b->point_organisasi}}
                </div>
              </div>   
                <hr>                
                Fakultas : {{$b->fakultas->nama_fak}}
                <br>
                Prodi : {{$b->prodi->nama}}
                <br>
                  <form action="{{url('/verifikasi-terima-beasiswa')}}" method="POST">
                  {{csrf_field()}}
                    <input type="hidden" name="idnya" value="{{$b->id}}">
                    <button type="submit"  class="button button-blog mt-4 float-right">Verifikasi
                    </button>
                  </form>
              </div>
          </div>
      </div>
      @endforeach

        @foreach($beasiswaFree as $index => $b)
        <div class="col-sm-6 col-lg-4 mb-4 mb-3 offer-single__content">
          <div class="blog_post">
              <img src="land-page/images/projects/wal{{$r+$index}}.jpg" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
              <div class="blog_details">
            <div class="row">
            <div class="col-md-12">
              <h2><a href="/beasiswa/{{$b->slug_beasiswa}}" class="text-dark">{{$b->nama_beasiswa}}</a></h2>
            </div>
            
            </div>
              <div class="row mt-2">
                <div class="col-md-5">
                Point IPK 
                </div>
                <div class="col-md-5">
                : {{$b->point_ipk}}
                </div>
              </div>  
            
            <div class="row mt-2">
                <div class="col-md-5">
                Point Gaji Ortu
                </div>
                <div class="col-md-5">
                : {{$b->point_gaji}}
                </div>
              </div>  
            
              <div class="row mt-2">
                <div class="col-md-5">          
                Point Sertifikat
                </div>
                <div class="col-md-5">
                : {{$b->point_sertifikat}}
                </div>
              </div>  
            
              <div class="row mt-2">
                <div class="col-md-5">
                Point Organisasi
                </div>
                <div class="col-md-5">
                : {{$b->point_organisasi}}
                </div>
              </div>   
                
                <hr>



                Fakultas : Bebas
                <br>
                Prodi : Bebas
                <br>
                  <form action="{{url('/verifikasi-terima-beasiswa')}}" method="POST">
                  {{csrf_field()}}
                    <input type="hidden" name="idnya" value="{{$b->id}}">
                    <button type="submit"  class="button button-blog mt-4 float-right">Verifikasi
                    </button>
                  </form>
              </div>
          </div>
      </div>
      @endforeach

      @foreach($beasiswaFakCuco as $index => $b)
        <div class="col-sm-6 col-lg-4 mb-4 mb-3 offer-single__content">
          <div class="blog_post">
              <img src="land-page/images/projects/wal{{$r+$index}}.jpg" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
              <div class="blog_details">
            <div class="row">
            <div class="col-md-12">
              <h2><a href="/beasiswa/{{$b->slug_beasiswa}}" class="text-dark">{{$b->nama_beasiswa}}</a></h2>
            </div>
            
            </div>
              <div class="row mt-2">
                <div class="col-md-5">
                Point IPK 
                </div>
                <div class="col-md-5">
                : {{$b->point_ipk}}
                </div>
              </div>  
            
            <div class="row mt-2">
                <div class="col-md-5">
                Point Gaji Ortu
                </div>
                <div class="col-md-5">
                : {{$b->point_gaji}}
                </div>
              </div>  
            
              <div class="row mt-2">
                <div class="col-md-5">          
                Point Sertifikat
                </div>
                <div class="col-md-5">
                : {{$b->point_sertifikat}}
                </div>
              </div>  
            
              <div class="row mt-2">
                <div class="col-md-5">
                Point Organisasi
                </div>
                <div class="col-md-5">
                : {{$b->point_organisasi}}
                </div>
              </div>   
                
                <hr>



                Fakultas : {{$b->fakultas->nama_fak}}
                <br>
                Prodi : Bebas
                <br>
                  <form action="{{url('/verifikasi-terima-beasiswa')}}" method="POST">
                  {{csrf_field()}}
                    <input type="hidden" name="idnya" value="{{$b->id}}">
                    <button type="submit"  class="button button-blog mt-4 float-right">Verifikasi
                    </button>
                  </form>
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
  <!--================Blog Categorie Area =================-->

@stop