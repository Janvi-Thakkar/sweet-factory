<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sweet Factory</title>
<link rel="stylesheet" type="text/css"  href="css/homepage.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     
<link rel="stylesheet" type="text/css"  href="popup.css"/>

<script type="text/javascript" src="popup.js"></script>
</head>

<body >
<div class="form-popup" id="myForm">
  <form action="popup.php" class="form-container" method="post">
    <h1>News Letter</h1>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" name="submit" class="btns" >subscribe</button>
    <button class="btns cancel" onclick="closeForm()">Close</button>
  </form>
</div>
        <div class="main-div">

                  </div>
        <div id="menu" style="background-color:light-pink">
          <p class="top-para">
            <u class="heading"><center>
            CAKES</u></center>
          </p>
          <div class="row" >
            <div class="column">
              <div class="card">
                <img src="IMG/logo.jpg"  style="width:100% ">
                <div class="container height" >
                  <h2>CUP CAKE</h2>
                  <p class="title">rs.50</p>
                  <a href="form.php" class="btn-full">Order Now</a>
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <img src="IMG/CHOCOLATE CAKE.jpg"  style="width:100%">
                <div class="container height">
                  <h2>CHOCOLATE CAKE</h2>
                  <p class="title">rs.500</p>
                  <a href="form.php" class="btn-full">Order Now</a>
               
                  </div>
              </div>
            </div>

            <div class="column">
              <div class="card">
                <img src="IMG/VANILA CAKE.jpg" style="width:100%">
                <div class="container height">
                  <h2>VANILA CAKE</h2>
                  <p class="title">rs.400</p>
                  <a href="form.php" class="btn-full">Order Now</a>
               
                </div>
              </div>
            </div>

          </div>

        
       
          <p class="top-para">
            <u class="heading"><center>
           SWEETS</u></center>
          </p>
          <div class="row">
            <div class="column">
              <div class="card">
                <img src="IMG/PISTA ROLE.jpg"  style="width:100% ">
                <div class="container height">
                  <h2>PISTA ROLE</h2>
                  <p class="title">rs.450 </p>
                    <a href="form.php" class="btn-full">Order Now</a>
               
                 
               
                </div>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <img src="IMG/HALWA.jpg"  style="width:100%">
                <div class="container height">
                  <h2>HALWA</h2>
                  <p class="title">rs.500</p>
               
                  <a href="form.php" class="btn-full">Order Now</a>
                  </div>
              </div>
            </div>

            <div class="column">
              <div class="card">
                <img src="IMG/KAJU BURFI.jpg"  style="width:100%">
                <div class="container height">
                  <h2>KAJU BURFI</h2>
                  <p class="title">rs.720</p>
                  <a href="form.php" class="btn-full">Order Now</a>
               
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="main-div1">
            <p class="centered">We are always here to deliver you bettter sweets!!</p>
                            </div>
        <div class="row">
        <div id="about" class="about">
          <p class="top-para">
            <u class="heading"><center> ABOUT US</u></center>
          </p>
          <span class="content1">
             As the premier sweet store brand in the nation, Sweet Factory has offered the unique sweet store experience for millions of customers for over 20 years. We have the best selection of the most in-demand sweets, including bulk, counter goods, candy-related gifts, cakes, deserts, gift-packs, celebration-packs, sugar-free, and kosher products. Every Sweet Factory Associate is a sweet Expert fully prepared to offer product information, suggest gifts.
             From unique sweetss from all over the world to nostalgic collectibles, we offer a wide variety at a one-price format - truly delivering the "kid in a sweet store" experience.
</span>
        </div>
      <div class="images slides">
        
        <img class="mySlides_1 animate-fading" src="IMG/sweet1.jpg" >
        <img class="mySlides_1 animate-fading" src="IMG/sweet2.jpg" >
        <img class="mySlides_1 animate-fading" src="IMG/sweet3.jpg" >
        <img class="mySlides_1 animate-fading" src="IMG/sweet4.jpg" >
        <img class="mySlides_1 animate-fading" src="IMG/sweet5.jpg" >
        <img class="mySlides_1 animate-fading" src="IMG/sweet6.jpg" >
      </div>
      
    </div>
        <div id="contact">

          <h1 id="heading"><U><center>Contact</center></h1></U>
           <p>We offer full-service catering for any event, large or small. We understand your needs and we will cater the sweets to satisfy the biggerst criteria of them all, both look and taste. Do not hesitate to contact us.</p>
             <p class="w3-text-blue-grey w3-large"><b>Sweet Factory, Ahmedabad, India</b></p>
              <p>You can also contact us by phone 00553123-2323 or email sweet_factory@a.com , or you can send us a message here:</p>
          <form id="form" method="POST" action="send.php">
                <p><input class="input"  type="text" placeholder="Name"  id="name" name="Name" required></p>
                <p><input class="input"  type="number" placeholder="Mobile Number" pattern=[0-9]{10}  name="Number" id="number" required></p>
                  
                <p><input class="input" type="number" placeholder="How many people"  name="People" id="people" required></p>
                   <p><input class="input" type="datetime-local" placeholder="Date and time"  name="date" value="2017-11-16T20:00" id="date_time" required></p>
                 <p><input class="input" type="text" placeholder="Message \ Special requirements"  name="Message" id="Message"></p>
          <p><button style="margin-left:30%; text-align:center;" class="submit" type="submit" id="submit" name="submit" >SEND MESSAGE</button></p>
          </form>
        </div>

        </div>
        <div class="top ">
          <div class="bar " id="myNavbar">
            <a href="" class="logo">SWEET FACTORY</a>
              <a href="#contact" class="bar-item button">CONTACT</a>
                <a href="#about" class="bar-item button" >ABOUT</a>
                  <a href="#menu" class="bar-item button">MENU</a>
                    <a href="#" class="bar-item button">HOME</a>
          </div>
          
        </div> 

        

        
<script type="text/javascript" src="js/sweet.js"></script>
        
</body>

</html>