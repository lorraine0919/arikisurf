<!DOCTYPE html>
<html lang="en">
<!--header-->
<head> 
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="Dashboard">
      <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  
      <!-- Bootstrap core CSS -->
      <link href="css/backstage/bootstrap.css" rel="stylesheet">
      <!--external css-->
      <link href="css/fontawesome/css/font-awesome.css" rel="stylesheet">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Custom styles for this template -->
      <link href="css/backstage/style.css" rel="stylesheet">
      <link href="css/backstage/style-responsive.css" rel="stylesheet">
      <script src="js/backstage/chart-master/Chart.js"></script>
      <script src="js/backstage/9backstage_login.js"></script>
  
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;display: block;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;padding: 5px 5px 8px 5px;font: 10px arial, san serif;text-align: left;}</style>
    `
    <title >Ariki Surf - 登入</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/9backstage_welcome.css">  -->
    <style type="text/css">
    	.form-control{
    		font-size: 16px;
    	}
    	.btn{
    		font-size: 16px;

    	}
    	.btn .fa {
    		margin: 0 10px;
    	}
    </style>
</head>
<!--header end-->
<body>
<!-- =================後臺管理================== -->
	<div id="login-page">
		<div class="container">
			<div class="form-login" >
		        <h2 class="form-login-heading">管理者登入</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control form-controlA" placeholder="管理者帳號" autofocus="">
		            <br>
		            <input type="password" class="form-control form-controlB" placeholder="管理者密碼">
		            <!-- <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
		
		                </span>
		            </label> -->
		            <button class="btn btn-theme btn-block"><i class="fa fa-lock"></i>登入</button>

		          
		
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		      </div>
		</div>
	</div>
	<script src="js/backstage/jquery.js"></script>
	<script src="js/backstage/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/backstage/jquery.backstretch.min.js"></script>
	<script>
        $.backstretch("images/9backstage/backstageloginbg.jpg", {speed: 500});
    </script>
</body>

</html>