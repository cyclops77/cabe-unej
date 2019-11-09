@extends('include.mahasiswa')

@section('content-page')

@section('title_web')
{{$bea->nama_beasiswa}}
@endsection

@section('nama_beasiswanya')
{{$bea->nama_beasiswa}}
@endsection

@section('nama_beasiswa-breadcrumbs')
<a href="{{$bea->slug_beasiswa}}">
{{$bea->nama_beasiswa}}
</a>
@endsection



@if(session('sukses'))
<div class="alert alert-success" >
{{session('sukses')}}
</div>
@endif
@if(session('gagal'))
<div class="alert alert-primary" >
{{session('gagal')}}
</div>
@endif
<section class="panel">
<div class="panel-body">
<img src="{{asset('land-page/images/projects/'.$gbr)}}" class="img-fluid" alt="Responsive image" width="100%" height="250px" style="object-fit: cover;">
<br>
<br>
<br>
<div class="row">
<div class="col-md-10">
  <div>
    @foreach($bea->beasiswa_atribut as $ba)
     {!!$ba->middle_text!!}
    @endforeach
  </div>
</div>
<div class="col-md-2">
    <div class="row">
      {!!$btn!!}
      {!!$btn1!!}
      @foreach($bea->beasiswa_atribut as $ba)
 {!!$ba->right_text!!}
@endforeach
    </div>


  <!-- INI MODAL MERAH -->

    <div id="modalFullColorDanger" class="modal-block modal-full-color modal-block-danger mfp-hide">
      <section class="panel">
        <header class="panel-heading" style="background-color: #18222b;">
          <h2 class="panel-title">Oopss . . . !</h2>
        </header>
        <div class="panel-body"  style="background-color: #34495e;">
          <div class="modal-wrapper">
            <div class="modal-icon">
              <i class="fa fa-times-circle"></i>
            </div>
            <div class="modal-text">
              <h4>Peringatan</h4>
              <p style="color: white">Dear <strong>{{Auth::user()->name}},</strong> Anda telah mendaftarkan diri anda ke <strong><a href="/beasiswa/{{$SDBL == null? "" : $SDBL->slug_beasiswa}}" style="
              color: white">{{$SDBL == null? "" : $SDBL->nama_beasiswa}}</a></strong></p>
            </div>
          </div>
        </div>
        <footer class="panel-footer" style="background-color: #34495e;">
          <div class="row">
            <div class="col-md-12 text-right">
              <button class="btn btn-default modal-dismiss">Cancel</button>
            </div>
          </div>
        </footer>
      </section>
    </div>

  <div id="modalFullColorDanger2" class="modal-block modal-full-color modal-block-danger mfp-hide">
    <form action="{{url('/batalkan-beasiswa')}}" method="POST">
      {{ csrf_field()}}
      <section class="panel">
        <header class="panel-heading" style="background-color: #18222b;">
          <h2 class="panel-title">Oopss . . . !</h2>
          <input type="hidden" name="idHiddenBEA" value="{{$bea->id}}">
          <input type="hidden" name="idHiddenMHS" value="{{Auth::user()->id}}">
        </header>
        <div class="panel-body"  style="background-color: #34495e;">
          <div class="modal-wrapper">
            <div class="modal-icon">
              <i class="fa fa-times-circle"></i>
            </div>
            <div class="modal-text">
              <h4>Peringatan</h4>
              <p style="color: white;">Dear <strong>{{Auth::user()->name}},</strong> Apakah anda ingin membatalkan pendaftaran beasiswa <strong><a href="/beasiswa/{{$SDBL == null? "" : $SDBL->slug_beasiswa}}" style="
              color: white">{{$SDBL == null? "" : $SDBL->nama_beasiswa}}</a></strong> ? </p>
            </div>
          </div>
        </div>
        <footer class="panel-footer"  style="background-color: #34495e;">
          <div class="row">
            <div class="col-md-12 text-right">
              <button class="btn btn-default modal-dismiss">Kembali</button>
              <button class="btn btn-default" type="submit">Batalkan Pengajuan</button>
            </div>
          </div>
        </footer>
      </section>
      </form>
    </div>



    <!-- Modal Animation -->
    <div id="modalAnim" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
      <section class="panel">
        <header class="panel-heading">
          <h2 class="panel-title">Ajukan Beasiswa <strong>{{$bea->nama_beasiswa}}</strong></h2>
        </header>
