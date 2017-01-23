<!--footer-->

<div class="footer">

	<div class="container">

    	<div class="row">

        	<div class="col-sm-4">

            <br>

            	<img src="<?php echo base_url(); ?>img/logo.png"><br>

                <p class="paddingmam-cont">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>

            </div>

        	<div class="col-sm-2">

            	<h2>Quick Links</h2>
                <p><a href="<?php echo base_url(); ?>about">About Us</a></p>
                <p><a href="#">Contact Us</a></p>

            </div>

            <div class="col-sm-3">

            	<h2> Support</h2>

                <p><a href="<?php echo base_url(); ?>faq">FAQ</a></p>

                <p><a href="<?php echo base_url(); ?>terms-and-conditions">Terms &amp; conditions</a></p>

                <p><a href="<?php echo base_url(); ?>security">Security</a></p>

                <p><a href="<?php echo base_url(); ?>privacy-policy">Privacy Policy</a></p>

            </div>

            <div class="col-sm-3">

            	<h2>Contact Us</h2>

                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</p>

            </div>

        </div>

    </div>

</div>

<!--footer-->



<!--copy-->

<div class="copyright">

	<div class="container">

    	<div class="pull-left">

        	<p>&copy; Copyright 2016 Sports Swaps. All Rights Reserved.</p>

        </div>

        <div class="pull-right">

        	<a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>

        	<a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>

        	<a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>

        	<a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>

        </div>

    </div>

</div>
<script type="text/javascript">
		// Monthly 
		$('#deposit_funds').click(function(){ 
				var monthly_price = $("#deposit_amount_id").val();
				if(monthly_price == ''){
					alert('Please enter amount..!\n');
					return false;
				}
				var amount_new = Math.abs(monthly_price);
				var token = function(res){
				var $id = $('<input type=hidden name=stripeToken />').val(res.id);
				var $email = $('<input type=hidden name=stripeEmail />').val(res.email);
				var $monthly_price = $('<input type=hidden name=amt123 />').val(amount_new);
				
				$('form').append($id).append($email).append($monthly_price).submit();
          };

          StripeCheckout.open({
            key:         'pk_test_AKf0YjhbKN9MDXbFvzyyevW3',
            amount:      amount_new,
            name:        'Sports Swaps',
            image:       '<?php echo base_url(); ?>img/logos.png',
            description: 'Deposit Funds $'+amount_new,
            panelLabel:  'Pay',
            billingAddress:'true',
            token:       token
          });

          return false;	
		});
</script>

<script>
$('.alert').fadeOut(100000);
</script>

<!--copy-->

</body>

</html>

