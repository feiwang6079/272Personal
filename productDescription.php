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
          
          <li>
            <a href="http://master.feiwang.tech/allcompanies.php">
              <i class="fa fa-bar-chart-o"></i>
              <span>Back To Host </span>
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
        <h3><i class="fa fa-angle-right"></i> Product Introduction
        </h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i>Product Detail</h4>
              
              
 
              
<?php 
$productId = (int) $_GET['product'];

include 'config.php';

$sql = "select * from products where product_id = $productId";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$id = $row['product_visit'];
$id++;

$sql = "update products set product_visit = $id where product_id = $productId";
mysqli_query($conn, $sql);

$productImgId = $productId - 100;
echo '<img src="img/pro'.$productImgId.'.png"'.' alt="service image" >';
echo '<br>';

echo "Product :".$row['product_name']."<br>";
echo "Description:".$row['product_description'];


$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://master.feiwang.tech/RestHandleVisit.php");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$data = array("product_name"=>$row['product_name'], "product_visit" => $id, 
    "product_url"=>"http://www.feiwang.tech/productDescription.php?product=$productId", "company_name" => "Computer Products");
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
$res = curl_exec($curl);
curl_close($curl);
?>


<form class="contact-form php-mail-form" role="form" action="comment.php" method="GET">

 <div class="rating"> 
        <input type="radio" id="star5" name="rating" value="5" hidden/>
        <label for="star5"></label>
        <input type="radio" id="star4" name="rating" value="4" hidden/>
        <label for="star4"></label>
        <input type="radio" id="star3" name="rating" value="3" hidden/>
        <label for="star3"></label>
        <input type="radio" id="star2" name="rating" value="2" hidden/>
        <label for="star2"></label>
        <input type="radio" id="star1" name="rating" value="1" hidden/>
        <label for="star1"></label>
        </div>
		
		<?php echo "<input name=\"product\" value=$productId hidden/>" ;
		      $name = $row['product_name'];
              echo "<input name=\"product_name\" value=$name hidden/>" ;   ?>

              <div class="form-group">
                <textarea class="form-control" name="message" id="contact-message" 
                placeholder="Your Message" rows="5" data-rule="required" 
                data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
            <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Send Message</button>
              </div>

            </form>

              
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>

                  </tbody>
                </table>

	<?php 
	$sql = "select * from comments where product_id= $productId order by id desc";
	
	$result = mysqli_query($conn, $sql);
	
	echo "<div align=\"center\">";
	echo '<table width="800" border="0">';
	
	echo '<tr>';
	echo '<td>' . 'Comment' . '</td>';
	echo '<td>' . 'Star Count' . '</td>';
	echo '</tr>';
	
	while ($row = mysqli_fetch_assoc($result)) {
	    
	    echo '<tr>';
	    echo '<td>' . $row['comment'] . '</td>';
	    echo '<td>' . $row['rating'] . '</td>';
	    echo '</tr>';
	}
	echo "</table></div>";
 	?>
                
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
