<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Search Instruments</title>
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- JQUERY AJAX -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

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
      background-color: hsl(262, 36%, 35%);
      border-color: hsl(262, 36%, 35%);
      color: rgba(255, 255, 255, 0.94);
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
                    <a class="nav-link text-white search-toggle" href="#">Search</a>
                  </li>
              </ul>
            </div>
          </nav>
        </div>

            <!-- SEARCH BAR -->
          <div class="container d-none search-container">
            <form class="form-group my-2 my-lg-0">

              <input type="text" class="form-control " placeholder="Search Listings" name="search" id="search">
              
            </form>
            <div class="d-flex justify-content-end pt-md-3">
              <a href="#" class="search-close">
                <span class="text-white ">X</span>
              </a>
              
            </div>
          </div>


          <!-- HERO TEXT  -->
          <div class="hero-text-containter ">
            <div class="hero-text">
              <h1 class="text-white main-text " id="hero-h1">Are you ready to make a difference?</h1>
            </div>
          </div>

          <!-- RESULTS -->
          <div class="container result-wrapper">
            <ul class="list-group result-container" id="result">
            </ul><br>
          </div>

          <!-- HERO BUTTONS -->
          <div class="container pb-5 fixed-bottom ">
            <div class="row justify-content-around pb-1 pb-md-5">
              <div class="col-md-4 pb-3 pb-md-5">
                <a href="donate.php" class="btn btn-block btn-light py-3">Donate Now</a>
              </div>
              <div class="col-md-4 pb-md-5">
                <a href="#" class="btn btn-block btn-light py-3 search-toggle">Search Instruments</a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

      <!-- LISTING SECTION -->
    <section class="d-none listing-section" id="listing-section">
    <div class="listing-background">
        <div class="background-overlay">
          <div class="container-fluid d-flex justify-content-end pt-md-3">
            <a class="text-decoration-none" href="index.php">
              <span class="text-white p-5 display-4">x</span>
            </a>
            
          </div>
          
            <!-- listings -->
          <div class="container pt-1 pt-md-5 listing-wrapper">
            <ul class="list-group" id="listings">
            </ul><br>
          </div>
        </div>
    </div>
    </section>
    <section class="d-none" id="overflow">
      <div class="overflow-background">
        <div class="background-overlay">

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

      $(".search-toggle").click(function(){
      $(".search-container").toggleClass("d-none");
      // toggle overflow
      $(".listing-section").toggleClass("d-none");
      $("#overflow").toggleClass("d-none");
    });


      // close search box
      $(".search-close").click(function(){
      $(".search-container").toggleClass("d-none");
      // toggle overflow
      $(".listing-section").toggleClass("d-none");
      $("#overflow").toggleClass("d-none");
    });

    });

    // live search
    $('#search').keyup(function (event) {
      $.ajaxSetup({
        cache: false
      });
      $('#result').html('');
      $('#listings').html('');

      if ($('#search').val() != "") var searchField = $('#search').val();
      else var searchField = null;
      var expression = new RegExp(searchField, "i");

      // getJSON
      $.getJSON('data.json', function (data) {
        $.each(data, function (key, value) {
          if (value.name.search(expression) != -1 || value.category.search(expression) != -1 || value.brand
            .search(expression) != -1 || value.model.search(expression) != -1 || value.condition.search(
              expression) != -1 || value.year.search(expression) != -1 || value.location.search(
            expression) != -1) {
              // display search items
            $('#result').append(
              ` <li class="list-group-item link-class">
                  <img src="img/${value.id}.jpg" style="height:40px;width:40px;" class="img-thumbnail" /> 
                  ${value.name} | <span class="text-muted"> ${value.location} </span>
                  <a href="#listings" class="btn btn-light btn-sm ml-3 listing-btn">View Listing</a>
                </li>
            `);
            $('#listings').append(
           
                `
                  <li class="list-group-item">
                    <div class="row">
                      <div class="col">
                        <div class="card">
                          <div class="card-header">
                            <h5 class="card-title"> <a href="img/${value.id}.jpg" target="_blank"><img class="" src="img/${value.id}.jpg" style="height:100px;width:100px;" class="img-thumbnail" /></a> ${value.name}</h5> 
                            </div
                          <div class="card-body px-3">
                            
                            <p class="card-text text-center text-muted">Brand: ${value.brand} &emsp; Model: ${value.model} &emsp; Year: ${value.year} &emsp; Location: ${value.location}</p>
                            <p class="card-text">&emsp; ${value.description}</p>
                            <p class="card-text text-muted">Contact Email: ${value.email}</p>
                            <a href="mailto:${value.email}" class="btn btn-light">Contact Now</a>
                          </div>
                        </div>
                      </div>
                    </li>
                `);
          } 
        });

      });
    });
    // close search suggestion on click
    $('#result').on('click', 'li', function () {
      var click_text = $(this).text().split('|');
      $('#search').val($.trim(click_text[0]));
      $("#result").html('');
    });
  </script>

</body>

</html>




