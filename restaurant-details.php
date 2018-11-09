<?php
session_start();
error_reporting(0);
include("vendor/autoload.php");

include('includes/config.php');

use Mailgun\Mailgun;

if(isset($_POST['submit2']))
{
	$pid=intval($_GET['pkgid']);
	$useremail=$_SESSION['login'];
	$fromdate=$_POST['fromdate'];
	$todate=$_POST['todate'];
	$comment=$_POST['comment'];
	$establishment = $_POST['establishment'];
	$status=0;
	$sql="INSERT INTO tblbooking(PackageId,UserEmail,FromDate,ToDate,Comment,status) VALUES(:pid,:useremail,:fromdate,:todate,:comment,:status)";
	$query = $dbh->prepare($sql);
	$query->bindParam(':pid',$pid,PDO::PARAM_STR);
	$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
	$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
	$query->bindParam(':todate',$todate,PDO::PARAM_STR);
	$query->bindParam(':comment',$comment,PDO::PARAM_STR);
	$query->bindParam(':status',$status,PDO::PARAM_STR);
	$query->execute();
	$lastInsertId = $dbh->lastInsertId();

	if($lastInsertId)
	{
		$msg="Booked Successfully";
		$user = "";

		$sqluser = "SELECT `FullName`,`MobileNumber`,`EmailId` FROM tblusers WHERE `EmailId` =:pemail"; 	
		$queryuser= $dbh->prepare($sqluser);	
		$queryuser -> bindParam(':pemail', $useremail, PDO::PARAM_STR);
		$queryuser->execute();
		$resultUser=$queryuser->fetchAll(PDO::FETCH_OBJ);

		if($queryuser->rowCount() > 0){

			foreach($resultUser as $ruser ) {
				$user = $ruser->FullName;
			}
		}



		#//instantiate teh client
		//$mgClient = new Mailgun('key-aeb2e567d182fb62de638dce6a8dde6a');
		//$domain ="mg.malawi411.com";

		//make the call to the client

		/*	$result = $mgClient-> sendMessage($domain, array(
			'from' => 'Andre <ansteph09@gmail.com>',
			'to' => 'ls20045@gmail.com',
			'subject' => 'Malawi411 Restaurant Booking',
			'text' => 'Booking done at a restaurant' kamwanika@creativity-mw.com
		)); */

		$content = 'New Booking From '.$user.' at Restaurant '.$establishment. ' From '.$fromdate.' to '. $todate . ' Some Comments '.$comment; 
		$toEmail = 'ls20045@gmail.com';
		$subject = 'Malawi411 Restaurant Booking';
		$emailm411 = 'kamwanika@creativity-mw.com';
		sendBookingEmail($useremail, $toEmail, $subject, $content);
		//sendBookingEmail($useremail, $emailm411, $subject, $content);

	}
	else 
	{
		$error="Something went wrong. Please try again";
	}

}

$files = scandir("admin/pacakgeimages/");


function sendBookingEmail ($from, $to, $subject, $text){
	#//instantiate teh client
	$mgClient = new Mailgun('key-aeb2e567d182fb62de638dce6a8dde6a');
	$domain ="mg.malawi411.com";

	//make the call to the client

	$result = $mgClient-> sendMessage($domain, array(
		'from' => $from,
		'to' => $to,
		'subject' => $subject,
		'text' => $text
	));

}

//print_r($files);exit();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>MALAWI411 | Package Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />


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
<link rel="stylesheet" href="css/jquery-ui.css" />
	<script>
		 new WOW().init();
	</script>
<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>
	  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>				
</head>
<body>
	<div id="page">
<!-- top-header -->
<?php include('includes/headervc.php');?>

<?php 
	$pid=intval($_GET['pkgid']);
