<html>
<head>

</head>
	<body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
	function submitQuery(){

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
}



</script>
	</body>
	</html>