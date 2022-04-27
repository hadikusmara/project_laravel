@extends('admin')

@section('main-content')
<style>
    h4 {
        border: 1px solid;
        background-color: #ff6347;
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
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12) !important;
    }

    .w3-code {
        width: auto;
        background-color: #fff;
        color: #000;
        padding: 8px 12px;
        border-left: 4px solid #4CAF50;
        word-wrap: break-word;
    }

    .w3-btn:hover,
    .w3-btn:active,
    .w3-example a:focus,
    .nextprev a:focus {
        box-shadow: none;
        background-color: #059862 !important;
    }

    .w3-btn,
    .w3-btn:link,
    .w3-btn:visited {
        color: #FFFFFF;
        background-color: #4CAF50;
    }

    .w3-example .w3-btn,
    .w3-example .ws-btn {
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
        <h1>Tutorial HTML Quotations Rafi Adib Fadhilah</h1>
    </section>

    <!-- Main content -->
    <section class='content'>
        <!-- Small boxes (Stat box) -->
        <div class='row'>
        </div><!-- /.row -->
        <div class='box box-primary'>
            <div class='box-header'>
                <i class='fa fa-th'></i>
                <h1>HTML <span class="color_h1">Quotation and Citation Elements</span></h1>
                <div class="w3-clear nextprev">
                    <a class="w3-left w3-btn" href="html_formatting.asp">&#10094; Previous</a>
                    <a class="w3-right w3-btn" href="html_comments.asp">Next &#10095;</a>
                </div>
                <hr>
                <p class="intro">In this chapter we will go through the
                    <code class="w3-codespan">&lt;blockquote&gt;</code>,<code class="w3-codespan">&lt;q&gt;</code>, <code class="w3-codespan">&lt;abbr&gt;</code>, <code class="w3-codespan">&lt;address&gt;</code>, <code class="w3-codespan">&lt;cite&gt;</code>,
                    and <code class="w3-codespan">&lt;bdo&gt;</code> HTML elements.
                </p>
                <hr>

                <div class="w3-example">
                    <h3>Example</h3>
                    <div class="w3-white w3-padding notranslate">
                        <p>Here is a quote from WWF's website:</p>
                        <blockquote cite="http://www.worldwildlife.org/who/index.html">
                            For nearly 60 years, WWF has been protecting the future of nature.
                            The world's leading conservation organization,
                            WWF works in 100 countries and is supported by more than one million members in the United States and
                            close to five million globally.</blockquote>
                    </div>
                    <a class="w3-btn w3-margin-bottom" href="{{ route('htmlquotations_next') }}" target="_blank">Coba Sendiri &raquo;</a>
                </div>
                <hr>

                <h2>HTML &lt;blockquote&gt; for Quotations</h2>
                <p>The HTML <code class="w3-codespan">&lt;blockquote&gt;</code> element defines a section that
                    is quoted from another source.</p>
                <p>Browsers usually indent <code class="w3-codespan">&lt;blockquote&gt;</code> elements.</p>
                <div class="w3-example">
                    <h3>Example</h3>
                    <div class="w3-code notranslate htmlHigh">
                        &lt;p&gt;Here is a quote from WWF's website:&lt;/p&gt;<br>&lt;blockquote cite=&quot;http://www.worldwildlife.org/who/index.html&quot;&gt;<br>
                        For 50 years, WWF has been protecting the future of nature.<br>The world's
                        leading conservation organization,<br>WWF works in 100 countries and is
                        supported by<br>1.2 million members in the United States and<br>close to 5
                        million globally.<br>&lt;/blockquote&gt;</div>
                    <a class="w3-btn w3-margin-bottom" href="{{ route('htmlquotations_next') }}" target="_blank">Coba Sendiri &raquo;</a>
                </div>
                <hr>

                <h2>HTML &lt;q&gt; for Short Quotations</h2>
                <p>The HTML <code class="w3-codespan">&lt;q&gt;</code> tag defines a short quotation.</p>
                <p>Browsers normally insert quotation marks around the quotation.</p>
                <div class="w3-example">
                    <h3>Example</h3>
                    <div class="w3-code notranslate htmlHigh">
                        &lt;p&gt;WWF's goal is to: &lt;q&gt;Build a future where people live in harmony with
                        nature.&lt;/q&gt;&lt;/p&gt;</div>
                    <a class="w3-btn w3-margin-bottom" href="{{ route('htmlquotations_next') }}" target="_blank">Coba Sendiri &raquo;</a>
                </div>
    </section><!-- /.END MAIN CONTEN -->
</aside>
<!-- /.Isi Content -->


</div>
@endsection