<?php 

error_reporting(E_ALL);

require_once 'vendor/autoload.php';

use Spatie\PdfToText\Pdf;

echo Pdf::getText('test1.pdf'); //returns the text from the pdf







?>