<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="content.css">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Fei Wang - Computer product</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <link href="css/table-responsive.css" rel="stylesheet">



  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="#" class="logo"><b>Computer<span>  products</span></b></a>
      <!--logo end-->

    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <li>
         	 <a  href="index.php">
              <i class="fa fa-bar-chart-o"></i>
              <span>Homepage </span>
              </a>
          </li>
        
         <li>
            <a href="about.php">
              <i class="fa fa-bar-chart-o"></i>
              <span>About </span>
              </a>
          </li>
          
         <li>
            <a class="active" href="products.php">
              <i class="fa fa-bar-chart-o"></i>
              <span>Products </span>
              </a>
          </li>
          
          <li>
            <a href="news.php">
              <i class="fa fa-bar-chart-o"></i>
              <span>News </span>
              </a>
          </li>
          
          <li>
            <a href="contacts.php">
              <i class="fa fa-bar-chart-o"></i>
              <span>Contacts </span>
              </a>
          </li>
          
          <li>
            <a href="alluser.php">
              <i class="fa fa-bar-chart-o"></i>
              <span>All Users </span>
              </a>
          </li>
          
           <li>
            <a href="usersection.php">
              <i class="fa fa-bar-chart-o"></i>
              <span>User section </span>
              </a>
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
        <h3><i class="fa fa-angle-right"></i> The most visited products

        </h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i>Product List</h4>
              
              
 
              
<?php 

include 'config.php';

$sql = "select * from products order by product_visit desc limit 0, 5";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result))
{
    $productId = $row['product_id'];
    $productImgId = $productId - 100;
//     echo '<img src="img/pro'.$productImgId.'.png"'.' alt="service image" >';
    echo "<a href=\"productDescription.php?product=$productId\"><img src=\"img/pro$productImgId.png\">";
    echo '<br>';
    echo "Product :".$row['product_name']."</a>"."<br><br>";
    
}

?>




              
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>

                  </tbody>
                </table>

                
              </section>
            </div>
            
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="responsive_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
</body>

</html>
