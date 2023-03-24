<html>
<head>
	<link href="styles.css" rel="stylesheet" type="text/css">
    <link href="navbarFormat.css" rel="stylesheet" type="text/css">
    <link href="footerFormat.css" rel="stylesheet" type="text/css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

p.rando{
margin-top: 0.3em;
}

.where{
width: 245px;
height: 29px;
left: 0px;
top: 0px;

font-family: 'Fira Sans', sans-serif;
font-style: normal;
font-weight: 700;
font-size: 21.5px;
line-height: 29px;

display: flex;
align-items: center;
flex: none;
order: 1;
flex-grow: 0;
margin: 0px 8px;

color: #2D2D2D;
}

.asterisk{
font-family: 'Fira Sans', sans-serif;
color: #D90514;
font-size: 18px;
}

.bigbutton{
font-family: 'Fira Sans', sans-serif;
cursor: pointer;
position: relative;
width: 238px;
height: 70px;
background-color: #EFEFEF;
color: #00528C;
border-radius: 16px 16px 16px 16px;
right: 76.68%;
left: 10px;
top: 10px;
font-size: 18px;
padding-left: 100px;
padding-top: 10px;
padding-right: 17px;
padding-bottom: 10px;
}

.bigbuttonblue{
font-family: 'Fira Sans', sans-serif;
cursor: pointer;
position: relative;
width: 238px;
height: 70px;
background-color: #8EBDE0;
color: #00528C;
border-style: solid;
border-width: 2px;
border-radius: 16px 16px 16px 16px;
border-color: #0075C9;
right: 76.68%;
left: 10px;
top: 10px;
font-size: 18px;
padding-left: 100px;
padding-top: 10px;
padding-right: 17px;
padding-bottom: 10px;
box-shadow: 0px 3px 5px #808080;
}

.halfbutton{
cursor: pointer;
position: relative;
background-color: #8EBDE0;
width: 80px;
height: 90px;
border-radius: 16px 0px 0px 16px;
left: 10px;
top: -80px;
}

.halfbuttonactive{
cursor: pointer;
position: relative;
background-color: #8EBDE0;
width: 80px;
height: 90px;
border-top: 2px solid #0075C9;
border-left: 2px solid #0075C9;
border-bottom: 2px solid #0075C9;
border-radius: 16px 0px 0px 16px;
left: 10px;
top: -84px;
}

.halfbuttongray{
cursor: pointer;
position: relative;
background-color: #EFEFEF;
width: 80px;
height: 90px;
border-radius: 16px 0px 0px 16px;
left: 10px;
top: -80px;
}


.icon{
position: relative;
top: 25%;
left: 25%;
}

.rando{
font-size: 16px;
color: #2D2D2D;
}

</style>
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
<p id="ReportAnEmergency">Report a problem</p>
</div>


<!---THIS IS THE TEXT UNDER REPORT AN EMERGENCY ---> 
<div>
<p id = "step">Step 3 of 3</p>
</div>
<!--- THE CONTENT DEPENDS ON THE PAGE. SOME PAGES DONT EVEN 
HAVE THIS TEXT SO CHECK WITH THE PAGE> ---> 
<div>

<!--- This is the partial line under the notifications tab and above the content
    of the page. When editing this template, make sure the page has this because 
    some pages do not --->
<hr align="left">

<p class = "where">Where is the Problem?<span class = "asterisk">*</span></p>

<!--- PUT CONTENT HERE--->

<!-- Flood button -->
<div id = "Flood" class = "bigbutton" onclick="ChangeColor(); swapImg(); activateFlood();">
Flooding / Leaking
<p class = "rando">Report an excess of water or water flow issue</p>
</div>
<div id = "HalfFlood" class = "halfbutton">
<img class = "icon" src="Images/IndoorFlood.png">
</div>


<!-- Water Pressure button -->
<div id = "Pressure" class = "bigbutton" style="margin-top:-75px" onclick="ChangeColor(); swapImg(); activatePressure();">
Water Pressure
<p class = "rando">Report a low water pressure issue</p>
</div>
<div id = "HalfPressure" class = "halfbutton">
<img class = "icon" src="Images/Pressure.png">
</div>


