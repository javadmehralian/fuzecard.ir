<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../img/misc/favicon.png">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>FUZE DELIVERY - TRACKING
    </title>
    <!-- Bootstrap Core CSS-->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS-->
    <link href="../css/universal.css" rel="stylesheet">
	<link href="../css/rtl.css" rel="stylesheet">
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top">
  
    <!-- Preloader-->
    <div id="preloader">
      <div id="status"></div>
    </div>
    <!-- Navigation-->
    <!-- Header-->
    <header data-background="../img/tracking/7.jpg" class="intro intro-fullscreen">
      <!-- Intro Header-->
      <div class="intro-body">
        <!-- Login-->
        <h1>ردیابی تحویل فیوز</h1>
        <div class="container">
         <div class="row">
                   <div class="col-md-6 col-md-offset-3">
             <ul class="list-inline">
             </ul>
             <h3>
             <p style="padding: 0; margin: 0;">شما می توانید اطلاعات ردیابی تحویل را بررسی کنید</P>
             <p style="padding: 0; margin: 0;">با وارد کردن ایمیل ایندی گوگو.</p>
             <h3>
           </div>
          </div>
          <div class="row wow fadeIn">
            <div class="col-md-4 col-md-offset-4">
              <form role="form" id="email" name="email" method="post" action="fuze_tracking_proc.php">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label for="email" class="sr-only control-label">Your Email</label>
                  <input id="email" name="email" type="email" placeholder="ایمیل ایندیگوگو" data-validation-required-message="Please enter email" class="form-control input-lg" autofocus>
                  <span class="help-block text-danger"></span>
                </div>
              </div>
              <button type="submit" class="btn btn-violet" onclick="getTracking();" >ردیابی کن</button>
            </form>
            </div>
          </div>
                    <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <ul class="list-inline">
              </ul>
              <p class="small">کپی رایت © 2017 بریلیانتس تمامی حقوق محفوظ است</p>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- jQuery-->
    <script src="../js/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript-->
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/jquery.countdown.min.js"></script>
    <script src="../js/device.min.js"></script>
    <script src="../js/form.min.js"></script>
    <script src="../js/jquery.placeholder.min.js"></script>
    <script src="../js/jquery.shuffle.min.js"></script>
    <script src="../js/jquery.parallax.min.js"></script>
    <script src="../js/jquery.circle-progress.min.js"></script>
    <script src="../js/jquery.swipebox.min.js"></script>
    <script src="../js/smoothscroll.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/jquery.smartmenus.js"></script>
    <!-- Custom Theme JavaScript-->
    <script src="../js/universal.js"></script>
    <script type="text/javascript">
		function getTracking(){
			//email check 
			if(document.getElementById("email").value == ''){
				alert("Please type your email.");
			}else{
				document.getElementById("email").action = "fuze_tracking_proc.php";
				document.getElementById("email").submit();
			}
		}
	</script>
	
<!--[if lt IE 9]>
    <script src="../https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="../https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </body>
</html>