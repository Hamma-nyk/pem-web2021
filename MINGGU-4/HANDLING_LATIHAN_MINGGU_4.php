<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LATIHAN MINGGU 4</title>
		<style>
		body{
			font-family: arial;
			margin: 0px;
			background-color: #f3f1ec;
		}
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}
		td, th {
			font-size: 13px;
			border: 1px solid black;
			text-align: left;
			padding: 8px;
			background-color: white;
			font-size: 12sp;
		}
		.cok{
			width:auto;
			padding-bottom:50px;
			padding-top:20px;
		}
		.center{
			min-width:1000px;
			width:1000px;
			max-width:1000px;
			margin-left:auto;
			margin-right:auto;
		}
		</style>
    </head>
    <body
	<?php
		if(isset($_POST["submit"])){
			echo"
			<div class=cok>
				<table class=center style='width:500px; max-width=500px;'>
					<th style='background-color: transparent; text-align: center; border-right: 0px; border-left: 0px; border-top: 0px;' align='center' colspan='6'>LATIHAN FORM</th>
					<tr>
						<td>NIM </td>
						<td>".$_POST["nim"]."</td>
					</tr>
					<tr>
						<td>NAMA </td>
						<td>".$_POST["nama"]."</td>
					</tr>
					<tr>
						<td>Program Studi </td>
						<td>".$_POST["prodi"]."</td>
					</tr>
					<tr>
						<td>Warna Kesukaan </td>
						<td>".$_POST["color"]."</td>
					</tr>
					<tr>
						<td>Jenis Kelamin </td>
						<td>".$_POST["jenis_kelamin"]."</td>		
					</tr>
				</table>
			</div> ";
		}
	?>
    </body>
</html>