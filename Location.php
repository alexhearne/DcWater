

<!DOCTYPE html> 
<html>
<head>
	<link href="Location.css" rel="stylesheet" type="text/css">
    <link href="navbarFormat.css" rel="stylesheet" type="text/css">
    <link href="footerFormat.css" rel="stylesheet" type="text/css"
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!--- START OF NAVBAR---> 
<nav>
        <ul>
    <li><a href="https://dcwater.com/" id="image"><img src="Images/dcWaterLogo.png"></a></li>
    <li><a href="#"><img src="Images/searchIcon.png"></a></li>
    <li><a href="#"><img src="Images/menuIcon.png"></a></li>
        </ul>
</nav>
<div>
<p id="ReportAnEmergency">Report a Problem</p>
</div>

<div>
<p id = "step">Step 1 of 3</p>
</div>

<hr align="left">
<div class="WhatIsYourLocation">

    <p>What is your location?<span style="color:red"> *</span></p>
</div>
<div>
<form method="post">
<span><input type="text" method="post" name="ColorChange" id="ColorChange" class="InputLocation" placeholder="Enter Location..."
onkeyup="ChangeColor(); changeImage(); setVariable();"/>
</form>
<script>
function setVariable() {
    var locationValue=document.getElementById("ColorChange").value;
    sessionStorage.setItem('ColorChange', locationValue);  
}

</script>    
<img src="Images/searchIcon.png" class="searchIcon" width=10/></span>
</div>  

<div>
<button onclick="showPosition(); allowButton(); changeImage();" type="button"  class="UseLocButton"><span class="LocButtonText">Use my location</span>
<img src="Images/MapArrow.png"/></button>
<button onclick="#" type="button"   class="DropPinButton"><span class="LocButtonText">Drop a Pin</span>
<img src="Images/MapPin.png"/></button>

</div>

<div class="MapScreenshot">
<div id="googleMap" style="width:90%;height:400px;"></div>

<script>


    
function showPosition() {
        navigator.geolocation.getCurrentPosition(showMap);
    }
    
    function showMap(position) {
        // Get location data
        var latlong = position.coords.latitude + "," + position.coords.longitude;
        sessionStorage.setItem('ColorChange', latlong);
        alert(latlong);
        document.getElementById("ColorChange").value=latlong;
        var coordinates=latlong;
        
        
        // Set Google map source url
        var mapLink = "https://maps.googleapis.com/maps/api/staticmap?center="+latlong+"&zoom=16&size=400x300&output=embed";
        
        // Create and insert Google map
        document.getElementById("embedMap").innerHTML = "<img alt='Map Holder' src='"+ mapLink +"'>";
    }
</script>
</div>
<div id="embedmap" class="embeddedmap">
<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198649.63541442878!2d-77.25717103594643!3d38.92625044229344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b0990faad959%3A0x4312e2dc603cee0c!2sDistrict%20of%20Columbia%20Water%20and%20Sewer%20Authority!5e0!3m2!1sen!2sus!4v1651692268868!5m2!1sen!2sus" width="90%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   <script>
    /*
    If DC Water would like to replace this code with a Google maps API, they just need to sign up for the key
    and copy and paste the code into here. I did not include the Google maps API because it costs money per
    28,500 uses per month. I highly doubt that DC Water will have this many interactions, but to be safe,
    I did not want to enter any of my perosonal payment information. Insert the Google Maps API here. You can
    simply copy and paste the code from the Google maps website.
    */
    </script>
</div>

<div class="bottomNav">
<button onclick="window.location='Begin.php'" type="button"  class="prevButton"><span class="prevButtonText"><img img src="Images/ArrowBlue.png"class="prevArrow">Back </span></button>
<button onclick="window.location='Step2.php'; ChangeColor()" type="submit" id="ForColor"class="nextButton" style="border-color: none;" disabled><span id="ForColorText" class="nextButtonText">
Next
<img name="arrowBlack" id="arrowBlack" img src="Images/ArrowBlack.png"class="nextArrow"></span></button>
</div>
</body>
<script>
    document.getElementById("ForColorText").style.color = "Black";
    document.getElementById("ForColor").style.background = "#DDDDDD";

    function ChangeColor(){
      if (document.getElementById("ColorChange").value == "") {
         document.getElementById("ForColor").style.background = "#DDDDDD";
      } else {
          document.getElementById("ForColor").disabled=false;
         document.getElementById("ForColor").style.background = "#0075C9";
      }
      if (document.getElementById("ColorChange").value == "") {
         document.getElementById("ForColorText").style.color = "Black";
      } else {
         document.getElementById("ForColorText").style.color = "White";
      }
    }


</script>
<script>
function allowButton() {
    document.getElementById("ForColor").disabled=false;
    if (document.getElementById("ColorChange").value ==null) {
         document.getElementById("ForColor").style.background = "#DDDDDD";
      } else {
          document.getElementById("ForColor").disabled=false;
         document.getElementById("ForColor").style.background = "#0075C9";
      }
      if (document.getElementById("ColorChange").value == null) {
         document.getElementById("ForColorText").style.color = "Black";
      } else {
         document.getElementById("ForColorText").style.color = "White";
      }
    var Image_Id = document.getElementById('arrowBlack');
            if (Image_Id.src.match("Images/ArrowBlack.png")) {
                Image_Id.src = "Images/ArrowWhite.png";
            }
            if (document.getElementById('ColorChange').value== "")
            {
              Image_Id.src = "Images/ArrowBlack.png";
            }
}
</script>
<script>
        function changeImage() {
            var Image_Id = document.getElementById('arrowBlack');
            if (Image_Id.src.match("Images/ArrowBlack.png")) {
                Image_Id.src = "Images/ArrowWhite.png";
            }
            if (document.getElementById('ColorChange').value== null)
            {
              Image_Id.src = "Images/ArrowBlack.png";
            }
        }    
    </script>
</html>