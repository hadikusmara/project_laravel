@extends('admin')

@section('main-content')
<style>
h4 {
  border: 1px solid;
  background-color:#ff6347;
}
/* bentuk border */

.w3-example {
  padding: 8px 20px;
  margin: 24px -20px;
  box-shadow: none !important;
}
.w3-example {
  background-color: #E7E9EB;
  border-radius: 5px;
  padding: 0.01em 16px;
  margin: 20px 0;
  box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12) !important;
}
.w3-code {
  width: auto;
  background-color: #fff;
  color: #000;
  padding: 8px 12px;
  border-left: 4px solid #4CAF50;
  word-wrap: break-word;
}	

.w3-btn:hover, .w3-btn:active, .w3-example a:focus, .nextprev a:focus {
  box-shadow: none;
  background-color: #059862 !important;
}
.w3-btn, .w3-btn:link, .w3-btn:visited {
  color: #FFFFFF;
  background-color: #4CAF50;
}
.w3-example .w3-btn, .w3-example .ws-btn {
  background-color: #04AA6D !important;
  border-radius: 5px;
  font-size: 17px;
  font-family: 'Source Sans Pro', sans-serif;
  padding: 6px 18px;
}
.w3-margin-bottom {
  margin-bottom: 16px !important;
}

</style>
<aside class='right-side'>
<!-- Content Header (Page header) -->
<section class='content-header'>
<h1>Tutorial HTML</h1>
</section>

		<!-- Main content -->
		<section class='content'>
		<!-- Small boxes (Stat box) -->
			<div class='row'>
			</div><!-- /.row -->
			<div class='box box-primary'>
				<div class='box-header'>
					<i class='fa fa-th'></i>
					<h3 class='box-title'>Universitas Bhayangkara Jakarta Raya</h3>
				</div>
				<div class='box-body border-radius-none'>	
				<h1>HTML <span class="color_h1">Colors</span></h1>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn" href="html_comments.asp">&#10094; Previous</a>
<a class="w3-right w3-btn" href="html_colors_rgb.asp">Next &#10095;</a>
</div>
<hr>
<p class="intro">HTML colors are specified with predefined color names, or with 
RGB, HEX, HSL, RGBA, or HSLA values.</p>
<hr>

<h2>Color Names</h2>
<p>In HTML, a color can be specified by using a color name:</p>
<div class="w3-row w3-center" style="margin:0 -16px;line-height:80px;color:white;">
  <div class="w3-col l3 m6 w3-padding">
    <div style="background-color:tomato;">Tomato</div>
  </div>
  <div class="w3-col l3 m6 w3-padding">
    <div style="background-color:orange;">Orange</div>
  </div>
  <div class="w3-col l3 m6 w3-padding">
    <div style="background-color:dodgerblue;">DodgerBlue</div>
  </div>
  <div class="w3-col l3 m6 w3-padding">
    <div style="background-color:mediumseagreen;">MediumSeaGreen</div>
  </div>
  <div class="w3-col l3 m6 w3-padding">
    <div style="background-color:gray;">Gray</div>
  </div>
  <div class="w3-col l3 m6 w3-padding">
    <div style="background-color:slateblue;">SlateBlue</div>
  </div>
  <div class="w3-col l3 m6 w3-padding">
    <div style="background-color:violet;">Violet</div>
  </div>
  <div class="w3-col l3 m6 w3-padding">
    <div style="background-color:lightgray;color:#444444">LightGray</div>
  </div>
</div>
<p>
<a target="_blank" href="tryit.asp?filename=tryhtml_color_names" class="ws-btn w3-margin-bottom">Try it Yourself &raquo;</a>
</p>
<p>HTML supports <a href="/colors/colors_names.asp">140 standard color names</a>.</p>
<hr>

<h2>Background Color</h2>
<p>You can set the background color for HTML elements:</p>

<div style="background-color:dodgerblue; text-align:center;color:white;font-size:24px;">Hello World</div>
<br>
<div class="w3-container" style="background-color:tomato;color:white;"><br>
  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
  Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.<br><br>
</div>

<div class="w3-example">
	<h3>Contoh</h3>
	<div class="w3-code notranslate htmlHigh">
    &lt;h1 style=&quot;background-color:DodgerBlue;&quot;&gt;Hello World&lt;/h1&gt;<br>&lt;p style=&quot;background-color:Tomato;&quot;&gt;Lorem 
  ipsum...&lt;/p&gt;</div>
		&lt;/body&gt;<br>&lt;/html&gt;
	</div>
	<div >
		<a class="w3-btn w3-margin-bottom" href="{{ route('htmlcolors_next') }}" target="_blank">Coba Sendiri &raquo;</a>
	</div>
	</div>

<hr>
<h2>Text Color</h2>
<p>You can set the color of text:</p>
<h3 style="color:tomato">Hello World</h3>
<p style="color:dodgerblue">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
<p style="color:mediumseagreen">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>

<div class="w3-example">
	<h3>Contoh</h3>
	<div class="w3-code notranslate htmlHigh">
		&lt;!DOCTYPE html&gt;<br>
		&lt;h1 style=&quot;color:Tomato;&quot;&gt;Hello 
  World&lt;/h1&gt;<br>&lt;p style=&quot;color:DodgerBlue;&quot;&gt;Lorem 
  ipsum...&lt;/p&gt;<br>&lt;p style=&quot;color:MediumSeaGreen;&quot;&gt;Ut wisi 
  enim...&lt;/p&gt;</div>
		&lt;/body&gt;<br>&lt;/html&gt;
	</div>
	<div >
		<a class="w3-btn w3-margin-bottom" href="{{ route('htmlcolors_next') }}" target="_blank">Coba Sendiri &raquo;</a>
	</div>

	</div>
<!-- /.row (main row) -->
			</section><!-- /.END MAIN CONTEN -->
	</aside>           
    <!-- /.Isi Content -->


</div>
@endsection

