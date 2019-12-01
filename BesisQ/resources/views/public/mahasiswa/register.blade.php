<style type="text/css">
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
}

input[type=number] {
    -moz-appearance:textfield; /* Firefox */
}
                     </style>

<!doctype html>
<html class="fixed">
  <head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
    <title>Pendaftaran</title>

    <!-- Vendor CSS -->
    <!-- {{asset('admin/assets/css/style.css')}} -->
    <link rel="stylesheet" href="{{asset('land-page/vendor/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('land-page/vendor/font-awesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('land-page/vendor/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('land-page/vendor/bootstrap-datepicker/css/datepicker3.css')}}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('land-page/stylesheets/theme.css')}}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('land-page/stylesheets/skins/default.css')}}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('land-page/stylesheets/theme-custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('land-page/vendor/modernizr/modernizr.js')}}"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </head>
  <body style="
   
  background: #2f1c92;
  ">
    
    <!-- start: page -->

<script>
$(document).ready(function(){
    $("#myModal").modal();
  });
</script>
<!-- Modal -->
<!-- Modal -->
<!-- Modal -->
<!-- Modal -->
<!-- Modal -->
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Berhasil</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="swal2-icon swal2-success swal2-animate-success-icon" style="display: flex;">
       <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
       <span class="swal2-success-line-tip"></span>
       <span class="swal2-success-line-long"></span>
       <div class="swal2-success-ring"></div> 
       <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
       <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
      </div>
          <p class="text-center" style="font-size: 20px;">
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



@if(session('gagal'))

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title">Gagal</h6>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="swal2-icon swal2-error swal2-animate-error-icon" style="display: flex;"><span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span></div>
          <p class="text-center" style="font-size: 20px;">
            {{session('gagal')}}
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  @endif


    
<!-- ENDModal -->
<!-- ENDModal -->
<!-- ENDModal -->
<!-- ENDModal -->
<!-- ENDModal -->





    <br>
