<?php
$menu = array(
  'Home' => '/',
  'About Us' => '/about',
    'contacts' => '/contact',
    'info' => '/info'
);

foreach ($menu as $name =>$link) : ?>
    <a href='<?=$link?>'><?=$name?></a>
<?php endforeach; ?>
<br>
<br>
<?php
$somenum = true;
for ($somenum = 1; $somenum<=20; $somenum++){
    echo "checking {$somenum}....";
    if ($somenum%5==0){
        echo "Got it!<br>";
        break;
    }
    echo 'nope<br>';
}