<?php 

include("tridy.php");

$infikovani_lidi = new Covid_19();

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- UIkit Styly -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/css/uikit.min.css"/>
    <!-- UIkit Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit-icons.min.js"></script>

<title>Korona virus</title>
</head>
<body>
<table class="uk-table uk-table-divider">
<thead>
<tr>
<th>Celkový počet</th>
<th>Podle pohlaví</th>
<th>Průměrný věk</th>
</tr>
</thead>
<tbody>
<tr>
<td><?php echo $infikovani_lidi->celkem() ?></td>
<td><?php echo $infikovani_lidi->podle_pohlavi() ?></td>
<td><?php echo $infikovani_lidi->prumerny_vek() ?></td>
</tr>
</tbody>
</table>




