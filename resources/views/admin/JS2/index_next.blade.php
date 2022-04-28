
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>mencoba Editor v3.7 CSS</title>
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:image" content="https://www.w3schools.com/images/w3schools_logo_436_2.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="436">
<meta property="og:image:height" content="228">
<meta property="og:title" content="W3Schools online HTML editor">
<meta property="og:description" content="Editor bhayang kara">
<!--menampilkan rancangan CCS dari file external style.css  -->
<link rel="stylesheet" href="{{ asset('editor/css/style.css') }}">
<!--menjalankan file js untuk menjalankan koding html,css,js  -->
<script src="{{ asset('editor/js/editor.js') }}"></script>
<script src="{{ asset('editor/js/loder.js') }}"></script>
<script src="{{ asset('editor/js/loder_ubj.js') }}"></script>
<script src="{{ asset('editor/js/uic.js')}}"></script>
<script data-cfasync="false" type="text/javascript">
var k42 = false;

k42 = true;

</script>
<script data-cfasync="false" type="text/javascript">
    window.snigelPubConf = {
    "adengine": {

      "activeAdUnits": ["try_it_leaderboard"]

  }
}
uic_r_a()
</script>
<script async data-cfasync="false" src="{{ asset('editor/js/loder.js') }}" type="text/javascript"></script>

<style>
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

</style>

</head>
<body>


<div id='breadcrumb'>
<ul>
  <!--membuat Link ke module lain atau berpindah ke halaman lain  -->
		<li><a href="{{ route('adminhome') }}" >Dashboard</a></li>
		<li><a href="{{ route('jsintro') }}">Sebelumnya JS</a></li>

</ul>
</div>
<img src="http://127.0.0.1:8000/asset/img/logo.png" alt="Trulli" width="50" height="33">
<div class="trytopnav">
<div class="w3-bar" style="overflow:auto">
    <a href="javascript:void(0);" onclick="retheme()" title="Change Theme" class="w3-button w3-bar-item topnav-icons fa fa-adjust" style="margin-top:-2px;"></a>
  <button id="runbtn" class="w3-button w3-bar-item w3-hover-white w3-hover-text-green" onclick="submitTryit(1);ga('send', 'event', 'runCode', 'click');uic_r_p();">Run &#10095;</button>
  
  <!--<span class="w3-right w3-hide-small xxw3-hide-medium" style="padding:8px 8px 8px 8px;display:block"></span>-->
  <span class="w3-right w3-hide-small" style="padding:8px 16px 8px 0;display:block;float:right;font-size:16px;margin-top:4px"><span id="framesize"></span></span>
</div>

</div>

<div id="shield"></div>

<a href="javascript:void(0)" id="dragbar"></a>
<div id="container">
<div id="navbarDropMenu" class="w3-dropdown-content w3-bar-block w3-border" style="z-index:5">
<span onclick="openMenu()" class="w3-button w3-display-topright w3-transparent ws-hover-black" 
title="Close Menu" style="font-weight:bold;padding-top:10px;padding-bottom:11px;">&times;</span>
  
 
</div>
<div id="menuOverlay" class="w3-overlay w3-transparent" style="cursor:pointer;z-index:4"></div>
  <div id="textareacontainer">
    <div id="textarea">
      <div id="textareawrapper">
 <!--menampilkan editor buatan sendiri    -->
 <textarea autocomplete="off" id="textareaCode" wrap="logical" spellcheck="false">
 
		<!DOCTYPE html>
		<html>
		<head>
		<title>judul halaman JS namakamu</title>

</head>
<body>
<img src="http://127.0.0.1:8000/asset/img/logo.png" height='37'>

<h2>JavaScript Variables</h2>
<p>contoh pengunana variabel x, y, and z .</p>
<p id="demo"></p>
<script>
let x = 5;
let y = 6;
let z = x + y;
document.getElementById("demo").innerHTML ="The value of z is: " + z;
</script>

</body>
</html>
</textarea>
<!--menampilkan hasil yang di run dari editor buatan sendiri    -->
        <form id="codeForm" autocomplete="off" style="margin:0px;display:none;">
          <input type="hidden" name="code" id="code" />
        </form>
       </div>
    </div>
  </div>
  <div id="iframecontainer">
    <div id="iframe">
      <div id="iframewrapper"></div>
    </div>
  </div>
</div>

<script>
submitTryit()

uic_r_e()
</script>

</body>
</html>