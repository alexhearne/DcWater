<!DOCTYPE html> 
<html>
<head>
	<link href="styles.css" rel="stylesheet" type="text/css">
    <link href="navbarFormat.css" rel="stylesheet" type="text/css">
    <link href="footerFormat.css" rel="stylesheet" type="text/css" >
    <link href="progressBarFormat.css" rel="stylesheet" type ="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
      <link href="starFormat.css" rel="stylesheet" type ="text/css">
</head>
<style type="text/css">
    .resolveText{
        font-family: 'Fira Sans',sans-serif;
        font-style: normal;
        font-weight: 700;
        font-size: 24px;
        line-height: 120%;

    }
    .resolvesmallText{
font-family: 'Fira Sans',sans-serif;
font-style: normal;
font-weight: 700;
font-size: 14px;
line-height: 120%;
    }

.feedbackButton{

width: 140px;
height: 45px;
background-color: #0075C9;
border-radius: 6px;
color: white;
font-size: 14px;
font-family: 'Fira Sans',sans-serif;


}


</style>
<body>
	<div style="margin-top:18px; margin-left:16px;" class="grid-container">

<!--- SECTION WILL BE FINISHED WHEN THE DATABASE IS READY  --->
    <div class="field">
    <div class="progBar activeBar" ></div>
    <div class="progLabel ">Ticket Opened</div>
    </div>

    <div class="field">
    <div class="progBar activeBar "></div>
    <div class="progLabel" >Under Review</div>
    </div>


    <div class="field">
    <div  class="progBar activeBar"></div>
    <div class="progLabel">Repair in progress</div>
    </div>

    <div class="field">
    <div class="progBar activeBar"></div>
    <div class="progLabel activeLabel">Ticket Closed</div>
    </div>
</div>

<div style="margin-top: 46px; text-align: center;">
<span class="resolveText">Your case has been resolved</span>  
</div>

<div style="margin-top: 15px; text-align: center;">
<span class="resolvesmallText">Rate your experiance</span>  
</div>
<!--- the five star rating div, asks the user to print between 1-5 stars --->
<div style="margin-top: 15px; text-align: center;" class="fiveStars">
      <input type="radio" name="rating1" id="rating1">
      <label for="rating1" class="fa fa-star"></label>
      <input type="radio" name="rating1" id="rating2">
      <label for="rating2" class="fa fa-star"></label>
      <input type="radio" name="rating1" id="rating3">
      <label for="rating3" class="fa fa-star"></label>
      <input type="radio" name="rating1" id="rating4">
      <label for="rating4" class="fa fa-star"></label>
      <input type="radio" name="rating1" id="rating5">
      <label for="rating5" class="fa fa-star"></label>
</div>

<!--- leave feedback button --->
<div style="margin-top: 20px; text-align: center;">
<button onclick="location.href='Feedback.php'" class="feedbackButton">Leave Feedback</button>
</div>
</body>
</html>