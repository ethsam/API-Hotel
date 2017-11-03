<?php

/*  Receive POST of post.js (ajax script)  */
/
$funct = !empty($_POST['funct']) ? $_POST['funct'] : 'hello'; // if post empty, post = hello
$lang = !empty($_POST['lang']) ? $_POST['lang'] : 'fr'; //si vide alors langue : fr


  switch ($funct) {
   case 'hello':
         hello();
         break;
   case 'hotel':
         hotel($lang);
         break;
       }

  function acces(){
  $acces =  array( 'ApiUser' => 'numeroAPIutilisateur', 'PassWord' => 'motdepasseAPIutilisateur');
    return $acces;
  }

  function hotel($lang){
    $identifiant = acces($acces);
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,"https://export.bookvisit.com/api/partner/hotels");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query(array('Language' => $lang,'User' => array('UserName' => $identifiant['ApiUser'],'Password' => $identifiant['PassWord']))));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec ($ch);

    curl_close ($ch);

    if ($server_output == "OK") { echo 'erreur'; } else { echo $server_output; }

  }

  function hello(){
    echo 'hello';
  }

 ?>
