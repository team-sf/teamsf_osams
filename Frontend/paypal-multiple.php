<form name="_xclick" action="https://www.sandbox.paypal.com/webscr" method="post">
	<input type="hidden" name="cmd" value="_cart">
	<input type="hidden" name="upload" value="1">
	<input type="hidden" name="business" value="m4kz.baguio.24@gmail.com">
	<input type="hidden" name="currency_code" value="PHP">
	
	<input type="hidden" name="item_name_1" value="Reservation1">
	<input type="hidden" name="amount_1" value="500">
	<input type="hidden" name="quantity_1" value="2">
	
	<input type="hidden" name="return" value="http://localhost/samplepaypal/success.php">
	<input type="hidden" name="cancel_return" value="http://localhost/samplepaypal/paypal.php">
	<input type="image" src="http://www.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
</form>