<!-- No Water button -->
<div id = "NoWater" class = "bigbutton" style="margin-top:-75px" onclick="ChangeColor(); swapImg(); activateNoWater();">
No Water
<p class = "rando">Report a water outage or access issue</p>
</div>
<div id = "HalfNoWater" class = "halfbutton">
<img class = "icon" src="Images/NoWater.png">
</div>


<!-- Water Quality button -->
<div id = "Quality" class = "bigbutton" style="margin-top:-75px" onclick="ChangeColor(); swapImg(); activateQuality();">
Water Quality
<p class = "rando">Report discolored, polluted, or cloudy water</p>
</div>
<div id = "HalfQuality" class = "halfbutton">
<img class = "icon" src="Images/PoorQuality.png">
</div>


<!-- Other button -->
<div id = "Other" class = "bigbutton" style="margin-top:-75px" onclick="ChangeColor(); swapImg(); activateOther();">
Other
<p class = "rando">Select this option if the above categories don't apply</p>
</div>
<div id = "HalfOther" class = "halfbutton">
<img class = "icon" src="Images/Other.png">
</div>


<!-- Fotter -->
<div class="bottomNav" style="margin-top:250px">
<button onclick="window.location.href = 'Step2.php';" type="button"  class="prevButton"><span class="prevButtonText"><img class="prevArrow" src="Images/ArrowBlue.png">Back</span></button>
<button onclick="#" type="button" id="ForColor" class="nextButton" disabled><span id="ForColor">Next<img class="nextArrow" id="ImgColor" src="Images/ArrowBlack.png"></span></button>
</div>

</body>

<script type="text/javascript">

//Change color for the Next button and reenable
document.getElementById("ForColor").style.background = "#DDDDDD";
function ChangeColor(){
if (document.getElementById("Flood").value == "" || document.getElementById("Pressure").value == "" || document.getElementById("NoWater").value == "" || document.getElementById("Quality").value == "" || document.getElementById("Other").value == ""){
document.getElementById("ForColor").style.background = "#DDDDDD";
} else {
document.getElementById("ForColor").style.background = "#0075C9";
document.getElementById("ForColor").style.color = "#FFFFFF";
document.getElementById("ForColor").disabled = false;
}
}

//Change arrow image for Next button
function swapImg(){
if (document.getElementById("ImgColor").src.endsWith("ArrowBlack.png") == true){
document.getElementById("ImgColor").src = "Images/ArrowWhite.png";
} else {
document.getElementById("ImgColor").src = "Images/ArrowWhite.png";
}
}

//Display active Flood button and disable other buttons
function activateFlood(){
document.getElementById("Flood").className = "bigbuttonblue";
document.getElementById("HalfFlood").className = "halfbuttonactive";
document.getElementById("HalfPressure").className = "halfbuttongray";
document.getElementById("HalfNoWater").className = "halfbuttongray";
document.getElementById("HalfQuality").className = "halfbuttongray";
document.getElementById("HalfOther").className = "halfbuttongray";
if (document.getElementById("Pressure").classList.contains ("bigbuttonblue")){
document.getElementById("Pressure").className = "bigbutton";
}
if (document.getElementById("NoWater").classList.contains ("bigbuttonblue")){
document.getElementById("NoWater").className = "bigbutton";
}
if (document.getElementById("Quality").classList.contains ("bigbuttonblue")){
document.getElementById("Quality").className = "bigbutton";
}
if (document.getElementById("Other").classList.contains ("bigbuttonblue")){
document.getElementById("Other").className = "bigbutton";
}
document.getElementById("ForColor").onclick = function(){
location.href = "AdditionalDetails.php";
}
sessionStorage.setItem('problemType', 'InFlood');
}

