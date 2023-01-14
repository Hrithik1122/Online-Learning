<?php include 'include/connect.php'; ?>

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

    <!-- Animation Counter  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./anim.css">

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

    body{
      background-color: #181a22 !important; 
    }

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

<body>

<header class="sticky-top">
<!-- ============= NAVBAR ============== -->
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
  
  </div> <!-- navbar-collapse.// -->
 </div> <!-- container-fluid.// -->
</nav>
</div><!-- container //  -->
</div>
</header>

<section id="img">

<?php
$query = "SELECT * FROM aboutimg";
$result = mysqli_query($db,$query);
?>
<?php 
$row = mysqli_fetch_array($result);

?>

<div style="position: relative; background-color: #181a22;">

<img src="images3/<?php echo $row['image'];?>" class="nasa-Q1p7bh3SHj8-unsplash-3">

    <div class="bottom-left" style="font-family: sans-serif;">

  <?php

  $sql = "SELECT content FROM headerpara";
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
      
    </div>
</section>
<br><br><br>

<section id="sec1">

    <div align="right" id="sec1img" style="position: absolute; left: 930px !important;">
      <?php
$query = "SELECT * FROM sec1img";
$result = mysqli_query($db,$query);
?>
<?php 
$row = mysqli_fetch_array($result);

?>
        <img id="sec1img" src="images5/<?php echo $row['image'];?>">
    </div>

    <h2 id="why">
    <?php
  $sql = "SELECT content FROM content1";
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

<ul id="listing1">
    <?php

  $sql = "SELECT content FROM content3";
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
</ul>

<ul id="list">

<?php

  $sql = "SELECT content FROM content2";
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
</ul>
</section>

<br><br><br>

<div id="counter-section-container">

    <div id="counter-box-container">
    <h3 style="color: #ffffff!important; font-size: 3.0rem;"><span style="color: #ed3833;">Yes!</span>
    You're with Experts.</h3>
        <div id="counter-box">
            <h3></h3><span class="counter" data-number="120000"></span>
            <p>Content Watching Hours</p>
        </div>

        <div id="counter-box">
            <h3></h3><span class="counter" data-number="13881"></span>
            <p>Active Followers</p>
        </div>

        <div id="counter-box">
            <h3></h3><span class="counter" data-number="1169"></span>
            <p>Active Learners</p>
        </div>

    </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script  src="./anim.js"></script>

</section>

<br><br><br>
<section id="sec4">

<div align="right" id="sec4img" style="position: absolute; left: 930px !important;">
  <?php
$query = "SELECT * FROM sec4img";
$result = mysqli_query($db,$query);
?>
<?php 
$row = mysqli_fetch_array($result);

?>
  <img id="sec4img" src="images6/<?php echo $row['image'];?>">
</div>

<br>

<div id="apply1"> 
  <?php
  $sql = "SELECT content FROM apply1";
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
</div>

<br><br><br>
  <div id="skills">
<p>☑️ Array Implementation</p>
<p>☑️ Object Implementation</p>
<p>☑️ Tree Implementation</p>
<p>☑️ Graph Implementation</p>
<p>☑️ Recursion Implementation</p>
<p>☑️ Stack Implementation</p>
<p>☑️ Queue Implementation</p>
<p>☑️ Heaps Implementation</p>
<p>☑️ LinkedList Implementation</p>
<p>☑️ Searching Implementation</p>
</div>

</div>
</section>


<section>
  <h2 align="center" id="our-university">Our Partnerships</h2>
  <br><br>
    <?php
  $query = "SELECT * FROM fundingimg";
  $result = mysqli_query($db,$query);
  $rowcount = mysqli_num_rows($result);
  ?>

<div class="slider">
  <div class="slide-track">
    <div class="slide">
      <?php
       for($i=1;$i<=$rowcount;$i++)
       {
           $row = mysqli_fetch_array($result);
       
          if($i==1){
      
      
      ?>
      <img src="images7/<?php echo $row['image'];?>" height="100" width="250">
    </div>
    <?php }else{
        ?>
    <div class="slide">
      <img src="images7/<?php echo $row['image'];?>" height="100" width="250">
    </div>
    <?php } ?>
    <?php }  ?>
  </div>
</div>

</section>

<br><br><br><br>
<br><br><br><br>
<section>

<div align="right" id="sec4img" style="position: absolute; left: 930px !important;">
  <?php
$query = "SELECT * FROM sec6img";
$result = mysqli_query($db,$query);
?>
<?php 
$row = mysqli_fetch_array($result);

?>
  <img id="sec4img" src="images6/<?php echo $row['image'];?>">
</div>

<br>

<div id="apply1"> 
  <?php
  $sql = "SELECT content FROM apply3";
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
</div>

</section>

<br><br><br><br>

<section id="faq1" style="background-color: whitesmoke;">
  <div class="">
 
  <section class="main-content">
  <div class="container">
    <h1 class="text-center text-uppercase mb-5">Frequently Asked Questions</h1>
    <br>
    <br>
    <div class="row flex-center">
      <div class="col-sm-10 offset-sm-2">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <div class="circle-icon"> <i class="fa fa-question"></i> </div>
              <span>What are the courses offered?</span> </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <?php
        $sql = "SELECT content FROM faq1";
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
    </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <div class="circle-icon"> <i class="fa fa-question"></i> </div>
              <span>How can I contact team </span> </button>
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              <?php

              $sql = "SELECT content FROM faq2";
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
               
             </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> 
                <div class="circle-icon"> <i class="fa fa-question"></i> </div>
              <span>Does it provides Internship to students?</span> </button>
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
          <?php
          $sql = "SELECT content FROM faq3";
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
    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div align="center">
  <br>
  <a href="contact.php">
<button class="button"><span>Contact Us For More</span></button>
</a>
</div>
</section>

<!-- Footer -->
<section>

  <?php include 'include/footer.php'; ?>

</section>

</body>
</html>