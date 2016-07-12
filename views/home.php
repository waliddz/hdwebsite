<!DOCTYPE html>
<html>
<head>

	<title>فريمروك هيدروجين | الرئيسية</title>
	<!-- Place this tag in your head or just before your close body tag. -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>
	<link rel="icon" type="image/png" href="https://s3-eu-west-1.amazonaws.com/eurp/Graphics/Technohumanist/thlogo.png"/>
	<link rel="stylesheet" type="text/css" href="views/style.css">
	<link rel="stylesheet" type="text/css" href="//www.fontstatic.com/f=elmessiri-light,cairo-bold,cairo-light" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/styles/default.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/highlight.min.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
	<style media="screen">
	</style>
</head>
<body>
	<div class="body">

	<center>
		<ul class="ul">
			<li class="li"><a href="<? echo $this->add(""); ?>">الرئيسية</a></li>
			<li class="li"><a href="<? echo $this->add("blog"); ?>">المدونة</a></li>
			<li class="li"><a href="<? echo $this->add("docs"); ?>">التوثيق</a></li>
			<li class="li"><a href="<? echo $this->add("contact") ?>">تواصل معي</a></li>
		</ul>
		<br/>
		<br/>
		<br/>
		<br/>
		<div style="width: 50%; height: 20px; border-bottom: 1px solid black; text-align: center">
      <span class="title" style="font-size: 40px; background-color: white; padding: 0 10px;">
     		فريمورك هيدورجين 3.0
      </span>
    </div>
		<br/>
		<p>
			فريمورك هيدروجين هو فريمورك php مصغر للعمل على مشاريع صغيرة او متوسطة , <br/>
			سبب التسمية <strong>هيدروجين</strong> و هذا لتشبيه الفريمروك  با ذرة الهيدروجين في الصغر و الخفة .
		</p>

		<br/>
			<h3>مثال انشاء موجه صفحات : </h3>

		</div>

				<div class="code" style=" direction:ltr; max-width:60%; padding-left:20%; padding-right:20%;">

					<pre>
						<code class="php">
return $this->add([
	 "/home"	=> "HomeController.index|ALL",
	 "/"		=> "HomeController.index|ALL",
	 "/postData"	=> "DataController.save|POST"
]);
					</code>
					</pre>

				</div>
				<br/>
				<div class="body">
					<center>
						<!-- Place this tag where you want the button to render. -->
<a aria-label="Watch waliddz/hydrogen-framework on GitHub" data-count-aria-label="# watchers on GitHub" data-count-api="/repos/waliddz/hydrogen-framework#subscribers_count" data-count-href="/waliddz/hydrogen-framework/watchers" data-icon="octicon-eye" href="https://github.com/waliddz/hydrogen-framework" class="github-button">Watch</a>
				</div>

	</center>
</body>
</html>
