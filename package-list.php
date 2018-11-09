<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Malawi 411  | Destination</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--<link href="css/stylebk.css" rel='stylesheet' type='text/css' />-->

<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

 <!-- Bootstrap core CSS -->
       
        
 <!-- Custom styles for this template -->
 <link rel="stylesheet" href="css/lightbox.min.css">
 <link href="css/responsive.css" rel="stylesheet">
 <script src="js/jquery.min.js" type="text/javascript"></script>
 
 <script src="js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
 <script src="js/instafeed.min.js" type="text/javascript"></script>
 <script src="js/custom.js" type="text/javascript"></script>        
        
 


<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
	<div id="page">



<?php include('includes/headervc.php');?>
<!--- banner ---->
 <section class="image-head-wrapper">
                <div class="inner-wrapper">
                    <h1>Destinations</h1>
                </div>
            </section>
            <div class="clearfix"></div>
               

<!--- /banner ---->
<!--- rooms ---->
<div class="rooms">
	<div class="container">

		<div class="room-bottom">
			<h3>Destinations</h3>


	<?php 
		//query
		$sql = "SELECT * from tbltourpackages";
		$query = $dbh->prepare($sql);
		$query->execute();
		$results=$query->fetchAll(PDO::FETCH_OBJ);
		$totalnumRows = $query->rowCount();

		//how many result per page
		$result_per_page =5;

		//how many page
		$num_pages = ceil($totalnumRows/$result_per_page);

		//determine which page the visitor is on
		if(!isset($_GET['page'])){
			$page =1;
		}else{
			$page =$_GET['page'];
		}

		//determine the sql LIMIT starting for the results on the displaying page
		$this_page_first_result = ($page-1)*$result_per_page;

		//retrieve selected set
		$sqlsmallset = "SELECT * from tbltourpackages LIMIT " . $this_page_first_result . " , " . $result_per_page;
		$querysmallset = $dbh->prepare($sqlsmallset);
		$querysmallset->execute();
		$resultsmallset=$querysmallset->fetchAll(PDO::FETCH_OBJ);	

		$cnt=1;
		if($querysmallset->rowCount() > 0)
		{
		foreach($resultsmallset as $result)
		{	?>
					<div class="rom-btm">
						<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
							<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
						</div>
						<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
							<h4>Package Name: <?php echo htmlentities($result->PackageName);?></h4>
							<h6>Package Type : <?php echo htmlentities($result->PackageType);?></h6>
							<p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
							<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
						</div>
						<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
							<h5>USD <?php echo htmlentities($result->PackagePrice);?></h5>
							<a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
						</div>
						<div class="clearfix"></div>
					</div>

	<?php }} ?>


<ul class="pagination">
	<?php  for ($page =1;$page<=$num_pages; $page++) {
	?>
    <li class="<?php echo $page ==$_GET['page']?'active':''; ?>"><a href="package-list.php?page= <?php echo $page; ?>"><?php echo $page;  ?></a></li>
    
<?php }?>
  </ul>








		</div>
	</div>
</div>
<!--- /rooms ---->
</div>
<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
<!-- //write us -->
</body>
</html>
