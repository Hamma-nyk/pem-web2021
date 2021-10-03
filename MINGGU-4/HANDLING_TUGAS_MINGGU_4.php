<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TUGAS MINGGU 4</title>
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
					<th style='text-align:center; border:0px; background-color:transparent;' colspan=6>FORMULIR PPDB JALUR ZONASI TAHUN 2020</th>
					<tr>
						<td style='border-right:0px;'>NISN</td>
						<td style='border-right:0px; border-left:0px;'><b>:</b></td>
						<td style='border-left:0px;'>".$_POST["nisn"]."</td>
					</tr>
					<tr>
						<td style='border-right:0px;'>Asal Sekolah</td>
						<td style='border-right:0px; border-left:0px;'><b>:</b></td>
						<td style='border-left:0px;'>".$_POST["sekolah"]."</td>
					</tr>
					<tr>
						<td style='border-right:0px;'>Tahun Lulus</td>
						<td style='border-right:0px; border-left:0px;'><b>:</b></td>
						<td style='border-left:0px;'>".$_POST["th_lulus"]."</td>
					</tr>
					<tr>
						<td style='border-right:0px;'>Nama Lengkap</td>
						<td style='border-right:0px; border-left:0px;'><b>:</b></td>
						<td style='border-left:0px;'>".$_POST["nama"]."</td>
					</tr>
					<tr>
						<td style='border-right:0px;'>NIK</td>
						<td style='border-right:0px; border-left:0px;'><b>:</b></td>
						<td style='border-left:0px;'>".$_POST["nik"]."</td>
					</tr>
					<tr>
						<td style='border-right:0px;'>Tempat/Tanggal Lahir</td>
						<td style='border-right:0px; border-left:0px;'><b>:</b></td>
						<td style='border-left:0px;'>".$_POST["ttl"]."</td>
					</tr>
					<tr>
						<td style='border-right:0px;'>Umur</td>
						<td style='border-right:0px; border-left:0px;'><b>:</b></td>
						<td style='border-left:0px;'>".$_POST["umur"]." Tahun</td>
					</tr>
					<tr>
						<td style='border-right:0px;'>Jenis Kelamin</td>
						<td style='border-right:0px; border-left:0px;'><b>:</b></td>
						<td style='border-left:0px;'>".$_POST["kelamin"]."</td>
					</tr>
					<tr>
						<td style='border-right:0px;' valign=top>Alamat</td>
						<td style='border-right:0px; border-left:0px;' valign=top><b>:</b></td>
						<td style='border-left:0px;' valign=top>".$_POST["alamat"]. " <br>Desa : " .$_POST["desa_siswa"]."<br>Kecamatan : " .$_POST["kec_siswa"]."<br>Kabupaten : " .$_POST["kab_siswa"]."<br>Provinsi : " .$_POST["prov_siswa"]."</td>
					</tr>
					<tr>
						<td style='border-right:0px;'>Email Aktif</td>
						<td style='border-right:0px; border-left:0px;'><b>:</b></td>
						<td style='border-left:0px;'>".$_POST["email"]."</td>
					</tr>
					<tr>
						<td style='border-right:0px;'>Nomor Kartu Keluarga</td>
						<td style='border-right:0px; border-left:0px;'><b>:</b></td>
						<td style='border-left:0px;'>".$_POST["kk"]."</td>
					</tr>
					<tr>
						<td style='border-right:0px;'>Nama Ayah Kandung</td>
						<td style='border-right:0px; border-left:0px;'><b>:</b></td>
						<td style='border-left:0px;'>".$_POST["nama_ayah"]."</td>
					</tr>
					<tr>
						<td style='border-right:0px;'>Agama</td>
						<td style='border-right:0px; border-left:0px;'><b>:</b></td>
						<td style='border-left:0px;'>".$_POST["agama_ayah"]."</td>
					</tr>
					<tr>
						<td style='border-right:0px;'>Pekerjaan</td>
						<td style='border-right:0px; border-left:0px;'><b>:</b></td>
						<td style='border-left:0px;'>".$_POST["pekerjaan_ayah"]."</td>
					</tr>
					<tr>
						<td style='border-right:0px;'>Nama Ibu Kandung</td>
						<td style='border-right:0px; border-left:0px;'><b>:</b></td>
						<td style='border-left:0px;'>".$_POST["nama_ibu"]."</td>
					</tr>
					<tr>
						<td style='border-right:0px;'>Agama</td>
						<td style='border-right:0px; border-left:0px;'><b>:</b></td>
						<td style='border-left:0px;'>".$_POST["agama_ibu"]."</td>
					</tr>
					<tr>
						<td style='border-right:0px;'>Pekerjaan</td>
						<td style='border-right:0px; border-left:0px;'><b>:</b></td>
						<td style='border-left:0px;'>".$_POST["pekerjaan_ibu"]."</td>
					</tr>
					<tr>
						<td style='border-right:0px;' valign=top>Alamat Orang Tua</td>
						<td style='border-right:0px; border-left:0px;'valign=top><b>:</b></td>
						<td style='border-left:0px;' valign=top>".$_POST["alamat_ortu"]. " <br>Desa : " .$_POST["desa_ortu"]."<br>Kecamatan : " .$_POST["kec_ortu"]."<br>Kabupaten : " .$_POST["kab_ortu"]."<br>Provinsi : " .$_POST["prov_ortu"]."</td>
					</tr>
				</table>
			</div> ";
		}
	?>
    </body>
</html>