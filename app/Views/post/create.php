<?=$this->extend('admin')?>
<?=$this->section('content')?>
<?php 
	$judul =[
		'name' => 'judul',
		'id' => 'judul',
		'value' => null,
		'class' => 'form-control',
	];

	$link_dokumen =[
		'name' => 'link_dokumen',
		'id' => 'link_dokumen',
		'value' => null,
		'class' => 'form-control',
	];	

	$gambar=[
		'name' => 'gambar',
		'id' => 'gambar',
		'value' => null,
		'class' => 'form-control',
	];

	$submit=[
		'name' => 'submit',
		'id' => 'submit',
		'value' => 'Submit',
		'class' => 'btn btn-success',
		'type' => 'submit',
	];
 ?>
 <h1>Tambah Berkas</h1>

 <?= form_open_multipart('Post/create')?>
 	<div class="form-group">
 		<?= form_label("Judul", "judul")?>
 		<?= form_input($judul)?>
 	</div>
	<div class="form-group">
		<?= form_label("Input Dokumen", "gambar") ?>
		<?= form_upload($gambar) ?>
	</div>

		<!-- Memasukan data ke isi_artikel, pake mysql manual soalnya gagal wae pake form helper Codeigniter 4 wkwk-->
			<?php
			$host = "localhost"; /* Host name */
			$user = "root"; /* User */
			$password = ""; /* Password */
			$dbname = "rezaariftiarno"; /* Database name */

			$con = mysqli_connect($host, $user, $password,$dbname); 

			if(isset($_POST['submit'])){

				$isi_artikel = $_POST['isi_artikel'];

				 mysqli_query($con, "INSERT INTO contents(isi_artikel) VALUES('".$isi_artikel."') ");
			    header('location: create.php');
			  }
			?>
			<textarea id="isi_artikel" name="isi_artikel" ></textarea>
		<!-- Ckeditor untuk isi artikel selesai di sini -->
 	<div class="form-group">
 		<?= form_label("Link Dokumen", "link_dokumen")?>
 		<?= form_input($link_dokumen)?>
 	</div>	
	</div>
	<div class="text-right">
		<?= form_submit($submit) ?>
	</div>

 <?= form_close()?>

<?=$this->endSection()?>