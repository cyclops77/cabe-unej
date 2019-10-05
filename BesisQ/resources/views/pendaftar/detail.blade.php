@extends('include.mahasiswa')

@section('content-page')

<section role="main" class="content-body">
						<div class="row">
							<div class="col-md-12">
								<section class="panel">
									<header class="panel-heading">
										<h2 class="panel-title">Actions</h2>
									</header>
									<div class="panel-body">
										<div class="table-responsive">
											<table class="table mb-none">
												<thead>
														<th>#</th>
														<th>ID</th>
														<th>Nama Lengkap</th>
														<th>Point</th>
														<th>Actions</th>
												</thead>
												<tbody>
@foreach($pendaftar as $p)
													<tr>
														<td><input type="checkbox"></td>
														<td>{{$p->id}}</td>
														<td>{{$p->nama_lengkap}}</td>
														<td>{{$p->point}}</td>
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

@stop