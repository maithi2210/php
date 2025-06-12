<?php 
include 'db.php';

$result = $conn->query("select * from product");

require('vendor/autoload.php');

$pdf = new TCPDF();
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->AddPage();
$pdf->SetFont('times', '', 12);
$pdf->Cell(0, 10, 'Product List', 0, 1, 'C');

$html = "
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Category</th>
        </tr>
";

while ($row = $result->fetch_assoc()) {
    $html .= "
        <tr>
            <td>" . $row["pid"] . "</td>
            <td>" . $row["pname"] . "</td>
            <td>" . $row["price"] . "</td>
            <td>" . $row["quantity"] . "</td>
            <td>" . $row["category"] . "</td>
        </tr>
    ";
}

$html .= "</table>";

$pdf->writeHTML($html, true, false, true, false, '');

$pdf->Output('product.pdf', 'D');
?>
