<?php

    $conn = mysqli_connect('localhost','root','','pixception') or die("Connection Error: " . mysqli_error($conn));

  // define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }   
  
  if (empty($_POST["message"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["message"]);
  }
  
  $sql = "INSERT INTO user_data(Name,Email,Message) VALUES('$name','$email','$comment')";
  mysqli_query($conn,$sql);
  echo '<script type="text/javascript">';
  echo  'alert(" Message delivered to Vidhur RK !! ")';
  echo  '</script>';  
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$conn->close();

?>

<!DOCTYPE html>


<html lang="en">


    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">


             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
          
              <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
             
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
             <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
             <link rel="stylesheet" href="index_page.css">
             <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
             

             <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
             <script src="https://unpkg.com/scrollreveal"></script>



     <title>Pixception</title>
     <link rel="icon" href="pixception.png">


</head>



    <body>
          
    <div class="firstsec">
 
 <nav class="navbar navbar-expand-md navbar-dark">

   <a href="index.html" class="navbar-brand"><img src="Artboard 1.png"></a>

  <button class="navbar-toggler" type="button" data-target="#my-collapse" data-toggle="collapse" aria-expanded="false" aria-controls="my-collapse">

    <span class="navbar-toggler-icon"></span>

  </button>
       
   <div id="my-collapse" class="collapse navbar-collapse">

        <ul class="navbar-nav ml-auto">

              <li class="nav-item pr-4" >

                   <a href="index.html" class="nav-link active">Home</a>

              </li>

              <li class="nav-item pr-4">

               <a href="#gear" class="nav-link">My Gear</a>

          </li>


          <li class="nav-item pr-4">

           <a href="#about" class="nav-link">About</a>

      </li>

          <li class="nav-item pr-4">

           <a href="#shoots" class="nav-link">Shoots</a>

      </li>


        </ul>
     
   </div>

 </nav>




 <div class="section-0">

    <div class="container">

          <div class="content">

                   <div class="d-flex flex-column justify-content-center">
                      
                      <h4>Hey there :)</h4>

                      <a class="btn btn-light mt-5 pt-2 text-center" type="button" href="my_works.html">Gallery</a>

                      <a href="#gear"><span class="mouse"><i class=""></i></span></a>
                  
                   </div>

          </div>

    </div>

 </div>
  
</div>




                                             <!--GEAR SECTION-->

<div class="section-1">

 <div class="container">

      <div class="content">

        <div class="d-flex flex-column mt-5">

             <h3 id="gear">My Gear</h3>
       
         </div>


         <div class="row flex-row">

           <div class="col-md-4">

               <img src="cam2.jpg">

           </div>

           <div class="col-md-8">

              <table class="table table-bordered table-striped mt-5 fadein">

                   <tbody>
                       
                       <tr>
                           <td><bolder>Megapixels</bolder></td>
                           <td>18.0</td>
                       </tr>
                       

                       <tr>
                           <td><bolder>Lens Mount</bolder></td>
                           <td>EF, EF-S, TS-E, MP-E</td>
                       </tr>

                       
                       <tr>
                           <td><bolder>Image Processor</bolder></td>
                           <td>DIGIC 4</td>
                       </tr>

                       
                       <tr>
                           <td><bolder>Focus Modes</bolder></td>
                           <td>One Shot, AI Focus, AI Servo</td>
                       </tr>

                       
                       <tr>
                           <td><bolder>ISO Sensitivity</bolder></td>
                           <td>Auto (100-6400)</td>
                       </tr>

                       <tr>
                           <td><bolder>Shutter Speed</bolder></td>
                           <td>30 - 1/4000 sec</td>
                       </tr>

                       <tr>
                           <td><bolder>Picture Styles</bolder></td>
                           <td>Auto, Standard, Portrait, Landscape, Neutral, Faithful, Monochrome, User Defined (x3)</td>
                       </tr>

                       <tr>
                           <td><bolder>Drive Modes</bolder></td>
                           <td>Single, Continuous, Self timer (2s, 10s+remote, 10s + continuous shots 2-10)</td>
                       </tr>


                   </tbody>

               </table>


           </div>

         </div>

      </div>


 </div>

</div>



          <!--ABOUT SECTION-->

