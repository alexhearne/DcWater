
<!DOCTYPE html> 
<html>
<head>
	<link href="styles.css" rel="stylesheet" type="text/css">
    <link href="navbarFormat.css" rel="stylesheet" type="text/css">
    <link href="footerFormat.css" rel="stylesheet" type="text/css" >
    <link href="progressBarFormat.css" rel="stylesheet" type ="text/css">
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
<p id="ReportAnEmergency">Report an Emergency</p>
</div>


<!---THIS IS THE TEXT UNDER REPORT AN EMERGENCY ---> 

<!--- PAGE IS INCOMPLETE WILL FINISH WHEN DATABASE IS UP ---> 
<div>
<p id = "step">Ticket Status</p>
</div>
<hr align="left">

<div style="margin-top: 20px; margin-left: 16px;">

<span class = "smallBold">Tracking Number:</span>
    
</div>

<div style="margin-top: 4px; margin-left: 16px;">
    
<span class="trackText">2694570030</span>

</div>
<div>
<div class="progContainer" style="margin-bottom: 50px;"></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
//jquery request based on a variable 
//when database works this will be switched to based on the mysql 
 let ticketStatus = "ticketOpened" 
if (ticketStatus.toString()=="ticketOpened") {
    $(".progContainer").load("ticketOpened.php");
}
if (ticketStatus.toString()=="underReview") {
 $(".progContainer").load("underReview.php");
} 
if (ticketStatus.toString()=="repairInProgress"){
     $(".progContainer").load("repairInProgress.php");

} 
if (ticketStatus.toString()=="ticketClosed") {
     $(".progContainer").load("ticketClosed.php");
}

</script>
</div>
<!--- button forms that will either display caseHistory.php or ticket.php depending on what button is pushed --->
<div style="margin-left: 16px; margin-top: 30px;" id="buttonDiv">
    <button id="caseHistoryAction" type="button" class ="caseButton active">Case History</button>
    <button id="ticketHistoryAction" type="button" class = "caseButton">Ticket History</button>
</div>

<div id="textData" style="margin-top: 25px;">  
</div>

<div style="margin-top:35px; margin-bottom: 40px;">
    <button type="button" onclick="location.href='Begin.php'" class="anotherReport">Report Another Problem</button> 
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
    //jquery function that loads a page based on the button pushed
    $(document).ready(function (){
         $("#textData").load("caseHistory.php");
        $("#caseHistoryAction").click(function (e) {
            $("#textData").load("caseHistory.php");
        }); 
        $("#ticketHistoryAction").click(function (a) {
            $("#textData").load("ticketHistory.php");
        });

    });
var btnContainer = document.getElementById("buttonDiv");

var btns = btnContainer.getElementsByClassName("caseButton");

for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

</script>

</html>

