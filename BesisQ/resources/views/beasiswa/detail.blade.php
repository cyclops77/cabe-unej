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
              <img src="{{asset('land-page/images/projects/wal6.jpg')}}" class="img-fluid" alt="Responsive image" width="100%" height="250px" style="object-fit: cover;">
              <br>
              <br>
              <br>
              <div class="col-md-10">
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem amet doloremque hic cum modi culpa tenetur autem libero dolore, delectus cupiditate quod distinctio eos animi aut repellat nam atque. Eaque.</div>
                <div>Quaerat repudiandae, sint nostrum fugit voluptate consequatur laborum nisi. Expedita corrupti magni dolor, quos recusandae architecto labore assumenda commodi quibusdam consequatur, quo minima dolorum blanditiis nihil natus nesciunt. Iste, minus?</div>
                <div>Pariatur sed et ipsam minima facilis alias, cupiditate velit laudantium nostrum vitae laboriosam libero, similique voluptas dicta repudiandae, esse assumenda dolores optio inventore. Quaerat, soluta rem aut perferendis illo nemo!</div>
                <div>Quaerat eveniet sequi, rerum quod nostrum animi sit perspiciatis illo ea ratione consectetur dicta ut facere labore natus magni quidem libero mollitia eligendi quisquam suscipit dolorum consequuntur placeat vero. Quisquam.</div>
                <div>Nobis et corporis, quas veniam excepturi fugiat error blanditiis provident eius eveniet sit facere saepe consequuntur adipisci magni dolorem ratione pariatur sapiente delectus voluptate ducimus vel architecto optio eos. Veritatis.</div>
              </div>
              <div class="col-md-2">
                  <div class="row">
                    {!!$btn!!}
                    {!!$btn1!!}
                  </div>


                <!-- INI MODAL MERAH -->

                  <div id="modalFullColorDanger" class="modal-block modal-full-color modal-block-danger mfp-hide">
                    <section class="panel">
                      <header class="panel-heading">
                        <h2 class="panel-title">Oopss . . . !</h2>
                      </header>
                      <div class="panel-body">
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
                      <footer class="panel-footer">
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
                      <header class="panel-heading">
                        <h2 class="panel-title">Oopss . . . !</h2>
                        <input type="hidden" name="idHiddenBEA" value="{{$bea->id}}">
                        <input type="hidden" name="idHiddenMHS" value="{{Auth::user()->id}}">
                      </header>
                      <div class="panel-body">
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
                      <footer class="panel-footer">
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
                            
                            <!-- BUKTI 1 -->
                          <div class="form-group mt-lg" style="display:  {{ empty($bea->ipk) ? "none" : "block" }}">
                            <label class="col-md-3 control-label">Bukti IPK</label>
                        <div class="col-md-8">
                          <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="input-append">
                              <div class="uneditable-input">
                                <i class="fa fa-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                              </div>
                              <span class="btn btn-default btn-file">
                                <span class="fileupload-exists">Ubah</span>
                                <span class="fileupload-new">Pilih file</span>
                                <input type="file" name="bukti_ipk" />
                              </span>
                              <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Hapus</a>
                            </div>
                          </div>
                        </div>
                          </div>


                          <!-- BUKTI 2 -->
                        <div class="form-group mt-lg" style="display:  {{ empty($bea->gaji) ? "none" : "block" }}">
                            <label class="col-md-3 control-label">Bukti Gaji</label>
                        <div class="col-md-8">
                          <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="input-append">
                              <div class="uneditable-input">
                                <i class="fa fa-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                              </div>
                              <span class="btn btn-default btn-file">
                                <span class="fileupload-exists">Change</span>
                                <span class="fileupload-new">Select file</span>
                                <input type="file" name="bukti_gaji"/>
                              </span>
                              <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                            </div>
                          </div>
                        </div>
                          </div>   
                           <!-- BUKTI 3 -->
                        <div class="form-group mt-lg" style="display:  {{ empty($bea->sertifikat) ? "none" : "block" }}">
                            <label class="col-md-3 control-label">Bukti Sertifikat</label>
                        <div class="col-md-8">
                          <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="input-append">
                              <div class="uneditable-input">
                                <i class="fa fa-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                              </div>
                              <span class="btn btn-default btn-file">
                                <span class="fileupload-exists">Change</span>
                                <span class="fileupload-new">Select file</span>
                                <input type="file" name="bukti_sertifikat"/>
                              </span>
                              <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
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


                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit beatae nostrum eaque! Quibusdam sapiente odit cupiditate molestias. Recusandae, fuga, rerum! Quia dicta, aperiam neque error, expedita eveniet reprehenderit ut nam.
              </div>

            </div>
          </section>


@stop