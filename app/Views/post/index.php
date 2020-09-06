<?php 
    $session = session();
?>
<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<table class="table">
<thead>
	<th>Dokumen</th>
	<th>Gambar</th>
</thead>
<tbody>	
<?php foreach($data['posts'] as $index=>$post): ?>
	<tr>	
      <td data-target="#portfolioModal1"><?= $post->judul ?></td>
      <td><a href="<?= site_url('post/view/'.$post->id) ?>"><img class="img-fluid" width="200px" alt="gambar" src="<?= base_url('uploads/'.$post->gambar) ?>"/></a></td>

    <?php endforeach ?>
	</tr>
</tbody>
</table>
<div style="float: right;">
    
    <?= $data['pager']->links('default','custom_pagination') ?>

</div>


<?= $this->endSection() ?>