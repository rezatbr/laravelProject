<?php

    function parsinum($string)
    {
		$persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    	$num = range(0, 9);
   	 	$res = str_replace($num,$persian,$string);
   	    return $res;
	}

