{load_presentation_object filename="publicController" foldername="public" assign="obj"}
<!DOCTYPE html>
<html>
  <head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<title>Walk for our Water</title>
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>		
		<![endif]-->
		<link rel="shortcut icon" type="image/x-icon" href="" />
		<script type="text/javascript" src="/bootstrap/js/jquery-1.11.2.min.js"></script>
		<!--<script src="https://use.fonticons.com/94093d18.js"></script> //-->
		<link rel="stylesheet" href="/styles/thegympark.css">		  
	</head>
	<body>
		<div class="container">
			{include file="public/nmenu.tpl"}
			{include file=$obj->mContent}
			<div style="background:#3a3a3a;padding:20px;">
				{include file="public/footer.tpl"}
			</div>
		</div>
	</body>
	<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/scripts/source.js"></script>
</html>
