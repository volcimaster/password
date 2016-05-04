<?php date_default_timezone_set('UTC'); ?>
<?php /* Copyright 2016 Warren Myers (warren@warrenmyers.com).
         Published under the CC BY 4.0 (https://creativecommons.org/licenses/by/4.0/)
         license. You are free to share, adapt, and otherwise include or modify the
         code so long as attribution is given to the original author (Warren Myers).
         No warranties are given, granted, or implied.
      */

      /* expects .htaccess rewrite rule in the form of
            RewriteRule ^password/([^/]+)/([^/]+) password.php?size=$1&type=$2
      /**/

      /* call programmatically thusly:
            http://domain.tld/password/<length>/<type>
         where <type> is:
            alnum - default, lower alphanumeric
            ulnum - upper and lower alphanumeric
            4of4  - recommended (but sometimes incompatible) upper, lower, numeric, special character

         eg http://domain.tld/password/16/4of4
            http://domain.tld/password/10/ulnum

    /* minimum string length if nothing else is given /**/
    $len = 8;
    /* char string /**/
    $p = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n',
               'o','p','q','r','s','t','u','v','w','x','y','z','1','2',
               '3','4','5','6','7','8','9','0','A','B','C','D','E','F',
               'G','H','I','J','K','L','M','N','O','P','Q','R','S','T',
               'U','V','W','X','Y','Z','!','@','#','$','%','^','&amp;','*',
               '(',')','_','+','=','-','?');
    /* initialize random generator /**/
    $seed = intval(date("dmHs"));
    srand($seed);
    $kt = 0;
    $ndx = 0;

    $type = array(36,62,77);


    if(isset($_GET["size"])){
        $len = intval($_GET["size"]);
    }
    if($len<8){
        $len = 8;
    }
    if($len>64){
        $len=64;
    }

    if(isset($_GET["type"])){
      $tmp = $_GET["type"];
      $tmp = strtolower($tmp);
      if(strpos($tmp, 'u') !== false){
        $ndx = 1;
      }
      if(strpos($tmp, '4') !== false){
        $ndx = 2;
      }
    }

while($len>0){
  $len--;
  echo $p[rand(1,$seed) % $type[$ndx]];
 }
?>
