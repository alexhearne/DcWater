
<!DOCTYPE html> 
<html>
<head>
	<link href="Review.css" rel="stylesheet" type="text/css">
    <link href="navbarFormat.css" rel="stylesheet" type="text/css">
    <link href="footerFormat.css" rel="stylesheet" type="text/css" >
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
<p id="ReportAnEmergency">Report a Problem
    
    
</p>
</div>

<!------------------------------ <span style="color:red">*</span> --->
<!---THIS IS THE TEXT UNDER REPORT AN EMERGENCY ---> 
<div>
<p id = "step">Review</p>
</div>

<!--- THE CONTENT DEPENDS ON THE PAGE. SOME PAGES DONT EVEN 
HAVE THIS TEXT SO CHECK WITH THE PAGE> ---> 
<div>

<!--- This is the partial line under the notifications tab and above the content
    of the page. When editing this template, make sure the page has this because 
    some pages do not --->

<hr align="left">

</div>

<div class="Box1" >
<img src="Images/LeftSideBox.png"class="LeftSideBox1">
<img src="Images/Pencil.png"class="Pencil1">
<span onclick="window.location='Location.php'" class="Edit1"> Edit </span>
</div>

<div class="Location">
Location:
</div>

<div id= "FirstTextBox" class="FirstTextBox" readonly>
<br> 
<script>
document.getElementById("FirstTextBox").innerHTML = sessionStorage.getItem("ColorChange");
</script> 
</div>

<div>
<img src="Images/MapReviewScreenshot.png" class = "MapReviewScreenshot">
</div>

<div class="Box2">
<img src="Images/LeftSideBox.png"class="LeftSideBox2">
<img src="Images/Pencil.png"class="Pencil2">
<span onclick="window.location='Step2.php'"class="Edit2"> Edit </span>
</div>

<div class="Issue">
<span>Issue:</span>
</div>

<div class="SecondBoxText" id="SecondBoxText">
<script>
document.getElementById("SecondBoxText").innerHTML = sessionStorage.getItem("inOut");
document.getElementById("SecondBoxText").innerHTML = sessionStorage.getItem("problemType");
</script> 
</div>



<div class="Box3">
<img src="Images/LeftSideBox.png"class="LeftSideBox3">
<img src="Images/Pencil.png"class="Pencil3">
<span id ="Edit3" onclick="pageDecide();" class="Edit3"> Edit </span>
</div>

<div class="PhotosAndVideos">
<span>Photos & Videos:</span>
</div>
<div id ="ThirdBoxText"class="ThirdBoxText">
<script>
if (sessionStorage.getItem('photoName')=="") {
    var none="None";
    document.getElementById("ThirdBoxText").innerHTML=none;
} else {
document.getElementById("ThirdBoxText").innerHTML = sessionStorage.getItem('photoName');
}
</script> 
</div>




<div class="ScrollFunction">
</div>

<div class="bottomNav">

<button onclick="window.location='ContactInformation.php'" type="button"  class="prevButton">
<span class="prevButtonText"> 
<img src="Images/ArrowBlue.png" class="prevArrow">
 Back
</span>
</button>
<button onclick="window.location='ThankYou.php'" id="NextButton" type="button" class="nextButton" style="border-color: none;">
<span class="nextButtonText">Next
<img src="Images/ArrowWhite.png" class="WhiteArrow">
</span>
</button>

</div>

<script>
function pageDecide() {
let inOrOut=sessionStorage.getItem("problemType");
if (inOrOut.toString()=="Other") {
    window.location='unsure.php';
} else {
    window.location='additionalDetails.php';
}
}
</script>    
<script>
document.getElementById('NextButton')function makeTicket() {
    var ticketNumValue="00-00000001";
    sessionStorage.setItem('ticketNumDefault', ticketNumValue);
    window.location='ThankYou.php';
};
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
document.getElementById('NextButton')function submitQuery(){
//session storage variables from location page 
		let locationOf = sessionStorage.getItem('ColorChange');
//session storage variables from Step3 page
		let problem = sessionStorage.getItem('problemType');
//session storage varaibles from additional details 
		let cameraName = sessionStorage.getItem('photoName'); 
		let descriptionOfProblem = sessionStorage.getItem('descriptionOfProblem');
		let details = sessionStorage.getItem('details');
//session storage varaibles from contactInfo page
		let moreInfo = sessionStorage.getItem('moreInfo'); 
		let contactWquestions = sessionStorage.getItem('contactQuestion'); 
		let fullName = sessionStorage.getItem('fullName');
		let email = sessionStorage.getItem('email'); 
		let phoneNum = sessionStorage.getItem('phone');
		let ticketNum = sessionStorage.getItem('ticketNumber');  
$.post("uploadToServer.php", 
      {
      	location: locationOf, 
      	problemType: problem, 
        photoName: cameraName, 
        description: descriptionOfProblem, 
        tags: details, 
        updates: moreInfo, 
        contact: contactWquestions,
        name: fullName, 
        emailAddress: email,
        phone:phoneNum,
        ticketNumber:ticketNum
       });
sessionStorage.clear(); 
window.location='ThankYou.php';
}
</script>

</body>
</html>

