<?php
/**
 * HTML2PDF Library - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @package   Html2pdf
 * @author    Laurent MINGUET <webmaster@html2pdf.fr>
 * @copyright 2016 Laurent MINGUET
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */
   // print_r(dirname(__FILE__));
   // die;
    ob_start();
    /* path of the php file where you have  insert the dynamic data  */
    include(dirname(__FILE__).'/examples/res/AURA/pdf.php');
 
   // include(dirname(__FILE__).'/res/task6.php');
    $content = ob_get_clean();
 /*path of library file  */
    require_once(dirname(__FILE__).'/html2pdf.class.php');
    try
    {
       
        $html2pdf = new HTML2PDF('P','A4','fr');
        /*$html2pdf = new HTML2PDF('P', 'A3');*/
        $html2pdf->writeHTML($content);
        $html2pdf->Output('task3.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }