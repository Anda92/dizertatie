 <?php
 function allfunctions () {
      $.ajax({
        url:"myfunct.php", //the page containing php script
        type: "POST", //request type
        success:function(result){
         alert(result);
       }
     });
 }
 ?>