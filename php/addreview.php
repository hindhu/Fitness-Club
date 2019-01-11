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
  <div align="center">
    <?php
                    if (empty($_POST['first_name']) || empty($_POST['last_name']) || empty(stripslashes($_POST['comment'])))
                     {
            echo "<p>You must enter your first anme and last name and comments.Click your browse's Back button to return to the review</p>\n";
                     }
                     else 
                     {
                            $FirstName = addslashes($_POST['first_name']);
                            $LastName = addslashes($_POST['last_name']);
                            $Comment = addslashes($_POST['comment']);
                            $Review = fopen("reviews.txt","ab");
                            if(is_writeable("reviews.txt"))
                            {
                                    if(fwrite($Review, $LastName . " ". $FirstName . ",". $Comment . ",". "\n"))
                                    {
                                            echo "<p>Thank you for your review!</p>";
                                    }
                                    else
                                    {
                                           echo "<p>Unable to add reviews at this time!</p>\n";
                                    } //innermost if for fwrite
                            }
                            else
                            {
                                    echo " <p>Cannot write into the file</p>";
                                    fclose($Review);
                            }//inner if for is_writeable.
                     }      
            ?>
	</div>
  </body>
</html>
