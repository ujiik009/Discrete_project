<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Discrete</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
   
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">


    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>DISCRETE PROJECT</b></a>
            <!--logo end-->
           
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="#"><img src="assets/img/ice.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Mr.Apirat Pramchana </h5>

              	  	
                  <li class="mt" id="btn-number-system">
                      <a class="active" href="#">
                          <i class="fa fa-dashboard"></i>
                          <span>NUMBER SYSTEM</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>MATRIX</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="#" id="add_matrix">Adding Matrix</a></li>
                          <li><a  href="#" id="Multip_matrix">Matrix Multiplication</a></li>
                          <li><a  href="#" id="tranpose">Matrix Transpose</a></li>
                          <li><a  href="#" id="det">Determinant Matrix </a></li>
                          <li><a href="#" id="inverse">Inverse Matrix</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu" id="btn-about">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>about</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="#" id="btn-about-pro">About Program</a></li>
                          <li><a  href="#" id="btn-about-dev">About Developer</a></li>
                         
                      </ul>
                     
                  </li>
                  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
              
                     
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds" >
                    <!--COMPLETED ACTIONS DONUTS CHART-->
                      <h3>HISTORY</h3>
                      <div id="content_history"  style="min-height: 69vh; max-height: 450px; overflow: scroll;">            
                          <!-- First Action -->
                         
                         
                      </div> <!-- end class content_history -->

                       <!-- USERS ONLINE SECTION -->
            
                      
                  </div><!-- /col-lg-3 -->
              </div><!--/row --> 
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="index.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
  
    <script src="assets/js/jquery-3.1.0.js"></script>
    <script src="assets/js/jquery.timeago.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/base/big.min.js"></script>
    <script type="text/javascript" src="assets/js/base/core.js"></script>
    <script type="text/javascript" src="assets/js/base/standard.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->

	
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Discete project',
            // (string | mandatory) the text inside the notification
            text: 'ขอต้อนรับเข้าสู่โปรแกรม',
            // (string | optional) the image to display on the left
            image: 'assets/img/ice.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
	<script type="text/javascript">
   $(document).ready(function () {
      get_page_number_system();
       
        $("#btn-about-dev").click(function(event) {
          get_page_about_dev();
        });
         $("#btn-about-pro").click(function(event) {
          get_page_about_pro();
        });

        $("#btn-number-system").click(function(event) {
          get_page_number_system();
        });
        $("#add_matrix").click(function(event) {
          get_page_adding_matrix();
        });
        $("#Multip_matrix").click(function(event) {
          get_page_Matrix_Multiplication();
        });
        $("#tranpose").click(function(event) {
          get_page_Matrix_tranpose();
        });
        $("#det").click(function(event) {
          get_page_det_matrix();
        });
        $("#inverse").click(function(event) {
          get_page_inverse();
        });
    });


   function get_page_number_system(){
     $.get('page/number_system.html', function(data) {
         $(".main-chart").html(data);
      });   
   }
  function get_page_about_dev(){
     $.get('page/about_dev.html', function(data) {
         $(".main-chart").html(data);
      });   
   }
   function get_page_about_pro(){
     $.get('page/about_pro.html', function(data) {
         $(".main-chart").html(data);
      });   
   }
   function get_page_adding_matrix(){
    $.get('page/add_matrix.html', function(data) {
        $(".main-chart").html(data);
    });
   }
   function get_page_Matrix_Multiplication(){
    $.get('page/Matrix_Multiplication.html', function(data) {
        $(".main-chart").html(data);
    });
   }
   function get_page_Matrix_tranpose(){
    $.get('page/Matrix_Transpose.html', function(data) {
        $(".main-chart").html(data);
    });
   }
   function get_page_det_matrix(){
    $.get('page/Determinant_Matrix.html', function(data) {
      $(".main-chart").html(data);
    });
   }
   function get_page_inverse(){
     $.get('page/inverse_matrix.html', function(data) {
      $(".main-chart").html(data);
    });
   }

   function get_date_dmy(){
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!

    var yyyy = today.getFullYear();
    if(dd<10){
        dd='0'+dd;
    } 
    if(mm<10){
        mm='0'+mm;
    } 
    var today = dd+'/'+mm+'/'+yyyy;
    return today;
   }
   

    function add_history(date,text){
     var obj_text = '<div class="desc">'+
          '<div class="thumb">'+
            '<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>'+
          '</div>'+
          '<div class="details">'+
            '<p><muted><time class="timeago" datetime="'+date+'">'+date+'</time></muted><br/>'+
            text+
          '</div>'+
        '</div>';

        $("#content_history").prepend( obj_text );

        jQuery("time.timeago").timeago();
      
   }
  
  </script>

  

  </body>
</html>
