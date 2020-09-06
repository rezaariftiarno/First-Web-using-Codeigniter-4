<?= $this->extend('admin') ?>
<?= $this->section('content') ?>
<?php

$judul = [
	'name' => 'judul',
	'id' => 'judul',
	'value' => $post->judul,
	'class' => 'form-control',
];

$link_dokumen =[
	'name' => 'link_dokumen',
	'id' => 'link_dokumen',
	'value' => $post->link_dokumen,
	'class' => 'form-control',
];	

$gambar = [
	'name' => 'gambar',
	'id' => 'gambar',
	'value' => null,
	'class' => 'form-control',
]; 

$submit = [
	'name' => 'submit',
	'id' => 'submit',
	'value' => 'Submit',
	'class' => 'btn btn-success',
	'type' => 'submit',
];

?>
<h1>Edit Dokumen</h1>

	<?= form_open_multipart('Post/update/'.$post->id)?>
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

			if(isset($_POST['update'])){
				
				$id = $_POST['id'];
				$isi_artikel = $_POST['isi_artikel'];

				  $result = mysqli_query($mysqli, "UPDATE users SET name='$isi_artikel', WHERE id=$id");
			    header('location: update.php');
			  }

			?>

			<textarea id="isi_artikel" name="isi_artikel" value= "<?php echo $post->isi_artikel ?>" ></textarea>
		<!-- Ckeditor untuk isi_artikel selesai di sini -->
 	<div class="form-group">
 	<?= form_label("Link Dokumen", "link_dokumen")?>
 	<?= form_input($link_dokumen)?>	
	</div>
	<div class="text-right">
		<?= form_submit($submit) ?>
	</div>

<?= form_close() ?>
<?= $this->endSection() ?>
