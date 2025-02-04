<?php
    include "../controllers/Transaksi.php";
    include "../lib/functions.php";
    $obj   = new TransaksiController();
    $rows  = $obj->gettransaksiList();
	$mpdf = new \Mpdf\Mpdf();
$html ='<!DOCTYPE html>

<html>
<head>
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title></title>
	<meta name="generator" content="LibreOffice 24.8.4.2 (Windows)"/>
	<meta name="created" content="2025-01-30T15:44:42.661000000"/>
	<meta name="changed" content="2025-02-04T20:31:34.412000000"/>
	
	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Liberation Sans"; font-size:x-small }
		a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  } 
		a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  } 
		comment { display:none;  } 
	</style>
	
</head>

<body>
<table cellspacing="0" border="0">
	<colgroup width="194"></colgroup>
	<colgroup width="215"></colgroup>
	<colgroup width="362"></colgroup>
	<colgroup width="322"></colgroup>
	<colgroup width="305"></colgroup>
	<colgroup width="85"></colgroup>
	<tr>
		<td height="81" align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="center" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;LAPORAN BARANG MASUK &amp; KELUAR&quot;}"><b><font face="Sans Serif Collection" size=6>LAPORAN BARANG MASUK &amp; KELUAR</font></b></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000; padding-left: 10px; padding-right: 10px;" height="77" align="center" valign=middle bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;ID&quot;}"><b><font face="Sans Serif Collection">ID</font></b></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000; padding-left: 10px; padding-right: 10px;" align="center" valign=middle bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;KODE TRANSAKSI&quot;}"><b><font face="Sans Serif Collection">KODE TRANSAKSI</font></b></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000; padding-left: 10px; padding-right: 10px;" align="center" valign=middle bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;KODE BARANG&quot;}"><b><font face="Sans Serif Collection">KODE BARANG</font></b></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000; padding-left: 10px; padding-right: 10px;" align="center" valign=middle bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;JUMLAH&quot;}"><b><font face="Sans Serif Collection">JUMLAH</font></b></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000; padding-left: 10px; padding-right: 10px;" align="center" valign=middle bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;JENIS TRANSAKSI&quot;}"><b><font face="Sans Serif Collection">JENIS TRANSAKSI</font></b></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000; padding-left: 10px; padding-right: 10px;" align="center" valign=middle bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;TANGGAL&quot;}"><b><font face="Sans Serif Collection">TANGGAL</font></b></td>
	</tr>';
	foreach ($rows as $row) {
	
		$html .='
	<tr>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" height="34" align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}">'.$row["id"].'<br></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}">'.$row["kode_transaksi"].'<br></td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br>'.$row["kode_barang"].'</td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br>'.$row["jumlah"].'</td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br>'.$row["jenis_transaksi"].'</td>
		<td style="border-top: 1px ridge #000000; border-bottom: 1px ridge #000000; border-left: 1px ridge #000000; border-right: 1px ridge #000000" align="center" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br>'.$row["tanggal"].'</td>
	</tr>';
	}
	$html .='
	<tr>
		<td height="17" align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td height="17" align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td height="17" align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td height="17" align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td height="26" align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;DICETAK PADA TANGGAL DAN JAM :&quot;}"><font face="Sans Serif Collection" size=3></font></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><font face="Sans Serif Collection"><br></font></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;tanggal&quot;}"><font face="Sans Serif Collection" size=3></font></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td height="35" align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
	</tr>
	<tr>
		<td height="37" align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;&quot;}"><br></td>
		<td align="left" bgcolor="#F9F6E0" data-sheets-value="{ &quot;1&quot;: 2, &quot;2&quot;: &quot;DATA STOK GUDANG&quot;}"><font face="Sans Serif Collection">DATA STOK GUDANG</font></td>
	</tr>
</table>
<!-- ************************************************************************** -->
</body>

</html>';
// Write HTML to PDF
$mpdf->WriteHTML($html);

// Set the filename for inline display
$filename = "laporan_film.pdf";

// Output the PDF for inline display
$mpdf->Output($filename, 'I');
?>
