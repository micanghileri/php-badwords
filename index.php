<?php
    $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
    echo 'Testo originale: '.'<br>'.$text.'<br>';
    $textLength = strlen($text);
    echo '<br>'.'Lunghezza del testo: '.' '.$textLength.'<br>';
    $badword = $_GET['bad'];
    $replace = str_replace($badword,'***',$text);
    echo '<br>'.'Testo oscurato: '.'<br>'.$replace;
?>
