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
				<p>JavaScript  Tutorial
JS adalah bahasa pemrograman yang sering di gunakan di aplikasi berbasi webde ++, Anda dapat mengeditjavascrpit dan jalankan di browser anda.
Contoh   ::</p>
<h4>Belajar Mudah denganjavascrpit "Coba Sendiri"</h4>

<p>4 Ways to Declare a JavaScript Variable:</p>

 <li> penggunaan  variabel var   </li>
 <li> penggunaan  variabel let</li>
 <li> penggunaan  variabel const</li>
 <li> penggunaan  variabel nothing</li>


<p>Dengan editor "Coba Sendiri" kami, Anda dapat mengedit kode javascript dan melihat hasilnya: </p>


<div class="w3-example">
	<h3>Contoh</h3>
	<div class="w3-code notranslate htmlHigh">

	&lt;!DOCTYPE html&gt;<br>
&lt;html&gt;<br>
&lt;body&gt;<br>

&lt;h2&gt;JavaScript Variables&lt;/h2&gt;<br>

&lt;p&gt;In this example, x, y, and z are variables.&lt;/p&gt;<br>

&lt;p id="demo"&gt;&lt;/p&gt;<br>

&lt;script&gt;<br>
let x = 5;<br>
let y = 6;<br>
let z = x + y;<br>
document.getElementById("demo").innerHTML ="The value of z is: " + z;<br>
&lt;/script&gt;<br>

&lt;/body&gt;<br>
&lt;/html&gt;<br>

	</div>
	<div >
		<a class="w3-btn w3-margin-bottom" href="{{ route('jsintro_next') }}" target="_blank">Coba Sendiri &raquo;</a>
	</div>

	<strong>Click aja &quot;Coba Sendiri&quot; Tombol ini Untuk melihat koding sebenarnya.</strong>

	</div>
	<hr>

<h2>JSA Examples</h2>
<p>Dalam tutorial HTML ini, Anda akan menemukan lebih dari 200 contoh. Dengan online kami
&quot;Coba Sendiri&quot; editor, Anda dapat mengedit dan menguji setiap contoh sendiri!</p>
<p><a href="html_examples.asp" class="ws-btn ws-grey ws-hover-black">Buka Contoh HTML!</a></p>
<div id="midcontentadcontainer" style="overflow:auto;text-align:center">
<!-- MidContent -->
<!-- <p class="adtext">Advertisement</p> -->


  <div id="adngin-mid_content-0"></div>
  
</div>
              
			</div>
			<!-- /.box-body -->
			<div class='box-footer no-border'>         
			</div><!-- /.box-footer -->
		</div><!-- /.box -->                              
	</div>        
					<!-- Main row -->
					<div class='row'>
							<!-- Left col -->
							<section class='col-lg-7 connectedSortable'>                            
									<!-- Custom tabs (Charts with tabs)-->                           
								 <!-- /.nav-tabs-custom -->
									<!-- Chat box -->                            
														 <!-- end chate -->                                              
									<!-- TO DO List menu sebelah kiri -->
									
									
							</section><!-- /.Left col -->
							<!-- right col (We are only adding the ID to make the widgets sortable)-->
							<!-- sing tengen -->
							<section class='col-lg-5 connectedSortable'> 
									<!-- Map box -->                            
									<!-- /.box -->
									<!-- solid sales graph -->
								 <!-- /.box  sebelah kanan-->
								 
								 
							</section><!-- right col -->
					</div><!-- /.row (main row) -->
			</section><!-- /.END MAIN CONTEN -->
	</aside>           
    <!-- /.Isi Content -->


</div>
@endsection

