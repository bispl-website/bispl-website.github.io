<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 plus MathML 2.0//EN" "http://www.w3.org/Math/DTD/mathml2/xhtml-math11-f.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:mml="http://www.w3.org/1998/Math/MathML">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=100"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="citation_fulltext_html_url" content="https://synapse.koreamed.org/articles/1142721"/>
<meta name="citation_publisher" content="The Korean Society of Radiology"/>
<meta name="citation_journal_title" content="Korean Journal of Radiology"/>
<meta name="citation_journal_abbrev" content="Korean J Radiol"/>
<meta name="citation_title" content="Low-Dose Abdominal CT Using a Deep Learning-Based Denoising Algorithm: A Comparison with CT Reconstructed with Filtered Back Projection or Iterative Reconstruction Algorithm"/>
<meta name="citation_author" content="Yoon Joo Shin"/>
<meta name="citation_author_institution" content="Department of Radiology, Konkuk University Medical Center, Seoul, Korea."/>
<meta name="citation_author" content="Won Chang"/>
<meta name="citation_author_institution" content="Department of Radiology, Seoul National University Bundang Hospital, Seongnam, Korea."/>
<meta name="citation_author" content="Jong Chul Ye"/>
<meta name="citation_author_institution" content="Bio Imaging and Signal Processing Lab, Department of Bio and Brain Engineering, KAIST, Daejeon, Korea."/>
<meta name="citation_author" content="Eunhee Kang"/>
<meta name="citation_author_institution" content="Bio Imaging and Signal Processing Lab, Department of Bio and Brain Engineering, KAIST, Daejeon, Korea."/>
<meta name="citation_author" content="Dong Yul Oh"/>
<meta name="citation_author_institution" content="Interdisciplinary Program in Bioengineering, Seoul National University, Seoul, Korea."/>
<meta name="citation_author" content="Yoon Jin Lee"/>
<meta name="citation_author_institution" content="Department of Radiology, Seoul National University Bundang Hospital, Seongnam, Korea."/>
<meta name="citation_author" content="Ji Hoon Park"/>
<meta name="citation_author_institution" content="Department of Radiology, Seoul National University Bundang Hospital, Seongnam, Korea."/>
<meta name="citation_author" content="Young Hoon Kim"/>
<meta name="citation_author_institution" content="Department of Radiology, Seoul National University Bundang Hospital, Seongnam, Korea."/>
<meta name="citation_author_email" content="changwon1981@gmail.com"/>
<meta name="citation_publication_date" content="2020/02/11"/>
<meta name="citation_volume" content="21"/>
<meta name="citation_issue" content="3"/>
<meta name="citation_firstpage" content="356"/>
<meta name="citation_lastpage" content="364"/>
<meta name="citation_doi" content="10.3348/kjr.2019.0413"/>
<meta name="citation_pdf_url" content="https://synapse.koreamed.org/upload/SynapseData/PDFData/0068kjr/kjr-21-356.pdf">
<meta name="citation_keywords" content="Deep learning; Denoising; Iterative reconstruction; CT; Phantoms; Radiation dose"/>
    <link rel="shortcut icon" href="/image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/image/favicon.ico" type="image/x-icon">
    <title>KoreaMed Synapse</title>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/jquery.bxslider.css">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" type="text/css" href="/script/sub.css"/>
    	<link rel="shortcut icon" href="/image/icon/favicon.ico">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.0/jquery.js"></script>
    <script src="/script/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="/script/common.js"></script>
	<script type="text/javascript" src="/script/user.js"></script>
	<script type="text/javascript" src="/script/user_sub.js"></script>

            <script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-MML-AM_HTMLorMML-full"></script>
    
    <script type="text/javascript">
        <!--
        var acIdx = -1;
        function autoCompleteHead(v) {
            if(event.keyCode >= 37 && event.keyCode <= 40) {
                if(event.keyCode % 2) return;
                var max = $(".autoKeywords").size();
                if(event.keyCode == 38) acIdx--;
                else if(event.keyCode == 40) acIdx++;
                if(acIdx < 0) acIdx = max-1;
                if(acIdx > max-1) acIdx = 0;
                $(".autoKeywords").css("background","#ffffff");
                $(".autoKeywords").eq(acIdx).css("background","#e9e9e9");
                $("input[name='term_all']").val($(".autoKeywords").eq(acIdx).text());
                return;
            }
            acIdx = -1;
            $.post("/func/ajax.php", "type=autoComplete2&value="+v, function (d, s) {
                if(s == "success") {
                    if(d != "") {
                        $("#autoCompleteLayerHead").attr("class", "");
                        $("#autoCompleteLayerHead").html(d);
                    } else {
                        $("#autoCompleteLayerHead").attr("class", "none");
                        $("#autoCompleteLayerHead").html("");
                    }
                }
            });
        }
        //-->
    </script>
    <meta name="google-translate-customization" content="c76a81f9675326a5-9a83cfab5ac81fe6-gc853b503d46f6207-8">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RS66D40VW5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RS66D40VW5');
</script>
</head>




<body>
    <div id="wrapper">
        <div id="header" class="sub" style="border:none;">
            <div class="container">
                <div id="top-logo">
					<img src="/image/main/logo.png" alt="" usemap="#header_logo">
					<map name="header_logo">
					 <area shape="rect" coords="0,11,140,60" href="https://www.kamje.or.kr/" target="_blank" onfocus="this.blur()">
					 <area shape="rect" coords="160,11,340,60" href="https://synapse.koreamed.org" onfocus="this.blur()">
					</map>

				</div>
                <div class="fr">
                    <ul id="gnb">
                        <!--<li>
                            <a href="/">About Synapse</a>
                            <ul>
                                <li title="1st"><a href="/">1st</a></li>
                                <li title="2nd"><a href="/">2nd</a></li>
                                <li title="3rd"><a href="/">3rd</a></li>
                                <li title="4th 134152bhdtdddej"><a href="/">4th 134152bhdtdddej</a></li>
                            </ul>
                        </li>
                        <li><a href="/">User Guide</a></li>
                        <li><a href="/">Journal List</a></li>
                        <li><a href="/">Contact Us</a></li>-->
                                                    <li>
                                <font style='cursor:pointer;'>About Synapse</font>
                                                                <ul>
                                                                        										<li><a href="/about/overview.php" title="Overview">Overview</a></li>
									                                                                        										<li><a href="/about/disclaimer.php" title="Disclaimer">Disclaimer</a></li>
									                                                                        										<li><a href="/journals/list.php" title="Journal list">Journal list</a></li>
									                                                                        										<li><a href="/advanced/" title="Advanced">Advanced</a></li>
									                                                                        										<li><a href="/about/contact.php" title="Contact us">Contact us</a></li>
									                                                                        										<li><a href="/advanced/help.php" title="Search Guidelines">Search Guidelines</a></li>
									                                                                    </ul>
                                                            </li>
                                                    <li>
                                <font style='cursor:pointer;'>How to Participate</font>
                                                                <ul>
                                                                        										<li><a href="/pub/how_to_add.php" title="How to add a journal to Synapse">How to add a journal to Synapse</a></li>
									                                                                        										<li><a href="/pub/how_to_validation.php" title="How to submit a file after validating the JATS XML file">How to submit a file after validating the JATS XML file</a></li>
									                                                                        										<li><a href="/tools/stylechecker/" title="File Validation tools">File Validation tools</a></li>
									                                                                    </ul>
                                                            </li>
                                                    <li>
                                <font style='cursor:pointer;'>KAMJE Databases</font>
                                                                <ul>
                                                                        										<li><a href="http://koreamed.org" title="KoreaMed" target='_blank'>KoreaMed</a></li>
									                                                                        										<li><a href="http://komci.org/" title="KoMCI" target='_blank'>KoMCI</a></li>
									                                                                        										<li><a href="https://journals.koreamed.org/" title="Korean Medical Journal Information" target='_blank'>Korean Medical Journal Information</a></li>
									                                                                        										<li><a href="https://www.kamje.or.kr/" title="KAMJE" target='_blank'>KAMJE</a></li>
									                                                                    </ul>
                                                            </li>
                                            </ul>
					<a href="javascript:;" class="mobile_btn"><img src="/image/mobile_btn.png" alt=""></a>
					<div class="mobile_menu">
						<div class="mobile_menu_header">
							<h2><img src="/image/menu_logo.png" alt=""></h2>
							<a href="javascript:;" class="mobile_menu_close"><img src="/image/mobile_close.png" alt=""></a>
						</div>
						<ul>
							<!--<li>
								<a href="/">About Synapse</a>
								<ul>
									<li title="1st"><a href="/">1st</a></li>
									<li title="2nd"><a href="/">2nd</a></li>
									<li title="3rd"><a href="/">3rd</a></li>
									<li title="4th 134152bhdtdddej"><a href="/">4th 134152bhdtdddej</a></li>
								</ul>
							</li>
							<li><a href="/">User Guide</a></li>
							<li><a href="/">Journal List</a></li>
							<li><a href="/">Contact Us</a></li>-->
															<li>
									<font style='cursor:pointer;'>About Synapse</font>
																		<ul>
																															<li><a href="/about/overview.php" title="Overview">Overview</a></li>
																																									<li><a href="/about/disclaimer.php" title="Disclaimer">Disclaimer</a></li>
																																									<li><a href="/journals/list.php" title="Journal list">Journal list</a></li>
																																									<li><a href="/advanced/" title="Advanced">Advanced</a></li>
																																									<li><a href="/about/contact.php" title="Contact us">Contact us</a></li>
																																									<li><a href="/advanced/help.php" title="Search Guidelines">Search Guidelines</a></li>
																													</ul>
																	</li>
															<li>
									<font style='cursor:pointer;'>How to Participate</font>
																		<ul>
																															<li><a href="/pub/how_to_add.php" title="How to add a journal to Synapse">How to add a journal to Synapse</a></li>
																																									<li><a href="/pub/how_to_validation.php" title="How to submit a file after validating the JATS XML file">How to submit a file after validating the JATS XML file</a></li>
																																									<li><a href="/tools/stylechecker/" title="File Validation tools">File Validation tools</a></li>
																													</ul>
																	</li>
															<li>
									<font style='cursor:pointer;'>KAMJE Databases</font>
																		<ul>
																															<li><a href="http://koreamed.org" title="KoreaMed" target='_blank'>KoreaMed</a></li>
																																									<li><a href="http://komci.org/" title="KoMCI" target='_blank'>KoMCI</a></li>
																																									<li><a href="https://journals.koreamed.org/" title="Korean Medical Journal Information" target='_blank'>Korean Medical Journal Information</a></li>
																																									<li><a href="https://www.kamje.or.kr/" title="KAMJE" target='_blank'>KAMJE</a></li>
																													</ul>
																	</li>
													</ul>
					</div>
					<script>
						$(".mobile_btn").click(function(){
							$('.mobile_menu').addClass('active');
							$('body').addClass('active');
						});
						$(".mobile_menu_close").click(function(){
							$('.mobile_menu').removeClass('active');
							$('body').removeClass('active');
						});
					</script>
                    <!--form action="" id="search-form">
                        <input type="text" name="search" id="search">
                        <input type="submit" value="">
                    </form-->

                </div>
            </div>
			
			
			<div style="width:100%;height:90%;border-bottom:1px solid #D1D1D1;">
				<div class="sub_container">
					<form id="search-form" method="post" action="/advanced/?term=advanced">
						<input type="text" name="term_all" id="search" placeholder="Search Synapse" value=''>
						<input type="submit" value="Search">
					</form>
					<div style='display:block;padding:5px 14px;font-size:1.1em;'>
						<a href="/advanced/">-Advanced</a>&nbsp;&nbsp;
						<a href="/advanced/help.php">-Search Guidelines</a>
					</div>
				</div>
			</div>
			        </div>

        <div id="sub_content">
