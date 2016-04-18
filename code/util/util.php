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
	function getMonth($timeStr){		
		switch( date('m', strtotime($timeStr))){
			case '01';
			  return '二';
			   break;
			case '04';
			   return '四';
			   break;
		}
	}
	
	function getDay($timeStr){		
		return date('d', strtotime($timeStr));
	}
	
	function getTime($timeStr){
		return date('h:i', strtotime($timeStr));
	}

?>