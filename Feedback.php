<!DOCTYPE html> 
<html>
<head>
	<link href="styles.css" rel="stylesheet" type="text/css">
    <link href="navbarFormat.css" rel="stylesheet" type="text/css">
    <link href="footerFormat.css" rel="stylesheet" type="text/css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

.outline{
margin-top: 102.5px;
width: 304px;
height: 404px;
border: 2px solid #C4C4C4;
border-radius: 12px;
padding: 20px 25px 25px 25px;
margin-left: auto;
margin-right: auto;
display: block;
}

.bluetext{
width: 224px;
height: 68px;
font-family: 'Fira Sans', sans-serif;
font-weight: 700;
font-size: 28px;
line-height: 34px;
color: #0075C9;
}

.blacktext{
width: 299px;
height: 57px;
font-family: 'Fira Sans', sans-serif;
font-weight: 400;
font-size: 16px;
line-height: 19px;
color: #000000
}

.submitbutton{
font-family: 'Fira Sans', sans-serif;
margin-top: 15px;
margin-left: 205px;
width: 46px;
height: 18px;
padding: 15px 24px 12px 24px;
background-color: #0075C9;
color: #FFFFFF;
border-radius: 6px;
align-items: center;
}

textarea {
margin-top: -20px;
font-family: 'Fira Sans', sans-serif;
font-size: 16px;
line-height: 19px;
width: 283px;
height: 105px;
margin-left: auto;
margin-right: auto;
display: block;
border-radius: 2px;
}

textarea::placeholder{
color: #BFBFBF;
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

<!--- PUT CONTENT HERE---> 

<!-- Box outline w/ X button that leads to the beginning -->
<div class = "outline">
<img onclick="window.location.href = 'Begin.php';" style="margin-left:285px" src = "Images/CloseButton.png">

<!-- Text -->
<div class = "bluetext" style="margin-top:20px">
Your feedback is important to us!
</div>

<div class = "blacktext" style="margin-top:10px">
We appreciate your time and effort. We want to learn how we can improve your experience.
</div>

<div class = "blacktext" style="margin-top:20px;font-weight:700;">
What would you like to share with us?
</div>

<!-- Text area w/ placeholder -->
<div>
<textarea placeholder="Enter text here..."></textarea>
</div>

<!-- Submit button. Currently does not submit feedback into the database -->
<div onclick="window.location.href = 'FeedbackSub.php';" class = "submitbutton">
Submit
</div>

</div>



</div>
</body>
</html>
