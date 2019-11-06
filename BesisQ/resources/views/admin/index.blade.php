@extends('include.mahasiswa')

@section('titlenya')
    Halaman awal -- Perusahaan
@stop

@section('nama-page')
    Dashboard Admin
@stop

@section('page-awal')
    <a href="">Menu</a>
@stop

@section('content-page')
  <div class="col-lg-12">
    @if(session('sukses'))
    <div class="alert alert-success" >
      {{session('sukses')}}
    </div>
    @endif
    @if(session('gagal'))
    <div class="alert alert-success" >
      {{session('gagal')}}
    </div>
    @endif



    

    <div class="form-group">
            <table class="table table-stripped text-center">
                <thead class="table-active">
                    <th width="3%" class="text-center">No</th>
                    <th width="20%" class="text-center">Nama Perusahaan</th>
                    <th width="25%" class="text-center">Jenis</th>
                    <th width="25%" class="text-center">Penanggung</th>
                    <th width="10%" class="text-center">Foto</th>
                    <th width="3%" class="text-center">#</th>
                </thead>
                <tbody>
                    
        @foreach($pendaftar as $sia)
            <tr>
            <td class="text-center">
                {{$sia->id}}
            </td>
            <td class="text-center">
                {{$sia->nama_perusahaan}}
            </td>
            <td class="text-center">
                {{$sia->jenis_perusahaan}}
            </td>
            <td class="text-center">
                {{$sia->nama_penanggung}}
            </td>
            <td>
                <button type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#exampleModalLong{{$sia->id}}">
                  lihat
                </button>

<div class="modal fade" id="exampleModalLong{{$sia->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{$sia->nama_perusahaan}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="bukti_image/{{$sia->bukti}}" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            </td>
            <td>
                <form action="{{url('/data-pendaftaran/terima-perusahaan')}}" method="POST">
                {{csrf_field()}}
                    <input type="hidden" name="idnya" value="{{$sia->id}}">
                    <input type="hidden" name="email" value="{{$sia->email_perusahaan}}">
                    <input type="submit" value="Verifikasi" class="btn btn-dark btn-sm">
                </form>

                
            </td> 
            </tr>
        @endforeach
                </tbody>
            </table>    
        </div>
      </div>
      
</div>
@stop




