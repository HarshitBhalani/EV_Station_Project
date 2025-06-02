<?php

include 'header.php';
?>
<!--container.//-->
<input type="hidden" id="amount" value=<?php echo $_GET['amount']; ?> />
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

  $(document).ready(function(e){
    var totalAmount = $('#amount').val();
    var options = {
    "key": "rzp_test_QpAzPF7PIjmq1y",
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "E-Fuel Station System",
    "description": "Payment for Vehicle Charging",
    "image": "",
    "handler": function (response){
              alert("PAYMENT SUCCESSFULLY");
               window.location.href = 'http://localhost:8012/efuel/complete.php';
     
    },

    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });

</script>
<?php include 'footer.php'; ?>