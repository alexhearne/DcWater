
<!DOCTYPE html> 
<html>
<head>
	<link href="styles.css" rel="stylesheet" type="text/css">
    <link href="navbarFormat.css" rel="stylesheet" type="text/css">
    <link href="footerFormat.css" rel="stylesheet" type="text/css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<p id = "step">Notifications (Optional)</p>
</div>


<hr align="left">

<div style="margin-top: 20px;" >
    <span class = "bold">Contact Information</span>
</div>

<div style="margin-top:5px;">
    <span class = "smallText">If you consent, DC Water will only be allowed to contact you about the content of this ticket.</span>
</div>

<div style="margin-top:20px;">
    <span class = "regText">I would like to receive updates about this ticket</span>
</div>

<div style="margin-top:22.5px; margin-left: 16px;">
<!--- first checkbox form that asks the user if they would like to recieve updates about the ticket    --->
   <form>
  <div class="checkboxes">
    <label><input type="checkbox" id="checkboxPhoneOne"> <span>Phone Call</span></label>
    <label><input type="checkbox" id="checkboxEmailOne"> <span>Email</span></label>
  </div>
</form>
</div>
<script type="text/javascript">
    //javascript function that resonds to the checkboxes and saves it into a session variable
    $(document).ready(function () {
        var moreInfo = " "; 
     $('#checkboxPhoneOne').change(function () {
            if (this.checked){
                moreInfo +=" Phone "
                sessionStorage.setItem('moreInfo',moreInfo);
                
            }else{
                moreInfo = moreInfo.replaceAll('Phone', '');
                sessionStorage.setItem('moreInfo',moreInfo);

            }
        });
      $('#checkboxEmailOne').change(function () {
            if (this.checked){
                moreInfo +=" Email "
                sessionStorage.setItem('moreInfo',moreInfo);
                
            }else{
                moreInfo = contactQuestion.replaceAll('Email', '');
                sessionStorage.setItem('moreInfo',moreInfo);

            }
        });
  });
    </script>

<hr align="left" style="color:#E8E8E8; background-color: #E8E8E8; margin-top: 20px;">

<div style="margin-top:20px;">
    <span class = "regText">DC Water can contact me with questions about this ticket</span>
</div>
<!--- checkbox form that asks the user if they want DC water to contact them --->
<div style="margin-top:22.5px; margin-left: 16px;">
   <form>
  <div class="checkboxes">
    <label><input type="checkbox"id="checkboxPhoneTwo" > <span>Phone Call</span></label>
    <label><input type="checkbox"id="checkBoxEmailTwo"> <span>Email</span></label>
  </div>
</form>
</div>
<script type="text/javascript">
//function that records the users checkbox response and adds it to a session variable
    $(document).ready(function () {
        var contactQuestion = " "; 
     $('#checkboxPhoneTwo').change(function () {
            if (this.checked){
                contactQuestion +=" Phone "
                sessionStorage.setItem('contactQuestion',contactQuestion);
                
            }else{
                contactQuestion = contactQuestion.replaceAll('Phone', '');
                sessionStorage.setItem('contactQuestion',contactQuestion);

            }
        });
      $('#checkboxEmailTwo').change(function () {
            if (this.checked){
                contactQuestion +=" Email "
                sessionStorage.setItem('contactQuestion',contactQuestion);
                
            }else{
                contactQuestion = contactQuestion.replaceAll('Email', '');
                sessionStorage.setItem('contactQuestion',contactQuestion);

            }
        });
  });
    </script>
<!--- Name text box ---> 
<div style="margin-top:20px; margin-left: 16px;">
    <form name="nameText" method="post">
<label for="fname" class="boxLabel">Full Name</label>
<input type="text" id="fname" onchange="writeName()" name="fname" class="tBox" placeholder="Ex: John Doe">   
</form>

</div>

<!--- Email text box --->
<div style="margin-top:20px; margin-left: 16px;">
  <form name="emailText" method="post">   
<label for="fname" class="boxLabel">Email</label>
<input type="text" id="email" name="email" class="tBox" onchange="writeEmail()"  placeholder="Ex: jDoe@gmail.com">   
</form>

</div>
<!--- Phone Number Text Box --->
<div style="margin-top:20px; margin-left: 16px; margin-bottom: 100px;">
 <form name="phoneText" method="post"> 
<label for="fname" class="boxLabel">Phone Number</label>
<input type="text" id="phoneNum" name="phoneNum" class="tBox" onchange="writePhone()" placeholder="Ex: 123-456-7890 ">   
</form>
</div>
<script type="text/javascript">
//javascript function that records the users response for name and saves it to a session variable called firstName
   function writeName(){
    var fname = document.forms["nameText"]["fname"].value;
    sessionStorage.setItem('firstName',fname);
    
}
//javascript function that records the users response for the email and saves it to a session variable called email
 function writeEmail(){
    var email= document.forms["emailText"]["email"].value;
    sessionStorage.setItem('email',email);

}
//javascript function that records the users response for the phone number text box and saves it to a session variable called phone
 function writePhone(){
    var phoneNumber= document.forms["phoneText"]["phoneNum"].value;
    sessionStorage.setItem('phone',phoneNumber);

}

</script>




<div class="bottomNav">

<button onclick="#" type="button" id="prevButton2" class="prevButton"><span class="prevButtonText"><img src="Images/PrevArrow.png" class ="prevArrow">Back</span></button>
<button onclick="location.href='Review1.php'" type="button" class="nextButton"><span class="nextButtonText">Next<img src="Images/nextArrow.png" class="nextArrow"></span></button>

</div>
<script type="text/javascript">
//pageDecide is called when the page is loaded

//function that decides what page the previous button sends the user based off of previous session variables
 $(document).ready(function () {

let inOut = sessionStorage.getItem('problemType'); 
if(inOut.toString()=="Other"){

    document.getElementById("prevButton2").setAttribute("onclick","location.href='unsure.php'"); 
}else{
     document.getElementById("prevButton2").setAttribute("onclick","location.href='additionalDetails.php'"); 
}


});
</script>
</body>
</html>

