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
			  return '一';
			   break;
			case '02';
			  return '二';
			   break;
			case '03';
			   return '三';
			   break;
			case '04';
			  return '四';
			   break;
			case '05';
			  return '五';
			   break;
			case '06';
			   return '六';
			   break;
			case '07';
			  return '七';
			   break;
			case '08';
			  return '八';
			   break;
			case '09';
			   return '九';
			   break;
			case '10';
			  return '十';
			   break;
			case '11';
			  return '十一';
			   break;
			case '12';
			   return '十二';
			   break;
		}
	}
	
	function getDay($timeStr){		
		return date('d', strtotime($timeStr));
	}
	
	function getTime($timeStr){
		return date('H:i', strtotime($timeStr));
	}

?>