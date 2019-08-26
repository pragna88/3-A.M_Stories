<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Script Eden ( http://scripteden.net/ ) Template Builder v2.0.0">  
    <!--pageMeta-->

    <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">

    <link href="css/style.complete.css" rel="stylesheet">
	</head>
<body>

<?php
$q = intval($_GET['cid']);

$con = mysqli_connect('localhost','root','','demo');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ballal65_bb1");
$sql="SELECT cid,title,story,date FROM stories WHERE cid = '".$q."'";
$result = mysqli_query($con,$sql);

$limit=350;
while($row = mysqli_fetch_array($result)) {
 $title=$row['title'];
 $story=$row['story'];
 $date=$row['date'];
    echo "<h2 style='color: #1abc9c;'><b>" . $title . "<b></h2>";
	
	if(strlen($story) >$limit)
                                        {
					echo substr( $story,0,$limit);
					echo"<br>";
					echo"<a href='#' class='btn btn-lg btn-primary'>Read More</a>";
                                        }
                                        else
                                       
                                        echo"<h4>$story</h4>";
                                        
					echo"<p>Posted on $date</p>";
				
					
   
}

mysqli_close($con);
?>
</body>
</html>