<form action="{{url('/upload-bukti')}}" method="POST" enctype="multipart/form-data">
{{ csrf_field()}}
        <div class="panel-body">
          <div class="modal-wrapper">
            <div class="modal-text">
              <input type="hidden" name="idbeasiswa" value="{{$bea->id}}">
              <input type="hidden" name="totalPoint" value="{{$totalPoint}}">
              <input type="hidden" name="output" value="{{$output}}">
              
              <!-- BUKTI 1 -->
            <div class="form-group mt-lg">
              <label class="col-md-3 control-label">Bukti IPK</label>
          <div class="col-md-9">
            <div class="fileupload fileupload-new" data-provides="fileupload">
              <div class="input-append">
                <div class="uneditable-input">
                  <i class="fa fa-file fileupload-exists"></i>
                  <span class="fileupload-preview"></span>
                </div>
                <span class="btn btn-default btn-file">
                  <span class="fileupload-exists">Ubah</span>
                  <span class="fileupload-new">Pilih file</span>
                  <input type="file" name="bukti_ipk" required />
                </span>
                <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Hapus</a>
              </div>
            </div>
          </div>
            </div>


            <!-- BUKTI 2 -->
          <div class="form-group mt-lg">
              <label class="col-md-3 control-label">Bukti Gaji</label>
          <div class="col-md-9">
            <div class="fileupload fileupload-new" data-provides="fileupload">
              <div class="input-append">
                <div class="uneditable-input">
                  <i class="fa fa-file fileupload-exists"></i>
                  <span class="fileupload-preview"></span>
                </div>
                <span class="btn btn-default btn-file">
                  <span class="fileupload-exists">Ubah</span>
                  <span class="fileupload-new">Pilih file</span>
                  <input type="file" name="bukti_gaji" required />
                </span>
                <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
              </div>
            </div>
          </div>
            </div>   
             <!-- BUKTI 3 -->
          <div class="form-group mt-lg">
              <label class="col-md-3 control-label">Bukti Sertifikat</label>
          <div class="col-md-9">
            <div class="fileupload fileupload-new" data-provides="fileupload">
              <div class="input-append">
                <div class="uneditable-input">
                  <i class="fa fa-file fileupload-exists"></i>
                  <span class="fileupload-preview"></span>
                </div>
                <span class="btn btn-default btn-file">
                  <span class="fileupload-exists">Ubah</span>
                  <span class="fileupload-new">Pilih file</span>
                  <input type="file" name="bukti_sertifikat" required />
                </span>
                <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
              </div>
            </div>
          </div>
            </div>   

          
              <!-- BUKTI 4 -->
            <div class="form-group mt-lg">
              <label class="col-md-3 control-label">Bukti Organisasi</label>
          <div class="col-md-9">
            <div class="fileupload fileupload-new" data-provides="fileupload">
              <div class="input-append">
                <div class="uneditable-input">
                  <i class="fa fa-file fileupload-exists"></i>
                  <span class="fileupload-preview"></span>
                </div>
                <span class="btn btn-default btn-file">
                  <span class="fileupload-exists">Ubah</span>
                  <span class="fileupload-new">Pilih file</span>
                  <input type="file" name="bukti_organisasi" required />
                </span>
                <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Hapus</a>
              </div>
            </div>
          </div>
            </div>


            </div>
          </div>
        </div>
        <footer class="panel-footer">
          <div class="row">
            <div class="col-md-12 text-right">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button class="btn btn-default modal-dismiss">Cancel</button>
            </div>
          </div>
        </footer>
            </form>
      </section>
    </div>

  </div>

</div>
</div>

</div>
</section>


@stop