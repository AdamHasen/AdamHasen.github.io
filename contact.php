<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Adam Prints</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body>
  
  
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Adam Prints</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="what-i-do.html">What I Do</a></li>
				<li><a href="my-printer.html">My Printer</a></li>
                <li class="active"><a href="#">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <b class="caret"></b></a> 
                  <ul class="dropdown-menu">
                    <li><a href="grzmot-mine.html">Grzmot Mine</a></li>
                    <li><a href="rasp-pi-case.html">Rasp-Pi Case</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <div class="container content">
	<hr class="featurette-divider">
      <div class="row featurette">
	  
        <div class="col-md-8">
		<h1>Contact Me</h1>	

<p>
<?php echo $_POST["name"]; ?>,<br/><br/> Thank you for your interest. I will contact you at <?php echo $_POST["email"]; ?> 
</p>

<?php
if (strlen($_POST["message"]) < 5) {
$sub = $_POST["need"];
// this creates the email to send to the customer
$msg = "Thank you " . $_POST["name"] . "," . "\n\nI will contact you soon. \n\nAdam Hasen";

// this creates the email to send back to me
$msg2 =  $_POST["name"] . " " . $_POST["surname"] . " at " . $_POST["email"] . " sent you a message:" . "\n\n" . $_POST["message"];

// send email to customer
mail($_POST["email"],"Thank you for contacting me!",$msg,'From: adamahasen@gmail.com' . "\r\n" .
    'Reply-To: adamahasen@gmail.com');

// send email to me with customer's message
mail("adamahasen@gmail.com",$sub,$msg2);
}
// Notes:
// $_POST["Variable name"] will give you the results after pressing the submit button.
// If you use headers and specify an E-mail address, the sent message will most likely end up in the spam folder.
?> 

</div>
      </div>

      <hr class="featurette-divider">

      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>Adam Hasen 2019 </p>
      </footer>

    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>