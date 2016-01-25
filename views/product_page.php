<?php include_once('header.php'); ?>

<div class="container">   
<div id="wrapper" class="text-center">

<?php echo form_open("product/charge_user", 'class="payment_test"'); ?>
	<p>Testy</p>
	<?php if (isset($message)) { ?>
	<CENTER><h3 style="color:green;">Payment Successful</h3></CENTER><br>
	<?php } ?>
	<?php if (isset($message)) { ?>
	<CENTER><h3 style="color:red;"><? $error ?></h3></CENTER><br>
	<?php } ?>
	
	 <div class="form-row">
	<label>$</label>
	<input type="text" name="amount" placeholder="0.00" required="required"/>
	</div>
	
	<div class="form-row">
	<label>Card Number</label>
	<input type="text" size="20" autocomplete="off" class="card-number" required="required"/>
	</div>
	
	<div class="form-row">
	<label>CVC</label>
	<input type="text" size="4" autocomplete="off" class="card-cvc" required="required"/>
	</div>
	
	<div class="form-row">
	<label>MM/YYYY</label>
	<input type="text" size="2" class="card-expiry-month" required="required"/>
	<span> / </span>
	<input type="text" size="4" class="card-expiry-year" required="required"/><br>
	</div>
	
	<div class="form-row">
	<label>Memo</label>
	<input type="text" name="desc" /><br>
	</div>
	<input type="submit" value="Buy" class="submit-button" />
<?php echo form_close(); ?>		

</div>
</div>
<script type="text/javascript">
	function stripeResponseHandler(status, response) {
		  var $form = $('.payment_test');

		  if (response.error) {
			// Show the errors on the form
			//$form.find('.payment-errors').text(response.error.message);
			//$form.find('button').prop('disabled', false);
			$('.submit-button').removeAttr("disabled");
		  } else {
			// response contains id and card, which contains additional card details
			var token = response.id;
			// Insert the token into the form so it gets submitted to the server
			$form.append($('<input type="hidden" name="stripeToken" />').val(token));
			// and submit
			$form.get(0).submit();
		  }
	};
	$(".payment_test").submit(function(e) {
		$('.submit-button').attr("disabled", "disabled");
		
		//create token
		Stripe.createToken({
			number: $('.card-number').val(),
			cvc: $('.card-cvc').val(),
			exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
            return false; //submit from call back
        });
</script>
<?php include_once('footer.php'); ?>