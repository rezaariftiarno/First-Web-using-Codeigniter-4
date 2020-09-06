<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>
<div class="container divider-custom">
	<div class="row">
			<div class="card">
				<div class="col-12 divider-custom">
					<h2 class="text-uppercase font-weight-bold bg-primary text-white rounded" style="text-align: center;"><?= $post->judul ?></h2>
				</div>
				<div class="card-body">
					<a href="<?= $post->link_dokumen ?>" target="blank"><img class="img-fluid center" alt="image" src="<?= base_url('uploads/'.$post->gambar) ?>" style="width: 400px;" /></a>
				</div>
				<div  class="col-12">
					<p><?= $post->isi_artikel ?></p>
				</div>
				<div class="divider-custom">
				</div>
			</div>
	</div>
</div>
<?= $this->endSection()?>