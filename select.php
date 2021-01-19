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
      background-color: hsl(262, 36%, 35%);
      border-color: hsl(262, 36%, 35%);
      color: rgba(255, 255, 255, 0.94);
    }
    .bg-success {
        background: linear-gradient(120deg, rgba(0, 0, 0, 0.9),rgba(0,0,0, 0.8)) !important;
    }
    .bg-info {
        background-color: hsl(262, 36%, 35%) !important;
    }

    #marketplace {
        justify-content: center;
    }
    
  </style>
</head>
<body class="bg-success">
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
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
    <div class="container mt-3">
        <h2 class="text-center text-white display-4">Search Instruments</h2>
    </div>

    <div class="container mt-5">
        <div class="row ">
            <div class="col-md-6">
                <div class="d-flex justify-content-center">
                <form class="form-inline">
                    <select class="form-control form-control-lg my-1 mr-sm-2" id="select1">
                      <option selected disabled>Search By Category</option>
                      <option value="keyboard">Piano/ Keys</option>
                      <option value="woodwind">Woodwind</option>
                      <option value="brass">Brass</option>
                      <option value="string">String</option>
                      <option value="percussion">Percussion</option>
                      <option value="amplifier">Instrument Amplifier / Effects</option>
                      <option value="electronic">Electronic / Sampler</option>
                      <option value="pro-audio">Pro-Audio</option>
                      <option value="media">Sheet Music / Books</option>
                      <option value="other">Other</option>
                    </select>
                   <button type="submit" class="btn btn-primary btn-lg mx-auto  my-1">Submit</button>
                  </form>
                  </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex justify-content-center ">
                <form class="form-inline">
                    <select class="form-control form-control-lg my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option value=""selected disabled>Search By Location</option>
                        <option value="Manhattan">Manhattan</option>
                        <option value="Brooklyn">Brooklyn</option>
                        <option value="Queens">Queens</option>
                        <option value="Bronx">Bronx</option>
                        <option value="Staten Island">Staten Island</option>
                    </select>
                  
                    
                  
                    <button type="submit" class="btn btn-primary btn-lg  my-1 mx-auto">Submit</button>
                  </form>
                  </div>
            </div>
         
            <!-- <div class="col-md-6 d-flex pt-2 justify-content-center">
                <div>
                    <form>
                    <select class="form-control" name="" id="location">
                    <option value=""selected disabled>Location</option>
                    <option value="Manhattan">Manhattan</option>
                    <option value="Queens">Queens</option>
                    <option value="Bronx">Bronx</option>
                    <option value="Brooklyn">Brooklyn</option>
                    <option value="Staten Island">Staten Island</option>
                    </select>
                </div>  
            </div> -->
         </div> 
           
    </div>
    <div class="container">
        <div class="row " id="marketplace"></div>

    </div>

      <!-- JQUERY SCRIPTS -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>

<script>
    $(document).ready(function () {

        

    $.getJSON("data.json", function(data) {
    var html = '';
    $.each(data, function(key, value){
       
        // bootstrap card 1.0
        // html += '<div class="card m-3 pb-0 bg-info text-white d-flex flex-column" style="width: 25rem;">';
        // html += '<div>'    
        // html += '<img src="img/'+value.id+'.jpg" class="card-img-top" style="max-height:" alt="...">';
        // html += '</div>'  
        // html += '<div class="card-body">';
        // html += '<h4 class="card-title">'+value.name+'</h4>';
        // html += '<p class="card-text text-info">Location: '+value.location+'</p>';
        // html += '<p class="card-text">'+value.description+'</p>';
        // html += '<p class="card-text">'+value.email+'</p>';
        // html += '</div>';
        // html += '<div class="mt-auto">';
        // html += '<div class="text-center py-3"><a href="#" class="btn btn-outline-info py-3  btn-lg">Contact Donor</a></div>';
        // html += '</div>'    
        // html += '</div>';

        // bootstrap card 2.0
        html += `<div class="card m-3 pb-0 bg-info text-white d-flex flex-column" style="width: 25rem;">`;
        html += `<div>`;    // beginning of trash
        html += `<img src="img/${value.id}.jpg" class="card-img-top" style="max-height:" alt="...">`;
        html += `</div>`  // more trash
        html += `<div class="card-body my-auto">`;
        html += `<h4 class="card-title">${value.name}</h4>`;
        html += `<p class="card-text text-info">Location: ${value.location}</p>`;
        html += `<h5 class="pb-3">Item Description:</h5>`;
        html += `<p class="card-text">${value.description}</p>`;
        html += `<p class="card-text">${value.email}</p>`;
        html += `</div>`;
        html += `<div class="mt-auto">`;
        html += `<div class="text-center py-3"><a href="mailto:${value.email}" class="btn btn-outline-info py-3  btn-lg">Contact Donor</a></div>`;
        html += `</div>`;    
        html += `</div>`;
    });
$('#marketplace').html(html);
});

      
    });
  </script>
</body>
</html>