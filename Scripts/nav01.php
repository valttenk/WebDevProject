<div id="navbar"><nav>
	<ul>
	  	<li class="dropdown">
	  		<a href="javascript:void(0)" class="dropbtn" onclick="myFunction('drop1')">Kampanja</a>
  			<div class="dropdown-content" id="drop1">
	      		<a href="statistics.php">Tilastoja</a>
	      		<a href="campaingInfo.php">Kampanja info</a>
	    	</div>
	    </li>
	    <div class="verticalSeparator"></div>
	    <li class="dropdown">
	  		<a href="javascript:void(0)" class="dropbtn" onclick="myFunction('drop2')">Tietoa verestä ja sen luovutuksesta</a>
	  		<div class="dropdown-content" id="drop2">
	      		<a href="canUDonate.php">Voinko luovuttaa?</a>
	      		<a href="whyShouldIDonate.php">Miksi pitäisi luovuttaa?</a>
	      		<a href="aboutBlood.php">Tietoa verestä</a>
	    	</div>
	    </li>
	    <div class="verticalSeparator"></div>
	  	<li class="dropdown">
	    	<a href="javascript:void(0)" class="dropbtn" id="noborder"  onclick="myFunction('drop3')">Keitä me olemme?</a>
	    	<div class="dropdown-content" id="drop3">
	      		<a href="howItAllStarted.php">Kuinka kaikki alkoi?</a>
	      		<a href="contactUs.php">Ota yhteyttä!</a>
	    	</div>
	  	</li>
		<div id="title">Tähän sitte joskus se otsikko</div>
	</ul>
</nav></div>
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction(id) {
    document.getElementById(id).classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var d = 0; d < dropdowns.length; d++) {
      var openDropdown = dropdowns[d];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
