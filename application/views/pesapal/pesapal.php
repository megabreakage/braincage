<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<?php

		require_once(APPPATH.'third_party/pesapal/OAuth.php');


		//pesapal params
		$token = $params = NULL;

		/*
		PesaPal Sandbox is at http://demo.pesapal.com. Use this to test your developement and
		when you are ready to go live change to https://www.pesapal.com.
		*/
		$consumer_key = 'y1THNvCzq6izrRNnFAvuXQuZRVD8zuJp';//Register a merchant account on
		                   //demo.pesapal.com and use the merchant key for testing.
		                   //When you are ready to go live make sure you change the key to the live account
		                   //registered on www.pesapal.com!
		$consumer_secret = '6jtsAmfGeEdx/pmGFhpuGTjM/Fs=';// Use the secret from your test
		                   //account on demo.pesapal.com. When you are ready to go live make sure you
		                   //change the secret to the live account registered on www.pesapal.com!
		$signature_method = new OAuthSignatureMethod_HMAC_SHA1();
		$iframelink = 'https://www.pesapal.com/API/PostPesapalDirectOrderV4';//change to
		                   //https://www.pesapal.com/API/PostPesapalDirectOrderV4 when you are ready to go live!

		//get form details
		// $amount = $_POST['cost'];
		// $amount = number_format($amount, 2);//format amount to 2 decimal places

		// $desc = $_POST['desc'];
		// $type = "MERCHANT"; //default value = MERCHANT
		// $reference = $_POST['reference'];//unique order id of the transaction, generated by merchant
		// $first_name = $_POST['first_name'];
		// $last_name = $_POST['last_name'];
		// $email = $_POST['email'];
		// $phonenumber = $_POST['phone'];//ONE of email or phonenumber is required


		$amount = 500;
		$amount = number_format($amount, 2);//format amount to 2 decimal places

		$desc = "Sample desc";
		$type = "MERCHANT"; //default value = MERCHANT
		$reference = "Sample reference";//unique order id of the transaction, generated by merchant
		$first_name = "Martin";
		$last_name = "Njuguna";
		$email = "martin.njau@live.com";
		$phonenumber = "0727905402";//ONE of email or phonenumber is required

		$callback_url = 'http://www.braincage.or.ke/auth/login'; //redirect url, the page that will handle the response from pesapal.

		$post_xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?><PesapalDirectOrderInfo xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" Amount=\"".$amount."\" Description=\"".$desc."\" Type=\"".$type."\" Reference=\"".$reference."\" FirstName=\"".$first_name."\" LastName=\"".$last_name."\" Email=\"".$email."\" PhoneNumber=\"".$phonenumber."\" xmlns=\"http://www.pesapal.com\" />";
		$post_xml = htmlentities($post_xml);

		$consumer = new OAuthConsumer($consumer_key, $consumer_secret);

		//post transaction to pesapal
		$iframe_src = OAuthRequest::from_consumer_and_token($consumer, $token, "GET", $iframelink, $params);
		$iframe_src->set_parameter("oauth_callback", $callback_url);
		$iframe_src->set_parameter("pesapal_request_data", $post_xml);
		$iframe_src->sign_request($signature_method, $consumer, $token);

		//display pesapal - iframe and pass iframe_src
		?>
		<iframe src="<?php echo $iframe_src;?>" width="100%" height="700px"  scrolling="no" frameBorder="0">
			<p>Browser unable to load iFrame</p>
		</iframe>
	</div>
</div>
