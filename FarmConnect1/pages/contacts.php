<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../style.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

  <div class="logotop logo">
    <img src="../images/farmconnectlogo.png" >
  </div>

  <div class="navigation" >
      <ul>
        
        <li><a href="../index.php">HOME</a></li>
        <li><a href="makert.php">MAKERT</a></li>
        <li><a href="about.html">ABOUT-US</a></li>
        <li><a href="contacts.php">CONTACTS</a></li>
        <li><a href="login.php">LOGIN</a></li>
        <li><a href="register.php">REGISTER</a></li>
        
      </ul>
      
    </div>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Get intouch with verified agricultural proffesionals</p>
  <p>Below Are The Personnels you can trust with your agricultural querries</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="../images/carrot.jpg.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Hashim JOhn</h2>
        <p class="title">Veterinary</p>
        <p>passiionate with animals</p>
        <p>hashim@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../images/corn.jpg.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Harry</h2>
        <p class="title">BA in Keeping</p>
        <p>entrustde with advices in beekeeping</p>
        <p>harry@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="./images/1.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Kipchoge</h2>
        <p class="title">Acquatic Life</p>
        <p>Entrusted Practioner</p>
        <p>kipchoge@gnmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
