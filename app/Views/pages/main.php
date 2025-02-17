<?php
/**
 * @var CodeIgniter\View\View $this
*/
?>

<?= $this->extend('layout/mainLayout') ?>

<?= $this->section('content') ?>

<h1>hello table</h1>
<!-- <div class="container border border-dark rounded p-5">
   <table class="table table-striped">
  <thead >
    <tr>
      <th  scope="col">#</th>
      <th  scope="col">name</th>
      <th  scope="col">email</th>
      <th  scope="col">Action</th>
    </tr>
  </thead>
  <tbody >

  <?php foreach($users as $user):  ?>

    <tr >

    <th  scope="row"><?= $user['id'] ?></th>
      <td ><?= $user['name'] ?></td>
      <td ><?= $user['email']  ?></td>
      <td  >   
           <a class="btn btn-warning " href="">Edit</a>
           <a class="btn btn-danger " href="">delete</a>    
      </td>
    </tr>

   <?php endforeach; ?>

    
    
  </tbody>
</table>
</div> -->
<?= $this->endSection() ?>

