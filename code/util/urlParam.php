<?php
    function getParam($url){
			
		$tt =parse_url($url); 	
	
        $paramStr;
		if(!isset( $tt["query"])){
			return null;
		}else{
			$paramStr = $tt["query"];
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