<?php

    define('HTTP_CATALOG', 'https://anshey.com.ua/');
    
    function init_key($key){
		
		$domen = explode("//", HTTP_CATALOG);
    
		$f = false;
    
		$a=0; 
    
		if(isset($key) && !empty($key)){ 
			
			$key_array = explode("327450", base64_decode(strrev(substr($key,0,-7))));
							
			if($key_array[0] == base64_encode(str_replace("/", "", $domen[1])) && $key_array[1] == base64_encode(3274507473+100)){
				$a= 1;
			}
		}

        return $f=str_replace($key,str_replace("/", "", $domen[1]),$a);
    }

// $arr[0] = "YW5zaGV5LmNvbS51YQ==";
// $arr[1] = "MzI3NDUwNzU3Mw==";

// $res = implode("327450", $arr);
// $res = base64_encode($res);
// $res = strrev($res);
// $res = $res. "NDUwNzU";


// var_dump($res);

// exit;

echo init_key("90zdNNTV650dVRkTzkkeNBTN0cjMz0TPRlVM1MlY25UbMVjVHFme1cVWNDUwNzU"); 
