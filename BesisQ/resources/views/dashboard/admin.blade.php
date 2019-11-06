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

<div class="row">


<a href="/pendaftar" class="">
	<div class="col-md-4 col-md-offset-4" >
		<section class="panel">
			<header class="panel-heading" style="background-color: #7e57c2">
				<div class="panel-heading-icon">
					<i class="fa fa-paper-plane"></i>
				</div>
			</header>
			<div class="panel-body text-center">
				<h3 class="text-semibold mt-sm text-center" style="color: #8e57c2">Pendaftar Perusahaan</h3>
				<p class="text-center">Nullam quiris risus eget urna mollis ornare vel eu leo. Soccis natoque penatibus et magnis dis parturient montes. Soccis natoque penatibus et magnis dis parturient montes.</p>
			</div>
		</section>
	</div>
	</a>
@stop