<object type="application/x-shockwave-flash" width="0" height="0"></object>
<link rel="stylesheet" href="/flowplayer/skin/minimalist.css">
<style>
.flowplayer { width: 690px; }
</style>
<script src="/flowplayer/flowplayer.min.js"></script>
<div class="container">

<p style='padding-bottom:16px;font-size:1.1em;'><a href='/journals/list.php'>Journal List</a> > <a href='/journals/68/'>Korean J Radiol</a> > <a href='/issues/8793/'>v.21(3)</a> > <a href='/articles/1142721'>1142721</a></p>

<div class="bm30">
</div>

<!-- wingBnr 버튼 추가-->
<div id="wingBnr">
	<a href="" class="goTop"><font>Go to Top</font><span>Go to Top</span></a>
	<a href="" class="goDown"><font>Go to Bottom</font><span>Go to Bottom</span></a>
</div>
<!-- // wingBnr 버튼 추가-->	

<div class="table">

<div id="articleLayer" class="cell" style="background:url('/func/border.php?txt=Korean J Radiol&c=') repeat-y; font-family: 'Georgia', 'Nanum Gothic';padding-left:30px;">


<div class="mobile_tool">
	<dl class="tool">
		<dt>TOOLS</dt>

				<dd>
			<ul>
				<li><a href="/func/download.php?path=L2hvbWUvdmlydHVhbC9rYW1qZS9zeW5hcHNlL3VwbG9hZC9TeW5hcHNlRGF0YS9QREZEYXRhLzAwNjhranIva2pyLTIxLTM1Ni5wZGY=&filename=a2pyLTIxLTM1Ni5wZGY=")'><img src="/image/aside/ic_pdf.gif" alt="PDF Link" border="0"/> PDF</a></li><li><a href="/func/download.php?path=L2hvbWUvdmlydHVhbC9rYW1qZS9zeW5hcHNlL3VwbG9hZC9TeW5hcHNlRGF0YS9UcmFuc2Zvcm1EYXRhL0VQVUIvMDA2OGtqci82OF9ranJfMjFfM18zNTYuZXB1Yg==&filename=Njhfa2pyXzIxXzNfMzU2LmVwdWI=")'><img src="/image/aside/ic_epub.gif" alt="ePub Link" border="0"/> ePub</a></li>
				<li>
					<a href="/utils/CitationForm.php?ksid=1142721" target="_blank" onclick="window.open(this.href, '_blank', 'width=600,height=340'); return false;"><img src="/image/aside/ic_citation.gif" alt="Citation" border=0> Citation</a>
				</li>
				
				<!--li>
					<a href="/journal/crossRefTDM.php?number=" target="_blank" onclick="window.open(this.href, 'CrossRef TDM', 'width=800,height=800,scrollbars=yes');return false;"><img src="/image/aside/ic_tdm.gif" alt="CrossRef TDM" border="0"/> CrossRef TDM</a>
				</li-->

				<li><a href="javascript:window.print();"><img src="/image/aside/ic_print.gif" alt="" /> Print</a></li>

				<li>
					<a href="http://www.facebook.com/sharer.php?u=&t=" onclick="window.open(this.href, 'Facebook', 'width=800,height=500,scrollbars=yes');return false;">
						<img src="/image/aside/ic_facebook.gif" alt="Facebook" style='padding-left:10px;padding-right:0px;'/></a>
					<a href="http://twitter.com/home?status=" onclick="window.open(this.href, 'Twitter', 'width=750,height=500,scrollbars=yes');return false;">
						<img src="/image/aside/ic_twitter.gif" alt="Twitter" style='padding-left:10px;padding-right:0px;'/></a>
					<a href="https://www.linkedin.com/shareArticle?mini=true&url=&title=" onclick="window.open(this.href, 'LinkedIn', 'width=750,height=500,scrollbars=yes');return false;">
						<img src="/image/aside/ic_linkedin.gif" alt="Linked In" style='padding-left:10px;padding-right:0px;'/></a>
				</li>

			</ul>
		</dd>

			</dl>
</div>

<style>
<!--
.panel .label,.caption,.artCat {
	color: ;
}

.main-title,.section-title,.callout-title {
	color: ;
	font-weight: bold;
}
/* jats start */
table h2 {
	font-size: 16px;
}

table h3 {
	font-size: 15px;
}

h5 {
	font-size: 15px;
}

.PubTitle {
	line-height: normal;
}

.abstract {
	margin-top: 10px;
}

a[name='bibrLink']:link {
	color: #046eb8;
}

a[name='figLink']:link {
	color: #046eb8;
}

a[name='tableLink']:link {
	color: #046eb8;
}

.abstract {
	border-top: 1px solid #184CA1;
	border-bottom: 1px solid #184CA1;
}

.caption {
	color: #184CA1;
}

div.panel,.fig-group {
	background:#f5f5f5;
	padding:25px;
	margin:15px 0px;
}

div.panel table, div.panel img {
	cursor: pointer;
}

.section-title {
	margin-top: 25px;
	margin-bottom: 5px;
}

.subsection-title {
	margin-top: 15px;
	margin-bottom: 5px;
}

.metadata-entry {
	margin: 2px 0px;
}

p.address-line {
	margin-top: 0em;
	margin-bottom: 0em;
	margin-left: 2em
}

ul,ol {
	margin-bottom: 1em
}

li {
	margin-top: 0.2em;
	margin-bottom: 0em;
	font-size: 9pt
}

li>p {
	margin-top: 0.1em;
	margin-bottom: 0em
}

div.def-list {
	border-spacing: 0.25em
}

div.def-list p {
	margin:0px; padding:0px;
}

div.panel {
	margin-bottom:20px;
}

.ref_layer {
	margin-bottom: 10px;
	white-space: normal;
	word-break: break-all;
}

