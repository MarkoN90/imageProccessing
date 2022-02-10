<?php 

require_once 'vendor/autoload.php';

foreach((new TesseractOCR())->availableLanguages() as $lang) echo $lang;
exit;

use thiagoalessio\TesseractOCR\TesseractOCR;
echo (new TesseractOCR('example3.PNG'))
     ->lang()   
    ->run();




?>