//Display active Pressure button and disable other buttons
function activatePressure(){
document.getElementById("Pressure").className = "bigbuttonblue";
document.getElementById("HalfPressure").className = "halfbuttonactive";
document.getElementById("HalfFlood").className = "halfbuttongray";
document.getElementById("HalfNoWater").className = "halfbuttongray";
document.getElementById("HalfQuality").className = "halfbuttongray";
document.getElementById("HalfOther").className = "halfbuttongray";
if (document.getElementById("Flood").classList.contains ("bigbuttonblue")){
document.getElementById("Flood").className = "bigbutton";
}
if (document.getElementById("NoWater").classList.contains ("bigbuttonblue")){
document.getElementById("NoWater").className = "bigbutton";
}
if (document.getElementById("Quality").classList.contains ("bigbuttonblue")){
document.getElementById("Quality").className = "bigbutton";
}
if (document.getElementById("Other").classList.contains ("bigbuttonblue")){
document.getElementById("Other").className = "bigbutton";
}
document.getElementById("ForColor").onclick = function(){
location.href = "AdditionalDetails.php";
}
sessionStorage.setItem('problemType', 'Pressure');
}

//Display active NoWater button and disable other buttons
function activateNoWater(){
document.getElementById("NoWater").className = "bigbuttonblue";
document.getElementById("HalfNoWater").className = "halfbuttonactive";
document.getElementById("HalfPressure").className = "halfbuttongray";
document.getElementById("HalfFlood").className = "halfbuttongray";
document.getElementById("HalfQuality").className = "halfbuttongray";
document.getElementById("HalfOther").className = "halfbuttongray";
if (document.getElementById("Pressure").classList.contains ("bigbuttonblue")){
document.getElementById("Pressure").className = "bigbutton";
}
if (document.getElementById("Flood").classList.contains ("bigbuttonblue")){
document.getElementById("Flood").className = "bigbutton";
}
if (document.getElementById("Quality").classList.contains ("bigbuttonblue")){
document.getElementById("Quality").className = "bigbutton";
}
if (document.getElementById("Other").classList.contains ("bigbuttonblue")){
document.getElementById("Other").className = "bigbutton";
}
document.getElementById("ForColor").onclick = function(){
location.href = "AdditionalDetails.php";
}
sessionStorage.setItem('problemType', 'NoWater');
}

//Display active Quality button and disable other buttons
function activateQuality(){
document.getElementById("Quality").className = "bigbuttonblue";
document.getElementById("HalfQuality").className = "halfbuttonactive";
document.getElementById("HalfPressure").className = "halfbuttongray";
document.getElementById("HalfNoWater").className = "halfbuttongray";
document.getElementById("HalfFlood").className = "halfbuttongray";
document.getElementById("HalfOther").className = "halfbuttongray";
if (document.getElementById("Pressure").classList.contains ("bigbuttonblue")){
document.getElementById("Pressure").className = "bigbutton";
}
if (document.getElementById("NoWater").classList.contains ("bigbuttonblue")){
document.getElementById("NoWater").className = "bigbutton";
}
if (document.getElementById("Flood").classList.contains ("bigbuttonblue")){
document.getElementById("Flood").className = "bigbutton";
}
if (document.getElementById("Other").classList.contains ("bigbuttonblue")){
document.getElementById("Other").className = "bigbutton";
}
document.getElementById("ForColor").onclick = function(){
location.href = "AdditionalDetails.php";
}
sessionStorage.setItem('problemType', 'Quality');
}

//Display active Other button and disable other buttons
function activateOther(){
document.getElementById("Other").className = "bigbuttonblue";
document.getElementById("HalfOther").className = "halfbuttonactive";
document.getElementById("HalfPressure").className = "halfbuttongray";
document.getElementById("HalfNoWater").className = "halfbuttongray";
document.getElementById("HalfQuality").className = "halfbuttongray";
document.getElementById("HalfFlood").className = "halfbuttongray";
if (document.getElementById("Pressure").classList.contains ("bigbuttonblue")){
document.getElementById("Pressure").className = "bigbutton";
}
if (document.getElementById("NoWater").classList.contains ("bigbuttonblue")){
document.getElementById("NoWater").className = "bigbutton";
}
if (document.getElementById("Quality").classList.contains ("bigbuttonblue")){
document.getElementById("Quality").className = "bigbutton";
}
if (document.getElementById("Flood").classList.contains ("bigbuttonblue")){
document.getElementById("Flood").className = "bigbutton";
}
document.getElementById("ForColor").onclick = function(){
location.href = "unsure.php";
}
sessionStorage.setItem('problemType', 'Other');
}


</script>

</html>
