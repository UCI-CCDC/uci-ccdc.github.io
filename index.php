<!DOCTYPE html>
<html>
<title>Cyber @ UCI</title>
<head>
<?php include('common/head.html');?>
</head>

<style>
body {font-family: "Lato", sans-serif}
body, html {
    height: 100%;
}
.mySlides {
  display: none;
}

/* Full height image header */
.bgimg-1 {
  background-image: url('images/slideshow/welcome.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  background-blend-mode: multiply;
  background-color: rgb(70,70,70); // Tint color
}
.bgimg-2 {
  background-image: url('images/slideshow/ccdc.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  background-blend-mode: multiply;
  background-color: rgb(70,70,70); // Tint color
}
.bgimg-3 {
  background-image: url('images/slideshow/board.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  background-blend-mode: multiply;
  background-color: rgb(70,70,70); // Tint color
}
</style>

<body>
<?php include('common/navbar.html');?>
<!-- Page content -->
<header class="w3-content w3-black" style="max-width:2500px; height:100%;">

    <!-- Automatic Slideshow Images -->
    <div class="mySlides w3-animate-right w3-display-container bgimg-1 w3-center">
			<div>
				<div class="w3-display-middle w3-row-padding w3-center" style="width:60%;max-width:400px;">
					<div class="w3-image">
					<img src="/images/logo.png" style="width:90%;">
					</div>
					<span class="w3-jumbo">Cyber @ UCI</span>
					<br>
					<br>
					<span class="w3-xlarge">We do all things Cybersecurity</span>
					<p><a href="#about" class="w3-button w3-blue w3-text-white w3-padding-large w3-large w3-margin-top w3-transition-medium">
							About Us
					</a></p>
				</div>
			</div>
        <div class="w3-display-middle w3-text-white" style="width:100%; text-align:center">

      </div>
    </div>
    <div class="mySlides w3-animate-right w3-display-container bgimg-2 w3-center">
        <div class="w3-display-middle w3-text-white" style="width:100%; text-align:center;">
        <br>
        <br>
        <span class="w3-jumbo">CCDC</span>
        <br>
        <br>
        <span class="w3-xlarge">Collegiate Cyber Defense Competition<br>
          Now training for the 2018-19 season!
        </span>
        <p><a href="/ccdc" class="w3-button w3-blue w3-text-white w3-padding-large w3-large w3-margin-top w3-transition-medium">
            About CCDC
        </a></p>
      </div>
    </div>

    <div class="mySlides w3-animate-right w3-display-container bgimg-3   w3-center">
        <div class="w3-display-middle w3-text-white" style="width:100%; text-align:center;">
        <br>
        <br>
        <span class="w3-jumbo">The Board</span>
        <br>
        <br>
        <span class="w3-xlarge">
          New, and ready to Cyber!
        </span>
        <p><a href="/board" class="w3-button w3-blue w3-text-white w3-padding-large w3-large w3-margin-top w3-transition-medium">
            The Board
        </a></p>
      </div>
    </div>

  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
	  <?php include('common/social.html');?>
  </div>

</header>


  <!-- About Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:1000px" id="about">
    <h2 class="w3-wide">THE CLUB</h2>
    <p class="w3-opacity"><i>We do all things cybersecurity</i></p>
    <p class="w3-justify">
      Cyber @ UCI was created from a desire to have more cybersecurity exposure and
      learning at UCI. Despite being a rapidly growing, and extremely important field,
      cybersecurity is often only relegated to a couple upper division classes. That
      just isn't right! At its core, being 'good' at cybersecurity necessitates being
      plugged into the security community, and keeping up to date with all the latest
      developments. Cyber @ UCI offers such a place, bringing people from all levels
      of experience together with one common interest: cybersecurity. Yet more than
      just a common interest, we have several branches of involvement that we offer...

    </p>

    <div class="w3-row-padding" style="margin-top:64px; margin-bottom:64px">
      <div class="w3-col l4 m4 w3-margin-bottom">
        <img src="/images/workshops.jpg" style="width:100%" alt="Avatar">
        <div class="w3-card w3-container w3-white w3-padding w3-round">
          <p class="w3-xlarge">Workshops</p>
          <p class="autoflow" autoflowid=0>
            We highlight in-house talent, discuss major news events, or tackle common security topics in our weekly workshops.
            Stay tuned on Facebook for upcoming workshops and topics.
          </p>
        </div>
      </div>
      <div class="w3-col l4 m4 w3-margin-bottom">
        <img src="/images/ctf.png" style="width:100%" alt="Avatar">
        <div class="w3-card w3-container w3-white w3-padding w3-round">
          <p class="w3-xlarge">CTFs</p>
          <p class="autoflow" autoflowid=0>
            Want more hands on? Our CTF (or Capture the Flag) is a yearly event hosted with IEEE pitting teams of
            students against each other to solve the security challenges and win the grand prize!
          </p>
        </div>
      </div>
      <div class="w3-col l4 m4 w3-margin-bottom">
        <img src="/images/ccdc.jpg" style="width:100%" alt="Avatar">
        <div class="w3-card w3-container w3-white w3-padding w3-round">
          <p class="w3-xlarge">CCDC</p>
          <p class="autoflow" autoflowid=0>
            CCDC (Collegiate Cyber Defense Competition) is a staple for any aspiring cybersecurity expert. As a team, we compete against
            other universities in real time to defend and maintain a live network.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- The Join Section -->
  <div class="w3-black" id="join">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">JOIN US</h2>
      <p class="w3-opacity w3-center"><i>Interested in Cybersecurity? We'd love to have you!</i></p><br>

      <p class="w3-justify">
        People are always curious about what it takes to get into Cybersecurity, and the answer to that question is... just jump in!
        Our club is structured in a way to encourage beginners to jump in and engage with our workshops, in house competitions, and
        also our competition teams.
        <br><br>
        <h3 class="w3-center">
        So how does one 'jump in?'
      </h3>
      </p>

      <table class="w3-container w3-content">
          <tr>
            <th style="padding:.5em;"><div class="w3-circle w3-white w3-text-black w3-xxxlarge w3-padding-16" style="width: 2em; height:2em;"> 1</div></th>
            <th><span class="w3-xlarge">Speak</span><br> Join our <a href="/slack">Slack</a> and introduce yourself!</th>
          </tr>
          <tr>
            <th style="padding:.5em;"><div class="w3-circle w3-white w3-text-black w3-xxxlarge w3-padding-16" style="width: 2em; height:2em;"> 2</div></th>
            <th><span class="w3-xlarge">Listen</span><br>Sign up to our <a href="/newsletter">mailing list</a>. and join our <a href="/facebook">Facebook group.</a></th>
          </tr>

          <tr>
            <th style="padding:.5em;"><div class="w3-circle w3-white w3-text-black w3-xxxlarge w3-padding-16" style="width: 2em; height:2em;"> 3</div></th>
            <th><span class="w3-xlarge">Attend</span><br>You can join our <a href="/ccdc">CCDC Team</a>, head to <a href="https://www.defcon.org/">Defcon</a> with us,
               or participate in our <a href="http://cyberctf.ics.uci.edu/">CTF</a>. These involements are seasonal so make sure you sign up to our mailing list to hear about them.</th>
          </tr>
      </table>
    </div>
  </div>


<!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-16 w3-center w3-opacity w3-light-grey w3-xlarge">
	<?php include('common/social.html');?>
	<?php include('common/legal.html');?>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 6000);
}

</script>

<!--Autoflow the needed divs-->
<script src="/assets/js/autoflow.js"></script>
<script>
  autoflow();
</script>

</body>
</html>
