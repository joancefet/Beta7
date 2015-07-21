<?php

extract($_POST);
// On a juste faire un chagement du cookie rien de compliquer
setcookie('lang', $Lang, 2147483647);
echo "ok";