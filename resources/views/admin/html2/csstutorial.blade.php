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
					<h1>CSS <span class="color_h1">Tutorial</span></h1>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn" href="/default.asp">&#10094; Home</a>
<a class="w3-right w3-btn" href="css_intro.asp">Next &#10095;</a>
</div>

<div class="w3-panel w3-info intro">
<p>CSS is the language we use to style an HTML document.</p>
<p>CSS describes how HTML elements should be displayed.</p>
<p>This tutorial will teach you CSS from basic to advanced.</p>
<a class="w3-btn w3-margin-bottom" href="css_intro.asp" style="font-size: 18px;padding-left:25px;padding-right:25px;font-family: 'Source Sans Pro', sans-serif;margin-top:6px;">Start learning CSS now &raquo;</a>
</div>
<hr>

<h2>Examples in Each Chapter</h2>
<p>This CSS tutorial contains hundreds of CSS examples.</p>
<p>With our online editor, you can edit the CSS, and click on a button to view the result.</p>

<div class="w3-example">
<h3>CSS Example</h3>
<div class="w3-code notranslate cssHigh">
body
{<br>&nbsp;&nbsp;background-color: lightblue;<br>}<br>
<br>h1
{<br>
&nbsp;&nbsp;color: white;<br>
&nbsp;&nbsp;text-align: center;<br>
}<br><br>
p
{<br>
  &nbsp;
font-family: verdana;<br>
&nbsp;&nbsp;font-size: 20px;<br>
}</div>
<a target="_blank" href="tryit.asp?filename=trycss_default" class="w3-btn w3-margin-bottom">Try it Yourself &raquo;</a></div>
<p><b>Click on the &quot;Try it Yourself&quot; button to see how it works.</b></p>
<hr>

<h2>CSS Examples</h2>
<p>Learn from over 300 examples! With our editor, you can edit the CSS, and click on a
button to view the result.</p>
<p><a href="css_examples.asp" class="ws-btn ws-grey ws-hover-black">Go to CSS Examples!</a></p>
<hr>

<h2>Use the Menu</h2>
<p>We recommend reading this tutorial, in the sequence listed in the menu.</p>
<p>If you have a large screen, the menu will always be present on the left.</p>
<p>If you have a small screen, open the menu by clicking the top menu sign <span class="w3-xlarge">&#9776;</span>.</p>
<hr>

<h2>CSS Templates</h2>
<p>We have created some responsive W3.CSS templates for you to use.</p>
<p>You are free to modify, save, share, and use them in all your projects.</p>
<p><a href="css_rwd_templates.asp">Free CSS Templates!</a></p>
<hr>
<div id="midcontentadcontainer" style="overflow:auto;text-align:center">
<!-- MidContent -->
<!-- <p class="adtext">Advertisement</p> -->

  <div id="adngin-mid_content-0"></div>
  
</div>(main row) -->
			</section><!-- /.END MAIN CONTEN -->
	</aside>           
    <!-- /.Isi Content -->


</div>
@endsection

