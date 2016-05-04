<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="/main.css" media="screen">
   <title>Password Generator</title>
</head>
<body>

<?php date_default_timezone_set('UTC'); ?>
<?php /* Copyright 2016 Warren Myers (warren@warrenmyers.com). 
         Published under the CC BY 4.0 (https://creativecommons.org/licenses/by/4.0/)
         license. You are free to share, adapt, and otherwise include or modify the
         code so long as attribution is given to the original author (Warren Myers).
         No warranties are given, granted, or implied.
      */ ?>

<div id="header">
<h1><a href="/"></a>Password Generator</a></h1>
</div>

<div id="page">

<div id="intro">
   <p>Every time this page loads, you will see several random string triplets ranging from 12-24 characters, one each of three different varieties (<a href="//stackoverflow.com/q/5950756/4418">"4 of 4"</a>, "upper &amp; lower alphanumeric", and "lower alphanumeric").
</div>

<div id=codice>
<h1>12 Characters</h1>
<?php
  $p = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n',
		'o','p','q','r','s','t','u','v','w','x','y','z','1','2',
		'3','4','5','6','7','8','9','0','A','B','C','D','E','F',
		'G','H','I','J','K','L','M','N','O','P','Q','R','S','T',
		'U','V','W','X','Y','Z','!','@','#','$','%','^','&amp;','*',
		'(',')','_','+','=','-','?');
  $seed = intval(date("dmHs"));
  if(isset($kt))
	srand(($seed+rand(1,$seed)));
  else
	srand($seed);

  echo "<p><code>";
  $kt = 0;
  $seed = intval(date("sHs"));
  while($kt<12){
    $s = (rand(1,$seed) % 77);
    echo $p[$s];
    $kt++;
  }
  echo "</code><p><code>";
  $kt = 0;
  while($kt<12){
    $s = (rand(1,$seed) % 62);
    echo $p[$s];
    $kt++;
  }
  echo "</code><p><code>";
  $kt = 0;
  while($kt<12){
    $s = (rand(1,$seed) % 36);
    echo $p[$s];
    $kt++;
  }
  echo "</code><p>\n";
?>
</div>
<div id=codice>
<h1>16 Characters</h1>
<?php
  echo "<p><code>";
  $kt = 0;
  $seed = intval(date("sHs"));
  while($kt<16){
    $s = (rand(1,$seed) % 77);
    echo $p[$s];
    $kt++;
  }
  echo "</code><p><code>";
  $kt = 0;
  while($kt<16){
    $s = (rand(1,$seed) % 62);
    echo $p[$s];
    $kt++;
  }
  echo "</code><p><code>";
  $kt = 0;
  while($kt<16){
    $s = (rand(1,$seed) % 36);
    echo $p[$s];
    $kt++;
  }
  echo "</code><p>\n";
?>
</div>
<div id=codice>
<h1>24 Characters</h1>
<?php
  echo "<p><code>";
  $kt = 0;
  $seed = intval(date("sHs"));
  while($kt<24){
    $s = (rand(1,$seed) % 77);
    echo $p[$s];
    $kt++;
  }
  echo "</code><p><code>";
  $kt = 0;
  while($kt<24){
    $s = (rand(1,$seed) % 62);
    echo $p[$s];
    $kt++;
  }
  echo "</code><p><code>";
  $kt = 0;
  while($kt<24){
    $s = (rand(1,$seed) % 36);
    echo $p[$s];
    $kt++;
  }
  echo "</code><p>\n";
?>
</div>

</div>

<div id="footer">
<address>Copyright &copy; 2016-<?php echo date("Y")." ";?>
by <a href="//antipaucity.com">Warren Myers</a>. 
Some rights reserved - <a href="https://creativecommons.org/licenses/by/4.0">CC BY 4.0</a>. 
Loaded <?php echo date("jS M Y H:i");?> UTC.
</address>
</div>

</body>
</html>
