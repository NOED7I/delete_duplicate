<?php
/*
Coded by ./NOED7I
Date :  2019-05-04
yaa maklumi aja kalo banyak kekurangan karna w lamer :)
*/
$banner = "
			  ▂▄▅███▅▄▃▂
                         ;███████████
                        :████████████;
                        |████,---.████/
                       :███,'     `████\
                       ;███( \033[1;31m  █ \033[1;00m   \'`'.
                     _:████.      ,' \033[1;31m █\033[1;00m ;
                    /██████`.__,'`-.__,'
                    \████████ _████\
                   ,'█████████████'
             ___,████████████████;
          __;███████████/ `██████
       ,-'████████▅,\██      █████
       \033[1;32m[?] \033[1;36mCODED BY ./NOED7I \033[1;32m[?]\033[1;00m";
       
echo " $banner \n\n [+] MASUKAN LISH MU : ";
$file = trim(fgets(STDIN));
$memek = file_get_contents($file);
echo "\n\n[+] RESULT [+]\n";
echo $file;
$sh = explode("\n",$memek);
$cokDouble = array_unique($sh);
foreach($cokDouble as $email){
if($email == '') continue;
print " \033[1;36m |   \033[1;32m    [ + ] \033[1;31m ==>  \033[1;00m".$email."\n";
		$file = "Result.txt";
			  touch($file);
			  $o = fopen($file, 'a');
			  fwrite($o, $email."\n");
			  fclose($o);
			  }
			  echo "\033[1;31mhasil di folder Result.txt\n \033[1;00m"
?>