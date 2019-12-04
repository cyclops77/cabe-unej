<html>
 <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>.</title>
 </head>

 <body bgcolor="white">
  <img src="logo-unej.png" class="float-left" style="height: 100px;margin-left: 20px;margin-top: 0px;z-index: -9">
  <font face="Arial" color="black"> <p align="center" class="mt-4"> PEMERINTAH KOTA JEMBER, DINAS PENDIDIKAN KABUPATEN JEMBER </p></font>
  <font face="Arial" color=""> <p align="center"> UNIVERSITAS NEGERI JEMBER</p></font>
  <font face="Arial" color=""> <p align="center"> PENGUMUMAN BEASISWA OLEH PERUSAHAAN ABC </p></font>
  <hr>

  <font face="Arial" color="" size="6"> <p align="center"> <u> <b> PENGUMUMAN BEASISWA ZZZ </b></u></font><br>






<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>No</th>
     <th>Nama Lengkap</th>
     <th>NIM</th>
     <th>Point</th>
     <th>Fakultas</th>
     <th>Prodi</th>
    </tr>
  </thead>
  <tbody>
   @foreach($pendaftar->sortBy('nim') as $index => $p)
        <tr>
          <td >{{$index+1}}</td>
          <td >{{$p->user->mahasiswa->nama_lengkap}}</td>
          <td >{{$p->user->mahasiswa->nim}}</td>
          <td >{{$p->point}}</td>
          <td >{{$p->user->mahasiswa->fakultas->nama_fak}}</td>
          <td >{{$p->user->mahasiswa->prodi->nama}}</td>
        </tr>
      @endforeach
  </tbody>
</table>
<div class="container">
   

  <p align="left"><font face="Arial">
   Batas akhir Beasiswa adalah<font color="red"> {{date('d M Y', strtotime($idBea->batas_akhir))}}</font>
  </font></p>

  <p align="right">Perusahaan <strong>{{$idBea->perusahaan->perusahaan}}</strong></p>
  <p align="right">Atas Nama Pemilik </p>
  <p align="right"></p>
  <br>
  <br>
  <p align="right">....................................</p>
  <p align="right"><strong>{{$idBea->perusahaan->nama_penanggung}}</strong></p>
</div>

  
 </body>
</html>