<?php ob_start(); ?>

<h2>Lista de usuarios</h2>

<table width="500px" cellpadding="5px" cellspacing="5px" border="1">
    <tr bgcolor="yellow">
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Email</td>
        <td>Edad</td>
    </tr>
    <tr bgcolor="pink">
        <td>Karina</td>
        <td>Prado</td>
        <td>karina.pradogutierrez@gmail.com</td>
        <td>23</td>
    </tr>
    <tr bgcolor="pink">
        <td>Lisbeth</td>
        <td>Balabarca</td>
        <td>lisbethbalabarca@gmail.com</td>
        <td>30</td>
    </tr>
    <tr bgcolor="pink">
        <td>Milagros</td>
        <td>Yauri</td>
        <td>milagrosesperanza@gmail.com</td>
        <td>25</td>
    </tr>
</table>

<?php

require_once("dompdf/dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "ejemplo".time().'.pdf';
file_put_contents($filename, $pdf);
$dompdf->stream($filename);

?>