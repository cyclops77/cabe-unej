@extends('include.index')
												

@section('konten')


  <!--================ Hero sm Banner start =================-->      
  <section class="hero-banner hero-banner--sm mb-30px">
    <div class="container">
      <div class="hero-banner--sm__content">
        <h1>Beasiswa Yang Sedang Diverifikasi</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Beasiswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Beasiswa yang sedang diverifikasi</li>
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
      <!-- REVISI -->
      @foreach($beasiswaCucoR as $index => $b)
        <div class="col-sm-6 col-lg-4 mb-4 mb-3 offer-single__content">
          <div class="blog_post">
              <img src="land-page/images/projects/wal{{$r+$index}}.jpg" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
              <div class="blog_details">
            <div class="row">
            <div class="col-md-8">
              <h2><a href="/beasiswa/{{$b->slug_beasiswa}}" class="text-dark">{{$b->nama_beasiswa}}</a></h2>
            </div>
            <div class="col-md-4">
              <h5 class="float-right"><small><a class="badge badge-danger text-white">Harus Direvisi</a></small></h5>
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
                  <button type="button" class="button button-blog float-right" data-toggle="modal" data-target="#ez{{$b->id}}">
                    <i class="ti-pencil mr-2"></i>Ubah Data
                  </button>
                  
                  <!-- modalsnya -->
                  <div class="modal fade" id="ez{{$b->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Beasiswa {{$b->nama_beasiswa}}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
              <form method="POST" action="{{url('/send/edit-beasiswa')}}" class="form-contact contact_form" novalidate="novalidate" id="myform">
            {{csrf_field()}}

          <div class="row offset-3">
          <div class="form-group">
            <label class="col-md-6 text-primary" for="inputDefault">
            Point IPK
          </label>
            <div class="col-md-12">
              <input class="form-control" name="point_ipk" type="number" value="{{$b->point_ipk}}">
              <input type="hidden" name="idnya" value="{{$b->id}}">
            </div>
          </div>
          <div class="form-group ">
            <label class="col-md-6 text-primary" for="inputDefault">Point Gaji</label>
            <div class="col-md-12">
              <input class="form-control" name="point_gaji" type="number" value="{{$b->point_gaji}}">
            </div>
          </div>
          </div>
          <div class="row offset-3">
          <div class="form-group">
            <label class="col-md-12 text-primary" for="inputDefault">Point Organsasi</label>
            <div class="col-md-12">
              <input class="form-control" name="point_organisasi" type="number" value="{{$b->point_organisasi}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-12 text-primary" for="inputDefault">Point Sertifikat</label>
            <div class="col-md-12">
              <input class="form-control" name="point_sertifikat" type="number" value="{{$b->point_sertifikat}}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-12 text-primary" for="inputDefault">Minimal Point</label>
            <div class="col-md-12">
              <input class="form-control" name="minimal_point" type="number" value="{{$b->minimal_point}}">
            </div>
          </div>
          </div>
          </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-link" data-dismiss="modal">tutup</button>
                          <button type="submit" class="button button-blog">Simpan Perubahan</button>
                        </div>
                      </form>
        <!-- TUTUPMDAL  -->
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
      @endforeach     






        <!-- NON REVISI -->
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
              <h5 class="float-right"><small><a class="badge badge-primary text-white">Belum Diverifikasi</a></small></h5>
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
                  <button type="button" class="button button-blog float-right" data-toggle="modal" data-target="#ez{{$b->id}}">
                    <i class="ti-pencil mr-2"></i>Ubah Data
                  </button>
                  
                  <!-- modalsnya -->
                  <div class="modal fade" id="ez{{$b->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Beasiswa {{$b->nama_beasiswa}}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
              <form method="POST" action="{{url('/send/edit-beasiswa')}}" class="form-contact contact_form" novalidate="novalidate" id="myform">
            {{csrf_field()}}

          <div class="row offset-3">
          <div class="form-group">
            <label class="col-md-6 text-primary" for="inputDefault">
            Point IPK
          </label>
            <div class="col-md-12">
              <input class="form-control" name="point_ipk" type="number" value="{{$b->point_ipk}}">
              <input type="hidden" name="idnya" value="{{$b->id}}">
            </div>
          </div>
          <div class="form-group ">
            <label class="col-md-6 text-primary" for="inputDefault">Point Gaji</label>
            <div class="col-md-12">
              <input class="form-control" name="point_gaji" type="number" value="{{$b->point_gaji}}">
            </div>
          </div>
          </div>
          <div class="row offset-3">
          <div class="form-group">
            <label class="col-md-12 text-primary" for="inputDefault">Point Organsasi</label>
            <div class="col-md-12">
              <input class="form-control" name="point_organisasi" type="number" value="{{$b->point_organisasi}}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-12 text-primary" for="inputDefault">Point Sertifikat</label>
            <div class="col-md-12">
              <input class="form-control" name="point_sertifikat" type="number" value="{{$b->point_sertifikat}}">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-12 text-primary" for="inputDefault">Minimal Point</label>
            <div class="col-md-12">
              <input class="form-control" name="minimal_point" type="number" value="{{$b->minimal_point}}">
            </div>
          </div>
          </div>
          </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-link" data-dismiss="modal">tutup</button>
                          <button type="submit" class="button button-blog">Simpan Perubahan</button>
                        </div>
                      </form>
        <!-- TUTUPMDAL  -->
                      </div>
                    </div>
                  </div>
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