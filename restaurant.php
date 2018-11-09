<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Malawi 411  | Resort</title>
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
 <section class="image-resto-wrapper">
                <div class="inner-wrapper">
                    <h1>Restaurants</h1>
                </div>
            </section>
            <div class="clearfix"></div>
               

<!--- /banner ---->
<!--- Filter ---->

<div class="rooms">
	<div class="container">
		<div class="room-bottom">
			<h3>Filter Location</h3>  

			<?php 
				
				if(!isset($_GET['location'])){
					$location= 0;
				}else{
					$location = $_GET['location'];
				}

				$sql_loc = "SELECT DISTINCT LocationName, tbllocations.LocationId  FROM tbllocations INNER JOIN tbltourpackages ON tbllocations.LocationId = tbltourpackages.LocationId WHERE EstTypeId = 2";
				$loc_query = $dbh->prepare($sql_loc);
				$loc_query->execute();
				$loc_results=$loc_query->fetchAll(PDO::FETCH_OBJ);
				$locnumRows = $loc_query->rowCount();

				if($locnumRows>0){

				?>
				<form>
					<div class="select" style ="width: 100%;">
						
					
					<SELECT name="location" onChange="this.form.submit()" style ="width: 100%;" >
						<option value=0  <?php echo $location==0? "selected='selected'":"" ?>  >All Locations</option>
						<?php foreach($loc_results as $result){ ?>

							<option value=<?php echo htmlentities($result->LocationId);?> <?php echo $location==$result->LocationId? "selected='selected'":"" ?>  ><?php echo htmlentities($result->LocationName);?></option>
						<?php } ?> 

					</SELECT>
					</div>
				</form>
		<?php } else { ?> 

				<SELECT name="Location", style ="width: 100%;">
				<option value="0" selected="selected" disabled="true">No resort found</option>
				</SELECT>


		<?php } ?> 


		 

		</div>

	</div>
	
</div>

<!--- rooms ---->
<div class="rooms">
	<div class="container">

		<div class="room-bottom">
			<h3>Restaurants</h3>


	<?php 
		
		//query
		if(!isset($_GET['location']) || $_GET['location']==0 ){
			$sql = "SELECT * from tbltourpackages WHERE EstTypeId = 2";
		}else{
			$loc =$_GET['location'];
			$sql = "SELECT * from tbltourpackages WHERE LocationId=$loc  AND EstTypeId = 2";
		}
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
		if(!isset($_GET['location']) || $_GET['location']==0 ){
			$sqlsmallset = "SELECT * from tbltourpackages WHERE EstTypeId = 2 LIMIT " . $this_page_first_result . " , " . $result_per_page;
			
		}else{
			$loc =$_GET['location'];
			$sqlsmallset = "SELECT * from tbltourpackages WHERE LocationId=$loc  AND EstTypeId = 2 LIMIT " . $this_page_first_result . " , " . $result_per_page;
			
		}

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
							<h4>Name: <?php echo htmlentities($result->PackageName);?></h4>
							<h6>Type: <?php echo htmlentities($result->PackageType);?></h6>
							<p><b>Location: </b> <?php echo htmlentities($result->PackageLocation);?></p>
							<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
						</div>
						<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
							<h5>MK <?php echo htmlentities($result->PackagePrice);?></h5>
							<a href="restaurant-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
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

<!--- /footer-top ---->
<?php include('includes/footer.php');?>
</div>
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
