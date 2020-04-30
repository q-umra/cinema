<!--this page is provide the booking options for the customer and the movie information-->
<!--develobed by Qomrah cinema team-->

<html lang="en"> 
   
<?php /*to conect the page with the data base*/
        $id = $_GET['id'];
        $link = mysqli_connect("localhost", "root", "", "cinema_db");

        $movieQuery = "SELECT * FROM movieTable WHERE movieID = $id"; 
        $movieImageById = mysqli_query($link,$movieQuery);
        $row = mysqli_fetch_array($movieImageById);

?><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--to control over the viewport-->
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="ss.css"> <!--to link css style-->
<!--to link with font -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<title>Book <?php echo $row['movieTitle']; ?> Now</title>
</head>

<body style="background-color: #1a162c"><!--page background-->
    <div class="booking-panel">
        <div class="booking-panel-section booking-panel-section1"><!--this class to design the tital-->
            <h1>BOOK YOUR TICKET</h1>
        </div> 

         <!--this class to design (X) button -->
        <div class="booking-panel-section booking-panel-section2" onclick="window.history.go(-1); return false;">
            <i class="fas fa-2x fa-times"></i>
        </div> 

         <!--selects the imeg from movie table-->
        <div class="booking-panel-section booking-panel-section3">
            <div class="movie-box">
                <?php
                    echo '<img src="'.$row['movieImg'].'" alt="">';
                    ?>
            </div>
        </div> 

         <!--selects the movie information from movie table-->
        <div class="booking-panel-section booking-panel-section4">
            <!--selects the tital row frome movie table-->
            <div class="title"><?php echo $row['movieTitle']; ?></div>
            <div class="movie-information">
                <table>
                    <tr> 
                        <td>GENGRE</td><!--selects the genger row frome movie table-->
                        <td><?php echo $row['movieGenre']; ?></td>
                    </tr>

                    <tr>
                        <td>DURATION</td><!--selects the deration row frome movie table-->
                        <td><?php echo $row['movieDuration']; ?></td>
                    </tr>
                    <tr>
                        <td>RELEASE DATE</td><!--selects the release date row frome movie table-->
                        <td><?php echo $row['movieRelDate']; ?></td>
                    </tr>

                    <tr>
                        <td>DIRECTOR</td><!--selects the director row frome movie table-->
                        <td><?php echo $row['movieDirector']; ?></td>
                    </tr> 

                    <tr>
                        <td>ACTORS</td><!--selects the actors row frome movie table-->
                        <td><?php echo $row['movieActors']; ?></td>
                    </tr>
                </table>
            </div> 

             <!--this class to design the buttons-->
            <div class="booking-form-container">
            <form action="http://localhost/cs314/bookingMovie/one/index.php" method="POST" target="_blank" >
                    <select name="theatre" required> <!--design list button for theatre-->
                        <option value="" disabled selected>THEATRE</option><!--the value inside the button-->
                        <option value="main-hall">Main Hall</option>
                        <option value="vip-hall">VIP Hall</option>
                        <option value="private-hall">Private Hall</option>
                    </select>

                    <select name="type" required><!--to design list button for type-->
                        <option value="" disabled selected>TYPE</option>
                        <option value="3d">3D</option><!--the value inside the button-->
                        <option value="2d">2D</option>
                        <option value="imax">IMAX</option>
                        <option value="7d">7D</option>
                    </select>

                    <select name="date" required><!--to design list button for the date-->
                        <option value="" disabled selected>DATE</option>
                        <option value="12-3">April 20,2020</option><!--the value inside the button-->
                        <option value="13-3">April 21,2020</option>
                        <option value="14-3">April 22,2020</option>
                        <option value="15-3">April 23,2020</option>
                        <option value="16-3">April 24,2020</option>
                    </select>

                    <select name="hour" required><!--to design list button for the time-->
                        <option value="" disabled selected>TIME</option><!--the value inside the button-->
                        <option value="09-00">09:00 AM</option>
                        <option value="12-00">12:00 AM</option>
                        <option value="15-00">03:00 PM</option>
                        <option value="18-00">06:00 PM</option>
                        <option value="21-00">09:00 PM</option>
                        <option value="24-00">12:00 PM</option>
                    </select>
                    
                     <!--to design the three input tag -->
                     
                    <input placeholder="First Name" type="text" name="fName" required>

                    <input placeholder="Last Name" type="text" name="lName">

                    <input placeholder="Phone Number" type="text" name="pNumber" required>
                      <!--to design sunmit button-->
                      
                   <button type="submit" value="submit" name="submit" class="form-btn">Book a Seat</button> </a>
                   
                    <!--to deal with input errors-->
                    <?php
                    $fNameErr = $pNumberErr= "";
                    $fName = $pNumber = "";
            
                    if(isset($_POST['submit'])){
                     
            
                        $fName = $_POST['fName'];
                        if (!preg_match('/^[a-zA-Z0-9\s]+$/', $fName)) {
                            $fNameErr = 'Name can only contain letters, numbers and white spaces';
                            echo "<script type='text/javascript'>alert('$fNameErr');</script>";
                        }   
            
                        $pNumber = $_POST['pNumber'];
                        if (preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $pNumber)) {
                            $pNumberErr = 'Phone Number can only contain numbers and white spaces';
                            echo "<script type='text/javascript'>alert('$pNumberErr');</script>";
                        } 

                        /*to inset the the booking information into booking table */
                        $insert_query = "INSERT INTO 
                        bookingtable (  movieName,
                                        bookingTheatre,
                                        bookingType,
                                        bookingDate,
                                        bookingTime,
                                        bookingFName,
                                        bookingLName,
                                        bookingPNumber)
                        VALUES (        '".$row['movieTitle']."',
                                        '".$_POST["theatre"]."',
                                        '".$_POST["type"]."',
                                        '".$_POST["date"]."',
                                        '".$_POST["hour"]."',
                                        '".$_POST["fName"]."',
                                        '".$_POST["lName"]."',
                                        '".$_POST["pNumber"]."')";
                        mysqli_query($link,$insert_query);
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>  
    
    </body>

</html>