<div class="row">
              <div class="col-xs-10 col-md-offset-1">
                <section class="panel form-wizard" id="w4">
                  <header class="panel-heading">
                    
                    <h2 class="panel-title">Pendaftaran Mahasiswa</h2>
                  </header>
                  <div class="panel-body">
                    <div class="wizard-progress wizard-progress-lg">
                      <div class="steps-progress">
                        <div class="progress-indicator"></div>
                      </div>
                      <ul class="wizard-steps">
                        <li class="active">
                          <a href="#w4-account" data-toggle="tab"><span>1</span>Personalia</a>
                        </li>
                        <li>
                          <a href="#w4-profile" data-toggle="tab"><span>2</span>Data Pendidikan</a>
                        </li>
                        <li>
                          <a href="#w4-billing" data-toggle="tab"><span>3</span>Privasi</a>
                        </li>
                        <li>
                          <a href="#w4-confirm" data-toggle="tab"><span>4</span>Konfirmasi</a>
                        </li>
                      </ul>
                    </div>
            
                       <form method="POST" action="{{url('/send/registration')}}" class="form-horizontal" novalidate="novalidate" id="myform">
          {{csrf_field()}}
                      <div class="tab-content">
                        <div id="w4-account" class="tab-pane active">
                          <div class="form-group">
                            <label class="col-sm-4 control-label" for="w4-username"> Nama Lengkap</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" name="nama_lengkap" id="w4-username" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-4 control-label" for="w4-username"> NIM</label>
                            <div class="col-sm-4">
                              <input type="number" class="form-control" name="nim" id="w4-username" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-4 control-label" for="w4-username"> Email</label>
                            <div class="col-sm-4">
                              <input type="email" class="form-control" name="email" id="w4-username" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-4 control-label" for="w4-username"> Nomor HP</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control" name="nohp" id="w4-username" required>
                            </div>
                          </div>
                           <div class="form-group">
                            <label class="col-sm-4 control-label" for="w4-username"> Gaji Ortu</label>
                            <div class="col-sm-4">
                              <input type="number" class="form-control" name="gaji_ortu" id="w4-username" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-4 control-label" for="w4-first-name">Semester</label>
                            <div class="col-sm-2">
                              <input type="number" class="form-control" name="semester" id="w4-first-name" required min="1">
                            </div>
                          </div>
                         <!--  <div class="form-group">
                            <label class="col-sm-3 control-label" for="w4-password">Password</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control" name="password" id="w4-password" required minlength="6">
                            </div>
                          </div> -->
                        </div>
                        <div id="w4-profile" class="tab-pane">
                          
                          <div class="form-group">
                            <label class="col-sm-5 control-label" for="w4-last-name">I P K</label>
                            <div class="col-sm-2">
                              <input type="number" class="form-control" name="ipk" id="w4-last-name" required step="0.01" min="0" max="4">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-5 control-label" for="w4-last-name">Jumlah Sertifikat</label>
                            <div class="col-sm-2">
                              <input type="number" class="form-control" name="jumlah_sertifikat" id="w4-last-name" required min="0" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-5 control-label" for="w4-last-name">Organisasi</label>
                            <div class="col-sm-4">
                          <select class="form-control input-sm mb-md" name="organisasi">
                             <option selected disabled>Pilih Organisasi Anda</option>
                             <option value="Ketua dan Wakil Ketua">Ketua dan Wakil Ketua</option>
                             <option value="Pengurus Inti">Pengurus Inti</option>
                             <option value="Pengurus Divisi">Pengurus Divisi</option>
                             <option value="Anggota">Anggota</option>
                          </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-5 control-label" for="w4-last-name">Fakultas</label>
                            <div class="col-sm-4">
                              <select class="form-control input-sm mb-md" id="fakultas" name="fakultas">
                            <option selected disabled>Pilih Fakultas Anda</option>
                             @foreach($fak as $f)
                            <option value="{{$f->id}}">{{$f->nama_fak}}</option>
                             @endforeach
                          </select>
                            </div>
                          </div>
                         <div class="form-group">
                            <label class="col-sm-5 control-label" for="w4-last-name">Prodi</label>
                            <div class="col-sm-4">
                              <select class="form-control input-sm mb-md" name="prodi" id="prodi">
                            <option value="0" selected="true" disabled="true">Pilih Prodi Anda</option>
                             
                          </select>
                            </div>
                          </div>

                        </div>

                        <!-- no 2 -->
                        <div id="w4-billing" class="tab-pane">
                          <div class="form-group">
                            <label class="col-sm-5 control-label" for="w4-first-name">Password</label>
                            <div class="col-sm-2">
                              <input type="password" class="form-control" name="password" id="w4-first-name" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-5 control-label" for="w4-first-name">Ulangin Password</label>
                            <div class="col-sm-2">
                              <input type="password" class="form-control" name="password2" id="w4-first-name" required>
                            </div>
                          </div>
                          
                        </div>

                        <!-- no 4 -->
                        <div id="w4-confirm" class="tab-pane">
                          <div class="form-group">
                            <label class="col-sm-3 control-label" for="w4-email"></label>
                            <div class="col-sm-6">
                              <p>Anda menyatakan bahwa data data yang anda masukkan sudah benar dan sesuai </p>
                              <p>
                                serta setuju untuk kami mengelola data tersebut
                              </p>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                              <div class="checkbox-custom">
                                <input type="checkbox" name="terms" id="w4-terms" required>
                                <label for="w4-terms">Saya setuju</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                  </div>
                  <div class="panel-footer">
                    <ul class="pager">
                      <li class="previous disabled">
                        <a><i class="fa fa-angle-left"></i> Previous</a>
                      </li>
                      <li class="finish hidden pull-right">
                        <a onclick="document.getElementById('myform').submit();">click here</a>    
                      </li>
                    
                      <li class="next">
                        <a>Next <i class="fa fa-angle-right"></i></a>
                      </li>
                    </ul>
                  </div>
                </section>
                
              </form>
              </div>
            </div>

   
    
    <!-- end: page -->

    <!-- Vendor -->
    <script src="{{asset('land-page/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('land-page/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
    <script src="{{asset('land-page/vendor/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('land-page/vendor/nanoscroller/nanoscroller.js')}}"></script>
    <script src="{{asset('land-page/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('land-page/vendor/magnific-popup/magnific-popup.js')}}"></script>
    <script src="{{asset('land-page/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
    
    <!-- Specific Page Vendor -->
    <script src="{{asset('land-page/vendor/jquery-validation/jquery.validate.js')}}"></script>
    <script src="{{asset('land-page/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
    <script src="{{asset('land-page/vendor/pnotify/pnotify.custom.js')}}"></script>
    
    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('land-page/javascripts/theme.js')}}"></script>
    
    <!-- Theme Custom -->
    <script src="{{asset('land-page/javascripts/theme.custom.js')}}"></script>
    <script src="{{asset('land-page/javascripts/ui-elements/examples.modals.js')}}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{asset('land-page/javascripts/theme.init.js')}}"></script>


    <!-- Examples -->
    <script src="{{asset('land-page/javascripts/forms/examples.wizard.js')}}"></script>
    <script src="{{asset('land-page/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('land-page/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
    <script src="{{asset('land-page/vendor/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('land-page/vendor/nanoscroller/nanoscroller.js')}}"></script>
    <script src="{{asset('land-page/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('land-page/vendor/magnific-popup/magnific-popup.js')}}"></script>
    <script src="{{asset('land-page/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
    <script src="{{asset('jquery/vendor/jquery-maskedinput/jquery.maskedinput.js')}}"></script>
    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('land-page/javascripts/theme.js')}}"></script>
    
    <!-- Theme Custom -->
    <script src="{{asset('land-page/javascripts/theme.custom.js')}}"></script>
    
    <!-- Theme Initialization Files -->
    <script src="{{asset('land-page/javascripts/theme.init.js')}}"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript">
    $('#fakultas').on('change',function(e){
        console.log(e);
        var id_fakultas = e.target.value;
        $.get('/json-prodi?fakultas_id=' + id_fakultas, function(data){
          $('#prodi').empty();
          $('#prodi').append('<option value="0" selected="true" disabled="true">Pilih Prodi Anda</option>')
        $.each(data, function(index, prodiObj){
          $('#prodi').append('<option value="'+ prodiObj.id +'">'+prodiObj.nama+'</option>')  
        })
        });
    });



  </script>

