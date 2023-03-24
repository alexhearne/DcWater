
<!DOCTYPE html> 
<html>
<head>
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link href="navbarFormat.css" rel="stylesheet" type="text/css">
    <link href="footerFormat.css" rel="stylesheet" type="text/css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://kit.fontawesome.com/0e44e217c6.js" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

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

<!-- add a photo form that lets the user add a photo with the add a photo button and have it upload to the server with the Upload button --->
<div style="margin-top: 20px;" >
    <span class = "bold">Add A Photo</span>
</div>
<div style="margin-top: 20px;">
<form method="post" enctype="multipart/form-data" style="display: flex; flex-direction: row;" action="savetofile.php">
 <label for="cameraInput">
 <span class="greyButton"><img src="Images/Camera.png" style="margin-right:15px; margin-left:10px;">Take a Photo</span>
   <input 
        id="cameraInput"
        type="file"
        accept="image/*"
        capture="camera"
        onchange="fileSelected();"
      />
</label>

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

<!--- description form that gets a description of the problem from the user --->
<div style="margin-top:20px;">
     <span class = "bold">Desription<span style="color:red;">*</span></span>
</div>

<div style="margin-top:20px; margin-left: 16px;">
     <form name="textForm" method="post">
     <textarea class="descriptionBox" id="description" placeholder="Enter Text Here...." onchange="writeText()"></textarea>
    </form>
</div>
<script type="text/javascript">
//javascript function that records the users response to the description form and saves it to a session variable called descriptionOfProblem and enables the next button
function writeText(){
    var description = document.forms["textForm"]["description"].value;
    sessionStorage.setItem('descriptionOfProblem',description);
    document.getElementById("nextButtonDisabled").disabled = false;
     var disabledButton = document.getElementById('nextArrow');
     disabledButton.src = "Images/ArrowWhite.png";


}
</script>

<div class="bottomNav">

<button onclick="location.href='Step2.php'" type="button" id = "prevButton" class="prevButton"><span class="prevButtonText"><img src="Images/PrevArrow.png" class ="prevArrow">Back</span></button>
<button onclick="location.href='contactInformation.php'" type="button" class="nextButton"  id="nextButtonDisabled" disabled><span class="nextButtonText">Next<img src="Images/ArrowBlack.png" class="nextArrow" id="nextArrow"></span></button>

</div>
</body>
<script type="text/javascript">
//javascript function that changes the onclick function of the previous button based on previous session variables
$(document).ready(function () {

let inOut = sessionStorage.getItem('inOut');
if(inOut.toString()=="Outdoor"){
    document.getElementById("prevButton").setAttribute("onclick","location.href='Step3Out.php'");
   
}
 if(inOut.toString()=="Indoor"){
    document.getElementById("prevButton").setAttribute("onclick","location.href='Step3In.php'");
   
}

}); 

</script>
</html>


