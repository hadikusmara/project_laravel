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
<h1>Html Formatting Muhammad Shidqi Pramudya Wibowo 201910225283</h1>
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
				</div>
<h1>HTML <span class="color_h1">Text Formatting</span></h1>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn" href="html_styles.asp">&#10094; Previous</a>
<a class="w3-right w3-btn" href="html_quotation_elements.asp">Next &#10095;</a>
</div>
<hr>
<p class="intro">HTML contains several elements for defining text with a special meaning.</p>
<hr>

<div class="w3-example">
<h3>Example</h3>
<div class="w3-white w3-padding notranslate">
<p><b>This text is bold</b></p>
<p><i>This text is italic</i></p>
<p>This is<sub> subscript</sub> and <sup>superscript</sup></p>
</div>
<a class="w3-btn w3-margin-bottom" href="{{ route('htmlformatting_next') }}" target="_blank">Coba Sendiri &raquo;</a>
	</div>
<hr>

<h2>HTML Formatting Elements</h2>

<p>Formatting elements were designed to display special types of text:</p>
<ul>
 <li><code class="w3-codespan">&lt;b&gt;</code> - Bold text</li>
 <li><code class="w3-codespan">&lt;strong&gt;</code> - Important text</li>
 <li><code class="w3-codespan">&lt;i&gt;</code> - Italic text</li>
 <li><code class="w3-codespan">&lt;em&gt;</code> - Emphasized text</li>
 <li><code class="w3-codespan">&lt;mark&gt;</code> - Marked text</li>
 <li><code class="w3-codespan">&lt;small&gt;</code> - Smaller text</li>
 <li><code class="w3-codespan">&lt;del&gt;</code> - Deleted text</li>
 <li><code class="w3-codespan">&lt;ins&gt;</code> - Inserted text</li>
 <li><code class="w3-codespan">&lt;sub&gt;</code> - Subscript text</li>
 <li><code class="w3-codespan">&lt;sup&gt;</code> - Superscript text</li>
</ul>
<hr>

<h2>HTML &lt;b&gt; and &lt;strong&gt; Elements</h2>
<p>The HTML <code class="w3-codespan">&lt;b&gt;</code> element defines bold text, 
without any extra importance.</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
    &lt;b&gt;This text is bold&lt;/b&gt;</div>
<a class="w3-btn w3-margin-bottom" href="tryit.asp?filename=tryhtml_formatting_b" target="_blank">Try it Yourself &raquo;</a>
</div>
<p>The HTML <code class="w3-codespan">&lt;strong&gt;</code> element defines text 
with strong importance. The content inside is typically displayed in bold.</p>
<div class="w3-example">
<h3>Example</h3>
 <div class="w3-code notranslate htmlHigh">
     &lt;strong&gt;This text is 
     important!&lt;/strong&gt;</div>
	 <a class="w3-btn w3-margin-bottom" href="{{ route('htmlformatting_next') }}" target="_blank">Coba Sendiri &raquo;</a>
	</div>
<hr>
<div id="midcontentadcontainer" style="overflow:auto;text-align:center">
<!-- MidContent -->
<!-- <p class="adtext">Advertisement</p> -->

  <div id="adngin-mid_content-0"></div>
  
</div>
<hr>
<h2>HTML &lt;i&gt; and &lt;em&gt; Elements</h2>
<p>The HTML <code class="w3-codespan">&lt;i&gt;</code> element defines a part of 
text in an alternate voice or mood. The content inside is typically displayed in 
italic.</p>
<p><strong>Tip:</strong> The <code class="w3-codespan">&lt;i&gt;</code> tag is often used to indicate a technical term, 
a phrase from another language, a thought, a ship name, etc.</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
    &lt;i&gt;This text is italic&lt;/i&gt;</div>
	<a class="w3-btn w3-margin-bottom" href="{{ route('htmlformatting_next') }}" target="_blank">Coba Sendiri &raquo;</a>
	</div>
<p>The HTML <code class="w3-codespan">&lt;em&gt;</code> element defines 
emphasized text. The content inside is typically displayed in italic.</p>
<p><strong>Tip:</strong> A screen reader will pronounce the words in <code class="w3-codespan">&lt;em&gt;</code> 
with an emphasis, using verbal stress.</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
    &lt;em&gt;This text is 
 emphasized&lt;/em&gt;</div>
 <a class="w3-btn w3-margin-bottom" href="{{ route('htmlformatting_next') }}" target="_blank">Coba Sendiri &raquo;</a>
	</div>
<hr>

<h2>HTML &lt;small&gt; Element</h2>
<p>The HTML <code class="w3-codespan">&lt;small&gt;</code> element defines 
smaller text:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
  &lt;small&gt;This is some smaller text.&lt;/small&gt;<br>
</div>
<a class="w3-btn w3-margin-bottom" href="{{ route('htmlformatting_next') }}" target="_blank">Coba Sendiri &raquo;</a>
	</div>
<hr>

<h2>HTML &lt;mark&gt; Element</h2>
<p>The HTML <code class="w3-codespan">&lt;mark&gt;</code> element defines text 
that should be marked or highlighted:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
  &lt;p&gt;Do not forget to buy &lt;mark&gt;milk&lt;/mark&gt; today.&lt;/p&gt;<br>
</div>
<a class="w3-btn w3-margin-bottom" href="{{ route('htmlformatting_next') }}" target="_blank">Coba Sendiri &raquo;</a>
	</div>
<hr>

