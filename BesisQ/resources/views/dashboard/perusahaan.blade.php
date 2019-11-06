@extends('include.mahasiswa')

@section('titlenya')
	Halaman awal -- Perusahaan
@stop

@section('nama-page')
	Dashboard
@stop

@section('page-awal')
	<a href="">Menu</a>
@stop

@section('content-page')

<div class="row">
<a href="{{$perusahaan->status=="Belum Terverifikasi" ? "/danger" : "/buat-beasiswa"}}">
	<div class="col-md-4 col-md-offset-2" >
		<section class="panel">
			<header class="panel-heading" style="background-color: #42a5f5;">
				<div class="panel-heading-icon">
					<i class="fa fa-graduation-cap"></i>
				</div>
			</header>
			<div class="panel-body text-center">
				<h3 class="text-semibold mt-sm text-center">Buat Beasiswa</h3>
				<p class="text-center">Nullam quiris risus eget urna mollis ornare vel eu leo. Soccis natoque penatibus et magnis dis parturient montes. Soccis natoque penatibus et magnis dis parturient montes.</p>
			</div>
		</section>
	</div>
	</a>
<a href=" {{$perusahaan->status=="Belum Terverifikasi" ? "/danger" : "/beasiswaku"}}">
	<div class="col-md-4">
		<section class="panel">
			<header class="panel-heading" style="background-color: #5c6bc0">
				<div class="panel-heading-icon">
					<i class="fa fa-cubes"></i>
				</div>
			</header>
			<div class="panel-body text-center" style="color: #5c6bc0">
				<h3 class="text-semibold mt-sm text-center">Lihat Pendaftar Beasiswa</h3>
				<p class="text-center">Nullam quiris risus eget urna mollis ornare vel eu leo. Soccis natoque penatibus et magnis dis parturient montes. Soccis natoque penatibus et magnis dis parturient montes.</p>
			</div>
		</section>
	</div>
	</a>
</div>


<!-- <a href="/buat-beasiswa" class="">
	<div class="col-md-4 col-md-offset-4" >
		<section class="panel">
			<header class="panel-heading" style="background-color: #7e57c2">
				<div class="panel-heading-icon">
					<i class="fa fa-trophy"></i>
				</div>
			</header>
			<div class="panel-body text-center">
				<h3 class="text-semibold mt-sm text-center" style="color: #7e57c2">Ranking Pendaftar Beasiswa</h3>
				<p class="text-center">Nullam quiris risus eget urna mollis ornare vel eu leo. Soccis natoque penatibus et magnis dis parturient montes. Soccis natoque penatibus et magnis dis parturient montes.</p>
			</div>
		</section>
	</div>
	</a> -->
@stop