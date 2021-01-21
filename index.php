<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Music-ally | Instrument Donation Service</title>
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- JQUERY AJAX -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  <!-- BOOTSTRAP STYLESHEET -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- MY CSS -->
  <link rel="stylesheet" href="styles.css">
  <!-- LOCAL CSS -->
  <style type="text/css">

    .btn-light {
      background-color: hsl(262, 36%, 50%);
      border-color: hsl(262, 36%, 50%);
      color: #fff
    }

    .btn-light:hover {
      background-color: rgba(255, 255, 255, 0.94)!important;
      border-color: rgba(255, 255, 255, 0.94)!important;
      color: black !important;
    }

    .btn-info {
      background-color: hsl(310, 36%, 35%)  !important;
      border-color: hsl(310, 36%, 35%) !important;
      color: rgba(255, 255, 255, 0.94) !important;
    }

    .btn-info:hover {
      background-color: rgba(255, 255, 255, 0.94)!important;
      border-color: rgba(255, 255, 255, 0.94)!important;
      color: black !important;
    }

    .hero-text-h1 {
    font-size: 3rem !important;
    font-weight: 300 !important;
    line-height: 1.2 !important;
}

@media only screen and (min-width: 300px) {
  .hero-text-h1 {
    font-size: 3.3rem !important;
    font-weight: 300 !important;
    line-height: 1.2 !important;
}
}
@media only screen and (min-width: 580px) {
  .hero-text-h1 {
    font-size: 4rem !important;
    font-weight: 300 !important;
    line-height: 1.2 !important;
}
}
@media only screen and (min-width: 800px) {
  .hero-text-h1 {
    font-size: 4.5rem !important;
    font-weight: 300 !important;
    line-height: 1.2 !important;
}
}
@media only screen and (min-width: 1300px) {
  .hero-text-h1 {
    font-size: 5rem !important;
    font-weight: 300 !important;
    line-height: 1.2 !important;
}
}
@media only screen and (min-width: 1500px) {
  .hero-text-h1 {
    font-size: 5.5rem !important;
    font-weight: 300 !important;
    line-height: 1.2 !important;
}
}
@media only screen and (min-width: 1800px) {
  .hero-text-h1 {
    font-size: 6rem !important;
    font-weight: 300 !important;
    line-height: 1.2 !important;
}
}
@media only screen and (min-width: 2100px) {
  .hero-text-h1 {
    font-size: 6.5rem !important;
    font-weight: 300 !important;
    line-height: 1.2 !important;
}
}
@media only screen and (min-width: 2400px) {
  .hero-text-h1 {
    font-size: 7rem !important;
    font-weight: 300 !important;
    line-height: 1.2 !important;
}
}


  </style>
</head>

<body>
  <div class="site-wrapper">
    <section id="hero">
      <div class="hero-background">
        <div class="background-overlay">
          <div class="container ">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark ">
              <a class="navbar-brand" href="index.php">Music-ally</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="donate.php">Donate</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="marketplace.php">Explore</a>
                  </li>
              </ul>
            </div>
          </nav>
        </div>
    
          <!-- HERO TEXT  -->
          <div class="hero-container mt-md-5 d-flex justify-content-center align-items-center">
            <div class="container mt-md-5 pt-5 ">
              <h1  class="text-white text-center hero-text-h1 mt-5">Are You Ready To Make A Difference?</h1>
              <h4 id="subtitle" class="d-none text-center d-md-block text-white mt-5 mb-5">Music-ally is bringing music to those who need it most.</h4>
              <div class="col d-none text-center d-md-block mt-5">
                <a href="donate.php" class="btn btn-lg btn-light mr-3 py-3 mt-5">Donate Now</a>
                <a href="marketplace.php" class="btn btn-lg btn-info search-toggle py-3 mt-5">Search Instruments</a>

              </div>
            </div>
          </div>
                  
          <!-- HERO BUTTONS -->
          <div class="container ">
            <div class="row d-flex justify-content-center">
            
               <div class="col-md-4 mt-0 d-md-none">
                <a href="donate.php" class="btn btn-block btn-light py-3">Donate Now</a>
              </div>
              <div class="col-md-4 mt-3 d-md-none">
                <a href="marketplace.php" class="btn btn-block btn-info search-toggle py-3">Search Instruments</a>

              </div>
            </div> 
          </div>
        </div>
      </div>
    </section>
  </div>


  <!-- JQUERY SCRIPTS -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>

  <script>
    $(document).ready(function () {

      // h1 Fades in page on load 
      $('h1').css('display', 'none');
      $('h1').fadeIn(1000);
      $('nav').css('display', 'none');
      $('nav').fadeIn(1000);
    });
  </script>

</body>

</html>




