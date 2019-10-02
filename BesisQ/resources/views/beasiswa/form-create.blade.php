@extends('include.perusahaan')

@section('content-page')
<div class="row">
              <div class="col-xs-10 col-md-offset-1">
                <section class="panel">
                  <header class="panel-heading">
                    <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#exampleModal">
      Tambah Persyaratan
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Input Name</th>
      <th scope="col">Type</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Jumlah Sertif</td>
      <td>Angka</td>
      <td>
        <button class="btn-sm btn btn-primary" onclick="FunctionSERTIF()"><i class="fa fa-plus"></i> Tambahkan Jumlah Sertif</button>
      </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Gaji Orang Tua</td>
      <td>Angka</td>
      <td>
        <button class="btn-sm btn btn-primary" onclick="FunctionGAJI()"><i class="fa fa-plus"></i> Tambahkan Input Gaji</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Umur</td>
      <td>Angka</td>
      <td>
        <button class="btn-sm btn btn-primary" onclick="FunctionUMUR()"><i class="fa fa-plus"></i> Tambahkan Input Umur</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>IPK</td>
      <td>Angka</td>
      <td>
        <button class="btn-sm btn btn-primary" onclick="FunctionIPK()"><i class="fa fa-plus"></i> Tambahkan IPK</button>
      </td>
    </tr>
    <tr>
  </tbody>
</table>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                    <h2 class="panel-title">Form Elements</h2>
                  </header>
                  <div class="panel-body">
                    
                      <form method="POST" action="{{url('/send/buat-beasiswa')}}" class="form-horizontal" novalidate="novalidate" id="myform">
          {{csrf_field()}}
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Nama Beasiswa</label>
                        <div class="col-md-5">
                          <input type="text" class="form-control" id="inputDefault" name="nama_beasiswa">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Template Bukti</label>
                        <div class="col-md-6">
                          <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="input-append">
                              <div class="uneditable-input">
                                <i class="fa fa-file fileupload-exists"></i>
                                <span class="fileupload-preview"></span>
                              </div>
                              <span class="btn btn-default btn-file">
                                <span class="fileupload-exists">Change</span>
                                <span class="fileupload-new">Select file</span>
                                <input type="file" name="file_template" />
                              </span>
                              <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                            </div>
                          </div>
                        </div>
                      </div>
                          <div class="form-group">
                        <label class="col-md-3 control-label">Fakultas</label>
                        <div class="col-md-4">
                          <select class="form-control mb-md" id="fakultas" name="fakultas">
                            <option selected disabled>Pilih Fakultas Anda</option>
                             @foreach($fak as $f)
                            <option value="{{$f->id}}">{{$f->nama}}</option>
                             @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Prodi</label>
                        <div class="col-md-4">
                          <select class="form-control mb-md" name="prodi" id="prodi">
                            <option value="0" selected="true" disabled="true">Pilih Prodi Anda</option>
                          </select>
                        </div>
                      </div>
                        
                      <div class="form-group" id="inputanFormIPK" style="display: none;">
                        <div class="row">
                        <label class="col-md-3 control-label">I P K </label>
                        <div class="col-md-2">
                          <input type="number" class="form-control" name="ipk" id="inputIPK" maxlength="4" step="0.01" max="4">
                        </div>
                       <a class="btn-sm btn btn-danger text-white"  onclick="FunctionIPK()">X</a>
                        <label class="col-md-1 control-label">Point IPK </label>
                        <div class="col-md-1">
                          <input type="number" class="form-control" name="point_ipk" id="pointIPK" maxlength="4" step="0.01" max="4">
                        </div>
                      </div>  
                     </div>

                     <div class="form-group" id="inputanFormGAJI" style="display: none;">
                        <div class="row">
                        <label class="col-md-3 control-label">G a j i  O r t u </label>
                        <div class="col-md-2">
                          <input type="number" class="form-control" id="inputGAJI" name="gaji" maxlength="4" step="0.01" max="4">
                        </div>
                       <a class="btn-sm btn btn-danger text-white"  onclick="FunctionGAJI()">X</a>
                        <label class="col-md-1 control-label">Point Gaji </label>
                        <div class="col-md-1">
                          <input type="number" class="form-control" id="pointGAJI" name="point_gaji" maxlength="4" step="0.01" max="4">
                        </div>
                      </div>  
                     </div>

                     <div class="form-group" id="inputanFormUMUR" style="display: none;">
                        <div class="row">
                        <label class="col-md-3 control-label">U m u r </label>
                        <div class="col-md-2">
                          <input type="number" class="form-control" id="inputUMUR" name="usia" maxlength="4" step="0.01" max="4">
                        </div>
                       <a class="btn-sm btn btn-danger text-white"  onclick="FunctionUMUR()">X</a>
                        <label class="col-md-1 control-label">Point Umur </label>
                        <div class="col-md-1">
                          <input type="number" class="form-control" id="pointUMUR" name="point_usia" maxlength="4" step="0.01" max="4">
                        </div>
                      </div>  
                     </div>
            
                  <div class="form-group" id="inputanFormSERTIF" style="display: none;">
                        <div class="row">
                        <label class="col-md-3 control-label">J u m l a h  S e r t i f </label>
                        <div class="col-md-2">
                          <input type="number" class="form-control" name="sertifikat" id="inputSERTIF" maxlength="4" step="0.01" max="4">
                        </div>
                       <a class="btn-sm btn btn-danger text-white"  onclick="FunctionSERTIF()">X</a>
                        <label class="col-md-1 control-label">Point Sertif </label>
                        <div class="col-md-1">
                          <input type="number" class="form-control" name="point_sertifikat" id="pointSERTIF" maxlength="4" step="0.01" max="4">
                        </div>
                      </div>  
                     </div>

                  <button class="btn-sm btn btn-primary"><i class="fa fa-plus"></i> Buat Beasiswa</button>


                    </form>
                  </div>
                </section>
            
               
            
              </div>
            </div>
            
@endsection

