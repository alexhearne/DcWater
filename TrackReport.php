

<!DOCTYPE html> 
<html>
<head>
	<link href="TrackReport.css" rel="stylesheet" type="text/css">
    <link href="navbarFormat.css" rel="stylesheet" type="text/css">
    <link href="footerformatTrackRep.css" rel="stylesheet" type="text/css" >
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
<!--- END OF NAVBAR ---> 
<div>
<p id="ReportAnEmergency">Track Your Report</p>
</div>
<!---THIS IS THE TEXT UNDER REPORT AN EMERGENCY ---> 
<div>
<p id = "step">Track Your Report</p>
</div>
<!--- THE CONTENT DEPENDS ON THE PAGE. SOME PAGES DONT EVEN 
HAVE THIS TEXT SO CHECK WITH THE PAGE> ---> 
<hr align="left">
<div class="WhatIsYourLocation">
<!--- This is the partial line under the notifications tab and above the content
    of the page. When editing this template, make sure the page has this because 
    some pages do not --->
    <p>Enter your ticket number</p>
</div>
<div>
<form method="post">
<input type="text" name="TicketNumber" id="TicketNumberColorChange"class="InputLocation" placeholder="Enter ticket number here..."
onkeyup="ChangeColor(); changeImage(); setVariable();"/>
</form>
<script>
function setVariable() {
    var ticketValue=document.getElementById("TicketNumberColorChange").value;
    sessionStorage.setItem('ColorChange', ticketValue);
}

</script> 
</div>

<div class="TrackReportParagraph">
If you provided your contact information in the Report a Problem form, 
you should have received an email from DC Water with your ticket number.
<br><br> 
If you have difficulty finding your tracking number, you can call us at 
<a href="https://www.dcwater.com/">(202) 612-3400</a> or reach out on <a href="https://twitter.com/dcwater?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Twitter @dcwater.</a>
</div>
<div class="bottomNav">
<button onclick="window.location='Begin.php'" type="button" class="prevButton"><span class="prevButtonText">Report a Problem</span></button>
<button onclick="window.location='ticketDetails.php'" style="border-color: none;" type="button" id="ForColor" class="nextButton" disabled>
<span id="ForColorText" class="TrackEnd">Track</span>
<span> 
<img name="arrowBlack" id="arrowBlack"src="Images/ArrowBlack.png" class="WhiteArrow">
</span></button> 
</div>
</body>
<script>
    document.getElementById("ForColorText").style.color = "Black";
    document.getElementById("ForColor").style.background = "#DDDDDD";
    function ChangeColor(){
      if (document.getElementById("TicketNumberColorChange").value == "") {
         document.getElementById("ForColor").style.background = "#DDDDDD";
      } else {
         document.getElementById("ForColor").style.background = "#0075C9";
         document.getElementById("ForColor").disabled=false;
      }
      if (document.getElementById("TicketNumberColorChange").value == "") {
         document.getElementById("ForColorText").style.color = "Black";
      } else {
         document.getElementById("ForColorText").style.color = "White";
      }
    }
</script>
<script>
        function changeImage() {
            var Image_Id = document.getElementById('arrowBlack');
            if (Image_Id.src.match("Images/ArrowBlack.png")) {
                Image_Id.src = "Images/ArrowWhite.png";
            }
            if (document.getElementById('TicketNumberColorChange').value== "")
            {
              Image_Id.src = "Images/ArrowBlack.png";
            }
        }    
    </script>
</html>