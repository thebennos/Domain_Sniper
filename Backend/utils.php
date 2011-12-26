<?php function get_SSL_resource($request_url){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $request_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$resource = curl_exec($ch);
		if (curl_errno($ch)){
			echo("CURL ERROR: ".curl_error($ch));
		}
		curl_close($ch);
		return $resource;
	}
	function split_tokens($document){
		$tokens = explode(",", $document.",");
		return $tokens;
	}
?>
