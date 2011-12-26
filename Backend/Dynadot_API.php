<?php include 'utils.php'; 
	class Dynadot_API{
		function __construct($api_key){
			$this->api_url = "https://api.dynadot.com/api2.html?key=$api_key"."&command=";
		}
		private $api_url;
		function isAvailable($domain_name){
			$request_url = $this->api_url."search&domain0=$domain_name";
			if(strpos(get_SSL_resource($request_url), "yes")){
				return true;
			}
			else{
				return false;
			}
		}
		function renew($domain_name, $duration){
			$request_url = $this->api_url."renew&domain=$domain_name"."&duratio	n=$duration";
			return split_tokens(get_SSL_resource($request_url));
		}
		function register($domain_name, $duration){
			$request_url = $this->api_url."register&domain=$domain_name"."&duration=$duration";
			$response = get_SSL_resource($request_url);
			if(strpos($response, "success")){
				return true;
			}
			elseif(strpos($response, "not_available")){
				return "The domain is not available. Someone probably beat you to it.";
			}
			elseif(strpos($response, "insufficient_funds")){
				return "Not enough money in the account.";
			}
			elseif(strpos($response, "system_busy")){
				return "Dynadot's system is busy at the moment, try again later.";
			}
			elseif(strpos($response, "over_quota")){
				return "You're over your quota for the day";
			}
		}
	}
?>
