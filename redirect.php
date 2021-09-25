<?php 
    $random = mt_rand(100, 999);

    header('Location: /GroveWJCTStyle.css?rand=' . $random);
  exit;
?>