<style type="text/css">
  @-webkit-keyframes swal2-show{
    0%{
        -webkit-transform:scale(.7);
        transform:scale(.7)
    }
    45%{
        -webkit-transform:scale(1.05);
        transform:scale(1.05)
    }
    80%{
        -webkit-transform:scale(.95);
        transform:scale(.95)
    }
    100%{
        -webkit-transform:scale(1);
        transform:scale(1)
    }
}
@keyframes swal2-show{
    0%{
        -webkit-transform:scale(.7);
        transform:scale(.7)
    }
    45%{
        -webkit-transform:scale(1.05);
        transform:scale(1.05)
    }
    80%{
        -webkit-transform:scale(.95);
        transform:scale(.95)
    }
    100%{
        -webkit-transform:scale(1);
        transform:scale(1)
    }
}
@-webkit-keyframes swal2-hide{
    0%{
        -webkit-transform:scale(1);
        transform:scale(1);
        opacity:1
    }
    100%{
        -webkit-transform:scale(.5);
        transform:scale(.5);
        opacity:0
    }
}
@keyframes swal2-hide{
    0%{
        -webkit-transform:scale(1);
        transform:scale(1);
        opacity:1
    }
    100%{
        -webkit-transform:scale(.5);
        transform:scale(.5);
        opacity:0
    }
}
@-webkit-keyframes swal2-animate-success-line-tip{
    0%{
        top:1.1875em;
        left:.0625em;
        width:0
    }
    54%{
        top:1.0625em;
        left:.125em;
        width:0
    }
    70%{
        top:2.1875em;
        left:-.375em;
        width:3.125em
    }
    84%{
        top:3em;
        left:1.3125em;
        width:1.0625em
    }
    100%{
        top:2.8125em;
        left:.875em;
        width:1.5625em
    }
}
@keyframes swal2-animate-success-line-tip{
    0%{
        top:1.1875em;
        left:.0625em;
        width:0
    }
    54%{
        top:1.0625em;
        left:.125em;
        width:0
    }
    70%{
        top:2.1875em;
        left:-.375em;
        width:3.125em
    }
    84%{
        top:3em;
        left:1.3125em;
        width:1.0625em
    }
    100%{
        top:2.8125em;
        left:.875em;
        width:1.5625em
    }
}
@-webkit-keyframes swal2-animate-success-line-long{
    0%{
        top:3.375em;
        right:2.875em;
        width:0
    }
    65%{
        top:3.375em;
        right:2.875em;
        width:0
    }
    84%{
        top:2.1875em;
        right:0;
        width:3.4375em
    }
    100%{
        top:2.375em;
        right:.5em;
        width:2.9375em
    }
}
@keyframes swal2-animate-success-line-long{
    0%{
        top:3.375em;
        right:2.875em;
        width:0
    }
    65%{
        top:3.375em;
        right:2.875em;
        width:0
    }
    84%{
        top:2.1875em;
        right:0;
        width:3.4375em
    }
    100%{
        top:2.375em;
        right:.5em;
        width:2.9375em
    }
}
@-webkit-keyframes swal2-rotate-success-circular-line{
    0%{
        -webkit-transform:rotate(-45deg);
        transform:rotate(-45deg)
    }
    5%{
        -webkit-transform:rotate(-45deg);
        transform:rotate(-45deg)
    }
    12%{
        -webkit-transform:rotate(-405deg);
        transform:rotate(-405deg)
    }
    100%{
        -webkit-transform:rotate(-405deg);
        transform:rotate(-405deg)
    }
}
@keyframes swal2-rotate-success-circular-line{
    0%{
        -webkit-transform:rotate(-45deg);
        transform:rotate(-45deg)
    }
    5%{
        -webkit-transform:rotate(-45deg);
        transform:rotate(-45deg)
    }
    12%{
        -webkit-transform:rotate(-405deg);
        transform:rotate(-405deg)
    }
    100%{
        -webkit-transform:rotate(-405deg);
        transform:rotate(-405deg)
    }
}
@-webkit-keyframes swal2-animate-error-x-mark{
    0%{
        margin-top:1.625em;
        -webkit-transform:scale(.4);
        transform:scale(.4);
        opacity:0
    }
    50%{
        margin-top:1.625em;
        -webkit-transform:scale(.4);
        transform:scale(.4);
        opacity:0
    }
    80%{
        margin-top:-.375em;
        -webkit-transform:scale(1.15);
        transform:scale(1.15)
    }
    100%{
        margin-top:0;
        -webkit-transform:scale(1);
        transform:scale(1);
        opacity:1
    }
}
@keyframes swal2-animate-error-x-mark{
    0%{
        margin-top:1.625em;
        -webkit-transform:scale(.4);
        transform:scale(.4);
        opacity:0
    }
    50%{
        margin-top:1.625em;
        -webkit-transform:scale(.4);
        transform:scale(.4);
        opacity:0
    }
    80%{
        margin-top:-.375em;
        -webkit-transform:scale(1.15);
        transform:scale(1.15)
    }
    100%{
        margin-top:0;
        -webkit-transform:scale(1);
        transform:scale(1);
        opacity:1
    }
}
@-webkit-keyframes swal2-animate-error-icon{
    0%{
        -webkit-transform:rotateX(100deg);
        transform:rotateX(100deg);
        opacity:0
    }
    100%{
        -webkit-transform:rotateX(0);
        transform:rotateX(0);
        opacity:1
    }
}
@keyframes swal2-animate-error-icon{
    0%{
        -webkit-transform:rotateX(100deg);
        transform:rotateX(100deg);
        opacity:0
    }
    100%{
        -webkit-transform:rotateX(0);
        transform:rotateX(0);
        opacity:1
    }
}
body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast{
    flex-direction:column;
    align-items:stretch
}
body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-actions{
    flex:1;
    align-self:stretch;
    justify-content:flex-end;
    height:2.2em
}
body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-loading{
    justify-content:center
}
body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-input{
    height:2em;
    margin:.3125em auto;
    font-size:1em
}
body.swal2-toast-shown.swal2-has-input>.swal2-container>.swal2-toast .swal2-validationerror{
    font-size:1em
}
body.swal2-toast-shown>.swal2-container{
    position:fixed;
    background-color:transparent
}
body.swal2-toast-shown>.swal2-container.swal2-shown{
    background-color:transparent
}
body.swal2-toast-shown>.swal2-container.swal2-top{
    top:0;
    right:auto;
    bottom:auto;
    left:50%;
    -webkit-transform:translateX(-50%);
    transform:translateX(-50%)
}
body.swal2-toast-shown>.swal2-container.swal2-top-end,body.swal2-toast-shown>.swal2-container.swal2-top-right{
    top:0;
    right:0;
    bottom:auto;
    left:auto
}
body.swal2-toast-shown>.swal2-container.swal2-top-left,body.swal2-toast-shown>.swal2-container.swal2-top-start{
    top:0;
    right:auto;
    bottom:auto;
    left:0
}
body.swal2-toast-shown>.swal2-container.swal2-center-left,body.swal2-toast-shown>.swal2-container.swal2-center-start{
    top:50%;
    right:auto;
    bottom:auto;
    left:0;
    -webkit-transform:translateY(-50%);
    transform:translateY(-50%)
}
body.swal2-toast-shown>.swal2-container.swal2-center{
    top:50%;
    right:auto;
    bottom:auto;
    left:50%;
    -webkit-transform:translate(-50%,-50%);
    transform:translate(-50%,-50%)
}
body.swal2-toast-shown>.swal2-container.swal2-center-end,body.swal2-toast-shown>.swal2-container.swal2-center-right{
    top:50%;
    right:0;
    bottom:auto;
    left:auto;
    -webkit-transform:translateY(-50%);
    transform:translateY(-50%)
}
body.swal2-toast-shown>.swal2-container.swal2-bottom-left,body.swal2-toast-shown>.swal2-container.swal2-bottom-start{
    top:auto;
    right:auto;
    bottom:0;
    left:0
}
body.swal2-toast-shown>.swal2-container.swal2-bottom{
    top:auto;
    right:auto;
    bottom:0;
    left:50%;
    -webkit-transform:translateX(-50%);
    transform:translateX(-50%)
}
body.swal2-toast-shown>.swal2-container.swal2-bottom-end,body.swal2-toast-shown>.swal2-container.swal2-bottom-right{
    top:auto;
    right:0;
    bottom:0;
    left:auto
}
.swal2-popup.swal2-toast{
    flex-direction:row;
    align-items:center;
    width:auto;
    padding:.625em;
    box-shadow:0 0 .625em #d9d9d9;
    overflow-y:hidden
}
.swal2-popup.swal2-toast .swal2-header{
    flex-direction:row
}
.swal2-popup.swal2-toast .swal2-title{
    justify-content:flex-start;
    margin:0 .6em;
    font-size:1em
}
.swal2-popup.swal2-toast .swal2-close{
    position:initial
}
.swal2-popup.swal2-toast .swal2-content{
    justify-content:flex-start;
    font-size:1em
}
.swal2-popup.swal2-toast .swal2-icon{
    width:2em;
    min-width:2em;
    height:2em;
    margin:0
}
.swal2-popup.swal2-toast .swal2-icon-text{
    font-size:2em;
    font-weight:700;
    line-height:1em
}
.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring{
    width:2em;
    height:2em
}
.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line]{
    top:.875em;
    width:1.375em
}
.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{
    left:.3125em
}
.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{
    right:.3125em
}
.swal2-popup.swal2-toast .swal2-actions{
    height:auto;
    margin:0 .3125em
}
.swal2-popup.swal2-toast .swal2-styled{
    margin:0 .3125em;
    padding:.3125em .625em;
    font-size:1em
}
.swal2-popup.swal2-toast .swal2-styled:focus{
    box-shadow:0 0 0 .0625em #fff,0 0 0 .125em rgba(50,100,150,.4)
}
.swal2-popup.swal2-toast .swal2-success{
    border-color:#a5dc86
}
.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line]{
    position:absolute;
    width:2em;
    height:2.8125em;
    -webkit-transform:rotate(45deg);
    transform:rotate(45deg);
    border-radius:50%
}
.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left]{
    top:-.25em;
    left:-.9375em;
    -webkit-transform:rotate(-45deg);
    transform:rotate(-45deg);
    -webkit-transform-origin:2em 2em;
    transform-origin:2em 2em;
    border-radius:4em 0 0 4em
}
.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right]{
    top:-.25em;
    left:.9375em;
    -webkit-transform-origin:0 2em;
    transform-origin:0 2em;
    border-radius:0 4em 4em 0
}
.swal2-popup.swal2-toast .swal2-success .swal2-success-ring{
    width:2em;
    height:2em
}
.swal2-popup.swal2-toast .swal2-success .swal2-success-fix{
    top:0;
    left:.4375em;
    width:.4375em;
    height:2.6875em
}
.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line]{
    height:.3125em
}
.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip]{
    top:1.125em;
    left:.1875em;
    width:.75em
}
.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long]{
    top:.9375em;
    right:.1875em;
    width:1.375em
}
.swal2-popup.swal2-toast.swal2-show{
    -webkit-animation:showSweetToast .5s;
    animation:showSweetToast .5s
}
.swal2-popup.swal2-toast.swal2-hide{
    -webkit-animation:hideSweetToast .2s forwards;
    animation:hideSweetToast .2s forwards
}
.swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip{
    -webkit-animation:animate-toast-success-tip .75s;
    animation:animate-toast-success-tip .75s
}
.swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long{
    -webkit-animation:animate-toast-success-long .75s;
    animation:animate-toast-success-long .75s
}
@-webkit-keyframes showSweetToast{
    0%{
        -webkit-transform:translateY(-.625em) rotateZ(2deg);
        transform:translateY(-.625em) rotateZ(2deg);
        opacity:0
    }
    33%{
        -webkit-transform:translateY(0) rotateZ(-2deg);
        transform:translateY(0) rotateZ(-2deg);
        opacity:.5
    }
    66%{
        -webkit-transform:translateY(.3125em) rotateZ(2deg);
        transform:translateY(.3125em) rotateZ(2deg);
        opacity:.7
    }
    100%{
        -webkit-transform:translateY(0) rotateZ(0);
        transform:translateY(0) rotateZ(0);
        opacity:1
    }
}
@keyframes showSweetToast{
    0%{
        -webkit-transform:translateY(-.625em) rotateZ(2deg);
        transform:translateY(-.625em) rotateZ(2deg);
        opacity:0
    }
    33%{
        -webkit-transform:translateY(0) rotateZ(-2deg);
        transform:translateY(0) rotateZ(-2deg);
        opacity:.5
    }
    66%{
        -webkit-transform:translateY(.3125em) rotateZ(2deg);
        transform:translateY(.3125em) rotateZ(2deg);
        opacity:.7
    }
    100%{
        -webkit-transform:translateY(0) rotateZ(0);
        transform:translateY(0) rotateZ(0);
        opacity:1
    }
}
@-webkit-keyframes hideSweetToast{
    0%{
        opacity:1
    }
    33%{
        opacity:.5
    }
    100%{
        -webkit-transform:rotateZ(1deg);
        transform:rotateZ(1deg);
        opacity:0
    }
}
@keyframes hideSweetToast{
    0%{
        opacity:1
    }
    33%{
        opacity:.5
    }
    100%{
        -webkit-transform:rotateZ(1deg);
        transform:rotateZ(1deg);
        opacity:0
    }
}
@-webkit-keyframes animate-toast-success-tip{
    0%{
        top:.5625em;
        left:.0625em;
        width:0
    }
    54%{
        top:.125em;
        left:.125em;
        width:0
    }
    70%{
        top:.625em;
        left:-.25em;
        width:1.625em
    }
    84%{
        top:1.0625em;
        left:.75em;
        width:.5em
    }
    100%{
        top:1.125em;
        left:.1875em;
        width:.75em
    }
}
@keyframes animate-toast-success-tip{
    0%{
        top:.5625em;
        left:.0625em;
        width:0
    }
    54%{
        top:.125em;
        left:.125em;
        width:0
    }
    70%{
        top:.625em;
        left:-.25em;
        width:1.625em
    }
    84%{
        top:1.0625em;
        left:.75em;
        width:.5em
    }
    100%{
        top:1.125em;
        left:.1875em;
        width:.75em
    }
}
@-webkit-keyframes animate-toast-success-long{
    0%{
        top:1.625em;
        right:1.375em;
        width:0
    }
    65%{
        top:1.25em;
        right:.9375em;
        width:0
    }
    84%{
        top:.9375em;
        right:0;
        width:1.125em
    }
    100%{
        top:.9375em;
        right:.1875em;
        width:1.375em
    }
}
@keyframes animate-toast-success-long{
    0%{
        top:1.625em;
        right:1.375em;
        width:0
    }
    65%{
        top:1.25em;
        right:.9375em;
        width:0
    }
    84%{
        top:.9375em;
        right:0;
        width:1.125em
    }
    100%{
        top:.9375em;
        right:.1875em;
        width:1.375em
    }
}
body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){
    overflow-y:hidden
}
body.swal2-height-auto{
    height:auto!important
}
body.swal2-no-backdrop .swal2-shown{
    top:auto;
    right:auto;
    bottom:auto;
    left:auto;
    background-color:transparent
}
body.swal2-no-backdrop .swal2-shown>.swal2-modal{
    box-shadow:0 0 10px rgba(0,0,0,.4)
}
body.swal2-no-backdrop .swal2-shown.swal2-top{
    top:0;
    left:50%;
    -webkit-transform:translateX(-50%);
    transform:translateX(-50%)
}
body.swal2-no-backdrop .swal2-shown.swal2-top-left,body.swal2-no-backdrop .swal2-shown.swal2-top-start{
    top:0;
    left:0
}
body.swal2-no-backdrop .swal2-shown.swal2-top-end,body.swal2-no-backdrop .swal2-shown.swal2-top-right{
    top:0;
    right:0
}
body.swal2-no-backdrop .swal2-shown.swal2-center{
    top:50%;
    left:50%;
    -webkit-transform:translate(-50%,-50%);
    transform:translate(-50%,-50%)
}
body.swal2-no-backdrop .swal2-shown.swal2-center-left,body.swal2-no-backdrop .swal2-shown.swal2-center-start{
    top:50%;
    left:0;
    -webkit-transform:translateY(-50%);
    transform:translateY(-50%)
}
body.swal2-no-backdrop .swal2-shown.swal2-center-end,body.swal2-no-backdrop .swal2-shown.swal2-center-right{
    top:50%;
    right:0;
    -webkit-transform:translateY(-50%);
    transform:translateY(-50%)
}
body.swal2-no-backdrop .swal2-shown.swal2-bottom{
    bottom:0;
    left:50%;
    -webkit-transform:translateX(-50%);
    transform:translateX(-50%)
}
body.swal2-no-backdrop .swal2-shown.swal2-bottom-left,body.swal2-no-backdrop .swal2-shown.swal2-bottom-start{
    bottom:0;
    left:0
}
body.swal2-no-backdrop .swal2-shown.swal2-bottom-end,body.swal2-no-backdrop .swal2-shown.swal2-bottom-right{
    right:0;
    bottom:0
}
.swal2-container{
    display:flex;
    position:fixed;
    top:0;
    right:0;
    bottom:0;
    left:0;
    flex-direction:row;
    align-items:center;
    justify-content:center;
    padding:10px;
    background-color:transparent;
    z-index:1060;
    overflow-x:hidden;
    -webkit-overflow-scrolling:touch
}
.swal2-container.swal2-top{
    align-items:flex-start
}
.swal2-container.swal2-top-left,.swal2-container.swal2-top-start{
    align-items:flex-start;
    justify-content:flex-start
}
.swal2-container.swal2-top-end,.swal2-container.swal2-top-right{
    align-items:flex-start;
    justify-content:flex-end
}
.swal2-container.swal2-center{
    align-items:center
}
.swal2-container.swal2-center-left,.swal2-container.swal2-center-start{
    align-items:center;
    justify-content:flex-start
}
.swal2-container.swal2-center-end,.swal2-container.swal2-center-right{
    align-items:center;
    justify-content:flex-end
}
.swal2-container.swal2-bottom{
    align-items:flex-end
}
.swal2-container.swal2-bottom-left,.swal2-container.swal2-bottom-start{
    align-items:flex-end;
    justify-content:flex-start
}
.swal2-container.swal2-bottom-end,.swal2-container.swal2-bottom-right{
    align-items:flex-end;
    justify-content:flex-end
}
.swal2-container.swal2-grow-fullscreen>.swal2-modal{
    display:flex!important;
    flex:1;
    align-self:stretch;
    justify-content:center
}
.swal2-container.swal2-grow-row>.swal2-modal{
    display:flex!important;
    flex:1;
    align-content:center;
    justify-content:center
}
.swal2-container.swal2-grow-column{
    flex:1;
    flex-direction:column
}
.swal2-container.swal2-grow-column.swal2-bottom,.swal2-container.swal2-grow-column.swal2-center,.swal2-container.swal2-grow-column.swal2-top{
    align-items:center
}
.swal2-container.swal2-grow-column.swal2-bottom-left,.swal2-container.swal2-grow-column.swal2-bottom-start,.swal2-container.swal2-grow-column.swal2-center-left,.swal2-container.swal2-grow-column.swal2-center-start,.swal2-container.swal2-grow-column.swal2-top-left,.swal2-container.swal2-grow-column.swal2-top-start{
    align-items:flex-start
}
.swal2-container.swal2-grow-column.swal2-bottom-end,.swal2-container.swal2-grow-column.swal2-bottom-right,.swal2-container.swal2-grow-column.swal2-center-end,.swal2-container.swal2-grow-column.swal2-center-right,.swal2-container.swal2-grow-column.swal2-top-end,.swal2-container.swal2-grow-column.swal2-top-right{
    align-items:flex-end
}
.swal2-container.swal2-grow-column>.swal2-modal{
    display:flex!important;
    flex:1;
    align-content:center;
    justify-content:center
}
.swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right)>.swal2-modal{
    margin:auto
}
@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){
    .swal2-container .swal2-modal{
        margin:0!important
    }
}
.swal2-container.swal2-fade{
    transition:background-color .1s
}
.swal2-container.swal2-shown{
    background-color:rgba(0,0,0,.4)
}
.swal2-popup{
    display:none;
    position:relative;
    flex-direction:column;
    justify-content:center;
    width:32em;
    max-width:100%;
    padding:1.25em;
    border-radius:.3125em;
    background:#fff;
    font-family:inherit;
    font-size:1rem;
    box-sizing:border-box
}
.swal2-popup:focus{
    outline:0
}
.swal2-popup.swal2-loading{
    overflow-y:hidden
}
.swal2-popup .swal2-header{
    display:flex;
    flex-direction:column;
    align-items:center
}
.swal2-popup .swal2-title{
    display:block;
    position:relative;
    max-width:100%;
    margin:0 0 .4em;
    padding:0;
    color:#595959;
    font-size:1.875em;
    font-weight:600;
    text-align:center;
    text-transform:none;
    word-wrap:break-word
}
.swal2-popup .swal2-actions{
    align-items:center;
    justify-content:center;
    margin:1.25em auto 0
}
.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled]{
    opacity:.4
}
.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover{
    background-image:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1))
}
.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active{
    background-image:linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.2))
}
.swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm{
    width:2.5em;
    height:2.5em;
    margin:.46875em;
    padding:0;
    border:.25em solid transparent;
    border-radius:100%;
    border-color:transparent;
    background-color:transparent!important;
    color:transparent;
    cursor:default;
    box-sizing:border-box;
    -webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;
    animation:swal2-rotate-loading 1.5s linear 0s infinite normal;
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    user-select:none
}
.swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel{
    margin-right:30px;
    margin-left:30px
}
.swal2-popup .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after{
    display:inline-block;
    width:15px;
    height:15px;
    margin-left:5px;
    border:3px solid #999;
    border-radius:50%;
    border-right-color:transparent;
    box-shadow:1px 1px 1px #fff;
    content:'';
    -webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;
    animation:swal2-rotate-loading 1.5s linear 0s infinite normal
}
.swal2-popup .swal2-styled{
    margin:0 .3125em;
    padding:.625em 2em;
    font-weight:500;
    box-shadow:none
}
.swal2-popup .swal2-styled:not([disabled]){
    cursor:pointer
}
.swal2-popup .swal2-styled.swal2-confirm{
    border:0;
    border-radius:.25em;
    background:initial;
    background-color:#3085d6;
    color:#fff;
    font-size:1.0625em
}
.swal2-popup .swal2-styled.swal2-cancel{
    border:0;
    border-radius:.25em;
    background:initial;
    background-color:#aaa;
    color:#fff;
    font-size:1.0625em
}
.swal2-popup .swal2-styled:focus{
    outline:0;
    box-shadow:0 0 0 2px #fff,0 0 0 4px rgba(50,100,150,.4)
}
.swal2-popup .swal2-styled::-moz-focus-inner{
    border:0
}
.swal2-popup .swal2-footer{
    justify-content:center;
    margin:1.25em 0 0;
    padding-top:1em;
    border-top:1px solid #eee;
    color:#545454;
    font-size:1em
}
.swal2-popup .swal2-image{
    max-width:100%;
    margin:1.25em auto
}
.swal2-popup .swal2-close{
    position:absolute;
    top:0;
    right:0;
    justify-content:center;
    width:1.2em;
    height:1.2em;
    padding:0;
    transition:color .1s ease-out;
    border:none;
    border-radius:0;
    background:0 0;
    color:#ccc;
    font-family:serif;
    font-size:2.5em;
    line-height:1.2;
    cursor:pointer;
    overflow:hidden
}
.swal2-popup .swal2-close:hover{
    -webkit-transform:none;
    transform:none;
    color:#f27474
}
.swal2-popup>.swal2-checkbox,.swal2-popup>.swal2-file,.swal2-popup>.swal2-input,.swal2-popup>.swal2-radio,.swal2-popup>.swal2-select,.swal2-popup>.swal2-textarea{
    display:none
}
.swal2-popup .swal2-content{
    justify-content:center;
    margin:0;
    padding:0;
    color:#545454;
    font-size:1.125em;
    font-weight:300;
    line-height:normal;
    word-wrap:break-word
}
.swal2-popup #swal2-content{
    text-align:center
}
.swal2-popup .swal2-checkbox,.swal2-popup .swal2-file,.swal2-popup .swal2-input,.swal2-popup .swal2-radio,.swal2-popup .swal2-select,.swal2-popup .swal2-textarea{
    margin:1em auto
}
.swal2-popup .swal2-file,.swal2-popup .swal2-input,.swal2-popup .swal2-textarea{
    width:100%;
    transition:border-color .3s,box-shadow .3s;
    border:1px solid #d9d9d9;
    border-radius:.1875em;
    font-size:1.125em;
    box-shadow:inset 0 1px 1px rgba(0,0,0,.06);
    box-sizing:border-box
}
.swal2-popup .swal2-file.swal2-inputerror,.swal2-popup .swal2-input.swal2-inputerror,.swal2-popup .swal2-textarea.swal2-inputerror{
    border-color:#f27474!important;
    box-shadow:0 0 2px #f27474!important
}
.swal2-popup .swal2-file:focus,.swal2-popup .swal2-input:focus,.swal2-popup .swal2-textarea:focus{
    border:1px solid #b4dbed;
    outline:0;
    box-shadow:0 0 3px #c4e6f5
}
.swal2-popup .swal2-file::-webkit-input-placeholder,.swal2-popup .swal2-input::-webkit-input-placeholder,.swal2-popup .swal2-textarea::-webkit-input-placeholder{
    color:#ccc
}
.swal2-popup .swal2-file:-ms-input-placeholder,.swal2-popup .swal2-input:-ms-input-placeholder,.swal2-popup .swal2-textarea:-ms-input-placeholder{
    color:#ccc
}
.swal2-popup .swal2-file::-ms-input-placeholder,.swal2-popup .swal2-input::-ms-input-placeholder,.swal2-popup .swal2-textarea::-ms-input-placeholder{
    color:#ccc
}
.swal2-popup .swal2-file::placeholder,.swal2-popup .swal2-input::placeholder,.swal2-popup .swal2-textarea::placeholder{
    color:#ccc
}
.swal2-popup .swal2-range input{
    width:80%
}
.swal2-popup .swal2-range output{
    width:20%;
    font-weight:600;
    text-align:center
}
.swal2-popup .swal2-range input,.swal2-popup .swal2-range output{
    height:2.625em;
    margin:1em auto;
    padding:0;
    font-size:1.125em;
    line-height:2.625em
}
.swal2-popup .swal2-input{
    height:2.625em;
    padding:.75em
}
.swal2-popup .swal2-input[type=number]{
    max-width:10em
}
.swal2-popup .swal2-file{
    font-size:1.125em
}
.swal2-popup .swal2-textarea{
    height:6.75em;
    padding:.75em
}
.swal2-popup .swal2-select{
    min-width:50%;
    max-width:100%;
    padding:.375em .625em;
    color:#545454;
    font-size:1.125em
}
.swal2-popup .swal2-checkbox,.swal2-popup .swal2-radio{
    align-items:center;
    justify-content:center
}
.swal2-popup .swal2-checkbox label,.swal2-popup .swal2-radio label{
    margin:0 .6em;
    font-size:1.125em
}
.swal2-popup .swal2-checkbox input,.swal2-popup .swal2-radio input{
    margin:0 .4em
}
.swal2-popup .swal2-validationerror{
    display:none;
    align-items:center;
    justify-content:center;
    padding:.625em;
    background:#f0f0f0;
    color:#666;
    font-size:1em;
    font-weight:300;
    overflow:hidden
}
.swal2-popup .swal2-validationerror::before{
    display:inline-block;
    width:1.5em;
    min-width:1.5em;
    height:1.5em;
    margin:0 .625em;
    border-radius:50%;
    background-color:#f27474;
    color:#fff;
    font-weight:600;
    line-height:1.5em;
    text-align:center;
    content:'!';
    zoom:normal
}
@supports (-ms-accelerator:true){
    .swal2-range input{
        width:100%!important
    }
    .swal2-range output{
        display:none
    }
}
@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){
    .swal2-range input{
        width:100%!important
    }
    .swal2-range output{
        display:none
    }
}
@-moz-document url-prefix(){
    .swal2-close:focus{
        outline:2px solid rgba(50,100,150,.4)
    }
}
.swal2-icon{
    position:relative;
    justify-content:center;
    width:5em;
    height:5em;
    margin:1.25em auto 1.875em;
    border:.25em solid transparent;
    border-radius:50%;
    line-height:5em;
    cursor:default;
    box-sizing:content-box;
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    user-select:none;
    zoom:normal
}
.swal2-icon-text{
    font-size:3.75em
}
.swal2-icon.swal2-error{
    border-color:#f27474
}
.swal2-icon.swal2-error .swal2-x-mark{
    position:relative;
    flex-grow:1
}
.swal2-icon.swal2-error [class^=swal2-x-mark-line]{
    display:block;
    position:absolute;
    top:2.3125em;
    width:2.9375em;
    height:.3125em;
    border-radius:.125em;
    background-color:#f27474
}
.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{
    left:1.0625em;
    -webkit-transform:rotate(45deg);
    transform:rotate(45deg)
}
.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{
    right:1em;
    -webkit-transform:rotate(-45deg);
    transform:rotate(-45deg)
}
.swal2-icon.swal2-warning{
    border-color:#facea8;
    color:#f8bb86
}
.swal2-icon.swal2-info{
    border-color:#9de0f6;
    color:#3fc3ee
}
.swal2-icon.swal2-question{
    border-color:#c9dae1;
    color:#87adbd
}
.swal2-icon.swal2-success{
    border-color:#a5dc86
}
.swal2-icon.swal2-success [class^=swal2-success-circular-line]{
    position:absolute;
    width:3.75em;
    height:7.5em;
    -webkit-transform:rotate(45deg);
    transform:rotate(45deg);
    border-radius:50%
}
.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left]{
    top:-.4375em;
    left:-2.0635em;
    -webkit-transform:rotate(-45deg);
    transform:rotate(-45deg);
    -webkit-transform-origin:3.75em 3.75em;
    transform-origin:3.75em 3.75em;
    border-radius:7.5em 0 0 7.5em
}
.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right]{
    top:-.6875em;
    left:1.875em;
    -webkit-transform:rotate(-45deg);
    transform:rotate(-45deg);
    -webkit-transform-origin:0 3.75em;
    transform-origin:0 3.75em;
    border-radius:0 7.5em 7.5em 0
}
.swal2-icon.swal2-success .swal2-success-ring{
    position:absolute;
    top:-.25em;
    left:-.25em;
    width:100%;
    height:100%;
    border:.25em solid rgba(165,220,134,.3);
    border-radius:50%;
    z-index:2;
    box-sizing:content-box
}
.swal2-icon.swal2-success .swal2-success-fix{
    position:absolute;
    top:.5em;
    left:1.625em;
    width:.4375em;
    height:5.625em;
    -webkit-transform:rotate(-45deg);
    transform:rotate(-45deg);
    z-index:1
}
.swal2-icon.swal2-success [class^=swal2-success-line]{
    display:block;
    position:absolute;
    height:.3125em;
    border-radius:.125em;
    background-color:#a5dc86;
    z-index:2
}
.swal2-icon.swal2-success [class^=swal2-success-line][class$=tip]{
    top:2.875em;
    left:.875em;
    width:1.5625em;
    -webkit-transform:rotate(45deg);
    transform:rotate(45deg)
}
.swal2-icon.swal2-success [class^=swal2-success-line][class$=long]{
    top:2.375em;
    right:.5em;
    width:2.9375em;
    -webkit-transform:rotate(-45deg);
    transform:rotate(-45deg)
}
.swal2-progresssteps{
    align-items:center;
    margin:0 0 1.25em;
    padding:0;
    font-weight:600
}
.swal2-progresssteps li{
    display:inline-block;
    position:relative
}
.swal2-progresssteps .swal2-progresscircle{
    width:2em;
    height:2em;
    border-radius:2em;
    background:#3085d6;
    color:#fff;
    line-height:2em;
    text-align:center;
    z-index:20
}
.swal2-progresssteps .swal2-progresscircle:first-child{
    margin-left:0
}
.swal2-progresssteps .swal2-progresscircle:last-child{
    margin-right:0
}
.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep{
    background:#3085d6
}
.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle{
    background:#add8e6
}
.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline{
    background:#add8e6
}
.swal2-progresssteps .swal2-progressline{
    width:2.5em;
    height:.4em;
    margin:0 -1px;
    background:#3085d6;
    z-index:10
}
[class^=swal2]{
    -webkit-tap-highlight-color:transparent
}
.swal2-show{
    -webkit-animation:swal2-show .3s;
    animation:swal2-show .3s
}
.swal2-show.swal2-noanimation{
    -webkit-animation:none;
    animation:none
}
.swal2-hide{
    -webkit-animation:swal2-hide .15s forwards;
    animation:swal2-hide .15s forwards
}
.swal2-hide.swal2-noanimation{
    -webkit-animation:none;
    animation:none
}
[dir=rtl] .swal2-close{
    right:auto;
    left:0
}
.swal2-animate-success-icon .swal2-success-line-tip{
    -webkit-animation:swal2-animate-success-line-tip .75s;
    animation:swal2-animate-success-line-tip .75s
}
.swal2-animate-success-icon .swal2-success-line-long{
    -webkit-animation:swal2-animate-success-line-long .75s;
    animation:swal2-animate-success-line-long .75s
}
.swal2-animate-success-icon .swal2-success-circular-line-right{
    -webkit-animation:swal2-rotate-success-circular-line 4.25s ease-in;
    animation:swal2-rotate-success-circular-line 4.25s ease-in
}
.swal2-animate-error-icon{
    -webkit-animation:swal2-animate-error-icon .5s;
    animation:swal2-animate-error-icon .5s
}
.swal2-animate-error-icon .swal2-x-mark{
    -webkit-animation:swal2-animate-error-x-mark .5s;
    animation:swal2-animate-error-x-mark .5s
}
@-webkit-keyframes swal2-rotate-loading{
    0%{
        -webkit-transform:rotate(0);
        transform:rotate(0)
    }
    100%{
        -webkit-transform:rotate(360deg);
        transform:rotate(360deg)
    }
}
@keyframes swal2-rotate-loading{
    0%{
        -webkit-transform:rotate(0);
        transform:rotate(0)
    }
    100%{
        -webkit-transform:rotate(360deg);
        transform:rotate(360deg)
    }
}

</style>
<script>
$(document).ready(function(){
    $("#myModalHH").modal();
  });
</script>
  </body>
</html>