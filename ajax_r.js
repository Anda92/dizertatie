function allfunctions() {
    var formData = $('#testName').serialize();
  $.ajax({
    url:"calculate_age.php", //the page containing php script
    type: "POST", //request type
    data: formData,
    success:function(result){
     alert(result);
   }
 });
}