<html>
    <body>
        <form method="post" action="https://sandbox.payhere.lk/pay/checkout" id="form-data">   
            <input type="hidden" name="merchant_id" value="1213021">    
            <input type="hidden" name="return_url" value="http://ecollege.lk/student/payment-success.php">
            <input type="hidden" name="cancel_url" value="http://ecollege.lk/student/payment-cancel.php">
            <input type="hidden" name="notify_url" value="http://ecollege.lk/student/notify.php">
            <br><br>Item Details<br>
            <input type="text" name="order_id"  value="30">
            <input type="text" name="items" value="Door bell wireless"><br>
            <input type="text" name="currency" value="LKR">
            <input type="text" name="recurrence" value="1 Month">
            
            <input type="text" name="duration" value="Forever">
            <input type="text" name="amount" value="1000">  
            <br><br>Customer Details<br>
            <input type="text" name="first_name" value="Saman">
            <input type="text" name="last_name" value="Perera"><br>
            <input type="text" name="email" value="samanp@gmail.com">
            <input type="text" name="phone" value="0771234567"><br>
            <input type="text" name="address" value="No.1, Galle Road">
            <input type="text" name="city" value="Colombo">
            <input type="hidden" name="country" value="Sri Lanka"><br><br> 
            <input type="hidden" name="student_id" value="1"> 
            <input type="hidden" name="class_id" value="1"> 
            <input type="hidden" name="date" value="2020/10/11"> 
            <input type="submit" value="Buy Now" id="pay">   
        </form> 
        <script src="js/jquery.min.js" type="text/javascript"></script> 
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/profile.min.js"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>
        <script src="js/jm.spinner.js" type="text/javascript"></script>

        <script src="ajax/js/payment.js" type="text/javascript"></script>
    </body>
</html>