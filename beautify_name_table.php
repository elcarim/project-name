<?php
require 'vendor/autoload.php';

include_once "config.inc.php";
// include_once "pdox/PdoxInterface.php";
// include_once "pdox/Pdox.php";
// $settings = new \PHP_Typography\Settings();
// $settings->set_hyphenation( true );
// $settings->set_hyphenation_language( 'en-US' );

// $typo = new \PHP_Typography\PHP_Typography();

// $t = new \Akh\Typograf\Typograf();


// $hyphenated_html = $typo->process( $html_snippet, $settings );
// BEGIN DB SECTION
//DB
$db = new \Buki\Pdox($dbconfig);



$x = $db -> table ('names')
    -> limit (1)
    -> get();


    $typograph = new \Emuravjev\Mdash\Typograph();
$typograph->set_text('Текст "к которому" применить - типограф.');

// типографируем
$result = $typograph->apply();

// выводим результат
echo $result;




    
    
// print_r($x->note2);
// $typoText = $t->apply($x->note2);
// print_r($typoText);
// print_r($hyphenated_html = $typo->process( $x->note2, $settings ));