.apStyle {
	text-indent: 10px;
}
#inThisPage {background:#fff;}
.table-wrap thead tr {background:#CAD6FA;}
.table-wrap tbody tr {background:#ffffff;}
.corresp p {
	margin:0;padding:0;
}
/* .table-wrap tbody tr:nth-child(even) {background:#E3EAFC;} */
/* .table-wrap th,.table-wrap td { padding:5px; } */

/* jats end */
-->
</style>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Shin, Chang, Ye, Kang, Oh, Lee, Park, and Kim: Low-Dose Abdominal CT Using a Deep Learning-Based Denoising Algorithm: A Comparison with CT Reconstructed with Filtered Back Projection or Iterative Reconstruction Algorithm</title>
</head>
<body>
<div id="article-front" class="front">
<div class="metadata"><div class="metadata-group">
<div class="artCat" style="font-weight:bold;">Technology, Experiment, and Physics</div>Original Article</div></div>
<div class="metadata"><div class="metadata-group"></div></div>
<div class="metadata two-column table"><div class="row">
<div class="metadata-group" style="font-size:15px;"><p class="metadata-entry">Korean Journal of Radiology 2020; 21(3): 356-364.</p></div>
<div class="metadata-group" style="font-size:15px;">
<div class="metadata-group"><p class="metadata-entry"><span class="generated">Published online: </span>11 February 2020 </p></div>
<p class="metadata-entry"><span class="generated">DOI: </span><a target="_blank" href="https://doi.org/10.3348/kjr.2019.0413">https://doi.org/10.3348/kjr.2019.0413</a></p>
</div>
<div class="metadata centered"></div>
<div class="metadata-group" style="margin-bottom:10px;"></div>
<div class="metadata-group"></div>
<div class="metadata centered"><h3 class="PubTitle">Low-Dose Abdominal CT Using a Deep Learning-Based Denoising Algorithm: A Comparison with CT Reconstructed with Filtered Back Projection or Iterative Reconstruction Algorithm</h3></div>
<div class="metadata-group" style="margin-bottom:10px;">Yoon Joo Shin, MD<sup>1</sup><a href="https://orcid.org/0000-0001-7872-5552" alt="https://orcid.org/0000-0001-7872-5552" title="https://orcid.org/0000-0001-7872-5552" target="_blank"><img src="/image/orcid_16x16.gif" valign="middle"></a>, Won Chang, MD<sup>2</sup><a href="https://orcid.org/0000-0001-7367-9841" alt="https://orcid.org/0000-0001-7367-9841" title="https://orcid.org/0000-0001-7367-9841" target="_blank"><img src="/image/orcid_16x16.gif" valign="middle"></a>, Jong Chul Ye, PhD<sup>3</sup><a href="https://orcid.org/0000-0001-9763-9609" alt="https://orcid.org/0000-0001-9763-9609" title="https://orcid.org/0000-0001-9763-9609" target="_blank"><img src="/image/orcid_16x16.gif" valign="middle"></a>, Eunhee Kang, PhD<sup>3</sup><a href="https://orcid.org/0000-0001-9921-8103" alt="https://orcid.org/0000-0001-9921-8103" title="https://orcid.org/0000-0001-9921-8103" target="_blank"><img src="/image/orcid_16x16.gif" valign="middle"></a>, Dong Yul Oh, BS<sup>4</sup><a href="https://orcid.org/0000-0002-8393-7960" alt="https://orcid.org/0000-0002-8393-7960" title="https://orcid.org/0000-0002-8393-7960" target="_blank"><img src="/image/orcid_16x16.gif" valign="middle"></a>, Yoon Jin Lee, MD<sup>2</sup><a href="https://orcid.org/0000-0002-3572-029X" alt="https://orcid.org/0000-0002-3572-029X" title="https://orcid.org/0000-0002-3572-029X" target="_blank"><img src="/image/orcid_16x16.gif" valign="middle"></a>, Ji Hoon Park, MD<sup>2</sup><a href="https://orcid.org/0000-0002-6794-4909" alt="https://orcid.org/0000-0002-6794-4909" title="https://orcid.org/0000-0002-6794-4909" target="_blank"><img src="/image/orcid_16x16.gif" valign="middle"></a>, Young Hoon Kim, MD<sup>2</sup><a href="https://orcid.org/0000-0001-5554-3828" alt="https://orcid.org/0000-0001-5554-3828" title="https://orcid.org/0000-0001-5554-3828" target="_blank"><img src="/image/orcid_16x16.gif" valign="middle"></a>
</div>
<div class="metadata-group" style="margin-bottom:10px;">
<p class="metadata-entry"><a id="A1"><!-- named anchor --></a><sup>1</sup>Department of Radiology, Konkuk University Medical Center, Seoul, Korea.</p>
<p class="metadata-entry"><a id="A2"><!-- named anchor --></a><sup>2</sup>Department of Radiology, Seoul National University Bundang Hospital, Seongnam, Korea.</p>
<p class="metadata-entry"><a id="A3"><!-- named anchor --></a><sup>3</sup>Bio Imaging and Signal Processing Lab, Department of Bio and Brain Engineering, KAIST, Daejeon, Korea.</p>
<p class="metadata-entry"><a id="A4"><!-- named anchor --></a><sup>4</sup>Interdisciplinary Program in Bioengineering, Seoul National University, Seoul, Korea.</p>
</div>
<div class="metadata centered"></div>
<div class="metadata-group author_layer" style="margin-bottom:10px;"></div>
<div class="metadata-group aff_layer"></div>
<div class="metadata-group">
<div class="metadata-chunk">
<a id="idm140649067361936"><!-- named anchor --></a><p class="metadata-entry">Corresponding author: Won Chang, MD, Division of Abdomen Imaging, Department of Radiology, Seoul National University Bundang Hospital, 82 Gumi-ro 173beon-gil, Bundang-gu, Seongnam 13620, Korea. Tel: (8231) 787-7607, Fax: (8231) 787-4011, <a href="mailto:changwon1981@gmail.com">changwon1981@gmail.com</a> </p>
</div> Received 13 June 2019       Accepted 7 November 2019<p class="metadata-entry">Copyright © 2020 The Korean Society of Radiology </p>
<p class="metadata-entry">The Korean Society of Radiology </p>
<span class="permissions_"><p class="metadata-entry"><span class="generated"> (<span class="data">open-access</span>): </span> </p>
<div class="metadata-chunk"><div class="first" id="idm140649067346848">This is an Open Access article distributed under the terms of the Creative Commons Attribution Non-Commercial License (<a target="xrefwindow" href="http://creativecommons.org/licenses/by-nc/4.0/" id="idm140649067346432">http://creativecommons.org/licenses/by-nc/4.0/</a>) which permits unrestricted non-commercial use, distribution, and reproduction in any medium, provided the original work is properly cited.</div></div></span>
</div>
</div></div>
<div id="cited_info" style="display:none;">This article has been <a href="" id="cited_link">cited</a> by other articles in ScienceCentral.</div>
<div id="before_abstract"></div>
<div class="abstract-layer">
<h3 class="callout-title" id="__abstract" style="margin:15px 0 0 0;">Abstract</h3>
<div class="abstract"><p><div class="section" id="">
<a id="idm140649067344208"><!-- named anchor --></a><h3 class="section-title"> Objective</h3>
<div id="idm140649067343408">To compare the image quality of low-dose (LD) computed tomography (CT) obtained using a deep learning-based denoising algorithm (DLA) with LD CT images reconstructed with a filtered back projection (FBP) and advanced modeled iterative reconstruction (ADMIRE).</div>
</div><div class="section" id="">
<a id="idm140649067342528"><!-- named anchor --></a><h3 class="section-title"> Materials and Methods</h3>
<div id="idm140649067341728">One hundred routine-dose (RD) abdominal CT studies reconstructed using FBP were used to train the DLA. Simulated CT images were made at dose levels of 13%, 25%, and 50% of the RD (DLA-1, -2, and -3) and reconstructed using FBP. We trained DLAs using the simulated CT images as input data and the RD CT images as ground truth. To test the DLA, the American College of Radiology CT phantom was used together with 18 patients who underwent abdominal LD CT. LD CT images of the phantom and patients were processed using FBP, ADMIRE, and DLAs (LD-FBP, LD-ADMIRE, and LD-DLA images, respectively). To compare the image quality, we measured the noise power spectrum and modulation transfer function (MTF) of phantom images. For patient data, we measured the mean image noise and performed qualitative image analysis. We evaluated the presence of additional artifacts in the LD-DLA images.</div>
</div><div class="section" id="">
<a id="idm140649067340224"><!-- named anchor --></a><h3 class="section-title"> Results</h3>
<div id="idm140649067339424">LD-DLAs achieved lower noise levels than LD-FBP and LD-ADMIRE for both phantom and patient data (all <i>p</i> &lt; 0.001). LD-DLAs trained with a lower radiation dose showed less image noise. However, the MTFs of the LD-DLAs were lower than those of LD-ADMIRE and LD-FBP (all <i>p</i> &lt; 0.001) and decreased with decreasing training image dose. In the qualitative image analysis, the overall image quality of LD-DLAs was best for DLA-3 (50% simulated radiation dose) and not significantly different from LD-ADMIRE. There were no additional artifacts in LD-DLA images.</div>
</div><div class="section" id="">
<a id="idm140649067337328"><!-- named anchor --></a><h3 class="section-title"> Conclusion</h3>
<div id="idm140649067336528">DLAs achieved less noise than FBP and ADMIRE in LD CT images, but did not maintain spatial resolution. The DLA trained with 50% simulated radiation dose showed the best overall image quality.</div>
</div></p></div>
</div>
<p class="metadata-entry"><span class="generated">Keywords: </span><a href="/advanced/?term=keywords&amp;keyword=Deep%20learning">Deep learning</a>, <a href="/advanced/?term=keywords&amp;keyword=Denoising">Denoising</a>, <a href="/advanced/?term=keywords&amp;keyword=Iterative%20reconstruction">Iterative reconstruction</a>, <a href="/advanced/?term=keywords&amp;keyword=CT">CT</a>, <a href="/advanced/?term=keywords&amp;keyword=Phantoms">Phantoms</a>, <a href="/advanced/?term=keywords&amp;keyword=Radiation%20dose">Radiation dose</a> </p>
</div>
<div id="article-body" class="body">
<div class="section" id="intro">
<a id="idm140649067320512"><!-- named anchor --></a><h3 class="main-title">INTRODUCTION</h3>
<div id="idm140649067319408">Computed tomography (CT) is a widely used imaging modality because of its wide availability. However, concerns regarding radiation exposure persist as CT itself emits ionizing radiation and the number of CT scans performed increases (<a href="#B1" name="bibrLink" class="bibrClassB1">1</a><a href="#B2" name="bibrLink" class="bibrClassB2">2</a>). Since reducing the radiation dose inevitably affects the performance of CT, many attempts have been made to find the best compromise between radiation risk and diagnostic performance (<a href="#B3" name="bibrLink" class="bibrClassB3">3</a><a href="#B4" name="bibrLink" class="bibrClassB4">4</a><a href="#B5" name="bibrLink" class="bibrClassB5">5</a><a href="#B6" name="bibrLink" class="bibrClassB6">6</a>). In this context, one of the most successful attempts is the use of the iterative reconstruction (IR) technique in CT image reconstruction (<a href="#B4" name="bibrLink" class="bibrClassB4">4</a><a href="#B6" name="bibrLink" class="bibrClassB6">6</a><a href="#B7" name="bibrLink" class="bibrClassB7">7</a><a href="#B8" name="bibrLink" class="bibrClassB8">8</a><a href="#B9" name="bibrLink" class="bibrClassB9">9</a><a href="#B10" name="bibrLink" class="bibrClassB10">10</a>). However, commercially available IR algorithms are vendor-specific and only partly disclosed by manufacturers. Furthermore, it can present the disadvantage of requiring long computation times to execute repetitive reconstruction process (<a href="#B7" name="bibrLink" class="bibrClassB7">7</a>).</div>
<div id="idm140649067305472">Deep learning techniques have become widespread in the medical imaging field due to recent advances in machine learning and improvements in hardware performance. Image denoising algorithms using artificial neural networks have been intensively researched and developed (<a href="#B11" name="bibrLink" class="bibrClassB11">11</a><a href="#B12" name="bibrLink" class="bibrClassB12">12</a><a href="#B13" name="bibrLink" class="bibrClassB13">13</a>). Recently, the possibility of using deep learning to improve the image quality of CT has been proposed (<a href="#B14" name="bibrLink" class="bibrClassB14">14</a><a href="#B15" name="bibrLink" class="bibrClassB15">15</a>). According to these studies, deep learning algorithms trained using the acquisition of routine-dose (RD) CT and simulated low-dose (LD) CT images of the same patient provide similar quality to conventional RD CT (<a href="#B14" name="bibrLink" class="bibrClassB14">14</a><a href="#B15" name="bibrLink" class="bibrClassB15">15</a>). Kang et al. (<a href="#B14" name="bibrLink" class="bibrClassB14">14</a>) proposed a new convolutional neural network architecture optimized for CT denoising, which combines wavelet transformation with deep-processing. The performance of this denoising framework was evaluated using the dataset of the American Association of Physicists in Medicine Low Dose CT Grand Challenge (<a href="#B16" name="bibrLink" class="bibrClassB16">16</a>) in 2016 and they were able to reconstruct high-quality images even from quarter-dose CT images.</div>
<div id="idm140649067294928">However, previous studies have several limitations. First, they used only simulated LD CT images for testing and fundamental studies on the applicability of these techniques in the clinical environment are lacking. Second, image quality was evaluated using a limited set of metrics and a quantitative evaluation of noise and spatial resolution was not performed (<a href="#B14" name="bibrLink" class="bibrClassB14">14</a><a href="#B15" name="bibrLink" class="bibrClassB15">15</a><a href="#B17" name="bibrLink" class="bibrClassB17">17</a><a href="#B18" name="bibrLink" class="bibrClassB18">18</a>). Third, they did not compare the quality of CT images processed using deep learning algorithms to that of commercially available IR methods. Finally, since the previously developed models were trained only under fixed conditions, no insight was obtained regarding the dependence of performance on training conditions.</div>
<div id="idm140649067289920">Therefore, this study tried to assess the image quality of LD CT using a deep learning-based denoising algorithm (DLA) and compare it with filtered back projection (FBP) and advanced modeled iterative reconstruction (ADMIRE) methods, as well as evaluate the changes in performance associated with various DLA training conditions.</div>
</div>
<div class="section" id="materials|methods">
<a id="idm140649067288960"><!-- named anchor --></a><h3 class="main-title">MATERIALS AND METHODS</h3>
<div id="idm140649067287856">We conducted two separate phantom studies and one patient study to evaluate the performance of DLAs. First, we collected CT images from 100 patients and built a training set. The DLAs was trained with simulated LD CT from 100 patients as input and the RD CT of those patients as the ground truth under various training conditions. After training, a phantom study was performed to validate the DLAs. Finally, various DLAs were tested in another phantom study using the noise power spectrum (NPS) and modulation transfer function (MTF), as well as patient data from another 18 patients (<a href="#F1" name="figLink" class="figClassF1">Fig. 1</a>).</div>
<div class="section" id="">
<a id="idm140649067285712"><!-- named anchor --></a><h3 class="section-title"> Patients Included in the Training and Test Sets</h3>
<div id="idm140649067284880">Our Institutional Review Board approved this retrospective study and waived the requirement for obtaining informed consent. One-hundred patients who had undergone RD abdominal CT in our institution from August 2017 to January 2018 and had no metallic objects in the scan range were included to build the training set for DLA. LD CT images at dose levels corresponding to 13%, 25%, and 50% of RD were simulated from RD CT images and reconstructed using FBP. This part of the study relied on ReconCT (Siemens Healthineers, Forchheim, Germany), a proprietary reconstruction software that allows simulating CT scans acquired with reduced radiation dose based on the raw data of original scans (<a href="#B19" name="bibrLink" class="bibrClassB19">19</a>). Siemens Healthineers provided technical support in obtaining the simulated scans.</div>
<div id="idm140649067282576">To test the image quality improvement obtained using DLA in the clinical environment, we recruited another 18 patients who underwent LD (quarter dose) abdominal CT for clinical reasons from December 2017 to May 2018 as a test set. Therefore, we included 100 patients in the training datasets and 18 patients in the test datasets, regardless of their disease or chief complaint. Most patients were outpatients receiving routine cancer surveillance or who had nonspecific symptoms such as abdominal pain. In our institution, we used quarter dose abdominal CT to reduce the radiation risk in young patients (under 45 years of age) with abdominal symptoms, thereby we could use these LD CT to test the DLA.</div>
</div>
<div class="section" id="">
<a id="idm140649067281248"><!-- named anchor --></a><h3 class="section-title"> Deep Learning Algorithm</h3>
<div id="idm140649067280448">The deep learning algorithm that was implemented was a deep convolutional framelet-based denoising algorithm (<a href="#B18" name="bibrLink" class="bibrClassB18">18</a>), which was an advanced version of that proposed by Kang et al. (<a href="#B14" name="bibrLink" class="bibrClassB14">14</a>) in 2016. We only used a feed-forward network, except for the iterative process, which used a recursive neural network. Further details can be found in the original article by Kang et al. (<a href="#B18" name="bibrLink" class="bibrClassB18">18</a>). All the model training and evaluation processes were carried out under the same computing environment, MATLAB (Version R2017a, The MathWorks, Inc., Natick, MA, USA) using two compute unified device architecture (CUDA)-enabled Nvidia Titan 12 GB graphic processing units (Nvidia Corporation, Santa Clara, CA, USA) with CUDA 8.0/cuDNN 7.0.5 dependencies.</div>
<div id="idm140649067276048">We trained the DLAs using the simulated LD CT images at each dose level as the input data and the RD CT images reconstructed with FBP as the ground truth. As a result, DLAs were developed under various training conditions, with three dose levels (DLA-1, -2, and -3 for the 13%, 25%, and 50% dose levels, respectively) and varying number of training cases (n = 1, 3, 5, 7, 10, 20, 50, and 100).</div>
</div>
<div class="section" id="">
<a id="idm140649067275024"><!-- named anchor --></a><h3 class="section-title"> CT Scanning Protocol</h3>
<div id="idm140649067274224">All patients included in the training set underwent RD abdominal CT with portal venous phase on a 128-channel scanner (SOMATOM Definition Edge, Siemens Healthineers) using the following parameters: 128 × 0.6 mm collimation, gantry rotation time of 0.5 seconds, reconstruction slice thickness of 4.0 mm, slice interval of 3.0 mm, tube potential of 100 kVp, variable milliamperage determined by x-, y-, and z-axis-automated dose modulation (CARE Dose 4D, Siemens Healthineers) with a reference tube current-time of 210 effective mAs per patient. The timing of the portal venous phase scan was optimized using the fixed time-delay technique of 90 seconds after contrast administration.</div>
<div id="idm140649067273072">For the test study, 18 patients underwent quarter dose abdominal CT with portal venous phase by changing the reference tube current-time to 40 effective mAs per patient under the same scan protocol as above.</div>
<div id="idm140649067272400">All LD CT images were reconstructed using both FBP and ADMIRE methods and LD-DLA images were obtained from LD-FBP images using DLAs without raw projection data.</div>
</div>
<div class="section" id="">
<a id="idm140649067271616"><!-- named anchor --></a><h3 class="section-title"> Phantom Studies</h3>
<div id="idm140649067270816">We performed CT scans of the American College of Radiology (ACR) CT accreditation phantom (Gammex 464, Sun Nuclear, Middleton, WI, USA) to quantitatively evaluate image quality. The phantom studies were also conducted under the same scan protocol with fixed current-time values (50 mAs or 200 mAs to approximate a 25% or 100% dose, respectively) without dose modulation.</div>
<div id="idm140649067269984">To assess the objective image quality, the NPS and MTF were calculated using the ACR phantom. Because of the ethical issues of performing CT scans at multiple doses in a single patient, quantitative image analysis was performed using phantoms. NPS is a comprehensive metric of noise properties. The NPS curve shows the variance in image intensity over spatial frequencies in an image. The mean image noise defined as the standard deviation of the CT attenuation value within a uniform region of interest (ROI) is correlated with the area under the curve (AUC) of the NPS curve and the image texture is determined by the shape of the NPS curve. The higher the AUC of the NPS curve, the greater the image noise. Reduced peak frequency of the NPS (left-shifted curve) represents a smoother and plastic-like image texture (<a href="#B20" name="bibrLink" class="bibrClassB20">20</a>). MTF is a representative metric of spatial resolution. The MTF curve provides a measure of how well the system transfers the contrast ratio of the original object (y-axis) across spatial frequencies (x-axis) (<a href="#B21" name="bibrLink" class="bibrClassB21">21</a>). If the system has perfect spatial resolution, the object will be able to retain 100% contrast of its original contrast in any spatial frequency. However, in practice, the system is not perfect; therefore, the object's contrast is more attenuated, and it is difficult to distinguish the object at higher spatial resolutions. Therefore, a higher MTF value means better spatial resolution.</div>
<div id="idm140649067265968">To measure the NPS, we used the method proposed in a previous study (<a href="#B22" name="bibrLink" class="bibrClassB22">22</a>). The peak frequency and AUC of the NPS were calculated. We used the circular edge method for MTF measurements, based on a study by Friedman et al. (<a href="#B22" name="bibrLink" class="bibrClassB22">22</a>), because conventional methods could not reflect the spatial resolution dependence of the image contrast in the IR algorithm. The ACR phantom contains three inserts and one air cavity for the measurement of Hounsfield unit accuracy. We measured the MTF in the three inserts using different contrasts, which provided nominal Hounsfield unit values of -95, 955, and 120 at 120 kVp for polyethylene (Disc 1), bone (Disc 2), and acrylic (Disc 3), respectively. We obtained the average MTF value after 21 repeated CT scans of a phantom and measured the MTF-50 to simplify the MTF comparison. The MTF-50 is defined as the spatial frequency at which the MTF becomes one half of its zero-frequency value in units of mm<sup>−1</sup>.</div>
<div id="idm140649067261968">The NPS and MTF of ACR phantom images were calculated using MATLAB.</div>
<div id="idm140649067261440">In addition, the detailed method of another phantom study for assessing the training performance of the DLA and results of the training performance are described in the Supplementary Materials.</div>
</div>
<div class="section" id="">
<a id="idm140649067260624"><!-- named anchor --></a><h3 class="section-title"> Patient Study</h3>
<div id="idm140649067259824">To objectively assess image quality in the clinical environment, a radiologist (blinded, with 5 years of clinical experience in CT interpretation) measured the mean image noise of the LD-DLA, LD-FBP, and LD-ADMIRE images from 18 patients. The mean image noise was measured by manually placing oval ROIs (range, 100–150 mm<sup>2</sup>) in homogeneous regions of the liver, subcutaneous fat, paraspinal muscles, and abdominal aorta. Each ROI was placed at the exact same location for the LD-DLA, LD-FBP, and LD-ADMIRE images using a copy-and-paste function.</div>
<div id="idm140649067258352">Qualitative image analysis of image noise, spatial resolution, and overall image quality was performed. Another abdominal radiologist with 25 years of experience independently evaluated the 90 datasets of the portal phase abdomen CT images (five different CT reconstructions or processed methods, i.e., DLA-1, DLA-2, DLA-3, FBP, and ADMIRE, from each of the 18 patients).</div>
<div id="idm140649067257520">The five image sets from each patient were ranked against one another on a comparative scale from 1 to 5 with regard to image noise, spatial resolution, and overall image quality, and average ranks were compared. A score of 1 was given to the images with the best quality and 5 was given to the images with the worst quality. Reconstruction or processed methods were blinded and the order of image sets was randomized for each patient.</div>
<div id="idm140649067256624">The presence of additional artifacts that were not noted on LD-FBP and LD-ADMIRE CT images was also evaluated in the LD-DLA images of patients by a different abdominal radiologist with 8 years of experience. For the evaluation of the additional artifacts, reconstruction or processed methods were not blinded and LD-DLA images were compared with paired LD-FBP and LD-ADMIRE images. All noise measurements and qualitative image evaluations for patient images were performed with a commercially available workstation using the RadiAnt DICOM viewer (Mexidant, Poznan, Poland).</div>
</div>
<div class="section" id="">
<a id="idm140649067255424"><!-- named anchor --></a><h3 class="section-title"> Statistical Analysis</h3>
<div id="idm140649067254624">All statistical analyses were performed with SPSS software (Version 22.0, IBM Corp., Armonk, NY, USA).</div>
<div id="idm140649067254064">A paired <i>t</i> test was used to compare the MTF values of phantom images. Repeated measures analysis of variance followed by pairwise comparisons was used to compare image noise levels in the 18 patients' images with different reconstruction methods and DLAs. After Bonferroni adjustment for the ten comparisons (all pairwise comparisons for FBP, ADMIRE, and DLA-1, -2, and -3.), a <i>p</i> value &lt; 0.005 was considered significant. The Friedman test was used to evaluate the qualitative image analysis. Dunn's pairwise post hoc test was performed for multiple pairwise comparisons, then a Bonferroni correction for multiple testing was applied. The modified Wald method was used to determine the confidence interval (CI) for the presence of image artifacts in the 2998 LD CT image slices of 18 patients.</div>
</div>
</div>
<div class="section" id="results">
<a id="idm140649067251552"><!-- named anchor --></a><h3 class="main-title">RESULTS</h3>
<div id="idm140649067250448">The baseline patient characteristics and radiation dose of the training and test set are shown in <a href="#T1" name="tableLink" class="tableClassT1">Table 1</a>. The age of patients (mean ± standard deviation) was 63.5 ± 13.0 years in the training population and 35.0 ± 12.2 years in the test population. Because LD abdominal CT was performed in adults under 45 years of age in this institution, the test population was younger than the training population. The mean volume CT dose index (CTDIvol), dose-length product, and peak mAs in the test population were approximately one-quarter of those in the training population.</div>
<div class="section" id="">
<a id="idm140649067248352"><!-- named anchor --></a><h3 class="section-title"> Phantom Studies</h3>
<div id="idm140649067247552">LD-DLA achieved a lower noise level than LD-FBP and LD-ADMIRE but led to a loss of spatial resolution.</div>
<div id="idm140649067246992">As shown in <a href="#F2" name="figLink" class="figClassF2">Figure 2</a> and <a href="#T2" name="tableLink" class="tableClassT2">Table 2</a>, the peak frequency and AUC of the NPS curves in the LD-DLA images were lower than those of the LD-FBP and LD-ADMIRE images at all dose levels. In addition, the NPS curves were shifted towards lower spatial frequencies in the LD-DLA images compared with those of the ADMIRE images.</div>
<div id="idm140649067244064">
<a href="#T3" name="tableLink" class="tableClassT3">Table 3</a> shows the mean MTF-50 value of each reconstructed CT image for the three different disc objects of the phantom CT with a 25% radiation dose level. The MTF-50 was significantly lower in the LD-DLA images than in the LD-ADMIRE and LD-FBP images (all <i>p</i> &lt; 0.001).</div>
<div id="idm140649067241936">
<a href="#F3" name="figLink" class="figClassF3">Figure 3</a> shows the MTF for the DLA, ADMIRE, and FBP methods acquired at the 25% dose level for various contrast inserts. When the training radiation dose decreased, the AUC of the NPS curve and MTF values of the LD-DLA images decreased. DLA-1 showed the least noise and worst spatial resolution among the three DLA methods.</div>
</div>
<div class="section" id="">
<a id="idm140649067240064"><!-- named anchor --></a><h3 class="section-title"> Patient Study</h3>
<div id="idm140649067239264">In the 18 patients, the mean image noise in all the LD-DLA images was significantly lower than that in the LD-ADMIRE and LD-FBP images (all <i>p</i> &lt; 0.001). <a href="#T4" name="tableLink" class="tableClassT4">Table 4</a> shows the mean image noise values according to the image reconstruction method. As the training radiation dose of DLA decreased, the mean image noise also significantly decreased (<i>p</i> &lt; 0.001). Representative images are shown in <a href="#F4" name="figLink" class="figClassF4">Figure 4</a>.</div>
<div id="idm140649067235328">
<a href="#T5" name="tableLink" class="tableClassT5">Table 5</a> shows the mean ranking scores for image quality according to the image reconstruction method. In the qualitative image analysis, the overall image quality was the best for DLA-3, although it was not significantly different from that of ADMIRE (<i>p</i> &gt; 0.999). Although DLA-1 and DLA-2 had lower noise than the other methods, they provided worse spatial resolution and lower overall image quality relative to the other methods.</div>
<div id="idm140649067233056">The DLA images showed no additional image artifacts in the 2998 image slices of each DLA (0%, 95% CI, 0–4 slices).</div>
</div>
</div>
<div class="section" id="discussion">
<a id="idm140649067232160"><!-- named anchor --></a><h3 class="main-title">DISCUSSION</h3>
<div id="idm140649067231056">We found that DLA can achieve lower image noise than ADMIRE, which is a state-of-the-art commercially available IR method. Furthermore, there are several strengths of the DLA used in our study. First, while the IR algorithm is vendor-specific and has limited applicability to other CT systems, FBP-based DLAs can be used in a more general way because they allow image-based reconstruction without raw data in the FBP method (<a href="#B7" name="bibrLink" class="bibrClassB7">7</a>). Second, DLAs require shorter computational time compared with IR (<a href="#B14" name="bibrLink" class="bibrClassB14">14</a>). Although a direct comparison was difficult in our experiment because we could not test the ADMIRE method in the same computing environment as that processing the DLAs, the DLAs might potentially reduce computing load relative to the ADMIRE method. Finally, we evaluated DLA performance using quarter dose CT images, which is a frequently used radiation dose in clinical LD CT (<a href="#B23" name="bibrLink" class="bibrClassB23">23</a><a href="#B24" name="bibrLink" class="bibrClassB24">24</a>). To the best of our knowledge, this is the first study suggesting alternative approaches for CT denoising in a clinical setting, specifically comparing DLAs with the FBP and IR algorithms in real low-dose CT images of patients.</div>
<div id="idm140649067225344">In the test study with 18 patients, we were able to test the DLAs with LD CT in a real clinical environment. We found that DLAs effectively reduced image noise in the test study and did not show any additional image artifacts. Due to several negative aspects of deep learning techniques, such as their “black-box” nature and the complexity of neural networks, we are concerned that the processed images might show unknown artifacts. However, there were no deep learning-related image artifacts in approximately 3000 images. Therefore, we cautiously concluded that artifacts are highly unlikely under these test conditions. However, additional evaluations will be required under different conditions (e.g., images with beam hardening artifacts, images in elderly patients with motion artifacts, or images from other parts of the body) that we did not consider during either training or testing.</div>
<div id="idm140649067223984">In this study, we compared the image quality of LD-DLA CT with that of LD-FBP and LD-ADMIRE CT using quantitative metrics such as NPS, MTF, and mean image noise. We found that NPS and MTF measured in the phantom study showed less noise and less spatial resolution in the LD-DLA images.</div>
<div id="idm140649067223232">Regarding the dependence on training conditions, the AUC of the NPS curve, MTF values, and mean image noise level of the LD-DLA images decreased as DLA training radiation dose decreased. This tendency is difficult to explain but it might be related to the intrinsic limitation of deep learning, which requires proper training intensity.</div>
<div id="idm140649067222432">In terms of noise properties, the processed phantom images using DLA were less noisy than FBP. However, DLA images showed an over-smooth texture, just like those produced by the first-generation IR algorithm, which is currently used to lower the radiation dose by lowering the image noise with better spatial resolution (<a href="#B7" name="bibrLink" class="bibrClassB7">7</a>). Because CT images reconstructed using IR algorithms can produce plastic-like texture, radiologists who are familiar with CT images reconstructed using FBP might be unfamiliar to those images and IR has its weakness in this regard (<a href="#B7" name="bibrLink" class="bibrClassB7">7</a><a href="#B9" name="bibrLink" class="bibrClassB9">9</a>). Since we trained the DLAs with both LD-FBP and RD-FBP images, we assumed that DLA could maintain the image texture of the FBP method in the resultant images. However, the NPS curve was left-shifted in the DLA images, i.e, noise texture of DLAs was different from FBP and rather similar to that of ADMIRE. It is difficult to find a convincing explanation of these results, and further investigations are needed.</div>
<div id="idm140649067217920">Conventional MTF measurements used highly dense materials and very low noise to improve measurement precision, and MTF tended to be greater in IR than in FBP for high-contrast objects (<a href="#B6" name="bibrLink" class="bibrClassB6">6</a>). However, in real clinical settings, most CT images have lower contrast and higher noise than in an ideal environment. In fact, Richard et al (<a href="#B21" name="bibrLink" class="bibrClassB21">21</a>). showed how the MTF in IR could be different for varying contrast and noise levels. Although the task-based MTF for model-based IR was shown to be greater than for FBP in high-dose and high-contrast objects, the MTF performance decreased in LD and low-contrast objects (<a href="#B21" name="bibrLink" class="bibrClassB21">21</a>). Therefore, we evaluated the MTF for three different contrast materials in the phantom study. Our results showed a little loss of spatial resolution by DLAs for all disc objects, but the difference from FBP was marginal. Although the MTF increased as the training radiation dose increased, it may be difficult to go beyond the limits of FBP because the DLA training was based on RD-FBP CT images. If the DLAs were trained using CT images with improved spatial resolution, the MTF could be further improved in the DLA compared with that of FBP-based DLAs.</div>
<div id="idm140649067213072">Our qualitative image analysis revealed that DLA-3, which trained with 50% radiation dose images, showed the best overall image quality among the five image sets (DLA-1, DLA-2, DLA-3, FBP, and ADMIRE). Interestingly, the spatial resolution of DLA-3 was not significantly different from that of ADMIRE, which showed the highest MTF values, although the quantitative MTF values of DLA-3 were significantly lower than those of conventional methods (FBP and ADMIRE). Overall image quality is a complex combination of image noise and spatial resolution. Indeed, a previous study assessed image quality using the detectability index, which is a function of the NPS, MTF, and other factors (<a href="#B25" name="bibrLink" class="bibrClassB25">25</a>). In this context, the combination of low noise and low loss of spatial resolution is likely to result in a favorable outcome for DLA-3. On the contrary, although DLA-1 and DLA-2 had less noise, the overall image quality was not good because of a large loss of spatial resolution.</div>
<div id="idm140649067210560">Our study has several limitations. First, we did not evaluate the task-based performance of the DLA. Despite the lower image noise in the objective measurements, the noise texture of the DLA image can be changed, affecting the diagnostic performance of DLA, such as in lesion detection. Because this is a preliminary study aiming to investigate the performance of DLAs in image noise and spatial resolution, future studies are needed to confirm this exploratory result as well as to determine the effects of DLAs on task-based performance. Second, because the DLA used in this study was trained using simulated LD CT images, we could not expect how the results would differ using actual LD CT images as training data. In addition, we did not evaluate the effects of image artifacts because we included only qualified images without significant artifacts in the training set. Finally, because we only included adult patients under the age of 45 and obtained quarter dose abdominal CT images, further studies using various LD CT protocols in different body parts may be required.</div>
<div id="idm140649067209024">In conclusion, DLAs could improve image quality in terms of noise reduction in CT. Although DLAs achieved less noise than FBP and ADMIRE in LD CT images, they did not maintain the spatial resolution. Regarding the effect of the radiation dose in training conditions, a 50% simulated radiation dose for training images led to the best overall image quality.</div>
</div>
</div>
<div id="article-floats" class="back">
<h3 class="main-title"><span class="generated">Figures and Tables</span></h3>
<div class="fig panel" name="fig_link" style="display: float; clear: both; width: 100%; overflow: auto;">
<h5 class="label" style="margin:0px 0px 0px 0px;">Fig. 1</h5>
<a id="F1"><!-- named anchor --></a><div class="caption">
<h3 class="title">Schematic diagram showing study population in phantom and patient studies.</h3>
<div id="idm140649066870544">ACR = American College of Radiology, ADMIRE = advanced modeled iterative reconstruction, DLA = deep learning-based denoising algorithm, FBP = filtered back projection, LD = low-dose, MSE = mean squared error, NPS = noise power spectrum</div>
</div>
<img alt="kjr-21-356-g001" width="100%" style="max-width:200px;" src="/upload/SynapseData/ArticleImage/0068kjr/kjr-21-356-g001.jpg">
</div>
<div class="fig panel" name="fig_link" style="display: float; clear: both; width: 100%; overflow: auto;">
<h5 class="label" style="margin:0px 0px 0px 0px;">Fig. 2</h5>
<a id="F2"><!-- named anchor --></a><div class="caption">
<h3 class="title">NPS of 25% dose CT of phantom according to reconstruction method.</h3>
<div id="idm140649066866496">NPS curves are shifted towards lower spatial frequencies in images produced by DLAs trained at lower radiation dose level. HU = Hounsfield unit, NPS = noise power spectrum</div>
</div>
<img alt="kjr-21-356-g002" width="100%" style="max-width:200px;" src="/upload/SynapseData/ArticleImage/0068kjr/kjr-21-356-g002.jpg">
</div>
<div class="fig panel" name="fig_link" style="display: float; clear: both; width: 100%; overflow: auto;">
<h5 class="label" style="margin:0px 0px 0px 0px;">Fig. 3</h5>
<a id="F3"><!-- named anchor --></a><div class="caption">
<h3 class="title">Comparison of MTF with five different CT reconstruction or processing methods for three different discs.</h3>
<div id="idm140649066862464">
<b>A.</b> Polyethylene. <b>B.</b> Bone. <b>C.</b> Acrylic. MTF = modulation transfer function</div>
</div>
<img alt="kjr-21-356-g003" width="100%" style="max-width:200px;" src="/upload/SynapseData/ArticleImage/0068kjr/kjr-21-356-g003.jpg">
</div>
<div class="fig panel" name="fig_link" style="display: float; clear: both; width: 100%; overflow: auto;">
<h5 class="label" style="margin:0px 0px 0px 0px;">Fig. 4</h5>
<a id="F4"><!-- named anchor --></a><div class="caption">
<h3 class="title">LD abdominal CT images of test set with conventional reconstruction methods <b>(A, B)</b> and with DLA <b>(C–E)</b>.</h3>
<div id="idm140649066856352">
<b>A.</b> FBP. <b>B.</b> ADMIRE. <b>C.</b> DLA-1. <b>D.</b> DLA-2. <b>E.</b> DLA-3. First column of each image shows LD (25%) abdominal CT using five different methods and enlarged image of first column is in second column. Mean image noise of all LD-DLA images was lower than that of LD-ADMIRE and LD-FBP images, and DLA-1 image showed lowest mean image noise. As training radiation dose of DLA increased, mean image noise of processed CT images increased.</div>
</div>
<img alt="kjr-21-356-g004" width="100%" style="max-width:200px;" src="/upload/SynapseData/ArticleImage/0068kjr/kjr-21-356-g004.jpg">
</div>
<div class="table-wrap panel" name="table-wrap_link" style="display: float; clear: both; width: 100%; overflow: auto;">
<h5 class="label" style="margin:0px 0px 0px 0px;">Table 1</h5>
<a id="T1"><!-- named anchor --></a><div class="caption"><h3 class="title">Baseline Characteristics of Study Population</h3></div>
<img alt="kjr-21-356-i001" width="100%" style="max-width:200px;" src="/upload/SynapseData/ArticleImage/0068kjr/kjr-21-356-i001.jpg"><div class="table-wrap-foot">
<a id=""></a><div class="footnote">
<a id="idm140649066848688"><!-- named anchor --></a><p id="idm140649066848368"><sup></sup> Data are mean ± standard deviation. CTDIvol = volume CT dose index, DLP = dose-length product</p>
</div>
</div>
</div>
<div class="table-wrap panel" name="table-wrap_link" style="display: float; clear: both; width: 100%; overflow: auto;">
<h5 class="label" style="margin:0px 0px 0px 0px;">Table 2</h5>
<a id="T2"><!-- named anchor --></a><div class="caption"><h3 class="title">AUC and Peak Frequency of NPS Curve in Each Reconstruction Method</h3></div>
<img alt="kjr-21-356-i002" width="100%" style="max-width:200px;" src="/upload/SynapseData/ArticleImage/0068kjr/kjr-21-356-i002.jpg"><div class="table-wrap-foot">
<a id=""></a><div class="footnote">
<a id="idm140649066843824"><!-- named anchor --></a><p id="idm140649066843504"><sup></sup> ADMIRE = advanced modeled iterative reconstruction, AUC = area under curve, DLA = deep learning-based denoising algorithm, FBP = filtered back projection, HU = Hounsfield unit, NPS = noise power spectrum</p>
</div>
</div>
</div>
<div class="table-wrap panel" name="table-wrap_link" style="display: float; clear: both; width: 100%; overflow: auto;">
<h5 class="label" style="margin:0px 0px 0px 0px;">Table 3</h5>
<a id="T3"><!-- named anchor --></a><div class="caption"><h3 class="title">MTF-50s (mm<sup>−1</sup>) of 25% ACR Phantom CT according to Different Discs and Reconstruction Methods</h3></div>
<img alt="kjr-21-356-i003" width="100%" style="max-width:200px;" src="/upload/SynapseData/ArticleImage/0068kjr/kjr-21-356-i003.jpg"><div class="table-wrap-foot">
<a id=""></a><div class="footnote">
<a id="idm140649066838352"><!-- named anchor --></a><p id="idm140649066838032"><sup></sup> <sup>*</sup><i>p</i> value for all pairwise comparisons. ACR = American College of Radiology, MTF = modulation transfer function</p>
</div>
</div>
</div>
<div class="table-wrap panel" name="table-wrap_link" style="display: float; clear: both; width: 100%; overflow: auto;">
<h5 class="label" style="margin:0px 0px 0px 0px;">Table 4</h5>
<a id="T4"><!-- named anchor --></a><div class="caption"><h3 class="title">Mean Image Noise (HU) according to Image Reconstruction Method</h3></div>
<img alt="kjr-21-356-i004" width="100%" style="max-width:200px;" src="/upload/SynapseData/ArticleImage/0068kjr/kjr-21-356-i004.jpg"><div class="table-wrap-foot">
<a id=""></a><div class="footnote">
<a id="idm140649066832832"><!-- named anchor --></a><p id="idm140649066832512"><sup></sup> Data are mean noise (standard deviation). <sup>*</sup><i>p</i> value for all pairwise comparisons.</p>
</div>
</div>
</div>
<div class="table-wrap panel" name="table-wrap_link" style="display: float; clear: both; width: 100%; overflow: auto;">
<h5 class="label" style="margin:0px 0px 0px 0px;">Table 5</h5>
<a id="T5"><!-- named anchor --></a><div class="caption"><h3 class="title">Mean Image Quality Assessment Ranking of Image Reconstruction Methods</h3></div>
<img alt="kjr-21-356-i005" width="100%" style="max-width:200px;" src="/upload/SynapseData/ArticleImage/0068kjr/kjr-21-356-i005.jpg"><div class="table-wrap-foot">
<a id=""></a><div class="footnote">
<a id="idm140649066827200"><!-- named anchor --></a><p id="idm140649066826880"><sup></sup> Data are mean ranking score (standard deviation). <sup>*</sup><i>p</i> &lt; 0.05 in pairwise comparison with ADMIRE, <sup>†</sup><i>p</i> &lt; 0.05 in pairwise comparison with FBP.</p>
</div>
</div>
</div>
</div>
<div id="article-back" class="back">
<div class="back-section">
<a id="idm140649067207568"><!-- named anchor --></a><h3 class="main-title">Acknowledgments</h3>
<div id="idm140649067206768">We thank Seongyong Pak (Siemens Healthineers Ltd, Korea) for technical support on simulating low-dose CT images.</div>
</div>
<div class="back-section">
<a id="idm140649067206032"><!-- named anchor --></a><h3 class="main-title">Notes</h3>
<div class="footnote">
<a id="idm140649067205712"><!-- named anchor --></a><p id="idm140649067205088"><sup></sup> This research was supported by the Basic Science Research Program through the National Research Foundation of Korea (NRF) grant funded by the Korea government (<sup>*</sup>MSIT) [grant number NRF-2018R1C1B6007999], by the Seoul National University Bundang Hospital Research Fund [grant number 16-2018-004], by the National Research Foundation of Korea (NRF) grant funded by the Korea government (<sup>*</sup>MSIT) [grant number NRF-2016R1A2B3008104], and by a KAIST grant funded by Ministry of Science and ICT [grant number N11180149].</p>
</div>
<div class="footnote">
<a id="idm140649067203024"><!-- named anchor --></a><p id="idm140649067201920"><sup>Conflicts of Interest</sup> The authors have no potential conflicts of interest to disclose.</p>
</div>
</div>
<div class="back-section">
<a id="idm140649067201072"><!-- named anchor --></a><h3 class="main-title">References</h3>
<div class="section ref-list">
<a id="idm140649067201072"><!-- named anchor --></a><div class="ref-list table">
<div id="B1" name="jats-ref-pub" class="ref_layer">1. Smith-Bindman R, Lipson J, Marcus R, Kim KP, Mahesh M, Gould R, et al. Radiation dose associated with common computed tomography examinations and the associated lifetime attributable risk of cancer. Arch Intern Med. 2009; 169:2078–2086. <br/> <a href='https://doi.org/10.1001/archinternmed.2009.427' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a> <a href='http://www.ncbi.nlm.nih.gov/pubmed/20008690' target='_blank'><img src='/image/icon/bnr_ref_pmid.gif' alt='pmid' border='0'/></a>  <a href='http://www.ncbi.nlm.nih.gov/pmc/articles/4635397' target='_blank'><img src='/image/icon/bnr_ref_PMC.gif' alt='pmc' border='0'/></a> </div>
<div id="B2" name="jats-ref-pub" class="ref_layer">2. Brenner DJ, Hall EJ. Computed tomography — An increasing source of radiation exposure. N Engl J Med. 2007; 357:2277–2284. <br/> <a href='https://doi.org/10.1056/nejmra072149' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a> <a href='http://www.ncbi.nlm.nih.gov/pubmed/18046031' target='_blank'><img src='/image/icon/bnr_ref_pmid.gif' alt='pmid' border='0'/></a> </div>
<div id="B3" name="jats-ref-pub" class="ref_layer">3. Berrington de González A, Mahesh M, Kim KP, Bhargavan M, Lewis R, Mettler F, et al. Projected cancer risks from computed tomographic scans performed in the United States in 2007. Arch Intern Med. 2009; 169:2071–2077. <br/> <a href='https://doi.org/10.1001/archinternmed.2009.440' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a> <a href='http://www.ncbi.nlm.nih.gov/pubmed/20008689' target='_blank'><img src='/image/icon/bnr_ref_pmid.gif' alt='pmid' border='0'/></a>  <a href='http://www.ncbi.nlm.nih.gov/pmc/articles/6276814' target='_blank'><img src='/image/icon/bnr_ref_PMC.gif' alt='pmc' border='0'/></a> </div>
<div id="B4" name="jats-ref-pub" class="ref_layer">4. Hara AK, Paden RG, Silva AC, Kujak JL, Lawder HJ, Pavlicek W. Iterative reconstruction technique for reducing body radiation dose at CT: feasibility study. AJR Am J Roentgenol. 2009; 193:764–771. <br/> <a href='https://doi.org/10.2214/ajr.09.2397' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a> <a href='http://www.ncbi.nlm.nih.gov/pubmed/19696291' target='_blank'><img src='/image/icon/bnr_ref_pmid.gif' alt='pmid' border='0'/></a> </div>
<div id="B5" name="jats-ref-pub" class="ref_layer">5. Nakayama Y, Awai K, Funama Y, Hatemura M, Imuta M, Nakaura T, et al. Abdominal CT with low tube voltage: preliminary observations about radiation dose, contrast enhancement, image quality, and noise. Radiology. 2005; 237:945–951. <br/> <a href='https://doi.org/10.1148/radiol.2373041655' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a> <a href='http://www.ncbi.nlm.nih.gov/pubmed/16237140' target='_blank'><img src='/image/icon/bnr_ref_pmid.gif' alt='pmid' border='0'/></a> </div>
<div id="B6" name="jats-ref-pub" class="ref_layer">6. Sagara Y, Hara AK, Pavlicek W, Silva AC, Paden RG, Wu Q. Abdominal CT: comparison of low-dose CT with adaptive statistical iterative reconstruction and routine-dose CT with filtered back projection in 53 patients. AJR Am J Roentgenol. 2010; 195:713–719. <br/> <a href='https://doi.org/10.2214/ajr.09.2989' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a> <a href='http://www.ncbi.nlm.nih.gov/pubmed/20729451' target='_blank'><img src='/image/icon/bnr_ref_pmid.gif' alt='pmid' border='0'/></a> </div>
<div id="B7" name="jats-ref-pub" class="ref_layer">7. Geyer LL, Schoepf UJ, Meinel FG, Nance JW Jr, Bastarrika G, Leipsic JA, et al. State of the art: iterative CT reconstruction techniques. Radiology. 2015; 276:339–357. <br/> <a href='https://doi.org/10.1148/radiol.2015132766' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a> <a href='http://www.ncbi.nlm.nih.gov/pubmed/26203706' target='_blank'><img src='/image/icon/bnr_ref_pmid.gif' alt='pmid' border='0'/></a> </div>
<div id="B8" name="jats-ref-pub" class="ref_layer">8. Holmquist F, Nyman U, Siemund R, Geijer M, Söderberg M. Impact of iterative reconstructions on image noise and low-contrast object detection in low kVp simulated abdominal CT: a phantom study. Acta Radiol. 2016; 57:1079–1088. <br/> <a href='https://doi.org/10.1177/0284185115617347' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a> <a href='http://www.ncbi.nlm.nih.gov/pubmed/26663036' target='_blank'><img src='/image/icon/bnr_ref_pmid.gif' alt='pmid' border='0'/></a> </div>
<div id="B9" name="jats-ref-pub" class="ref_layer">9. Prakash P, Kalra MK, Kambadakone AK, Pien H, Hsieh J, Blake MA, et al. Reducing abdominal CT radiation dose with adaptive statistical iterative reconstruction technique. Invest Radiol. 2010; 45:202–210. <br/> <a href='https://doi.org/10.1097/rli.ob013e3181dzfeec' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a> <a href='http://www.ncbi.nlm.nih.gov/pubmed/20177389' target='_blank'><img src='/image/icon/bnr_ref_pmid.gif' alt='pmid' border='0'/></a> </div>
<div id="B10" name="jats-ref-pub" class="ref_layer">10. Yu L, Liu X, Leng S, Kofler JM, Ramirez-Giraldo JC, Qu M, et al. Radiation dose reduction in computed tomography: techniques and future perspective. Imaging Med. 2009; 1:65–84. <br/> <a href='https://doi.org/10.2217/iim.09.5' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a> <a href='http://www.ncbi.nlm.nih.gov/pubmed/22308169' target='_blank'><img src='/image/icon/bnr_ref_pmid.gif' alt='pmid' border='0'/></a>  <a href='http://www.ncbi.nlm.nih.gov/pmc/articles/3271708' target='_blank'><img src='/image/icon/bnr_ref_PMC.gif' alt='pmc' border='0'/></a> </div>
<div id="B11" name="jats-ref-pub" class="ref_layer">11. Jain V, Seung S. Natural image denoising with convolutional networks. In : 23rd annual conference on neural information processing systems 22; 2009 December 7–10; Vancouver, Canada. <br/></div>
<div id="B12" name="jats-ref-pub" class="ref_layer">12. Nasri M, Nezamabadi-pour H. Image denoising in the wavelet domain using a new adaptive thresholding function. Neurocomputing. 2009; 72:1012–1025. <br/> <a href='https://doi.org/10.1016/j.neucom.2008.04.016' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a></div>
<div id="B13" name="jats-ref-pub" class="ref_layer">13. Xie J, Xu L, Chen E. Image denoising and inpainting with deep neural networks. In : 26th annual conference on neural information processing systems 25; 2012 December 3–6; Lake Tahoe, NV, USA. <br/></div>
<div id="B14" name="jats-ref-pub" class="ref_layer">14. Kang E, Min J, Ye JC. A deep convolutional neural network using directional wavelets for low-dose X-ray CT reconstruction. Med Phys. 2017; 44:e360–e375. <br/> <a href='https://doi.org/10.1002/mp.12344' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a></div>
<div id="B15" name="jats-ref-pub" class="ref_layer">15. Chen H, Zhang Y, Zhang W, Liao P, Li K, Zhou J, et al. Low-dose CT via convolutional neural network. Biomed Opt Express. 2017; 8:679–694. <br/> <a href='http://www.ncbi.nlm.nih.gov/pubmed/28270976' target='_blank'><img src='/image/icon/bnr_ref_pmid.gif' alt='pmid' border='0'/></a>  <a href='http://www.ncbi.nlm.nih.gov/pmc/articles/5330597' target='_blank'><img src='/image/icon/bnr_ref_PMC.gif' alt='pmc' border='0'/></a> </div>
<div id="B16" name="jats-ref-pub" class="ref_layer">16. McCollough C. TU-FG-207A-04: overview of the low dose CT grand challenge. Med Phys. 2016; 43(Part 35):3759–3760. <br/> <a href='https://doi.org/10.1118/1.4957556' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a></div>
<div id="B17" name="jats-ref-pub" class="ref_layer">17. Chen H, Zhang Y, Kalra MK, Lin F, Chen Y, Liao P, et al. Low-dose CT with a residual encoder-decoder convolutional neural network. IEEE Trans Med Imaging. 2017; 36:2524–2535. <br/> <a href='https://doi.org/10.1109/tmi.2017.2715284' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a></div>
<div id="B18" name="jats-ref-pub" class="ref_layer">18. Kang E, Chang W, Yoo J, Ye JC. Deep convolutional framelet denosing for low-dose CT via wavelet residual network. IEEE Trans Med Imaging. 2018; 37:1358–1369. <br/> <a href='https://doi.org/10.1109/tmi.2018.2823756' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a> <a href='http://www.ncbi.nlm.nih.gov/pubmed/29870365' target='_blank'><img src='/image/icon/bnr_ref_pmid.gif' alt='pmid' border='0'/></a> </div>
<div id="B19" name="jats-ref-pub" class="ref_layer">19. Ellmann S, Kammerer F, Brand M, Allmendinger T, May MS, Uder M, et al. A novel pairwise comparison-based method to determine radiation dose reduction potentials of iterative reconstruction algorithms, exemplified through circle of Willis computed tomography angiography. Invest Radiol. 2016; 51:331–339. <br/> <a href='https://doi.org/10.1097/rli.0000000000000243' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a></div>
<div id="B20" name="jats-ref-pub" class="ref_layer">20. Ehman EC, Yu L, Manduca A, Hara AK, Shiung MM, Jondal D, et al. Methods for clinical evaluation of noise reduction techniques in abdominopelvic CT. Radiographics. 2014; 34:849–862. <br/> <a href='https://doi.org/10.1148/rg.344135128' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a> <a href='http://www.ncbi.nlm.nih.gov/pubmed/25019428' target='_blank'><img src='/image/icon/bnr_ref_pmid.gif' alt='pmid' border='0'/></a> </div>
<div id="B21" name="jats-ref-pub" class="ref_layer">21. Richard S, Husarik DB, Yadava G, Murphy SN, Samei E. Towards task-based assessment of CT performance: system and object MTF across different reconstruction algorithms. Med Phys. 2012; 39:4115–4122. <br/> <a href='https://doi.org/10.1118/1.4725171' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a> <a href='http://www.ncbi.nlm.nih.gov/pubmed/22830744' target='_blank'><img src='/image/icon/bnr_ref_pmid.gif' alt='pmid' border='0'/></a> </div>
<div id="B22" name="jats-ref-pub" class="ref_layer">22. Friedman SN, Fung GS, Siewerdsen JH, Tsui BM. A simple approach to measure computed tomography (CT) modulation transfer function (MTF) and noise-power spectrum (NPS) using the American College of Radiology (ACR) accreditation phantom. Med Phys. 2013; 40:051907. <br/> <a href='https://doi.org/10.1118/1.4800795' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a></div>
<div id="B23" name="jats-ref-pub" class="ref_layer">23. Kim K, Kim YH, Kim SY, Kim S, Lee YJ, Kim KP, et al. Low-dose abdominal CT for evaluating suspected appendicitis. N Engl J Med. 2012; 366:1596–1605. <br/> <a href='https://doi.org/10.1056/nejmoa1110734' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a> <a href='http://www.ncbi.nlm.nih.gov/pubmed/22533576' target='_blank'><img src='/image/icon/bnr_ref_pmid.gif' alt='pmid' border='0'/></a> </div>
<div id="B24" name="jats-ref-pub" class="ref_layer">24. Kim SY, Lee KH, Kim K, Kim TY, Lee HS, Hwang SS, et al. Acute appendicitis in young adults: low- versus standard-radiation-dose contrast-enhanced abdominal CT for diagnosis. Radiology. 2011; 260:437–445. <br/> <a href='https://doi.org/10.1148/radiol.11102247' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a> <a href='http://www.ncbi.nlm.nih.gov/pubmed/21633052' target='_blank'><img src='/image/icon/bnr_ref_pmid.gif' alt='pmid' border='0'/></a> </div>
<div id="B25" name="jats-ref-pub" class="ref_layer">25. Christianson O, Chen JJ, Yang Z, Saiprasad G, Dima A, Filliben JJ, et al. An improved index of image quality for task-based performance of CT iterative reconstruction across three commercial implementations. Radiology. 2015; 275:725–734. <br/> <a href='https://doi.org/10.1148/radiol.15132091' target='_blank'><img src='/image/icon/bnr_ref_cross.gif' alt='crossref' border='0'/></a> <a href='http://www.ncbi.nlm.nih.gov/pubmed/25686365' target='_blank'><img src='/image/icon/bnr_ref_pmid.gif' alt='pmid' border='0'/></a> </div>
</div>
</div>
</div>
<div class="section" id="supplementary-material">
<a id="idm140649066878656"><!-- named anchor --></a><h3 class="main-title">Supplementary Materials</h3>
<div id="idm140649066877552">The Data Supplement is available with this article at <a target="xrefwindow" href="https://doi.org/10.3348/kjr.2019.0413" id="idm140649066877200">https://doi.org/10.3348/kjr.2019.0413</a>.</div>
<div class="panel">
<a id="S1"><!-- named anchor --></a><a id="idm140649066874848"></a>
</div>
</div>
</div>
</body>
</html>
<script type="text/javascript">

// popup layer manage
	function getPopupLayer() {
		var POPUP = {
			lr : null,
			ot : 0,
			ol : 0,
			show : function () {
				if(this.lr) return this. lr;
				var w;
				w = document.getElementById("article-body").appendChild(document.createElement("div"));
				ot = document.getElementById("article-body").offsetTop;
				ol = document.getElementById("article-body").offsetLeft;
				//alert(ot + "," + ol);
				this. lr = w;
				//w.className = "fig panel";
				with(w.style) {
					background = "#ffffff";
					position = "absolute";
					cursor = "pointer";
					borderColor = "#1381ce";
					padding = "10px";
					margin = "0px";
					border = "2px solid #d0d0d0";
					clear = "both";
					zIndex = "99";
				};
				return w;
			},
			hide : function () {
				if(!this.lr) return;
				this.lr.parentNode.removeChild(this.lr);
				this.lr = null;
			},
			resize : function (w, h) {
				if(!this.lr) return;
				this.lr.style.width = w==0?"":(w+"px");
				this.lr.style.height = h==0?"":(h+"px");
			},
			moveTo : function (x, y) {
				if(!this.lr) return;
				this.lr.style.left = x-2+"px";
				this.lr.style.top = y-14+"px";
			},
			setHTML : function (html) {
				if(!this.lr) return;
				this.lr.innerHTML = html;
			}
		};
		return POPUP;
	}

	var popup = new getPopupLayer();

	function layoutFix() {
		var div = document.getElementsByTagName("DIV");
		for(var i = 0; i < div.length; i++)
		if(div[i].className == "ref_layer") {
			if(/^[^0-9]/.test(div[i].textContent)) {
				div[i].style.padding = "0px 0px 0px 30px";
				div[i].style.textIndent = "-30px";
			}
		} else if(div[i].className == "fig panel") {
			var aid=img=h5=cap=dp=img_name='';
			var fc = div[i].firstChild;
			var chd = div[i].firstChild;
			while(!chd.id) chd = chd.nextSibling;
			var chd = chd.id;
			var img_name = div[i].getElementsByTagName('IMG')[0].alt;

			var dLink = document.createElement("P");
			dLink.setAttribute("align", "right");
			dLink.innerHTML = "<a href=\"/articles/ViewImage.php?fn="+img_name+"_0068kjr&mode=export\"><img src=\"/image/icon/down_figure.gif\" border=\"0\" alt=\"Download Figure\" title=\"Download Figure\"></a>";
			div[i].appendChild(dLink);
			
			do {
				if(fc.nodeName == "A") aid = fc.outerHTML;
				if(fc.nodeName == "IMG") {
					img = fc.outerHTML;
					img_name = fc.nodeName.alt;
				}
				if(fc.nodeName == "H5") h5 = fc.outerHTML;
				if(fc.nodeName == "P") dp = fc.outerHTML;
				if(fc.nodeName == "DIV" && fc.className == "caption") cap = fc.outerHTML;
			}while(fc = fc.nextSibling);
			var nHTML;
			if(!h5 && !cap) {
				nHTML = aid+"<CENTER>"+img+"</CENTER>";
			} else {
				nHTML = aid+"<TABLE><TR><TD width='30%'>"+img+"</TD><TD valign='top' style='padding-left:10px;'>"+h5+cap+dp+"</TD></TR></TABLE>";
			}

			div[i].innerHTML = nHTML;
			div[i].getElementsByTagName('IMG')[0].onclick = function () {
				var img_name = this.alt;
				var chd = this.parentNode;
				while(chd.className != "fig panel") chd = chd.parentNode;
				chd = chd.firstChild;
				while(!chd.id) {
					chd = chd.nextSibling;
				}
				var fid = chd.id;
				window.open("/articles/ViewImage.php?fn="+img_name+"_0068kjr&id="+fid, "figureView","width=1000,height=1000,scrollbars=yes");
				//window.open("/articles/Figure.php?xn=KJR-21-356&jc=0068kjr&id="+fid, "figureView","width=1000,height=1000,scrollbars=yes");
			};
		} else if(div[i].className == "table-wrap panel") {
			
			var img_name = div[i].getElementsByTagName('IMG')[0].alt;
			var dLink = document.createElement("P");
			dLink.setAttribute("align", "right");
			dLink.innerHTML = "<a href=\"/articles/ViewImage.php?fn="+img_name+"_0068kjr&mode=export\"><img src=\"/image/icon/down_table.gif\" border=\"0\" alt=\"Download Table\" title=\"Download Table\"> </a>";
			div[i].appendChild(dLink);

			div[i].getElementsByTagName('IMG')[0].onclick = function () {
				var img_name = this.alt;
				var chd = this.parentNode;
				while(chd.className != "table-wrap panel") chd = chd.parentNode;
				chd = chd.firstChild;
				while(!chd.id) {
					chd = chd.nextSibling;
				}
				var tid = chd.id;
				//window.open("/articles/Table.php?xn=KJR-21-356&jc=0068kjr&id="+tid, "tableView", "width=800,height=600,scrollbars=yes");
				window.open("/articles/ViewImage.php?fn="+img_name+"_0068kjr&id="+tid, "figureView","width=1000,height=1000,scrollbars=yes");
			};

		}
		
		$(".panel").css("margin-bottom","25px");
	}
	setTimeout("layoutFix()", 1);
	
</script>	<style>
		.flowplayer a{ max-width:0px; }
	</style>

	</div>

	<div class="article_aside aside viewArea" style='width:25%;padding-left:30px;'>
		        <dl class="tool">
            <dt>TOOLS</dt>
            <dd>
                <ul>
					<li><a href="/func/download.php?path=L2hvbWUvdmlydHVhbC9rYW1qZS9zeW5hcHNlL3VwbG9hZC9TeW5hcHNlRGF0YS9QREZEYXRhLzAwNjhranIva2pyLTIxLTM1Ni5wZGY=&filename=a2pyLTIxLTM1Ni5wZGY=")'><img src="/image/aside/ic_pdf.gif" alt="PDF Link" border="0"/> PDF Links</a></li><li><a href="/api/?mode=download&type=xml&kmsid=1142721"><img src="/image/aside/ic_xml.gif" alt="XML Download" border="0"/>XML Download</a></li><li><a href="/func/download.php?path=L2hvbWUvdmlydHVhbC9rYW1qZS9zeW5hcHNlL3VwbG9hZC9TeW5hcHNlRGF0YS9UcmFuc2Zvcm1EYXRhL0VQVUIvMDA2OGtqci82OF9ranJfMjFfM18zNTYuZXB1Yg==&filename=Njhfa2pyXzIxXzNfMzU2LmVwdWI=")'><img src="/image/aside/ic_epub.gif" alt="ePub Link" border="0"/> ePub Link</a></li>
					<li>
						<a href="/utils/CitationForm.php?ksid=1142721" target="_blank" onclick="window.open(this.href, '_blank', 'width=600,height=340'); return false;"><img src="/image/aside/ic_citation.gif" alt="Download Citation" border=0> Download Citation</a>
                    </li>
                    
					<!--li>
                        <a href="/journal/crossRefTDM.php?number=" target="_blank" onclick="window.open(this.href, 'CrossRef TDM', 'width=800,height=800,scrollbars=yes');return false;"><img src="/image/aside/ic_tdm.gif" alt="CrossRef TDM" border="0"/> CrossRef TDM</a>
                    </li-->

                    <li><a href="javascript:window.print();"><img src="/image/aside/ic_print.gif" alt="" /> Print</a></li>

                    <li>
                        &nbsp;&nbsp;&nbsp;Share :&nbsp;
                        <a href="http://www.facebook.com/sharer.php?u=&t=" onclick="window.open(this.href, 'Facebook', 'width=800,height=500,scrollbars=yes');return false;">
                            <img src="/image/aside/ic_facebook.gif" alt="Facebook" style='padding-left:10px;padding-right:0px;'/></a>
                        <a href="http://twitter.com/home?status=" onclick="window.open(this.href, 'Twitter', 'width=750,height=500,scrollbars=yes');return false;">
                            <img src="/image/aside/ic_twitter.gif" alt="Twitter" style='padding-left:10px;padding-right:0px;'/></a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=&title=" onclick="window.open(this.href, 'LinkedIn', 'width=750,height=500,scrollbars=yes');return false;">
                            <img src="/image/aside/ic_linkedin.gif" alt="Linked In" style='padding-left:10px;padding-right:0px;'/></a>
                    </li>

                </ul>
            </dd>
        </dl>

        <dl class="metrics">
                            <dt style="padding-top:17px;">ORCID iDs</dt>
                <dd>
                                            <p style='padding: 5px 0px 5px;'>
                            <i style="font-style:normal">
                                Yoon Joo  Shin                                <a href="https://orcid.org/0000-0001-7872-5552" style="float:none"><img src="/image/orcid_16x16.gif" valign="middle"></a>
                            </i><br>
                            <span><a href="https://orcid.org/0000-0001-7872-5552" target='_blank'>https://orcid.org/0000-0001-7872-5552</a></span>
                        </p>
                                            <p style='padding: 5px 0px 5px;'>
                            <i style="font-style:normal">
                                Won  Chang                                <a href="https://orcid.org/0000-0001-7367-9841" style="float:none"><img src="/image/orcid_16x16.gif" valign="middle"></a>
                            </i><br>
                            <span><a href="https://orcid.org/0000-0001-7367-9841" target='_blank'>https://orcid.org/0000-0001-7367-9841</a></span>
                        </p>
                                            <p style='padding: 5px 0px 5px;'>
                            <i style="font-style:normal">
                                Jong Chul  Ye                                <a href="https://orcid.org/0000-0001-9763-9609" style="float:none"><img src="/image/orcid_16x16.gif" valign="middle"></a>
                            </i><br>
                            <span><a href="https://orcid.org/0000-0001-9763-9609" target='_blank'>https://orcid.org/0000-0001-9763-9609</a></span>
                        </p>
                                            <p style='padding: 5px 0px 5px;'>
                            <i style="font-style:normal">
                                Eunhee  Kang                                <a href="https://orcid.org/0000-0001-9921-8103" style="float:none"><img src="/image/orcid_16x16.gif" valign="middle"></a>
                            </i><br>
                            <span><a href="https://orcid.org/0000-0001-9921-8103" target='_blank'>https://orcid.org/0000-0001-9921-8103</a></span>
                        </p>
                                            <p style='padding: 5px 0px 5px;'>
                            <i style="font-style:normal">
                                Dong Yul  Oh                                <a href="https://orcid.org/0000-0002-8393-7960" style="float:none"><img src="/image/orcid_16x16.gif" valign="middle"></a>
                            </i><br>
                            <span><a href="https://orcid.org/0000-0002-8393-7960" target='_blank'>https://orcid.org/0000-0002-8393-7960</a></span>
                        </p>
                                            <p style='padding: 5px 0px 5px;'>
                            <i style="font-style:normal">
                                Yoon Jin  Lee                                <a href="https://orcid.org/0000-0002-3572-029X" style="float:none"><img src="/image/orcid_16x16.gif" valign="middle"></a>
                            </i><br>
                            <span><a href="https://orcid.org/0000-0002-3572-029X" target='_blank'>https://orcid.org/0000-0002-3572-029X</a></span>
                        </p>
                                            <p style='padding: 5px 0px 5px;'>
                            <i style="font-style:normal">
                                Ji Hoon  Park                                <a href="https://orcid.org/0000-0002-6794-4909" style="float:none"><img src="/image/orcid_16x16.gif" valign="middle"></a>
                            </i><br>
                            <span><a href="https://orcid.org/0000-0002-6794-4909" target='_blank'>https://orcid.org/0000-0002-6794-4909</a></span>
                        </p>
                                            <p style='padding: 5px 0px 5px;'>
                            <i style="font-style:normal">
                                Young Hoon  Kim                                <a href="https://orcid.org/0000-0001-5554-3828" style="float:none"><img src="/image/orcid_16x16.gif" valign="middle"></a>
                            </i><br>
                            <span><a href="https://orcid.org/0000-0001-5554-3828" target='_blank'>https://orcid.org/0000-0001-5554-3828</a></span>
                        </p>
                                    </dd>
            
			 <dt style='padding-top:17px;'>
                Similar articles
            </dt>

            <dd>
                            </dd>	
        </dl>
		    </div>
</div>

<style>
#related a:hover, #inThisPage a:hover {
	color: ;
	text-decoration: none;
}
.flowplayer.is-error {
		display: none !important;
	}

</style>
        </div>

        <div id="footer">
            <p>Copyright &copy; 2026. Korean Association of Medical Journal Editors. <span class="footer_mobile">&nbsp;&nbsp;&nbsp;&nbsp;</span>E-mail: <a href="mailto:koreamed@kamje.or.kr">koreamed@kamje.or.kr</a></p>
        </div>
    </div>


</body>
</html>