<div class="section-2">

<div class="container-fluid">

     <div class="d-flex flex-column pt-5">

     <h3 class="abt" id="about">About Me</h3>

     </div>

     <div class="row flex-row">

     <div class="col-md-5 mt-5">

        <img src="me.png">

     </div>

     <div class="col-md-7 mt-5">

                     <p>Heya!! :)</br></br>
                     I am <span>Vidhur Rajkumar</span>.</br></br>
                     A passionate <span>Freelance Web Developer</span>, <span>Photographer</span> and a <span>Graphic Desginer</span>.</br>
                     I've developed certain landing pages, login pages in the last 3 years and slowly started to build complete webistes.</br></br>
                     And, regarding Photography, I began as a <span>Nature Photographer</span>, and then jumped into other types of Photography.
                     It's just been a couple of months that I've started learning <span>Graphic Designing</span> and seems to be really mindblowing.</br></br>
                     So far, so good and I'm looking forward to learn more & more <span>Tools & Technologies </span>and keep myself updated.</br></br>
                     </p>
      
     </div>

  </div>

</div>

</div>


  <!--SHOOTS SECTION-->

<div class="section-3">

<div class="container">

<div class="content">

   <div class="d-flex flex-column pt-5">

        <h3 class="book" id="shoots">Book your Shoots</h3>

   </div>


   <div class="row flex-row">

     <div class="col-md-6">

<form action="index.php#shoots" method="POST">

<div class="form-group">
<input type="text" class="form-control" id="name" name="name"  placeholder="Name"><?php echo $nameErr;?>
</div>

<div class="form-group">
<input type="email" class="form-control" id="email" name="email" placeholder="Email"><?php echo $emailErr;?>
</div>

<div class="form-group">
<textarea class="form-control" id="message" name="message" placeholder="Message..."></textarea>
</div>

<div class="form-group">
<input type="submit" id="submit" name="submit" class="btn btn-dark btn-sm">
</div>

</form>

   </div>

      <div class="col-md-6">

         <div class="card"> 

           <div class="d-flex flex-column">

               <h4 class="con">Contact</h4>
               <i class="fa fa-phone mt-5">  +91 7975210262</i>
               <i class="fa fa-envelope mt-5">  vidhurrk@gmail.com</i>
        
              </div>    
             
         </div>

   </div>

</div>




</div>


</div>

</div>

</div>


<!--FOOTER-->

<div class="section-4">

<div class="container">

<div class="d-flex flex-column">

<div class="row flex-row justify-content-center">

   <a href="https://www.facebook.com/profile.php?id=100007160954919"><i class="fa fa-facebook"></i></a>
   <a href="https://www.instagram.com/vidhur_rk_424/"><i class="fa fa-instagram"></i></a>
   <a href="https://www.youtube.com/channel/UCtFBxNVNskzpKLfFYtZhI-Q"><i class="fa fa-youtube-play"></i></a>
   <a href="https://github.com/Vidhur44"><i class="fa fa-github"></i></a>
   <a href="https://www.linkedin.com/in/vidhur-rajkumar-b9581515a/"><i class="fa fa-linkedin"></i></a>  

</div>

<div class="row flex-row justify-content-center">

<h6>1 Guy, 1 Camera, 2 Lenses, 1000+ Shots</h6>  </div>

</div>

</div>
</div>


<script>
   
ScrollReveal().reveal('.section-0 h2') 
ScrollReveal().reveal('.section-1 img')         
ScrollReveal().reveal('.table')
ScrollReveal().reveal('.section-2 h3')    
ScrollReveal().reveal('.section-2 img')
ScrollReveal().reveal('.section-2 p')  
ScrollReveal().reveal('.section-3 h3')
ScrollReveal().reveal('.section-3 form')
ScrollReveal().reveal('.card')   
ScrollReveal().reveal('.section-4 h6') 
ScrollReveal().reveal('.section-4 a')   
 



document.querySelectorAll('a[href^="#"]').forEach(anchor => {
anchor.addEventListener('click', function (e) {
e.preventDefault();

document.querySelector(this.getAttribute('href')).scrollIntoView({
   behavior: 'smooth'
});
});
});          

</script>

</body>

</html>