<h2>HTML &lt;del&gt; Element</h2>
<p>The HTML <code class="w3-codespan">&lt;del&gt;</code> element defines text 
that has been deleted from a document. Browsers will usually strike a line 
through deleted text:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 &lt;p&gt;My favorite color is &lt;del&gt;blue&lt;/del&gt; red.&lt;/p&gt;<br>
</div>
<a class="w3-btn w3-margin-bottom" href="{{ route('htmlformatting_next') }}" target="_blank">Coba Sendiri &raquo;</a>
	</div>

<hr>
<h2>HTML &lt;ins&gt; Element</h2>
<p>The HTML <code class="w3-codespan">&lt;ins&gt;</code> element defines a text 
that has been inserted into a document. Browsers will usually underline inserted 
text:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
  &lt;p&gt;My favorite color is &lt;del&gt;blue&lt;/del&gt; &lt;ins&gt;red&lt;/ins&gt;.&lt;/p&gt;<br>
</div>
<a class="w3-btn w3-margin-bottom" href="{{ route('htmlformatting_next') }}" target="_blank">Coba Sendiri &raquo;</a>
	</div>

<hr>
<h2>HTML &lt;sub&gt; Element</h2>
<p>The HTML <code class="w3-codespan">&lt;sub&gt;</code> element defines 
subscript text. Subscript text appears half a character below the normal line, 
and is sometimes rendered in a smaller font. Subscript text can be used for 
chemical formulas, like H<sub>2</sub>O:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 &lt;p&gt;This 
 is &lt;sub&gt;subscripted&lt;/sub&gt; text.&lt;/p&gt;<br>
</div>
<a class="w3-btn w3-margin-bottom" href="{{ route('htmlformatting_next') }}" target="_blank">Coba Sendiri &raquo;</a>
	</div>

<hr>
<h2>HTML &lt;sup&gt; Element</h2>
<p>The HTML <code class="w3-codespan">&lt;sup&gt;</code> element defines 
superscript text. Superscript text appears half a character above the normal 
line, and is sometimes rendered in a smaller font. Superscript text can be used 
for footnotes, like WWW<sup>[1]</sup>:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code notranslate htmlHigh">
 &lt;p&gt;This 
 is &lt;sup&gt;superscripted&lt;/sup&gt; text.&lt;/p&gt;<br>
</div>
<a class="w3-btn w3-margin-bottom" href="{{ route('htmlformatting_next') }}" target="_blank">Coba Sendiri &raquo;</a>
	</div>
<hr>
<h2>HTML Exercises</h2>
<form autocomplete="off" id="w3-exerciseform" action="exercise.asp?filename=exercise_html_formatting1" method="post" target="_blank">
<h2>Test Yourself With Exercises</h2>
<div class="exercisewindow">
<h2>Exercise:</h2>
<p>Add extra importance to the word "degradation" in the paragraph below.</p>
<div class="exerciseprecontainer">
&lt;p&gt;
<br>
WWF's mission is to stop the
<input name="ex1" maxlength="8" style="width: 86px;">degradation<input name="ex2" maxlength="9" style="width: 96px;"> of our
planet's natural environment.
<br>
&lt;/p&gt;
</div>
<br>
<button type="submit" class="w3-btn w3-margin-bottom">Submit Answer &raquo;</button>
<p><a target="_blank" href="exercise.asp?filename=exercise_html_formatting1">Start the Exercise</a></p>
</div>
</form>
<hr>

<h2>HTML Text Formatting Elements</h2>
<table class="ws-table-all notranslate">
<tr>
<th style="width:20%">Tag</th>
<th>Description</th>
</tr>
<tr>
<td><a href="/tags/tag_b.asp">&lt;b&gt;</a></td>
<td>Defines bold text</td>
</tr>
<tr>
<td><a href="/tags/tag_em.asp">&lt;em&gt;</a></td>
<td>Defines emphasized text&nbsp;</td>
</tr>
<tr>
<td><a href="/tags/tag_i.asp">&lt;i&gt;</a></td>
<td>Defines a part of text in an alternate voice or mood</td>
</tr>
<tr>
<td><a href="/tags/tag_small.asp">&lt;small&gt;</a></td>
<td>Defines smaller text</td>
</tr>
<tr>
<td><a href="/tags/tag_strong.asp">&lt;strong&gt;</a></td>
<td>Defines important text</td>
</tr>
<tr>
<td><a href="/tags/tag_sub.asp">&lt;sub&gt;</a></td>
<td>Defines subscripted text</td>
</tr>
<tr>
<td><a href="/tags/tag_sup.asp">&lt;sup&gt;</a></td>
<td>Defines superscripted text</td>
</tr>
<tr>
<td><a href="/tags/tag_ins.asp">&lt;ins&gt;</a></td>
<td>Defines inserted text</td>
</tr>
<tr>
<td><a href="/tags/tag_del.asp">&lt;del&gt;</a></td>
<td>Defines deleted text</td>
</tr>
<tr>
<td><a href="/tags/tag_mark.asp">&lt;mark&gt;</a></td>
<td>Defines marked/highlighted text</td>
</tr>
</table>
<div class="w3-note w3-panel">
  <p>For a complete list of all available HTML tags, visit our <a href="/tags/default.asp">HTML Tag Reference</a>.</p>
</div>
<!-- /.row (main row) -->
			</section><!-- /.END MAIN CONTEN -->
	</aside>           
    <!-- /.Isi Content -->


</div>
@endsection

