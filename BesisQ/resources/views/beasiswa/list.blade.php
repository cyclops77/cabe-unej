@extends('include.mahasiswa')
												

@section('content-page')


<section class="special_cource padding_top">
       
            <div class="justify-content-center" style="margin-top: -10%;position: relative;">
               <!--  <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>popular courses</p>
                        <h2>Special Courses</h2>
                    </div>
                </div> -->
            </div>
            <div class="row">
            	@foreach($beasiswaCuco as $b)
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{asset('land-page/images/projects/wal2.jpg')}}" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
                        <div class="special_cource_text">
                            <a href="/beasiswa/{{$b->slug_beasiswa}}" class="btn_4">Lihat Beasiswa</a>
                            <h4>{{date('M d, Y', strtotime($b->created_at))}}</h4>
                            <a href="course-details.html"><h3>{{$b->nama_beasiswa}}</h3></a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <!-- <img src="img/author/author_1.png" alt=""> -->
                                    <div class="author_info_text">
                                        <p>Oleh : </p>
                                        <h5><a href="">{{$b->nama_perusahaan}}</a></h5>
                                    </div>
                                </div>
                              
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
                @foreach($beasiswaFakCuco as $c)
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{asset('land-page/images/projects/wal2.jpg')}}" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
                        <div class="special_cource_text">
                            <a href="/beasiswa/{{$c->slug_beasiswa}}" class="btn_4">Lihat Beasiswa</a>
                            <h4>{{date('M d, Y', strtotime($c->created_at))}}</h4>
                            <a href="course-details.html"><h3>{{$c->nama_beasiswa}}</h3></a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_1.png" alt="">
                                    <div class="author_info_text">
                                         <p>Oleh : </p>
                                        <h5><a href="">{{$c->nama_perusahaan}}</a></h5>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
                @foreach($beasiswaFree as $d)
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{asset('land-page/images/projects/wal2.jpg')}}" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
                        <div class="special_cource_text">
                            <a href="/beasiswa/{{$d->slug_beasiswa}}" class="btn_4">Lihat Beasiswa</a>
                            <h4>{{date('M d, Y', strtotime($d->created_at))}}</h4>
                            <a href="course-details.html"><h3>{{$d->nama_beasiswa}}</h3></a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_1.png" alt="">
                                    <div class="author_info_text">
                                         <p>Oleh : </p>
                                        <h5><a href="">{{$d->nama_perusahaan}}</a></h5>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
<!-- 
<section class="content-with-menu content-with-menu-has-toolbar media-gallery">
	<div class="row mg-files" data-sort-destination data-sort-id="media-gallery">
									@foreach($beasiswaCuco as $b)
		<div class="isotope-item document col-sm-6 col-md-4 col-lg-4">
			<div class="thumbnail">
				<div class="thumb-preview">
				<a class="thumb-image">
					<img src="{{asset('land-page/images/projects/wal1.jpg')}}" class="img-responsive" alt="Project" style="height: 155px;object-fit: cover;">
				</a>

				</div>
											<a href="/beasiswa/{{$b->slug_beasiswa}}" class="btn_4">Detail</a>
											<h5 class="mg-title text-semibold">{{$b->nama_beasiswa}}</h5>
											<div class="mg-description">
												<small class="pull-left text-muted">Design, Websites</small>
												<small class="pull-right text-muted">07/10/2014</small>
											</div>
										</div>
									</div>
									@endforeach
									@foreach($beasiswaFakCuco as $b)
									<div class="isotope-item document col-sm-6 col-md-4 col-lg-4">
										<div class="thumbnail">
											<div class="thumb-preview">
												<a class="thumb-image">
													<img src="{{asset('land-page/images/projects/wal1.jpg')}}" class="img-responsive" alt="Project" style="height: 155px;object-fit: cover;">
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
									<div class="isotope-item document col-sm-6 col-md-4 col-lg-4">
										<div class="thumbnail">
											<div class="thumb-preview">
												<a class="thumb-image">
													<img src="{{asset('land-page/images/projects/wal1.jpg')}}" class="img-responsive" alt="Project" style="height: 155px;object-fit: cover;">
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
 -->
@stop