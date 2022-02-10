<?php 

require_once 'vendor/autoload.php';

use thiagoalessio\TesseractOCR\TesseractOCR;
echo (new TesseractOCR('example3.PNG'))
    ->run();




?>