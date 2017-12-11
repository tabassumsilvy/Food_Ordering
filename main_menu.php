<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food court";
//create connection
$conn = mysqli_connect($servername,$username,$password,$dbname); 
 
function mysql_query_or_die($conn,$query) {
    $result = mysqli_query($conn,$query);
    if ($result){
		
        return $result;
	}
    else {
		
        $err = mysqli_error();
        die("<br>{$query}<br>*** {$err} ***<br>");
    }
}


$id = $_GET['id'];


?>





<!DOCTYPE html>


<<head>
	<title>Food Bank Website Template | Home :: w3layouts</title>
	
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	
	<!--about-bottom -->
	<link href="//fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
	<div class="agile-banner-main" id="home">
		<div class="banner-layer">
			<div class="header-main">
				<div class="container">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							

						</div>
						<!-- navbar-header -->
						<?php
					$query = "SELECT * FROM city"; 
					$result = mysql_query_or_die($conn,$query);
					?>
						
						
						
						
						
						
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li class="scroll hvr-underline-from-center">
									<a href="index.php">Home</a>
								</li>
								
								<?php
									while ($row = mysqli_fetch_assoc($result)) {
								?>
								<li>
									<a href="main_menu.php?id=<?php echo $row['city_id']; ?>"><?php echo $row['city_name']; ?></a>
								</li>
								
								<?php
									}
								?>
							
								<li>
									<a class="scroll hvr-underline-from-center" href=>Log in</a>
								</li>
							</ul>
							<ul class="list-right">
								<li>
									<span class="fa fa-envelope-o list-icon" aria-hidden="true"></span>
									<a href="mailto:info@example.com">info@example.com</a>
								</li>
								<li>
									<span class="fa fa-phone list-icon" aria-hidden="true"></span>
									<p> 1234 423 23 </p>
								</li>
							</ul>
						</div>


						
					</nav>
					
				</div>
			</div>
















<?php
$query = "SELECT * FROM city where city_id = $id"; 
$result = mysql_query_or_die($conn,$query);
$row = mysqli_fetch_assoc($result)
?>

<?php
$query1 = "SELECT * FROM restaurent where city_id = $id"; 
$result1 = mysql_query_or_die($conn,$query1);

?>



	<div class="menu-agileits_w3layouts section">
		<div class="container">

			<div class="load_more">-->
				<h3 class="w3layouts-title">
					<img src="images/menu1.png" class="img-responsive" alt="" />Restaurant in <?php echo $row['city_name']; ?></h3>
				<ul id="myList">
					<li>
						<div class="l_g">
							<div class="l_g_r">
								<div class="col-md-6 menu-grids">-->
								
								
								
								<?php
									while ($row1 = mysqli_fetch_assoc($result1)) {
								?>
								
								<a href="page_details.php?id=<?php echo $row1['restaurent_id']; ?>" >
								
									<div class="w3l-menu-text">
										<div class="menu-text-left">
											<img src="images/m1.jpg" alt="" class="img-responsive" />
										</div>
										<div class="menu-text-right">
											<div class="menu-title">
												<h4><?php echo $row1['restaurent_name']; ?> </h4>

											</div>
											
											<div class="clearfix"></div>
											
										</div>
										<div class="clearfix"> </div>
									</div>
								</a>
									
									
									<?php
									}
									?>
									
									
									
									
								</div>
								<div class="clearfix"> </div>
							</div>
						
	



	

	
	
	
<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	
	
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	
	


	<script src="js/SmoothScroll.min.js"></script>

	<script>
		$(document).ready(function () {
			size_li = $("#myList li").size();
			x = 1;
			$('#myList li:lt(' + x + ')').show();
			$('#loadMore').click(function () {
				x = (x + 1 <= size_li) ? x + 1 : size_li;
				$('#myList li:lt(' + x + ')').show();
			});
			$('#showLess').click(function () {
				x = (x - 1 < 0) ? 1 : x - 1;
				$('#myList li').not(':lt(' + x + ')').hide();
			});
		});
	</script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>-->


</body>

</html>