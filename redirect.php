<?php 
    $random = mt_rand(100, 999);
    header('Location: https://rayhollister.github.io/WJCTGroveCustomization/GroveWJCTStyle.css?rand=' . $random);
    exit;
?>