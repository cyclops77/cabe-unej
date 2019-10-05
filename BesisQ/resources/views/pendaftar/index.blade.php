@extends('include.perusahaan')

@section('content-page')

<div class="tab-content">
							<div id="everything" class="tab-pane active">
								<p class="total-results text-muted">Showing 1 to 9 of 47 results</p>

								<ul class="list-unstyled search-results-list">
@foreach($beasiswaPerusahaan as $b)
									<li>
										<p class="result-type">
											<span class="label label-primary">Beasiswa</span>
										</p>
										<a href="/beasiswaku/{{$b->slug_beasiswa}}" class="has-thumb">
											<div class="result-thumb">
												
												<img src="{{asset('land-page/images/!logged-user.jpg')}}" alt="John Doe" />
											</div>
											<div class="result-data">
												<p class="h3 title text-primary">{{$b->nama_beasiswa}}</p>
												<p class="description col-sm-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ante nisl, sagittis nec lacus et, convallis efficitur justo. Curabitur elementum feugiat quam. Etiam ac orci iaculis, luctus nisl et, aliquet metus. Praesent congue tortor venenatis, ornare eros eu, semper orci.</p>
											</div>
										</a>
									</li>
@endforeach
										
								</ul>

								<hr class="solid mb-none" />

								
							</div>
</div>


@stop