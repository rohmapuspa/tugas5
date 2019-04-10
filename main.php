<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


/* Third image (Contact) */
.bgimg-3 {
  background-image: url("/w3images/parallax3.jpg");
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">

    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">ROHMA <span class="w3-hide-small">PUSPA</span> WEBSITE</span> <br/>
	  <center> <img src="images/rohmapuspa.png" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="400" height="350"> <center/>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  
  <p class="w3-center"><b>SELAMAT DATANG DI WEBSITE SAYA</b></p>
  <p>Hello .. <br/>Nama Saya Rohmawati PuspaNingrum Mahasiswi STMIK AKAKOM YOGYAKARTA Tahun 2017 Jurusan Sistem Informasi. Tanggal Lahir saya 04 Oktober 1998. Saya adalah anak ke 2 dari 2 bersaudara dari Ibu bernama Nining Ratna Ningsih dan Bapak bernama Ponimin, saya mempunyai Kakak Laki-Laki yang bernama Ahmad Abdur Rozzaq..<br/>
  <p class="w3-LEFT"><b>TERIMAKASIH</b></p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      
	 
	  
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p></p>
    </div>
  </div>
  <p class="w3-large w3-center w3-padding-16">Saya Sangat menyukai:</p>
  <p class="w3-wide"><i class="fa fa-camera"></i>Traveling</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-laptop"></i>Programming</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">75%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Photograph</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:80%">80%</div>
  </div>
</div>


</div>
<span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
	  <h3 class="w3-center">CONTACT ME</h3>
	  <p><b><i class="fa fa-user w3-margin-right"></i>Rohma Puspa</b></p><br>
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> YOGYAKARTA, INDONEISA<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Instagram: rohmapuspa_<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: rohmaningrum17@gmail.com<br>
      </div>
</div>


</script>

</body>
</html>
