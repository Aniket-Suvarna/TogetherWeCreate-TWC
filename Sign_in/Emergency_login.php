<?php 

$filepath = '../Json/Emergency.json';
$json_string = file_get_contents($filepath);
$json = json_decode($json_string, true);
?>

<!DOCTYPE html>
<html>

<head>
	<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=615a8051a2a5620019d27300&product=sticky-share-buttons" async="async"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../CSS/Donate.css">
    <style>
        .links:hover {
            background-color: #FF7B2E;
            border-radius: 5px;
            color:white;
            text-decoration: none;
                
        }
        body{
            background-color: aliceblue;
        }
        .donate{
            float: right;
            background-color: rgb(255, 123, 46); 
            color:white; 
            font-size: x-large; 
            border-radius: 20px; 
            padding:10px;
        }
        .borbutton{
            color: #FF7B2E;
            border-color: #FF7B2E;
            border: 2px;
            border-style: solid;
        }
        .borbutton:hover{
            background-color: #FF7B2E;
            color: black;
        }    
    </style>
</head>

<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark" style="border-bottom: 4px; border-color: rgb(255, 123, 46); border-style: none none solid none;">
        <div class="container-fluid ">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 container-fluid">

                <li class="navbar-brand active"><a href="../Sign_in/Home_Login.html"><img src="../Images/logo1.png" width="160" height="60"></a></li>

                <li class="navbar-brand active"><a class="nav-link links" href="../Sign_in/Home_Login.html">Home</a></li>

                <li class="navbar-brand active"><a class="nav-link links" href="../Sign_in/Events_login.php">Events</a></li>

                <li class="navbar-brand active"><a class="nav-link links" href="../Sign_in/News_login.html">News</a></li>

                <li class="navbar-brand active"><a class="nav-link links" href="../Sign_in/gallery_login.html">Gallery</a></li>

                <li class="navbar-brand active"><a class="nav-link links" href="../Sign_in/Blogs_main_login.php">Blogs</a></li>

                <li class="navbar-brand active"><a class="nav-link links" href="../Sign_in/Shop_login.html">Shop</a></li>

                <li class="navbar-brand active"><a class="nav-link links" href="../Sign_in/Emergency_login.php">Emergency</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="navbar-brand active"><a href="https://pages.razorpay.com/pl_IBxYh02ZmnrMLm/view"><i class="donate links">Donate Universal</i></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="navbar-brand active"><a href="../Sign_in/Filter_login.php"><i class="donate links">Filter</i></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="navbar-brand active"><a class="nav-link links" href="../PHP/logout.php">Sign Out</a></li>
            </ul>
        </div>
    </nav>
        <br><br>
	    <main>
		<section class="more-news">
			<div class="news-section ">
            <?php $b=1;
                    foreach($json as $rows) 

                    {
                    ?> 
				<article class="education">
					<h3><?php echo $rows['CharityOrganization'];?></h3>
					<img src="../NGOImages/<?php echo $rows['Image'];?>">
                    <a href="<?php echo $rows['Visit'];?>" class="nav-link borbutton active">Visit</a>
                    <a href="<?php echo $rows['JoinUs'];?>" class="nav-link borbutton active">Join Us</a>
                    <br><br>
				</article>
            
                <?php 
                    } 
                ?> 
			</div>
		</section>
	</main>
	
</body>

</html>