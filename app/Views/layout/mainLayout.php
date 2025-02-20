<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>

  <!-- include navbar -->
  <?= view('layout/navbar') ?>
  <div class="container">
    <?php 

        if(session()->getFlashdata('message'))
          :
    ?>
      <div class="my-4 alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('message') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

    <?php 
    endif;
    ?>
    <div class="d-flex justify-content-between align-items-center">
      <div class="align-items-center">
        <h2 class="d-flex justify-content-center my-5"> to do list of yasir sardar</h2>
      </div>

      <div class="align-items-center">
        <a href="/create-user" class="btn btn-primary">
        Create User +
        </a>
        
      </div>

    </div>
  </div>
  <?php
  /**
   * @var CodeIgniter\View\View $this
   */
  ?>
  <main>
    <div class="container border border-dark rounded p-5">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($users as $user): ?>

            <tr>

              <th scope="row"><?= $user['id'] ?></th>
              <td><?= $user['name'] ?></td>
              <td><?= $user['email'] ?></td>
              <td>
                <a href="/edit-user/<?= $user['id'] ?>" class="btn btn-warning " href="">Edit</a>
                <a href="/delete-user/<?= $user['id'] ?>" class="btn btn-danger " href="">delete</a>
              </td>
            </tr>

          <?php endforeach; ?>



        </tbody>
      </table>
    </div>

  </main>

  <!-- include footer -->
  <?= view('layout/footer') ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>