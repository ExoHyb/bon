<?php

# /!\ Ne pas toucher /!\
require_once __DIR__ . '/vendor/autoload.php';

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

########################################################################################################################################
/*
 * ------------------------------------------------- Partie modifiable -----------------------------------------------------------------
 */
########################################################################################################################################
// set document information
$pdf->SetCreator('Rémi Marandon');
$pdf->SetAuthor('Générateur de Bons de travail');
$pdf->SetTitle('Bon de travail');
$pdf->SetSubject('Bon de travail');
$pdf->SetKeywords('');

########################################################################################################################################
/*
 * ------------------------------------------------- Fin partie modifiable -------------------------------------------------------------
 */
########################################################################################################################################

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetDefaultMonospacedFont('times');
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$pdf->SetFont('times', 'BI', 20);
$pdf->AddPage();

ob_end_clean();
ob_start();

include __DIR__ . '/pdf.php';

$output = ob_get_contents();
ob_end_clean();

$pdf->writeHTML($output, true, false, true, false, '');
$pdf->Output('example_002.pdf', 'D');