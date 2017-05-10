<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of Stripegateway
 *
 * @author wahyu widodo
 */
 
include("./vendor/autoload.php"); 
 
class Stripegateway {
	
	public function __construct(){
		$stripe = array(
			"secret_key" => "sk_test_0OTfyBEhoz1O50kSTcwmv25U",
			"public_key" => "pk_test_0nPulUONVahoZwodvzFkTFLf"
		);
		\Stripe\Stripe::setApiKey($stripe["secret_key"]);
	}
	
	public function checkout($data){
		$message = "";
		try{
			$mycard = array('number' => $data['number'],
							'exp_month' => $data['exp_month'],
							'exp_year' => $data['exp_year']);
			$charge = \Stripe\Charge::create(array('card'=>$mycard,
													'amount'=>$data['amount'],
													'currency'=>'usd'));
			$message = $charge->status;											
		}catch (Exception $e){
			$message = $e->getMessage();
		}	
		return $message;
	}
	
}