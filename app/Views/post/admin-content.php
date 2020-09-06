<?php 
    $session = session();
?>
<?= $this->extend('admin') ?>
<?= $this->section('content') ?>

<table class="table">
<thead>
  <th>Dokumen</th>
  <th>Gambar</th>
</thead>
<tbody> 
<?php foreach($data['posts'] as $index=>$post): ?>
  <tr>  
      <td><?= $post->judul ?></td>
      <td><a href="<?= site_url('post/view/'.$post->id) ?>"><img class="img-fluid" width="200px" alt="gambar" src="<?= base_url('uploads/'.$post->gambar) ?>"/></a></td>
    <?php 
      if($session->get('isLoggedIn')): 
     ?>
      <td><a href="<?= site_url('post/update/'.$post->id) ?>" class="btn btn-success">Update</a></td>
    <td><a href="<?= site_url('post/delete/'.$post->id) ?>" class="btn btn-danger">Delete</a></td>
     <?php endif ?>
    <?php endforeach ?>
  </tr>
</tbody>
</table>
<div style="float: right;">
    
    <?= $data['pager']->links('default','custom_pagination') ?>

</div>
<?= $this->endSection() ?>