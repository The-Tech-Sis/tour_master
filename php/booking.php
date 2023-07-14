<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/booking.css">

</head>
<body>
   
<!-- header section starts  -->

<header >
        <div class="logo"> 
        <i><i class="fa fa-code" aria-hidden="true" style="color:beige",
                style="color:rgb(255, 0, 68);"><img src="../images/icons8-airport-noblack.png" alt="">E-Race</i>
            
            </i>
        </div>
         
        <nav class="nav"> 
            <ul class="menu">
                <li>
                    <a href="../home.html">Home</a>
                </li>
                <li  >
                    <a href="../packages.html">Packages</a>
                </li> 
                <li>
                    <a href="../about.html">About</a>
                    
                </li>
                <li>
                    <a href="../contact.html">Contact</a>
                </li>
                <li>
                    <i class="user" id="login-btn">
                        <a href="login_form.php">

                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" 
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" 
                            d="M256 288c79.5 0 144-64.5 144-144S335.5 0 256 0S112 64.5 112 144s64.5 144 144 144zm-94.7 32C72.2 320 0 392.2 0 481.3c0 17 13.8 30.7 30.7 30.7h450.6c17 0 30.7-13.8 30.7-30.7c0-89.1-72.2-161.3-161.3-161.3H161.3z"/>
                            </svg>
                        </a>
                    </i> 
                </li>
            </ul>
        </nav>
    </header>


<!-- header section ends -->
 <!-- book section ends here-->

 <section id="book" class="book">
        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>

        <div class="row">
            <div class="image">
                <img src="../css/images/p2.png" alt="">
            </div>

            <form action="">
               <div class="inputBox">
                <h3>where to</h3>
                <input type="text" placeholder="Destination">
               </div> 

               <div class="inputBox">
                <h3>How many</h3>
                <input type="number" placeholder="Number of guests">
               </div>

               <div class="inputBox">
                <h3>arrival date</h3>
                <input type="date">
               </div>

               <div class="inputBox">
                <h3>Departure date</h3>
                <input type="date">
               </div>
               <a href="../thank.html">

                   <input  value="Book now" class="form-btn" name="submit">
               </a>
            </form>
        </div>

    </section>

    <!-- book section ends here-->
<!-- footer section starts  -->

<section class="footer">


   <div class="credit"> created by <span>Dev's Team</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->
</body>
</html>