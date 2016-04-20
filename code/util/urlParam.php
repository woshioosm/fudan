<?php
    function getParam($url){
			
		$urlArr =parse_url($url); 	
	
        $paramStr;
		if(!isset( $urlArr["query"])){
			return null;
		}else{
			$paramStr = $urlArr["query"];
		}
		$paramArray = explode('&',$paramStr);		
		$paramMap = array();
		foreach($paramArray as $param){
			$paramEach = explode('=',$param);
			$paramMap[$paramEach[0]]=$paramEach[1];				
		}	
		return $paramMap;
	}

?>