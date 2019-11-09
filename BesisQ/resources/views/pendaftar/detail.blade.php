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
            <li class="breadcrumb-item"><a href="{{url('/beasiswaku')}}">List Beasiswa</a></li>
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
                <th class="cell100 column3">Point</th>
                <th class="cell100 column4">Keterangan</th>
                <th class="cell100 column5">Detail</th>
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
              @foreach($pendaftar as $index => $p)
              <tr class="row100 body">
                <td class="cell100 column1">{{$index+1}}</td>
                <td class="cell100 column2">{{$p->nama_lengkap}}</td>
                <td class="cell100 column3">{{$p->point}}</td>
                <td class="cell100 column4">{{$p->output}}</td>
                <td class="cell100 column5">
                  <button type="button" class="button button-blog" data-toggle="modal" data-target="#bukti{{$p->id}}">
                    lihat
                  </button>


<div class="modal fade" id="bukti{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{$p->nama_lengkap}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="/bukti/{{$p->bukti_ipk}}" style="width: 100%">
    <img src="/bukti/{{$p->bukti_gaji}}" style="width: 100%">
    <img src="/bukti/{{$p->bukti_sertifikat}}" style="width: 100%">
    <img src="/bukti/{{$p->bukti_organisasi}}" style="width: 100%">
      </div>
      <div class="modal-footer">
        <button type="button" class="button button-blog" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                </td>
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