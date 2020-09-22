<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #ff9999; /* pink soft */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #4d0000; /* Dark Red */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Farrah AnggiaPutri</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">WHO</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">CAMPUS LIFE</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Who Am I?</h3>
  <img src="Bandung.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bandung" width="350" height="350">
  <h3>I'm a student</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Farrah AnggiaPutri</h3>
  <p>You can call me Anggi. I'm the first of two siblings, born in Jakarta in August 2000. I live in Menteng Dalam, studying at UIN Syarif Hidayatullah Jakarta, Faculty of Science and Technology, Informatics Engineering Study Program. </p>
  <a href="#" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-search"></span> Search
  </a>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Fasilities at UIN Syarif Hidayatullah Jakarta</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>The Harun Nasution Auditorium is a multi-purpose room consisting of two floors, which can accommodate around a thousand people. Apart from that, the Harun Nasution Auditorium is never devoid of the bustle of activities, such as seminars, workshops, and graduation processions. There are three things that students seek from every event that takes place in this auditorium, namely knowledge, certificates, and what is certain is food, hehe.</p>
      <img src="Auditorium.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>Here it's the savior of student stomachs while on campus. This giant cup-shaped cafe provides various kinds of menus such as various rice, various noodle dishes, chicken, fish, side dishes, and others. In addition to food, the Cup Cafe is also equipped with a mini market that sells complete student needs, from stationery to household needs. The price is friendly to student wallets and the cozy atmosphere adds to the feeling of being at home when on campus. </p>
      <img src="Cangkir.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>Libraries as institutions that provide information always strive to be the leading source of reference in various fields of science, both in the Islamic field and in the general field for academic and scientific research purposes. Sometimes the Gramedia Bintaro Plaza Bookstore holds a cheap book exhibition entitled "Gramedia Book Fair" on the front page of the UIN Jakarta Library Center. </p>
      <img src="Perpustakaan.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Contact Me On Instagram <a href="https://wwww.instagram.com/farrahanggia">Farrahanggia</a></p> 
</footer>

</body>
</html>
