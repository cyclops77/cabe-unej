@extends('include.mahasiswa')

@section('content-page')

<section role="main" class="content-body">
<div class="row">
<div class="col-md-12">
<section class="panel">
<header class="panel-heading">
<h2 class="panel-title">Pendaftar Beasiswa</h2>
</header>
<div class="panel-body">
<div class="table-responsive">
	<table class="table mb-none">
		<thead>
				<th>
					
				<a onclick="selectAll()">#</a>

				</th>
				<th>ID</th>
				<th>Nama Lengkap</th>
				<th>Point</th>
				<th>Output</th>
				<th>Waktu Daftar</th>
				<th>Bukti</th>
				<th>Actions</th>
		</thead>
		<tbody>
@foreach($pendaftar as $p)
	<tr>
		<td><div class="checkbox-custom checkbox-primary">
				<input type="checkbox" id="ckbx" name="idpendaftar" id="checkboxExample2">
				<label for="checkboxExample2"></label>
			</div></td>
		<td>{{$p->id}}</td>
		<td>{{$p->nama_lengkap}}</td>
		<td>{{$p->point}}</td>
		<td>{{$p->output}}</td>
		<td>{{date('d M Y', strtotime($p->created_at))}}</td>
		<td><a class="modal-basic btn btn-info btn-sm" href="#z{{$p->id}}">lihat</a>

<div id="z{{$p->id}}" class="modal-block modal-full-color modal-block-primary mfp-hide">
<section class="panel">
<header class="panel-heading">
<h2 class="panel-title">Detail Bukti Pendaftar</h2>
</header>
<div class="panel-body">
<div class="modal-wrapper">
	
	<div class="modal-text">
		<img src="/bukti/{{$p->bukti_ipk}}" height="450px" style="display:  {{ empty($p->bukti_ipk) ? "none" : "block" }}">
		<img src="/bukti/{{$p->bukti_gaji}}" height="450px" style="display:  {{ empty($p->bukti_gaji) ? "none" : "block" }}">
		<img src="/bukti/{{$p->bukti_sertifikat}}" height="450px" style="display:  {{ empty($p->bukti_sertifikat) ? "none" : "block" }}">
		<img src="/bukti/{{$p->bukti_organisasi}}" height="450px" style="display:  {{ empty($p->bukti_organisasi) ? "none" : "block" }}">
	</div>
</div>
</div>
<footer class="panel-footer">
<div class="row">
	<div class="col-md-12 text-right">
		<button class="btn btn-primary modal-confirm">Back</button>
	</div>
</div>
</footer>
</section>
</div></td>
		<td class="actions">
			<a href=""><i class="fa fa-pencil"></i></a>
			<a href="" class="delete-row"><i class="fa fa-trash-o"></i></a>
		</td>
	</tr>
@endforeach
													
												</tbody>
											</table>
										</div>
									</div>
								</section>
							</div>
						
						</div>
						
					<!-- end: page -->
				</section>
<script type="text/javascript">
			function selectAll(){
				var items=document.getElementsByName('idpendaftar');
				for(var i=0; i<items.length; i++){
					if(items[i].type=='checkbox')
						items[i].checked=true;
				}
			}
			
			function UnSelectAll(){
				var items=document.getElementById('ckbx');
				for(var i=0; i<items.length; i++){
					if(items[i].type=='checkbox')
						items[i].checked=false;
				}
			}			
		</script>
@stop