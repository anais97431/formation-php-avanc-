<?php

use Dompdf\Dompdf;
use Dompdf\Options;
use Spipu\Html2Pdf\Html2Pdf;

require __DIR__.'/../vendor/autoload.php';


$documentHtml = file_get_contents(__DIR__.'/../doc/page1.html');

//$html2pdf = new Html2Pdf('P', 'A4', 'fr', true);

//$html2pdf->writeHTML($documentHtml);
//$html2pdf->output(__DIR__.'/../pdf/page1.pdf', 'F');

$dompdf= new Dompdf();
$dompdf->setBaseHost(__DIR__.'/../doc')
        ->setPaper('A4', 'portrait')
        ->loadHtml($documentHtml);
$dompdf->render();
file_put_contents(__DIR__.'/../pdf/dompdf.pdf', $dompdf->output());

$options = new Options();
$options->set('isRemoteEnabled', true);
$documentHtmlWeb = file_get_contents('http://www.dawan.fr/formations/php/php-avance/php-intermediaire--programmation-orientee-objet');


$dompdf= new Dompdf($options);
$dompdf->setBaseHost('www.dawan.fr')
        ->setProtocol('https://')
        ->setPaper('A4', 'portrait')
        ->loadHtml($documentHtmlWeb);
$dompdf->render();
file_put_contents(__DIR__.'/../pdf/dompdf-web.pdf', $dompdf->output());