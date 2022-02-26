<!DOCTYPE html>
<html lang="en">
<?php 

if( empty($_SESSION)){
   

     header('location:'.URL.'registers/login');
 }

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>flight dream</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
  <a class="navbar-brand" href="<?= URL.'users/index'?>"><img src="./../../public/img/logo4.svg" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ms-5 me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link fw-bold active" aria-current="page" href="<?= URL.'users/index'?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold active "  href="<?= URL.'users/booking'?>">Reservation</a>
        </li>
      </ul>
      <form class="d-flex" method="post" action="<?= URL ?>users/logout">
        <button class="btn btn-outline-dark" type="submit">logout</button>
      </form>
    </div>
  </div>
</nav>
    <div class="container mt-5">
        <h1 class="mb-5">Edit passenger</h1>
        <form class="row g-3" action="<?= URL ?>users/editpassenger" method="post">
            <div class="col-md-6">
                <label for="Firstname" class="form-label">Firstname</label>
                <input placeholder="Firstname" name="firstname" type="text" class="form-control" id="Firstname">
            </div>
            <div class="col-md-6">
                <label for="Lastname" class="form-label">Lastname</label>
                <input placeholder="Lastname" name="lastname" type="text" class="form-control" id="Lastname">
            </div>
            <div class="col-md-6">
                <label for="Gender" class="form-label">Gender</label>
                <input placeholder="Gender" name="gender" type="text" class="form-control" id="Gender">
            </div>
            <div class="col-md-6 removable">
                <label for="Age" class="form-label">Age</label>
                <input placeholder="Age" name="age" type="number" class="form-control" id="Age">
            </div>
            <div class="col-12 mt-5 d-flex justify-content-center">
                <input type="hidden" name="idPassenger" value="<?= $data['idPassenger'] ?>">
                <button type="submit" class="btn btn-primary btn-lg">Add</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>