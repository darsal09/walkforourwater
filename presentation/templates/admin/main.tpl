{load_presentation_object filename="adminController" foldername="admin" assign="obj"}
<!DOCTYPE html>
<html>
  <head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<title>Walk for our Water</title>
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
		<link rel="https://cdn.datatables.net/1.10.8/css/jquery.dataTables.min.css">
		<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/styles/thegympark.css">		  
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>		
		<![endif]-->
		<link rel="shortcut icon" type="image/x-icon" href="" />
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	</head>
	<body>
			{include file="public/nmenu.tpl"}
            <div class="row" style="background:rgba(88, 151, 251, 0.53); margin-top:-18px;">
				<div class="col-md-3">
					{include file="admin/dashboardMenu.tpl"}
				</div>
				<div class="col-md-9" style="background:white;">
					{include file=$obj->mContent}
				</div>
                <div class="foooter">
                    &copy; 2015-{date( 'Y' )}
                </div>
            </div>
	</body>
	<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/dataTables.bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>		
	<script type="text/javascript" src="/scripts/source.js"></script>
	<script type="text/javascript" src="/scripts/validateForm.js"></script>
</html>
