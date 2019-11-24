<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{asset('error-page/style.css')}}">
	<title></title>
</head>
	<div id="clouds">
        <div class="cloud x1"></div>
            <div class="cloud x1_5"></div>
            <div class="cloud x2"></div>
            <div class="cloud x3"></div>
            <div class="cloud x4"></div>
            <div class="cloud x4"></div>
            <div class="cloud x4"></div>
            <div class="cloud x4"></div>
            <div class="cloud x4"></div>
        <div class="cloud x5"></div>
    </div>
    <div class='c'>
		    <div class='_404'>404</div>
		    <hr>
		    <div class='_1'>{{$arr["thisError"]}}</div>
		    <br>
		    <hr>
		    <!-- <div class='_2'> tidak sinkron</div> -->
	    <a class='btn' href='/{{$arr["linkBack"]}}'>KEMBALI</a>
	</div>
</body>
</html>