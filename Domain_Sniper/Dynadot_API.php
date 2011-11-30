<?php include 'utils.php'; 
	public class Dynadot_API{
		function _construct($api_key){
			$api_url = "https://www.api.dynadot.com/api2.html?key=$api_key".			"&command=";
		}
		$api_url;
		function isAvailable($domain_name){
			$request_url = $api_url."search&domain0=$domain_name";
			return parse_tokens(get_SSL_resource($request_url));
		{
		function renew($domain_name, $duration){
			$request_url = $api_url."renew&domain=$domain_name"."&duratio				n=$duration";
			return parse_tokens(get_SSL_resource($request_url));
		}
		function register($domain_name, $duration){
			$request_url = $api_url."register&domain=$domain_name"."&duratio			n=$duration";
			return parse_tokens(get_SSL_resource($request_url));
		}
	}
?>
