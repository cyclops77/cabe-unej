@extends('include.index')
                        

@section('konten')


  <!--================ Hero sm Banner start =================-->      
  <section class="hero-banner hero-banner--sm mb-30px">
    <div class="container">
      <div class="hero-banner--sm__content">
        <h1>Pendaftar Beasiswa </h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
            <li class="breadcrumb-item active">Pendaftar Beasiswa</li>
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
  
      <div class="row">
        @foreach($beasiswaCuco as $index => $b)
        <div class="col-sm-6 col-lg-4 mb-4 mb-3 offer-single__content">
          <div class="blog_post">
              <img src="{{asset('/foto-beasiswa/'.$b->beasiswaAtribut->foto)}}" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
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

              <div class="row mt-2">
                <div class="col-md-5">
                <strong>Minimal Point</strong>
                </div>
                <div class="col-md-5">
                : <strong>{{$b->minimal_point}}</strong>
                </div>
              </div>   
                
                <hr>


                @if($b->fakultas=="")
                Fakultas : Bebas
                @else
                Fakultas : {{$b->fakultas->nama_fak}}
                @endif
                <br>
                @if($b->prodi=="")
                Prodi : Bebas
                @else
                Prodi : {{$b->prodi->nama}}
                @endif
                <br>
<button type="button" class="button button-blog mt-4 float-left" data-toggle="modal" data-target="#c{{$b->id}}">
  Tolak
</button>

<!-- Modal -->
<div class="modal fade" id="c{{$b->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$b->nama_beasiswa}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{url('/admin-verifikasi-beasiswa')}}" class="form-contact contact_form" novalidate="novalidate" id="myform">
        {{csrf_field()}}
          
          <div class="row mt-2 ">
                <div class="col-md-5">
                Point IPK 
                </div>
                <div class="col-md-5">
                : {{$b->point_ipk}}
                </div>
              </div>  
            <div class="row mt-2 ">
                <div class="col-md-5">
                Point Gaji Ortu
                </div>
                <div class="col-md-5">
                : {{$b->point_gaji}}
                </div>
              </div>  
              <div class="row mt-2 ">
                <div class="col-md-5">          
                Point Sertifikat
                </div>
                <div class="col-md-5">
                : {{$b->point_sertifikat}}
                </div>
              </div>  
              <div class="row mt-2 ">
                <div class="col-md-5">
                Point Organisasi
                </div>
                <div class="col-md-5">
                : {{$b->point_organisasi}}
                </div>
              </div> 
              <div class="row mt-2 ">
                <div class="col-md-5">
                Minimal Point
                </div>
                <div class="col-md-5">
                : {{$b->minimal_point}}
                </div>
              </div>   
                <hr>
                @if($b->fakultas=="")
                Fakultas : Bebas
                @else
                Fakultas : {{$b->fakultas->nama_fak}}
                @endif
                <br>
                @if($b->prodi=="")
                Prodi : Bebas
                @else
                Prodi : {{$b->prodi->nama}}
                @endif
                <br>
                <hr>
          <div class="form-group">
            <label class="col-md-6" for="inputDefault">Kesalahan</label>
            <div class="col-md-12">
              <input class="form-control" name="kesalahan" type="text">
            </div>
          </div>
          <div class="form-group ">
            <label class="col-md-6" for="inputDefault">Catatan</label>
            <div class="col-md-12">
              <textarea class="form-control mb-10" rows="5" name="catatan" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
            </div>
          </div>
          <input type="hidden" name="idnya" value="{{$b->id}}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
        <button type="submit" class="button button-blog">Kirim Penolakan</button>
      </div>
        </form>
    </div>
  </div>
</div>
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