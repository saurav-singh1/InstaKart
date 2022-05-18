<?php
session_start();
if (isset($_post['order_pay_btn'])) {

    $order_status = $_POST['order_status'];
    $order_total_price = $_POST['order_total_price'];
}


?>








<?php include('layout/headers.php') ?>


<!-- Payment -->
<section class="my-5 py-5">
    <div class="container text-center mt-3 pt-5">
        <h2 class="form-weight-bold">Payment</h2>
        <hr class="mx-auto">
    </div>
    <div class="mx-auto container text-center">

        <?php if (isset($_SESSION['total']) && $_SESSION['total'] != 0) { ?>
            <p>Total payment: Rs.<?php echo $_SESSION['total']; ?></p>
            <input type="submit" class="btn btn-primary" value="Pay Now">

        <?php } else if (isset($_POST['order_status']) && $_POST['order_status'] == "not paid") { ?>
            <p>Total Payment: Rs. <?php echo $_POST['order_total_price']; ?> </p>
            <input type="submit" class="btn btn-primary" value="Pay Now">
        <?php } else {     ?>
            <p>You don't have an Order</p>
        <?php } ?>







        <!-- paypal btn -->
        <!-- Set up a container element for the button -->
<div id="paypal-button-container"></div>

    </div>




</section>






<!-- Replace "test" with your own sandbox Business account app client ID -->
<script src="https://www.paypal.com/sdk/js?client-id=AZKzUke_imykQfdUT5kNh0pKNAynD6Z3PTBQAwBblCovUeqjEyviz4D5RBch3NPoH8onDo5x5lTsX2ub&currency=USD"></script>

<script>
    paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '77.44' // Can also reference a variable or function
                    }
                }]
            });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
            return actions.order.capture().then(function(orderData) {
                // Successful capture! For dev/demo purposes:
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                const transaction = orderData.purchase_units[0].payments.captures[0];
                alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
                // When ready to go live, remove the alert and show a success message within this page. For example:
                // const element = document.getElementById('paypal-button-container');
                // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                // Or go to another URL:  actions.redirect('thank_you.html');
            });
        }
    }).render('#paypal-button-container');
</script>














<?php include('layout/footer.php') ?>