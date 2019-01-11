<!DOCTYPE html>
<html>
 <head>
    <title>Club</title>
    <meta charset="UTF-8" />
    <link href="../css/StyleCss.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
  <div class="header_color">
    <div class="header">
      <div class="logo">
        <a href="http://localhost/fitnessclub/index.html">
          <img src="../images/logo.jpg" width="400" height="150" border="0" alt="fitnessclub" />
        </a>
      </div>
      <br />
      <div class="menu">
        <ul>
           <li>
            <a href="http://localhost/fitnessclub/index.html">Home</a>
          </li>
          <li>
            <a href="http://localhost/fitnessclub/programsevents.html">Programs & Events</a>
          </li>
          <li>
            <a href="http://localhost/fitnessclub/lifestyle.html" class="active">LifeStyle</a>
          </li>
          <li>
            <a href="http://localhost/fitnessclub/family.html">Family</a>
          </li>
          <li>
            <a href="http://localhost/fitnessclub/shop.html">Shop</a>
          </li>
          <li>
            <a href="http://localhost/fitnessclub/contact.html">Contact US</a>
          </li>
		  <li>
			<a href="http://localhost/fitnessclub/php/review.php" class="active">reviews</a>
		  </li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
  <div class="clr"></div>
  <div align ="center">
	<?php
		$commentFile ="reviews.txt";
		if(file_exists($commentFile))
		{
			$commentsText= stripslashes(file_get_contents($commentFile));
			$commentArray =explode(",",addslashes($commentsText));
			//Traversing through the array
			$i=0;
			foreach($commentArray as $comment)
			{
				if($i%2 == 0)
					echo "<p>Name : $comment </p>";
				else{
					echo "<p>Comment : $comment </p>";
					echo "___________________________";	
				}
				$i++;
			}	
		}
		else
		{
			echo "No Feedback Yet.";
		}
	?>
	</div>
 </body>
 </html>