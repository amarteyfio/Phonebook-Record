<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://js.paystack.co/v1/inline.js"></script> 
    <title>Document</title>
</head>
<body>
    <h1>Payment Form</h1>
    <form id="payform">
    <input type="text" placeholder="Email" id="email" name = "e_mail">
    <br>
    <br>
    <input type="text" placeholder="Amount(Ghs)" id="amt" name = "amount">
    <br>
    <br>
    <button type="submit" id="confirm" onclick="payWithPaystack()">Pay</button>
    </form>
</body>

<script>
const paymentForm = document.getElementById('payform');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_110ba43e9a482172973111eb66e68e2306265c16', // Replace with your public key
    email: document.getElementById("email").value,
    amount: document.getElementById("amt").value * 100,
    currency: 'GHS',
    //ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
    },
    callback: function(response){
  $.ajax({
    url: 'http://www.phonebook-records.herokuapp.com/PayStack/verify.php'+ response.reference,
    method: 'get',
    success: function (response) {
      // the transaction status is in response.data.status
    }
  });
}
});

  handler.openIframe();
}


</script>
</html>