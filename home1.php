            <!--  This page provide Login and Singn up options - Movies that will comming soon to our cinema --
     -- list of movies that are currently showing - Trailers for some movies - Finally it provide contact  and about us Info --
       
       
       --- This page are developed by Qomra team -->







<!DOCTYPE html>
 

    <head>
        <title>Qomrah cineima</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
              <!-- css style --> 
        <link rel="stylesheet" type="text/css" href="http://localhost/cs314/bookingMovie/style2.css"> 
              <!-- bootstrap compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
              <!-- jQuery library --> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
            <!-- sbootsrap compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
        
      </head>
  
<boody>  
  <center>
  <!-- navbar style -->
 <div class="header"> 
                    <!-- navbar bootsrap classes -->
              <nav class="navbar navbar-inverse">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <a class="navbar-brand" > Qumra cinema </a>
                    </div>
                    <ul class="nav navbar-nav">
                      <li class="active"><a >Home</a></li>
                    
                    </ul> <!-- navbar bootsrap class to make the list in the right  -->
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="http://localhost/cs314/bookingMovie/register.php"><span class="glyphicon glyphicon-user" > </span> Sign Up</a></li>
                      <li><a href="http://localhost/cs314/bookingMovie/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                  </div> 
                </nav>  
                </div> 


 <!-- main box style -->               
<div class="main_box"> 


    <!-- Logo class  --> 
<center>
<div id="logo">
   <h5><img src="img/logo.png" hight="130px" width="400px"  style=  'border-color: rgb(129, 129, 94) solid;'></h5> 
</div> </center>  

    
<center>
     <!-- coming soon  -->
    <div  class="container1">
      <h1> Cooming Soon </h1>  


          <!-- to style the image of the movies   -->
          <div class="movies-container"> 
          <!-- bootsrap classes for slide show   -->
          <div class="slideshow-container">
          <div class="mySlides fade">
              <img src="img/mulan-liu.jpg" style="width:60%" >
          </div>

          <div class="mySlides fade">
              <img src="img/fantasyr.png" style="width:60%">
          </div>

          <div class="mySlides fade">
              <img src="img/onward_v.jpg" style="width:60%">
          </div>
          </div>
            <br>
          <!-- circles under photos  -->
          <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
          </div>
          
         <script>
         var slideIndex = 0;
         showSlides();

         function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
          }
          </script>
          </div> 

     
<!-- Movies sections  -->
<?php  

    //Link "cinema_db" with php
    $link = mysqli_connect("localhost", "root", "", "cinema_db");  

    //select all colume from movieTable
    $sql = "SELECT * FROM movieTable";
    ?>
    <header></header> 
    <!--Movies container  -->
    <div id="home-section-2" class="movie-show-container2">
        <h1> Currently Showing</h1>
        <h3>   BOOK A MOVIE NOW</h3> 

    <!-- to style the image of the movies -->
    <div class="movies-container">

<?php 
     //check connection with sql    
     if($result = mysqli_query($link, $sql)){ 
       //check the table is not impty  
       if(mysqli_num_rows($result) > 0){ 
         //loop to take element from row 0 to 17 in the sql    
         for ($i = 0; $i <= 17; $i++){  
           //to make $row = value that take from table 
            $row = mysqli_fetch_array($result); 
                //to displays movies imege from sql
                echo '<div class="movie-box">'; 
                echo '<img src="'. $row['movieImg'] .'" alt=" ">'; 
                //to displas movie name from sql
                echo '<div class="movie-info ">';
                echo '<h3>'. $row['movieTitle'] .'</h3>'; 
                //to displayse the buttons 
                echo '<a href="login.php?id='.$row['movieID'].'"><i class="fas fa-ticket-alt"></i> Book a seat</a>';//to put a button 
                echo '</div>';
                echo '</div>';
                }
                mysqli_free_result($result);
           
                } 
          //if sql is impty
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
                        
        // Close connection
        mysqli_close($link); 
    ?> 
      </div>  
        </div>
           </div> 
    
    
<!-- tOP 5 Movies Section    -->
<div id="home-section-3" class="trailers-section">
   <h1> Top 5 movies trailer</h1>
    <!-- to style first movie  -->   
     <div class="trailers-grid">
         <div class="trailers-grid-item">
            <img src="img/movie-poster-3.jpg" alt="">
              <div class="trailer-item-info" ><a  href="https://www.youtube.com/watch?v=sqoRXLAq9J8"> Born a King </a>
                </div>
            </div>
        <!-- to style seconed movie   -->
        <div class="trailers-grid-item">
           <img src="img/movie-poster-16.jpg" alt="">
              <div class="trailer-item-info" ><a  href="https://www.youtube.com/watch?v=wmiIUN-7qhE"> Toy Story 4 </a>
              </div>
            </div> 
            <!-- to style third movie   -->
            <div class="trailers-grid-item"> 
                <img src="img/movie-poster-6.jpg" alt="">
                <div class="trailer-item-info" ><a  href="https://www.youtube.com/watch?v=epCg2RbyF80"> The Invisible Guest </a>
                </div>
            </div> 
            <!-- to style fourth movie   -->
            <div class="trailers-grid-item">
                <img src="img/movie-poster-2.jpg" alt="">
                <div class="trailer-item-info" ><a  href="https://www.youtube.com/watch?v=4CbLXeGSDxg"> The Lon King </a>
               </div>
            </div> 
            <!-- to style the fifth movie   -->
            <div class="trailers-grid-item">
                <img src="img/movie-poster-12.jpg" alt=""> 
                <div class="trailer-item-info" ><a  href="https://www.youtube.com/watch?v=8ndhidEmUbI"> Tomb Raider </a>                
                </div>
            </div>
        </div> 
      </div> 
    </div>
            
   

     

  <!-- footer section -->  
  <div class="main_box"> 
         <!-- Site footer -->
    <footer class="site-footer"> 
        
      <div class="container">  <!-- footer box --> 
        <div class="row"> 
          <div class="col-sm-12 col-md-6">  <!-- bootstrap class to divide the container into colume -->
            <h6>About Us</h6>
            <p class="text-justify">Qomra cinema <i> is the first cinema ticket booking website in Saudi Arabia. it provide online ticket booking service</i> </p>
          </div>  <!-- bootstrab class to justify text -->

          <div class="col-xs-6 col-md-3">  <!-- to make contact us colume  -->
            <h6>Contact Us</h6>
            <ul class="footer-links">
              <li><img src="img/phone.png" hight=20px width=20px> 123 - 456 -789</li>
              <li><img src="img/email.png" hight=20px width=20px> info@qumracinema.com</li>
              <li><img src="img/snapchat.png" hight=20px width=20px>  qumra_cinema</li>
              <li><img src="img/instagram.png" hight=20px width=20px> qiumra_cinema</li>
              
            </ul>
          </div>        
      </div>
</footer>
                      </center>                  
                                   
    
                  
                          
                      
              




</html>