
<!DOCTYPE html> 
<html>
<head>
<!--- links to stylesheets used and imports used such as fontawesome and jquery --->
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link href="navbarFormat.css" rel="stylesheet" type="text/css">
    <link href="footerFormat.css" rel="stylesheet" type="text/css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://kit.fontawesome.com/0e44e217c6.js" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
<p id="ReportAnEmergency">Report a Problem</p>
</div>


<!---THIS IS THE TEXT UNDER REPORT AN EMERGENCY ---> 
<div>
<p id = "step">Problem Details</p>
</div>




<hr align="left">
<!---Add a Photo section ---> 
<div style="margin-top: 20px;" >
    <span class = "bold">Add A Photo</span>
</div>
<div style="margin-top: 20px;">
<form method="post" enctype="multipart/form-data" style="display: flex; flex-direction: row;" action="savetofile.php">
 <label for="cameraInput">
<!---camera input that accpets file input or mobile camera input ---> 
 <span class="greyButton"><img src="Images/Camera.png" style="margin-right:15px; margin-left:10px;">Take a Photo</span>
   <input 
        id="cameraInput"
        type="file"
        accept="image/*"
        capture="camera"
        onchange="fileSelected();"
      />
</label>
<!---upload button that uploads the picture to the folder ---> 
<label for="uploadButton">
<span class="greyButton2"><img src="Images/upload.png" style="margin-right:15px; margin-left:10px;">Upload</span>
<input type="button" value="Upload Image" name="submit" id="uploadButton" onclick="uploadFile()">    
</label>
</form>
</div>

<script type="text/javascript">
//function that gets the picture from the user and saves the photo name and type to the to session variables
 function fileSelected() {
 
        var count = document.getElementById('cameraInput').files.length;
 
 
              for (var index = 0; index < count; index ++)
              {
 
                     var file = document.getElementById('cameraInput').files[index];
 
                    
 
                     sessionStorage.setItem('photoName',file.name); 
                     sessionStorage.setItem('photoType',file.type);  
                    

 
              }
                   
 
      }  

//function that uploads the file to savetofile.php and returns a response to the user if it is subnitted correctly
  function uploadFile() {
 
        var fd = new FormData();
 
              var count = document.getElementById('cameraInput').files.length;
 
              for (var index = 0; index < count; index ++)
 
              {
 
                     var file = document.getElementById('cameraInput').files[index];
 
                     fd.append('myFile', file);
 
              }
 
        var xhr = new XMLHttpRequest();
        xhr.addEventListener("load", uploadComplete, false);
        xhr.addEventListener("error", uploadFailed, false);
        xhr.addEventListener("abort", uploadCanceled, false);
        xhr.open("POST", "savetofile.php");


        xhr.send(fd);
 
      }

//functions that alerts the user a message if submitted
      function uploadComplete(evt) {
        alert(evt.target.responseText);
      }
      function uploadFailed(evt) {
        alert("Error uploading file...");
      }
      function uploadCanceled(evt) {
        alert("Upload cancelled by the user or network error!");
      }     
</script>
<!--- suggested tag section --->
<div style="margin-right:16px;">
<div style="margin-top:20px;">

 <span class = "bold">Add A Suggested Tag</span>
</div>
<div class="container"></div> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript"> 
//jquery request based off of previous session varaibles. loads php file into container div based on the problemType variable 
let problemType = sessionStorage.getItem('problemType');
if (problemType.toString()=="Damage") {
    $(".container").load("damages.php");
}
if (problemType.toString()=="OutFlood") {
 $(".container").load("outFlood.php");
} 
if (problemType.toString()=="InFlood") {
     $(".container").load("inFlood.php");

} 
if (problemType.toString()=="Pressure") {
     $(".container").load("pressure.php");
}
if (problemType.toString()=="NoWater") {
     $(".container").load("NoWater.php");
} 
if (problemType.toString()=="Quality") {
     $(".container").load("waterQuality.php");
}   

</script>
</div>
<!--- description section --->
<div>
     <span class = "bold">Desription</span>
</div>

<div style="margin-top:20px; margin-left: 16px; margin-bottom: 100px;">
    <form name="textForm" method="post">
     <textarea class="descriptionBox" id="description" placeholder="Enter Text Here...." onchange="writeText()"></textarea>
    </form>
</div>
<script type="text/javascript">
//javaScript function that records the description and sets it to a session variable
function writeText(){
    var description = document.forms["textForm"]["description"].value;
    sessionStorage.setItem('descriptionOfProblem',description);
}
</script>


<!---bottom navigation bar section that brings the user to the next pages --->
<div class="bottomNav">

<button onclick=" " type="button" id = "prevButton"  class="prevButton"><span class="prevButtonText"><img src="Images/PrevArrow.png" class ="prevArrow">Back</span></button>
<button onclick="location.href='contactInformation.php' " type="button" id="nextButton" class="nextButton"><span class="nextButtonText">Next<img src="Images/nextArrow.png" class="nextArrow"></span></button>

</div>
</body>
<script type="text/javascript">
//function that decides what page the previous button sends the user based off of previous session variables
 $(document).ready(function () {

let inOrout = sessionStorage.getItem('problemType'); 
if(inOrout.toString()=="Damage"|| inOrout.toString()=="OutFlood" ){
    document.getElementById("prevButton").setAttribute("onclick","location.href='Step3Out.php'");
   
}else{
     document.getElementById("prevButton").setAttribute("onclick","location.href='Step3In.php'");
}
});
</script>
</html>


