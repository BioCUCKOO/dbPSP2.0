<?php

///////////////////////////////////////////////////////////////////

/* Web Counter */

///////////////////////////////////////////////////////////////////



function count_web($max_count) {
	
		$file_handle=fopen("webcount.txt","r");
        $blog_count=fgets($file_handle);
        fclose($file_handle);
        $numeric_count=intval($blog_count); //总访问量
           
    //if ($_COOKIE["IP_COOKIES"] != 1) {//check cookie
	//if ($_COOKIE["IP_COOKIES"] != 1) {//check cookie
	if (! isset($_COOKIE["IP_COOKIES"])) {//check cookie
        setcookie("IP_COOKIES", 1,time()+86400); //set cookie 
        
        $numeric_count++;  
	
		$file_handle2=fopen("webcount.txt","w");
        fwrite($file_handle2,$numeric_count+"\n");
        fclose($file_handle2);
    }
      
    $str_count = $blog_count;
    $file_size = strlen($str_count);
    if ($file_size <= $max_count) {
        for ($i = 0; $i < $max_count - $file_size; $i++) {
            echo "<img src='images/0.gif' width='15' height='20' />";
        }
        for ($j = 0; $j < $file_size; $j++) {
            $static_number[$j] = substr($str_count, $j, 1);
        }
        for ($h = 0; $h < $file_size; $h++) {
            switch ($static_number[$h]) {
                case 0:
                    echo "<img src='images/0.gif' width='15' height='20' />";
                    break;
                case 1:
                    echo "<img src='images/1.gif' width='15' height='20' />";
                    break;
                case 2:
                    echo "<img src='images/2.gif' width='15' height='20' />";
                    break;
                case 3:
                    echo "<img src='images/3.gif' width='15' height='20' />";
                    break;
                case 4:
                    echo "<img src='images/4.gif' width='15' height='20' />";
                    break;
                case 5:
                    echo "<img src='images/5.gif' width='15' height='20' />";
                    break;
                case 6:
                    echo "<img src='images/6.gif' width='15' height='20' />";
                    break;
                case 7:
                    echo "<img src='images/7.gif' width='15' height='20' />";
                    break;
                case 8:
                    echo "<img src='images/8.gif' width='15' height='20' />";
                    break;
                case 9:
                    echo "<img src='images/9.gif' width='15' height='20' />";
                    break;
            }
        }
    }
}



count_web(7);
?>