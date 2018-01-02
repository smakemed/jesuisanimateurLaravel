<!DOCTYPE html>
<html>
<head>
	<title>Payment box</title>
</head>
<body>
<p></p>
<?php 
$amount_produ1 = 100;
$amount_produ2 = 200;
$amount_total = $amount_total.$amount_produ2;
 ?>
<form action="https://www.wecashup.cloud/cdn/tests/websites/PHP/callback_lucas.php" method="POST" id="wecashup">
        <script async src="https://www.Wecashup.com/MobileMoney.js" class="wecashup_button"
          data-demo
          data-button-lang="en"
          data-transaction-method="pull"
          data-marketplace-mode="false"
          data-receiver-uid="Ve7p5SGQ24N0qIOTPp6MkDA1rcx2"
          data-receiver-public-key="yedv4yLm0i05lV0Zh8XkdyiFhgNucqQSU93MYNhkFCSl"
          data-transaction-receiver-total-amount="<?php echo($amount_total); ?>"
          data-transaction-receiver-reference="smthng"
          data-transaction-sender-reference="smthng"
          data-sender-phonenumber="+237671234567"
          data-transaction-sender-firstname=""
          data-transaction-sender-lastname=""
 
          data-product-1-name="Citroën C3"
          data-product-1-quantity="1"
          data-product-1-unit-price="100" 
          data-product-1-reference="XVT2VBF"
          data-product-1-category="voitures"
          data-product-1-description="vroumvroum"

          data-product-1-name="Clio"
          data-product-1-quantity="1"
          data-product-1-unit-price="200" 
          data-product-1-reference="XVT2VF"
          data-product-1-category="voitures"
          data-product-1-description="vroum"

        >
        </script>
    </form>  
</body>
</html>