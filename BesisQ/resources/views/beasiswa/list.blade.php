@extends('include.mahasiswa')
												

@section('content-page')


<section class="special_cource padding_top">
       
            <div class="justify-content-center" style="margin-top: -10%;position: relative;">
            </div>
            <div class="row">
            	@foreach($beasiswaCuco as $index => $b)
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="land-page/images/projects/wal{{$r+$index}}.jpg" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
                        <div class="special_cource_text">
                            <a href="/beasiswa/{{$b->slug_beasiswa}}" class="btn_4">Lihat Beasiswa</a>
                            <h4>{{date('d M Y', strtotime($b->created_at))}}</h4>
                            <a href="course-details.html"><h3>{{$b->nama_beasiswa}}({{$b->pendaftar_beasiswa->count()}})</h3></a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            
                        </div>

                    </div>
                </div>
                @endforeach
                @foreach($beasiswaFakCuco as $index => $c)
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="land-page/images/projects/wal{{$s+$index}}.jpg" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
                        <div class="special_cource_text">
                            <a href="/beasiswa/{{$c->slug_beasiswa}}" class="btn_4">Lihat Beasiswa</a>
                            <h4>{{date('M d, Y', strtotime($c->created_at))}}</h4>
                            <a href="course-details.html"><h3>{{$c->nama_beasiswa}}</h3></a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            
                        </div>

                    </div>
                </div>
                @endforeach
                @foreach($beasiswaFree as $index => $d)
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="land-page/images/projects/wal{{$t+$index}}.jpg" class="special_img" alt="" style="height: 150px;width: 100%; object-fit: cover;">
                        <div class="special_cource_text">
                            <a href="/beasiswa/{{$d->slug_beasiswa}}" class="btn_4">Lihat Beasiswa</a>
                            <h4>{{date('M d, Y', strtotime($d->created_at))}}</h4>
                            <a href="course-details.html"><h3>{{$d->nama_beasiswa}}</h3></a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@stop