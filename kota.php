<!DOCTYPE html>
<html lang="en">

<head>
    <title>Solat Bro !</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
     <!-- Favicon icon -->
     <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
     <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

     <!-- Google font-->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

     <!-- iconfont -->
     <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

     <!-- simple line icon -->
     <link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">

     <!-- Required Fremwork -->
     <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/css/bootstrap.min.css">

     <!-- Weather css -->
     <link href="assets/css/svg-weather.css" rel="stylesheet">

     <!-- Echart js -->
     <script src="assets/plugins/charts/echarts/js/echarts-all.js"></script>

     <!-- Style.css -->
     <link rel="stylesheet" type="text/css" href="assets/css/main.css">

     <!-- Responsive.css-->
     <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

     <!--color css-->
     <link rel="stylesheet" type="text/css" href="assets/css/color/color-1.min.css" id="color"/>

 </head>
 <body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
    <!--   <div class="loader-bg">
    <div class="loader-bar">
    </div>
</div> -->
<!-- Navbar-->
<header class="main-header-top hidden-print">
    <a href="index.html" class="logo"><img class="img-fluid able-logo" src="assets/images/logo.png" alt="Theme-logo"></a>
    <nav class="navbar navbar-static-top">
        <!-- Navbar Right Menu-->
        <div class="navbar-custom-menu f-right">
            <div class="upgrade-button m-r-10">
                <a href="https://instagram.com/xcode___" class="icon-circle txt-white btn btn-sm btn-warning upgrade-button">
                    <span>About</span>
                </a>
            </div>
           
                    
                </div>
            </nav>
        </header>
       
<!-- Sidebar chat end-->
<div class="content-wrapper">

   <!-- Container-fluid starts -->
   <!-- Main content starts -->
   <div class="container-fluid">
   
    <!-- 4-blocks row start -->
    <div style="align-content: center" class="row m-b-30 dashboard-header">
               
               
        <?php
$str = file_get_contents('http://wahidganteng.ga/process/api/729f09fbfe94ae60c805aae8cacdcc57/jadwal-sholat/get-kota');
$json = json_decode($str, true);
$str = date("Y-m-d");
$exp = explode('-',$str);
$year = $exp[0];
$mnt = $exp[1];
?>
               
               
               
            </div>
            <!-- 4-blocks row end -->
            <!-- 1-3-block row start -->
            <div class="row">
               
            </div>
           
            
        </div>
        <!-- 1-3-block row end -->

        <!-- 3-1-block start -->
        <div class="row">
            <!-- Recent Items start -->
            <div class="col-lg-4 col-md-12 grid-item">
                
            </div>
            <!-- Recent Items end -->
            <div style="margin-left: 10px;margin-right: 10px" class="col-lg-8 col-md-12 grid-item">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-7 p-r-0 txt-white climacon-left">
                           
        </div>
        <div class="col-lg-5 p-l-0 climacon-right">
            <div class="p-10">

                <div class="table-responsive">

                    <table class="table weather-table m-t-15">
                        <tbody>
                            
                            <?php 
                            for($i=0;$i<=315;$i++){
                            ?>
                            <tr class="svg-icon">
                            <td><?php echo $i+1; ?></td>    
                            <td><?php echo $json['data'][$i]['nama_kota']; ?></td>
                            <td> <a href="show.php?idk=<?php echo $json['data'][$i]['id']; ?>&bln=<?php echo $mnt ?>&thn=<?php echo $year ?>&nama_kota=<?php echo $json['data'][$i]['nama_kota']; ?>">
                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title=".Show data">
                                    <i class="icofont icofont-search-alt-2"></i>
                                </button>
                                </a></td>

                            </tr>
                            <?php } ?>
                       
                            
                            
                        
   
</tbody>
</table>
</div>

</div>
</div>
</div>

</div>
</div>
</div>

<!-- 3-1-block end -->

<!-- 2-1 block start -->
<!-- 2-1 block end -->
</div>
<!-- Main content ends -->
<!-- Container-fluid ends -->
<div class="fixed-button">
    <a href="https://instagram.com/xcode___" class="btn btn-md btn-primary">
      <i class="fa fa-shopping-cart" aria-hidden="true"></i> About
  </a>
</div>
</div>
</div>


<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
      <div class="ie-warning">
          <h1>Warning!!</h1>
          <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
          <div class="iew-container">
              <ul class="iew-download">
                  <li>
                      <a href="http://www.google.com/chrome/">
                          <img src="assets/images/browser/chrome.png" alt="Chrome">
                          <div>Chrome</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.mozilla.org/en-US/firefox/new/">
                          <img src="assets/images/browser/firefox.png" alt="Firefox">
                          <div>Firefox</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://www.opera.com">
                          <img src="assets/images/browser/opera.png" alt="Opera">
                          <div>Opera</div>
                      </a>
                  </li>
                  <li>
                      <a href="https://www.apple.com/safari/">
                          <img src="assets/images/browser/safari.png" alt="Safari">
                          <div>Safari</div>
                      </a>
                  </li>
                  <li>
                      <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                          <img src="assets/images/browser/ie.png" alt="">
                          <div>IE (9 & above)</div>
                      </a>
                  </li>
              </ul>
          </div>
          <p>Sorry for the inconvenience!</p>
      </div>
      <![endif]-->
      <!-- Warning Section Ends -->

      <!-- Required Jqurey -->
      <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
      <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
      <script src="assets/plugins/tether/dist/js/tether.min.js"></script>

      <!-- Required Fremwork -->
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

      <!-- waves effects.js -->
      <script src="assets/plugins/Waves/waves.min.js"></script>

      <!-- Scrollbar JS-->
      <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
      <script src="assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

      <!--classic JS-->
      <script src="assets/plugins/classie/classie.js"></script>

      <!-- notification -->
      <script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

      <!-- Rickshaw Chart js -->
      <script src="assets/plugins/d3/d3.js"></script>
      <script src="assets/plugins/rickshaw/rickshaw.js"></script>

      <!-- Sparkline charts -->
      <script src="assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

      <!-- Counter js  -->
      <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
      <script src="assets/plugins/countdown/js/jquery.counterup.js"></script>

      <!-- custom js -->
      <script type="text/javascript" src="assets/js/main.min.js"></script>
      <script type="text/javascript" src="assets/pages/dashboard.js"></script>
      <script type="text/javascript" src="assets/pages/elements.js"></script>
      <script src="assets/js/menu.min.js"></script>

      <script>
        var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function(){
            if ($window.scrollTop() >= 200) {
             nav.addClass('active');
         }
         else {
             nav.removeClass('active');
         }
     });
    </script>
</body>

</html>
