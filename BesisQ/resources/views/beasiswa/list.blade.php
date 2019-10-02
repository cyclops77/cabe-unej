@extends('include.mahasiswa')
												

@section('content-page')

<section class="content-with-menu content-with-menu-has-toolbar media-gallery">
	<div class="row mg-files" data-sort-destination data-sort-id="media-gallery">
									@foreach($beasiswaCuco as $b)
									<div class="isotope-item document col-sm-6 col-md-4 col-lg-3">
										<div class="thumbnail">
											<div class="thumb-preview">
												<a class="thumb-image">
													<img src="{{asset('land-page/images/projects/project-1.jpg')}}" class="img-responsive" alt="Project">
												</a>

											</div>
											<a href="/beasiswa/{{$b->slug_beasiswa}}" class="btn btn-primary col-lg-12">Detail</a>
											<h5 class="mg-title text-semibold">{{$b->nama_beasiswa}}</h5>
											<div class="mg-description">
												<small class="pull-left text-muted">Design, Websites</small>
												<small class="pull-right text-muted">07/10/2014</small>
											</div>
										</div>
									</div>
									@endforeach
									@foreach($beasiswaFakCuco as $b)
									<div class="isotope-item document col-sm-6 col-md-4 col-lg-3">
										<div class="thumbnail">
											<div class="thumb-preview">
												<a class="thumb-image">
													<img src="{{asset('land-page/images/projects/project-1.jpg')}}" class="img-responsive" alt="Project">
												</a>

											</div>
											<a href="/beasiswa/{{$b->slug_beasiswa}}" class="btn btn-primary col-lg-12">Detail</a>
											<h5 class="mg-title text-semibold">{{$b->nama_beasiswa}}</h5>
											<div class="mg-description">
												<small class="pull-left text-muted">Design, Websites</small>
												<small class="pull-right text-muted">07/10/2014</small>
											</div>
										</div>
									</div>
									@endforeach
									@foreach($beasiswaFree as $c)
									<div class="isotope-item document col-sm-6 col-md-4 col-lg-3">
										<div class="thumbnail">
											<div class="thumb-preview">
												<a class="thumb-image">
													<img src="{{asset('land-page/images/projects/project-1.jpg')}}" class="img-responsive" alt="Project">
												</a>

											</div>
											<a href="/beasiswa/{{$c->slug_beasiswa}}" class="btn btn-primary col-lg-12">Detail</a>
											<h5 class="mg-title text-semibold">{{$c->nama_beasiswa}}</h5>
											<div class="mg-description">
												<small class="pull-left text-muted">Design, Websites</small>
												<small class="pull-right text-muted">07/10/2014</small>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							
					</section>

@stop