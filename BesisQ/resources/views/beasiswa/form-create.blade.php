@extends('include.index')
                        

@section('konten')


  <!--================ Hero sm Banner start =================-->      
  <section class="hero-banner hero-banner--sm mb-30px">
    <div class="container">
      <div class="hero-banner--sm__content">
        <h1>Buat Beasiswa </h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
            <li class="breadcrumb-item active">Buat Beasiswa</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->

<!-- src="img/blog/cat-post/cat-post-3.jpg" -->

  <!--================Blog Categorie Area =================-->

   <!--================ Hero sm Banner end =================-->

<section class="">
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
      <div class="panel-body">
        <div class="card">
          <form method="POST" action="{{url('/send/buat-beasiswa')}}" class="form-contact contact_form" novalidate="novalidate" id="myform" enctype="multipart/form-data">
{{csrf_field()}}

<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
          <div class="form-group mt-4 offset-3">
            <label class="col-md-6" for="inputDefault">Background</label>
            <div class="col-md-7">
              <input class="form-control-file" name="foto" type="file" required>
            </div>
          </div>
          <div class="form-group mt-4 offset-3">
            <label class="col-md-6" for="inputDefault">Nama Beasiswa</label>
            <div class="col-md-7">
              <input class="form-control" name="nama_beasiswa" id="name" type="text" placeholder="Enter your name">
            </div>
          </div>
          <div class="form-group mt-4 offset-3">
            <label class="col-md-6" for="inputDefault">Batas Beasiswa</label>
            <div class="col-md-7">
              <input class="form-control" name="batas_akhir" type="date">
            </div>
          </div>
          <div class="row offset-3">
          <div class="form-group">
            <label class="col-md-6" for="inputDefault">Point IPK</label>
            <div class="col-md-12">
              <input class="form-control" name="point_ipk" type="number">
            </div>
          </div>
          <div class="form-group ">
            <label class="col-md-6" for="inputDefault">Point Gaji</label>
            <div class="col-md-12">
              <input class="form-control" name="point_gaji" type="number">
            </div>
          </div>
          </div>
          <div class="row offset-3">
          <div class="form-group">
            <label class="col-md-12" for="inputDefault">Point Organsasi</label>
            <div class="col-md-12">
              <input class="form-control" name="point_organisasi" type="number">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-12" for="inputDefault">Point Sertifikat</label>
            <div class="col-md-12">
              <input class="form-control" name="point_sertifikat" type="number">
            </div>
          </div>
          </div>
          <div class="form-group mt-4 offset-3">
            <label class="col-md-6" for="inputDefault">Minimal Point</label>
            <div class="col-md-7">
              <input class="form-control" name="minimal_point" type="number">
            </div>
          </div>
          <div class="form-group offset-3">
            <label class="col-md-6 control-label">Fakultas</label>
            <div class="col-md-7">
              <select class="form-control mb-md" id="fakultas" name="fakultas">
                <option selected disabled>Pilih Fakultas Anda</option>
                 @foreach($fak as $f)
                <option value="{{$f->id}}">{{$f->nama_fak}}</option>
                 @endforeach
              </select>
            </div>
          </div>

          

          <div class="form-group offset-3">
            <label class="col-md-6 control-label">Prodi</label>
            <div class="col-md-7">
              <select class="form-control mb-md" name="prodi" id="prodi">
                <option value="0" selected="true" disabled="true">Pilih Prodi Anda</option>
              </select>
            </div>
          </div>

          <div class="form-group offset-1">
            <label class="col-md-6 control-label" for="inputDefault">Right Text</label>
            <div class="col-md-11">
              <textarea class="ckeditor" id="ckedtor" name="right_text"></textarea>
            </div>
          </div>
          <div class="form-group offset-1">
            <label class="col-md-6 control-label" for="inputDefault">Middle Text</label>
            <div class="col-md-11">
              <textarea class="ckeditor" id="ckedtor" name="middle_text"></textarea>
            </div>
          </div>
            
          

      <button class="btn btn-primary mb-3 ml-3 "><i class="fa fa-plus"></i> Buat Beasiswa</button>


        </form>
      </div>
      </div>
    </div>
    <hr align="center" width="89%">
    <hr align="center" width="91%">    
    <hr align="center" width="93%">
    <hr align="center" width="95%">
  </section>


  <!--================Blog Categorie Area =================-->

@stop