//retrieve images for the package
	$sqlimg = "SELECT * from tblpackageimages where PackageId=:pid"; 	
	$queryimg= $dbh->prepare($sqlimg);	
	$queryimg -> bindParam(':pid', $pid, PDO::PARAM_STR);
	$queryimg->execute();
	$resultsimg =$queryimg->fetchAll(PDO::FETCH_OBJ);

	if($queryimg->rowCount() > 0)
{

?>

<div id="myCarousel1" class="carousel slide" data-ride="carousel"> 
                <!-- Indicators -->

                <ol class="carousel-indicators">
                	<?php
    				$i=0;
    				foreach ($resultsimg as $rsimg ) {
    			    ?>
                    <li data-target="#myCarousel1" data-slide-to="<?php echo $i; ?>" class=" <?php echo $i == 0 ? 'active': '';  ?>"></li>
                    <?php
                    	$i++;
					} ?>
                </ol>
                <div class="carousel-inner">
					<?php
    				$i=0;
    				foreach ($resultsimg as $rsimg ) {
    				?>

                    <div class="item <?php echo $i == 0 ? 'active': '';  ?>"> 
                    	
                    	<img src="admin/pacakgeimages/<?php echo htmlentities($rsimg->PackageImage); ?>" style="width:100%; height: 500px" alt="Malawi411" ">
                        <div class="carousel-caption">
                           <!-- <h1>Malawi 411<br> spa & Resort</h1> -->
                        </div>
                    </div>
					<?php
		    		$i++;
    				}
    				?>
                    
                </div>
                <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img src="images/icons/left-arrow.png" onmouseover="this.src = 'images/icons/left-arrow-hover.png'" onmouseout="this.src = 'images/icons/left-arrow.png'" alt="left"></a>
                <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img src="images/icons/right-arrow.png" onmouseover="this.src = 'images/icons/right-arrow-hover.png'" onmouseout="this.src = 'images/icons/right-arrow.png'" alt="left"></a>

            </div>
            <div class="clearfix"></div>

        <?php }?>    


<!--- /banner ---->
<!--- selectroom ---->
<div class="selectroom">
	<div class="container">	
		  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
<?php 
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from tbltourpackages where PackageId=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{

	//retrieve images for the package
	$sqlimg = "SELECT * from tblpackageimages where PackageId=:pid"; 	
	$queryimg= $dbh->prepare($sqlimg);	
	$queryimg -> bindParam(':pid', $pid, PDO::PARAM_STR);
	$queryimg->execute();
	$resultsimg =$queryimg->fetchAll(PDO::FETCH_OBJ);

foreach($results as $result)
{	?>



<form name="book" method="post">
		<div class="selectroom_top">
			<div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
				<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
			</div>
			<input type ="hidden" name="establishment"  value="<?php echo htmlentities($result->PackageName);?>" />
			<div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
				<h2><?php echo htmlentities($result->PackageName);?></h2>
				<p hidden="true" class="dow">#PKG-<?php echo htmlentities($result->PackageId);?></p>
				<p><b>Type: </b> <?php echo htmlentities($result->PackageType);?></p>
				<p><b>Location: </b> <?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
					<div class="ban-bottom">
				<div class="bnr-right">
				<label class="inputLabel">From</label>
				<input class="date" id="datepicker" type="text" placeholder="dd-mm-yyyy"  name="fromdate" required="">
			</div>
			<div class="bnr-right">
				<label class="inputLabel">To</label>
				<input class="date" id="datepicker1" type="text" placeholder="dd-mm-yyyy" name="todate" required="">
			</div>
			</div>
						<div class="clearfix"></div>
				<div class="grand">
					<p>Grand Total</p>
					<h3>MK 00</h3>
				</div>
			</div>

			


		<h3>Destination Details</h3>
				<p style="padding-top: 1%"><?php echo htmlentities($result->PackageDetails);?> </p>	
				<div class="clearfix"></div>
		</div>
		<div class="selectroom_top">
			<h2>Travels</h2>
			<div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
				<ul>
				
					<li class="spe">
						<label class="inputLabel">Comment</label>
						<input class="special" type="text" name="comment" required="">
					</li>
					<?php if($_SESSION['login'])
					{?>
						<li class="spe" align="center">
					<button type="submit" name="submit2" class="btn-primary btn">Book</button>
						</li>
						<?php } else {?>
							<li class="sigi" align="center" style="margin-top: 1%">
							<a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn" > Book</a></li>
							<?php } ?>
					<div class="clearfix"></div>
				</ul>
			</div>
			
		</div>
		</form>
<?php }} ?>


	</div>
</div>

<!--- /selectroom ---->
<<!--- /footer-top ---->
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
</body>
</html>