<?php

$title = "The Calculator";
?>

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/maincss.css">
	<title> <?php echo $title ?> </title>
</head>
<body>

<div class="container-fluid" id="container">

      <nav class="navbar navbar-expand-md bg-primary navbar-light" id="nav">
        <!-- Brand -->
        <a class="navbar-brand" href="#"> <h4><strong>The Calculator Hub</strong></h4></a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#" id="nav1">Future value of investment</a>
            </li>
            <li class="nav-item" >
              <a class="nav-link" href="#" id="nav2">Initial Amount required to achieve a target</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="nav3"> Monthly Amount required to achieve a target</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="nav4"> How long (years) will it take me to achieve my future target by investing a lump-sum now?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="nav5">How long (years) will it take me to achieve my future target by making monthly contribution?</a>
            </li> 
          </ul>
        </div> 
      </nav>  

      <div class="row"> <!--Start of main content ( Calculator Input) -->
      
    

         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <!-- Start of Calculator input--> 
           
           <div id="calc1"> <!-- Start of calculator 1-->

              <label for="future value of investment"><h4> 1) <strong>Future value of investment</strong></h4></label>
              <form action="<?PHP echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-group">
                  <label for="lumpsum"><strong>Initial amount you want to invest</strong></label>
                  <input type="text" name="lumpsum1" class="form-control" id="lumpsum1" >
                </div>
                <div class="form-group">
                  <label for="monthly"><strong>How much do you intend to invest monthly?</strong></label>
                  <input type="text" class="form-control"  id="monthly1">
                </div>
                <div class="form-group">
                  <label for="tenor"> <strong>Tenor: How long (years) do you intend to invest?</strong></label>
                  <input type="text" class="form-control" id="tenor1" placeholder="E.g 0.75 for 9 months, 1 for 1 year, 2 for 2 years">
                </div>
                <div class="form-group">
                  <label for="rate1"><strong>Estimated interest rate</strong></label>
                  <input type="text" class="form-control" id="rate1" placeholder="E.g. 10">
                </div>
                <div>
                <button type="button" class="btn btn-primary" id="submitbutton1">Submit</button>
                <button type="reset" class="btn btn-danger" id="reset1">Clear</button>
                </div>
                <br>
                <p id="result1" class="btn btn-primary"> </p>
              </form> 
           </div>    <!--End of calculator 1-->

           <div id="calc2"> <!--Start of calculator 2-->

              <label for="Initial Amount required to achieve a target"><h4> 2) <strong>Initial amount required to achieve a target</strong></h4></label>
              <form action="<?PHP echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-group">
                  <label for="futureVal1"><strong>What is your future target?</strong></label>
                  <input type="text" name="futureVal1" class="form-control" id="futureVal1" >
                </div>
                
                <div class="form-group">
                  <label for="tenor"><strong>Tenor: How many years from now do you wish to achieve the target?</strong></label>
                  <input type="text" class="form-control" id="tenor2" placeholder="E.g 0.75 for 9 months, 1 for 1 year, 2 for 2 years">
                </div>
                <div class="form-group">
                  <label for="rate"><strong>Estimated interest rate</strong></label>
                  <input type="text" class="form-control" id="rate2" placeholder="E.g. 10">
                </div>
                <div>
                <button type="button" class="btn btn-primary" id="submitbutton2">Submit</button>
                <button type="reset" class="btn btn-danger" id="reset2">Clear</button>
                </div>
                <br>
                <p id="result2" class="btn btn-primary"> </p>
              </form> 
           </div>    <!--End of calculator 2-->

           <div id="calc3"> <!-- Start of calculator 3-->

              <label for="Monthly Amount required to achieve a target"><h4> 3) <strong>Monthly amount required to achieve a target</strong></h4></label>
              <form action="<?PHP echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-group">
                  <label for="futureVal2"><strong>What is your future target?</strong></label>
                  <input type="text" name="futureVal2" class="form-control" id="futureVal2" >
                </div>
                
                <div class="form-group">
                  <label for="tenor"><strong>Tenor: How many years do you intend to commit to your monthly investment?</strong></label>
                  <input type="text" class="form-control" id="tenor3" placeholder="E.g 0.75 for 9 months, 1 for 1 year, 2 for 2 years">
                </div>
                <div class="form-group">
                  <label for="rate"><strong>Estimated interest rate</strong></label>
                  <input type="text" class="form-control" id="rate3" placeholder="E.g. 10">
                </div>
                <div>
                <button type="button" class="btn btn-primary" id="submitbutton3">Submit</button>
                <button type="reset" class="btn btn-danger" id="reset3">Clear</button>
                </div>
                <br>
                <p id="result3" class="btn btn-primary"> </p>
              </form> 
           </div>    <!--End of calculator 3-->

           <div id="calc4"> <!-- Start of calculator 4-->

              <label for="Monthly Amount required to achieve a target"><h4> 4) <strong>How long (years) will it take me to achieve my future target by investing a lump-sum now?</strong></h4></label>
              <form action="<?PHP echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-group">
                  <label for="futureVal3"><strong>What is your future target?</strong></label>
                  <input type="text" name="futureVal3" class="form-control" id="futureVal3" >
                </div>
                
                <div class="form-group">
                  <label for="lumpsum2"><strong>Initial amount you want to invest</strong></label>
                  <input type="text" class="form-control" id="lumpsum2" >
                </div>
                <div class="form-group">
                  <label for="rate4"><strong>Estimated interest rate</strong></label>
                  <input type="text" class="form-control" id="rate4" placeholder="E.g. 10">
                </div>
                <div>
                <button type="button" class="btn btn-primary" id="submitbutton4">Submit</button>
                <button type="reset" class="btn btn-danger" id="reset4">Clear</button>
                </div>
                 <br>
                <p id="result4" class="btn btn-primary"> </p>
              </form> 
           </div>    <!--End of calculator 4-->

           <div id="calc5"> <!-- Start of calculator 5-->

              <label for="How long (years) will it take me to achieve my future target by making monthly contribution?"><h4> 5) <strong>How long (years) will it take me to achieve my future target by making monthly contribution?</strong></h4></label>
              <form action="<?PHP echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="form-group">
                  <label for="futureVal4"><strong>What is your future target?</strong></label>
                  <input type="text" name="futureVal4" class="form-control" id="futureVal4" >
                </div>
                
                <div class="form-group">
                  <label for="monthly2"><strong>How much do you intend to invest monthly?</strong></label>
                  <input type="text" class="form-control" id="monthly2" >
                </div>
                <div class="form-group">
                  <label for="rate5"><strong>Estimated interest rate</strong></label>
                  <input type="text" class="form-control" id="rate5" placeholder="E.g. 10">
                </div>
                <div>
                <button type="button" class="btn btn-primary" id="submitbutton5">Submit</button>
                <button type="reset" class="btn btn-danger" id="reset5">Clear</button>
                </div>
                <br>
                <p id="result5" class="btn btn-primary"> </p>
              </form> 
           </div>    <!--End of calculator 5-->

         </div><!-- End of Calculator input-->

      </div> <!--End of main content (Calculator Input) -->


</div> <!--End of overall container-->

<p></p>

<footer class="container-fluid row bg-primary" > The Calculator Hub</footer>


<script type="text/javascript" src="js/jquery_min.js"></script>
<script type="text/javascript" src="js/mainscript.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>