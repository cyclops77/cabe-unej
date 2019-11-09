@extends('include.index')

@section('konten')
 <!--================ Hero sm Banner start =================-->      
<section class="hero-banner hero-banner--sm mb-30px">
  <div class="container">
    <div class="hero-banner--sm__content">
      <h1>{{$bea->nama_beasiswa}}</h1>
      <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Beranda</a></li>
          <li class="breadcrumb-item" aria-current="page"><a href="{{url('/beasiswa')}}">Cari Beasiswa</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{$bea->nama_beasiswa}}</li>
        </ol>
      </nav>
    </div>
  </div>
</section>
  <!--================ Hero sm Banner end =================-->



  <section class="blog_area single-post-area section-margin--medium">
    <div class="container">
      @if(session('sukses'))
<div class="alert alert-success" >
{{session('sukses')}}
</div>
@endif
@if(session('gagal'))
<div class="alert alert-danger" >
{{session('gagal')}}
</div>
@endif
      <div class="row">
          <div class="col-lg-8 posts-list">
              <div class="single-post row">
                  <div class="col-lg-12">
                      <div class="feature-img">
                          <img class="img-fluid" src="{{asset('land-page/images/projects/'.$gbr)}}" style="object-fit: cover;height: 250px;width: 100%;">
                      </div>
                  </div>
                  <div class="col-lg-3  col-md-3">
                      <div class="blog_info text-right">
                          
                          <ul class="blog_meta list">
                              <li>
                                  <a href="#">{{$bea->perusahaan->nama_perusahaan}}
                                      <i class="lnr lnr-user"></i>
                                  </a>
                              </li>
                              <li>
                                  <a href="#">{{date('d M Y', strtotime($bea->created_at))}}
                                      <i class="lnr lnr-calendar-full"></i>
                                  </a>
                              </li>
                              <li>
                                  <a href="#">1.2M Views
                                      <i class="lnr lnr-eye"></i>
                                  </a>
                              </li>
                              <li>
                                  <a href="#">06 Comments
                                      <i class="lnr lnr-bubble"></i>
                                  </a>
                              </li>
                          </ul>
                          <ul class="social-links">
                              <li>
                                  <a href="#">
                                      <i class="fab fa-facebook-f"></i>
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                    <i class="fab fa-twitter"></i>                                        
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                    <i class="fab fa-github"></i>                                       
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
                                    <i class="fab fa-behance"></i>                                        
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-9 col-md-9 blog_details">
                      <h2>{{$bea->nama_beasiswa}}</h2>
                      <p class="excert">
                          MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money
                          on boot camp when you can get the MCSE study materials yourself at a fraction.
                      </p>
                      <p>
                          Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot
                          camp when you can get the MCSE study materials yourself at a fraction of the camp price.
                          However, who has the willpower to actually sit through a self-imposed MCSE training. who
                          has the willpower to actually sit through a self-imposed
                      </p>
                      <p>
                          Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot
                          camp when you can get the MCSE study materials yourself at a fraction of the camp price.
                          However, who has the willpower to actually sit through a self-imposed MCSE training. who
                          has the willpower to actually sit through a self-imposed
                      </p>
                  </div>
                  <div class="col-lg-12">
                      <div class="quotes">
                          MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money
                          on boot camp when you can get the MCSE study materials yourself at a fraction of the camp
                          price. However, who has the willpower to actually sit through a self-imposed MCSE training.
                      </div>
                      <div class="row">
                          <div class="col-6">
                              <img class="img-fluid" src="img/blog/post-img1.jpg" alt="">
                          </div>
                          <div class="col-6">
                              <img class="img-fluid" src="img/blog/post-img2.jpg" alt="">
                          </div>
                          
                      </div>
                  </div>
              </div>
             
              
              
          </div>
          <div class="col-lg-4">
              <div class="blog_right_sidebar">
                  <!-- <button class="button button-postComment">Post Comment</button> -->
                 <!-- Button trigger modal -->
      {!!$btn!!}
      {!!$btn1!!}
  

                  
                  <aside class="single_sidebar_widget ads_widget">
                      <a href="#">
                          <img class="img-fluid" src="img/blog/add.jpg" alt="">
                      </a>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, laudantium nemo expedita perferendis voluptatem dolores aliquid sequi officia nobis est, autem sed reprehenderit ab culpa dolor, sint omnis tempora mollitia!</p>
                      <div class="br"></div>
                  </aside>
                  <aside class="single_sidebar_widget post_category_widget">
                      <h4 class="widget_title">Total Point</h4>
                      <ul class="list cat-list">
                          <li>
                              <a href="#" class="d-flex justify-content-between">
                                  <p>IPK</p>
                                  <p>{{$bea->point_ipk}}</p>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="d-flex justify-content-between">
                                  <p>Gaji Orang Tua</p>
                                  <p>{{$bea->point_gaji}}</p>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="d-flex justify-content-between">
                                  <p>Keaktifan Organisasi</p>
                                  <p>{{$bea->point_organisasi}}</p>
                              </a>
                          </li>
                          <li>
                              <a href="#" class="d-flex justify-content-between">
                                  <p>Sertifikat Prestasi</p>
                                  <p>{{$bea->point_sertifikat}}</p>
                              </a>
                          </li>
                      </ul>
                      <div class="br"></div>
                  </aside>
                 
              </div>
          </div>
      </div>
    </div>
  </section>








<!-- Modal 1-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header button-postComment" >
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Peringatan</h4>
              <p style="color: black">Dear <strong>{{Auth::user()->name}},</strong> Anda telah mendaftarkan diri anda ke <strong><a href="/beasiswa/{{$SDBL == null? "" : $SDBL->slug_beasiswa}}" >{{$SDBL == null? "" : $SDBL->nama_beasiswa}}</a></strong></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="button button-postComment" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- MODAL 2 -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header button-postComment">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <form action="{{url('/batalkan-beasiswa')}}" method="POST">
        {{ csrf_field()}}
      </div>
      <div class="modal-body">
       <input type="hidden" name="idHiddenBEA" value="{{$bea->id}}">
        <input type="hidden" name="idHiddenMHS" value="{{Auth::user()->id}}">
        <h4>Peringatan</h4>
        <p>Dear <strong>{{Auth::user()->name}},</strong> Apakah anda ingin membatalkan pendaftaran beasiswa <strong><a href="/beasiswa/{{$SDBL == null? "" : $SDBL->slug_beasiswa}}" style="
        color: ">{{$SDBL == null? "" : $SDBL->nama_beasiswa}}</a></strong> ? </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
        <button type="submit" class="button button-postComment">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>

 
    

<!-- MODAL 3 -->
<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header button-postComment">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <form action="{{url('/upload-bukti')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field()}}
      </div>
      <div class="modal-body">
        <input type="hidden" name="idbeasiswa" value="{{$bea->id}}">
        <input type="hidden" name="totalPoint" value="{{$totalPoint}}">
        <input type="hidden" name="output" value="{{$output}}">
      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="bukti_ipk">
      <label class="custom-file-label" for="customFile">Choose file</label>
      </div>
      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="bukti_gaji">
      <label class="custom-file-label" for="customFile">Choose file</label>
      </div>
      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="bukti_sertifikat">
      <label class="custom-file-label" for="customFile">Choose file</label>
      </div>
      <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="bukti_organisasi">
      <label class="custom-file-label" for="customFile">Choose file</label>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
        <button type="submit" class="button button-postComment">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>

  
    
@stop