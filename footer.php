

 <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/js/metisMenu/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/sb-admin-2.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>

<script>   
                $(document).ready(function(){
            $('.table').DataTable();
			
			
						$("#custphone").keypress(function (e) {
						 //if the letter is not digit then display error and don't type anything
						 if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
							//display error message
							$("#errmsg").html("Digits Only").show().fadeOut("slow");
								   return false;
						}
					   });

					   $("#zipcode").keypress(function (e) {
						 //if the letter is not digit then display error and don't type anything
						 if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
							//display error message
							$("#errmsg").html("Digits Only").show().fadeOut("slow");
								   return false;
						}
					   });
					   
					   $("#email").on('change',function(){
							 var email = $("#email").val();
							 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
							 if (!filter.test(email)) {
							   //alert('Please provide a valid email address');
							   
							   alert(email+" is not a valid email");
							   email.focus;
							   //return false;
							} 
						 });

						 $("#phone").on('change',function(){
							 var email = $("#phone").val();
							 if (email.length<10) {
							   //alert('Please provide a valid email address');
							   email.focus;
							   $("#phone").val("");
							   alert("Enter valid phone");
							   //return false;
							} 
						 });
					   
					
						$("#phone").keypress(function (e) {
						 //if the letter is not digit then display error and don't type anything
						 if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
							//display error message
							alert("Digits Only");
								   return false;
						}
					   });
					
					
					
						$("#bmphone").keypress(function (e) {
						 //if the letter is not digit then display error and don't type anything
						 if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
							//display error message
							$("#errmsg").html("Digits Only").show().fadeOut("slow");
								   return false;
						}
					   });
					   
					   
						$("#empphone").keypress(function (e) {
						 //if the letter is not digit then display error and don't type anything
						 if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
							//display error message
							$("#errmsg").html("Digits Only").show().fadeOut("slow");
								   return false;
						}
					   });
					   
					   
						$("#branchphone").keypress(function (e) {
						 //if the letter is not digit then display error and don't type anything
						 if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
							//display error message
							$("#errmsg").html("Digits Only").show().fadeOut("slow");
								   return false;
						}
					   });
					   
					   
					   
			var orders = [];
			var result="";
					  
	$('#addOrder').click(function(){
			var oID=$('#ddlOrder').val();
			if(oID=="0")
			{
				alert("Please select Order");
			}else{
				 for(var i=0; i<orders.length; i++){
					var name = orders[i];
					if(name == $('#ddlOrder').val()){
						alert("exist");
						return;
					}
				  }
				orders.push($('#ddlOrder').val());
				 result=orders.join(',');
				$('#divOrderNo').text("Your Added Docket No are "+result);
				$('#txtOrders').val(result);
			}
		
	});




$('#ordersNo').change(function() {    
    var item=$(this);
  //  alert(item.val())
  
  
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
				   // Typical action to be performed when the document is ready:
				   //alert(xhttp.responseText);
				    $("#detailOrder").empty();
				   $("#detailOrder").append(xhttp.responseText);
				   
				   
				}
			};
			xhttp.open("GET", "consignment_order.php?order_id="+item.val(), true);
			xhttp.send();
  
 
});
	
	  
	  });
					
            </script>
</div>
</body>
</html>