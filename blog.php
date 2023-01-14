<?php
include 'include/connect.php';
?>

<?php
    require_once 'include/db.php';
    display_menu();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content= "width=device-width, user-scalable=no">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=0.1"> -->
    <meta name="keywords" content="htmlcss bootstrap menu, navbar, hover nav menu CSS examples" />
    <meta name="description" content="Bootstrap 5 navbar hover examples for any type of project, Bootstrap 5" />
    
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link rel="stylesheet" type="text/css" href="navbar.css">
    

    <!-- /*Infinity autoplay slider link & css*/ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="slider.css">

    
    <title>Learning Blog</title>
    
    <link rel="stylesheet" href="faq.css">
    <script type="text/javascript" src="script.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

    <!-- <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script> -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>

        .nav-link {
    color: white !important;
    font-size: 17px;
}
/*.nav-link:hover, .dropdown-item:hover {
    color: darkgreen !important;
}*/

    </style>
    <link rel="stylesheet" media="screen and (max-width:870px)" href="phone.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (1000) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>



</head>
<body style="background-color: #181a22;">

<!-- ============= NAVBAR ============== -->
<header class="sticky-top">

<div style="background-color: #24252f;">
<div class="container">

<nav class="navbar navbar-expand-lg navbar navbar-dark mw-100" style="background-color: #24252f;">
 <div class="container-fluid">
     <!-- <a class="navbar-brand" href="#">Brand</a> -->
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="main_nav" style="justify-content: center !important;">

    <?= display_menu() ?>
    <!-- <ul class="navbar-nav">
        <li class="nav-item active"> <a class="nav-link" href="#">HOME</a> </li>
        <li class="nav-item"><a class="nav-link" href="#"> ABOUT US</a></li>
        <li class="nav-item"><a class="nav-link" href="#"> SERVICES </a></li>
        <li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> COUNTRIES </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
              <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
              <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> PARTNERS </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
              <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
              <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
            </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#"> SUCCESS STORIES </a></li>
        <li class="nav-item"><a class="nav-link" href="#"> EVENTS </a></li>
        <li class="nav-item"><a class="nav-link" href="admin.php"> ADMIN </a></li>
        <li class="nav-item"><a class="nav-link" href="#"> CONTACT US </a></li>
    </ul> -->

  </div> <!-- navbar-collapse.// -->
 </div> <!-- container-fluid.// -->
</nav>
</div><!-- container //  -->
</div>
</header>




<div class="section-header h1 sec-head p">
<br>

<?php
  

  $sql = "SELECT content FROM blog";
  $result = $db->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo $row["content"];
    }
  } else {
    echo "0 results";
  }
    ?>
    </h2>

</div>






<!-- Footer -->
<!--  -->
<!--  -->
<section>
  <?php 

  include 'include/footer.php';

  ?>
</section>
</body>
</html>