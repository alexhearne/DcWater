<html>
<head>
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link href="navbarFormat.css" rel="stylesheet" type="text/css">
    <link href="footerFormat.css" rel="stylesheet" type="text/css">
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
font-family: 'Fira Sans', sans-serif;
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
<p id = "step">Step 2 of 3</p>
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

<!-- Outdoor button -->
<div id = "Out" class = "bigbutton" onclick="ChangeColor(); swapImg(); activateOut();">
Outdoors
<p class = "rando">Report a problem located in an outdoor area</p>
</div>
<div id = "HalfOut" class = "halfbutton">
<img class = "icon" src="Images/Outdoor.png">
</div>



<!-- Indoor Button -->
<div id = "In" class = "bigbutton" style="margin-top:-75px" onclick="ChangeColor(); swapImg(); activateIn();">
Indoors
<p class = "rando">Report a problem located inside a building</p>
</div>
<div id = "HalfIn" class = "halfbutton">
<img class = "icon" src="Images/Indoor.png">
</div>

<!-- Text below buttons w/ link to unsure.php -->
<div style="font-family:'Fira Sans', sans-serif;font-size:18px;color:#2D2D2D;text-align:center;width:320px;height:80px;margin-left:25px;">
If the options above do not apply, please 
<a href="unsure.php" onclick="StoreOther();">describe your issue here.</a>
</div>

<!-- Footer -->
<div class="bottomNav" style="margin-top:250px">
<button onclick="window.location.href = 'Location.php';" type="button"  class="prevButton"><span class="prevButtonText"><img class="prevArrow" src="Images/ArrowBlue.png">Back</span></button>
<button onclick="#" type="button" id="ForColor" class="nextButton" disabled><span id="ForColor">Next<img class="nextArrow" id="ImgColor" src="Images/ArrowBlack.png"></span></button>
</div>


</body>
<script type="text/javascript">

//Change color of the Next button and reenable
document.getElementById("ForColor").style.background = "#DDDDDD";
function ChangeColor(){
if (document.getElementById("Out").value == "" || document.getElementById("In").value == ""){
document.getElementById("ForColor").style.background = "#DDDDDD";
} else {
document.getElementById("ForColor").style.background = "#0075C9";
document.getElementById("ForColor").style.color = "#FFFFFF";
document.getElementById("ForColor").disabled = false;
}

}

//Change arrow image of the Next button
function swapImg(){
if (document.getElementById("ImgColor").src.endsWith("ArrowBlack.png") == true){
document.getElementById("ImgColor").src = "Images/ArrowWhite.png";
} else {
document.getElementById("ImgColor").src = "Images/ArrowWhite.png";
}

}

//Display active Outdoor button and disable Indoor if it's active
function activateOut(){
document.getElementById("Out").className = "bigbuttonblue";
document.getElementById("HalfOut").className = "halfbuttonactive";
document.getElementById("HalfIn").className = "halfbuttongray";
document.getElementById("ForColor").onclick = function(){
location.href = "Step3Out.php";
}
if (document.getElementById("In").classList.contains ("bigbuttonblue")){
document.getElementById("In").className = "bigbutton";
}
sessionStorage.setItem('inOut', 'Outdoor');
}

//Display active Indoor button and disable Outdoor if it's active
function activateIn(){
document.getElementById("In").className = "bigbuttonblue";
document.getElementById("HalfIn").className = "halfbuttonactive";
document.getElementById("HalfOut").className = "halfbuttongray";
document.getElementById("ForColor").onclick = function(){
location.href = "Step3In.php";
}
if (document.getElementById("Out").classList.contains ("bigbuttonblue")){
document.getElementById("Out").className = "bigbutton";
}
sessionStorage.setItem('inOut', 'Indoor');
}

//Store "Other" in sessionStorage
function StoreOther(){
sessionStorage.setitem('problemType', 'Other');
sessionStorage.setItem('inOut', 'Other');
}

</script>

</html>
