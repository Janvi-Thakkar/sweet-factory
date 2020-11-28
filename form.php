<!DOCTYPE html>
<html>
<head>
<title>ORDER ONLINE</title>
<link rel="stylesheet" type="text/css"  href="css/form.css"/>

</head>
<body>


<div class="container">
  <form action="order.php" method="POST">
  <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="fname" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="lname" placeholder="Your last name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
              <label for="number">Mobile Number</label>
            </div>
            <div class="col-75">
              <input type="text" id="mobile" name="mobile" pattern="[0-9]{10}" placeholder="Your Number.." required>
            </div>
          </div>
          <div class="row">
            <div class="col-25">   
      <label for="country">PRODUCTS</label>
    </div>
    <div class="col-75">
      <select id="product" name="product" required>
          <option value="" >PRODUCTS</option>
        <option value="500">CHOCOLATE CAKE(1 kg) - rs.500</option>
        <option value="400">VANILA CAKE(1 kg) -   rs.400</option>
        <option value="50">CUP CAKE -              rs.50</option>
        <option value="720">KAJU KATRI(1 kg) -     rs.720</option>
        <option value="500">HALWA(1 kg)  -         rs.500</option>
        <option value="450">PISTA ROLE(1 kg) -    rs.450</option>
      </select>
    </div>
          </div>

          <div class="row">
    <div class="col-25">
        <label for="count">QUANTITY</label>
      </div>
      <div class="col-75">
        <input type="number" id="quantity" name="quantity" placeholder="Enter Quantity.." value="1" required> 
    </div>
    
  </div>
  
  <div class="row">
    <div class="col-25">
        <label for="total">TOTAL</label>
      </div>
      <div class="col-75">
        <button  id="total" style="width:100%; height:40px; text-align:left"></button>
          <input type="hidden" name="total" id="totalVal">
    </div>
    
  </div>
  <div class="row">
    <div class="col-25">
      <label for="Address">Address</label>
    </div>
    <div class="col-75">
      <textarea id="Address" name="Address" placeholder="Write Your Address" style="height:150px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit" name="submit">
  </div>
  </form>
</div>

<script type="text/javascript" src="js/form.js"></script>
</body>
</html>
