<!DOCTYPE html> 
<html>
<head>
    <link href="styles.css" rel="stylesheet" type="text/css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
         <!--- tag section this form displays each individual tag as a grey box with a plus sign. When checked, the css makes it change to a blue box with a checkmark  --->     
     <ul class="ks-cboxtags">
        <li><input type="checkbox" name ="location[]" id="checkboxOne" value="Basement"><label for="checkboxOne">Basement</label></li>
        <li><input type="checkbox" name ="location[]" id="checkboxTwo" value="Bathroom"><label for="checkboxTwo">Bathroom</label></li>
        <li><input type="checkbox" name ="location[]" id="checkboxThree" value="Kitchen"><label for="checkboxThree">Kitchen</label></li>
        <li><input type="checkbox" name ="location[]" id="checkboxFour" value="Sewage Pipe"><label for="checkboxFour">Sewage Pipe</label></li>
        <li><input type="checkbox" name ="location[]" id="checkboxFive" value="Burst Pipe"><label for="checkboxFive">Burst Pipe</label></li>
        <li><input type="checkbox" name ="location[]" id="checkboxSix" value="Rain"><label for="checkboxSix">Rain</label></li>
    </ul>
    <script type="text/javascript">
              //javascript function that starts automatically when the page is loaded  
    $(document).ready(function () {
var details = " ";
      //if a checkbox is checked, the value of the checkbox is appeneded to details.If the checkbox is unchecked, then it will be removed from details 
        $('#checkboxOne').change(function () {
            if (this.checked){
                details += $('#checkboxOne').val() + " ";
                sessionStorage.setItem('details',details);
                
            }else{
                details = details.replaceAll($('#checkboxOne').val(), '');
                sessionStorage.setItem('details',details);
            }
        });
        $('#checkboxTwo').change(function () {
            if (this.checked){
                details += $('#checkboxTwo').val()  + " ";
                sessionStorage.setItem('details',details);

            }else{
                details = details.replaceAll($('#checkboxTwo').val(), '');
                sessionStorage.setItem('details',details);
            }
        });

         $('#checkboxThree').change(function () {
            if (this.checked){
                details += $('#checkboxThree').val() + " ";
                sessionStorage.setItem('details',details);
            }else{
                details = details.replaceAll($('#checkboxThree').val(), '');
                 sessionStorage.setItem('details',details);
            }
        });
          $('#checkboxFour').change(function () {
            if (this.checked){
                details += $('#checkboxFour').val()  + " ";
                 sessionStorage.setItem('details',details);
            }else{
                details = details.replaceAll($('#checkboxFour').val(), '');
                 sessionStorage.setItem('details',details);
            }
        });
          $('#checkboxFive').change(function () {
            if (this.checked){
                details += $('#checkboxFive').val()  + " ";
                 sessionStorage.setItem('details',details);
            }else{
                details = details.replaceAll($('#checkboxFive').val(), '');
                 sessionStorage.setItem('details',details);
            }
        });
          $('#checkboxSix').change(function () {
            if (this.checked){
                details += $('#checkboxSix').val() + " ";
                 sessionStorage.setItem('details',details);
            }else{
                details = details.replaceAll($('#checkboxSix').val(), '');
                sessionStorage.setItem('details',details);

            }
        });
 

    });      




    </script>
</body>
</html>