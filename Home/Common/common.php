<?php 
	function p($arr) {
		dump($arr, 1, '<pre>', 0);
	}

	/**
 	 * 指定位置插入字符串
 	 * @param $str  原字符串
 	 * @param $i    插入位置
 	 * @param $substr 插入字符串
 	 * @return string 处理后的字符串
 	 */
	function insertToStr($str, $i, $substr){
    	//指定插入位置前的字符串
    	$startstr="";
    	for($j=0; $j<$i; $j++){
	        $startstr .= $str[$j];
    	}
     
    	//指定插入位置后的字符串
    	$laststr="";
    	for ($j=$i; $j<strlen($str); $j++){
	        $laststr .= $str[$j];
    	}
     
    	//将插入位置前，要插入的，插入位置后三个字符串拼接起来
    	$str = $startstr . $substr . $laststr;
     
	    //返回结果
	    return $str;
	}
	function bootstrap_page_style($page_html) {
		if ($page_html) {
			$page_show = "<nav><ul class='pagination'>".$page_html."</ul></nav>";
        	$page_show = str_replace("<span class='current'>","<li class='active'><a>",$page_show);
        	$page_show = str_replace('</span>','</a></li>',$page_show);

        	// $page_show = insertToStr($page_show, strpos($page_show, "<a href"), "<li>");

       		$page_show = str_replace("<a ", '<li><a ',$page_show);
       		$page_show = str_replace('</a>','</a></li>',$page_show);
       		$page_show = str_replace('</li></li>','</li>',$page_show);
		}
		return $page_show;
	}
?>