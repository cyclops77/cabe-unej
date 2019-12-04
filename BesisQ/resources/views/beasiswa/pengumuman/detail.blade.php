@extends('include.index')
                        

@section('konten')


  <!--================ Hero sm Banner start =================-->      
  <section class="hero-banner hero-banner--sm mb-30px">
    <div class="container">
      <div class="hero-banner--sm__content">
        <h1>Beasiswa {{$idBea->nama_beasiswa}}</h1>
        <nav aria-label="breadcrumb" class="banner-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{url('/pengumuman-beasiswa')}}">Pengumuman Beasiswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$idBea->nama_beasiswa}}</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->

<!-- src="img/blog/cat-post/cat-post-3.jpg" -->

  <!--================Blog Categorie Area =================-->

   <!--================ Hero sm Banner end =================-->

    <style>
      h5{
        font-family: sans-serif;
      }
    </style>
    <div class="col-md-4">
      @if($idBea->fakultas == "")
      <h5 class="offset-1 mt-3">Fakultas : Bebas </h5>
      @else
      <h5 class="offset-1 mt-3">Fakultas : {{$idBea->fakultas->nama_fak}}</h5>
      @endif
      @if($idBea->prodi == "")
      <h5 class="offset-1 mt-1">Prodi : Bebas </h5>
      @else
      <h5 class="offset-1 mt-1">Prodi : {{$idBea->prodi->nama}}</h5>
      @endif
    </div>

      <a href="{{url('download/pengumuman/beasiswa')}}/{{$idBea->slug_beasiswa}}" class="button button-blog float-right mr-4">
        Download Pengumuman
      </a>


  <div class="">
  <div class="container-table100">
    <div class="wrap-table100">
      <div class="table100 ver1 m-b-110">
        <div class="table100-head">
          <table>
            <thead>
              <tr class="row100 head">
                <th class="cell100 column1">No</th>
                <th class="cell100 column2">Nama Lengkap</th>
                <th class="cell100 column2">NIM</th>
                <th class="cell100 column3">Point</th>
                <th class="cell100 column4">Fakultas</th>
                <th class="cell100 column5">Prodi</th>
              </tr>
            </thead>
          </table>
        </div>

        <div class="table100-body js-pscroll">
          <table>
            <tbody>
              @if($isEmpty=="yes")
              <tr class="row100 body">
                <td class="cell100 column1" colspan="5" style="height: 80px">Belum ada pendaftar</td>
              @else  
              </tr>  
              @foreach($pendaftar->sortBy('nim') as $index => $p)
              <input type="hidden" value="{{$p->beasiswa_id}}" name="idBea">
              <input type="hidden" name="idnya[]" value="{{$p->point <= $p->beasiswa->minimal_point ? $p->user_id : ""}}">
              <tr class="row100 body">
                <td class="cell100 column1" >{{$index+1}}</td>
                <td class="cell100 column2" >{{$p->user->mahasiswa->nama_lengkap}}</td>
                <td class="cell100 column2" >{{$p->user->mahasiswa->nim}}</td>
                <td class="cell100 column3" >{{$p->point}}</td>
                <td class="cell100 column4" >{{$p->user->mahasiswa->fakultas->nama_fak}}</td>
                <td class="cell100 column5" >{{$p->user->mahasiswa->prodi->nama}}</td>
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>
        </div>
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

@stop