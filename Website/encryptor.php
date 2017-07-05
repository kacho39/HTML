<?php
echo "\n";
$e = new Encrypt;
echo "code: ";
for ($i = 0; $i < 26; $i++) {
    echo $e->cArray[$i];
}
echo "\n";
echo "input : There is no spoon.\n";
echo "output: ".$e->toEncode("There is no spoon.");
echo "\n\n";
 
class Encrypt {
    public $cArray = Array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
    public $oArray = Array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
 
    function __construct() {
        shuffle($this->cArray);
    }

    function toEncode($s) {
	    $r = Array();	//	empty array to store encoded one
	    $pattern = "/[a-z]/";	//	regular one
	    for ($i = 0; $i < strlen($s); $i++) {	//	i = position of char in $r
	        if (preg_match($pattern, $s[$i])) {		//	check the regular order of the char
	        //	preg_match: check whether the second one match with the first one
	            for ($j = 0; $j < 26; $j++) {   
	                if ($s[$i] == $this->oArray[$j]) {
	                    array_push($r, $this->cArray[$j]);
	                    break;
	                }
	            }
	        }            
	        else {
	            array_push($r, $s[$i]);
	        }
	    }
	         
	    return join($r); 
	}

	public function toDecode($s) {
        $r = Array();
        $pattern = "/[a-z]/";
         
        for ($i = 0; $i < strlen($s); $i++) {
            if (preg_match($pattern, $s[$i])) {
                for ($j = 0; $j < 26; $j++) {   
                    if ($s[$i] == $this->cArray[$j]) {
                        array_push($r, $this->oArray[$j]);
                        break;
                    }
                }
            }            
            else {
                array_push($r, $s[$i]);
            }
        }
         
        return join($r);
    }
}

/* 《程式語言教學誌》的範例程式
    http://pydoing.blogspot.com/
    檔名：encryptor.php
    功能：示範 PHP 程式 
    作者：張凱慶
    時間：西元 2012 年 11 月 */
?>