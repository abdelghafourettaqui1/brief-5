<!DOCTYPE html>
<html lang="en">
<?php 
session_start();

if( empty($_SESSION['idadmin'])){

     header('location:'.URL.'registers/login');
 }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b5682ff9f5.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>flight dream</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
  <a class="navbar-brand" href="<?= URL.'admins/checkreservation'?>"><img src="./../../public/img/logo4.svg" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ms-5 me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link fw-bold active" aria-current="page" href="<?= URL.'admins/showAllflight'?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold active "  href="<?= URL.'users/booking'?>">Reservation</a>
        </li>
      </ul>
      <form class="d-flex" method="post" action="<?= URL ?>admins/logout">
        <button class="btn btn-outline-dark" type="submit">logout</button>
      </form>
    </div>
  </div>
</nav>
<!-- <h1 class="text-center my-4 fw-bold fs-2 ">edit flight</h1> -->

    <!-- <form class=" border border-dark border-3 rounded-3 col-sm-3 row  my-5 mx-auto p-4 " action="<?= URL ?>admins/editflight" method="post">
        <input  type="text" name="departurePlace" placeholder="Departure Place" class="mb-4 rounded-3 border-2 border border-dark" >
        <input type="text" name="arrivalPlace"  placeholder="Arrival Place" class="mb-4 rounded-3 border-2 border border-dark">
        <input type="date" name="departureDate"  placeholder="Departure Date" class="mb-4 rounded-3 border-2 border border-dark">
        <input type="date" name="returnDate" placeholder="Return Date" class="mb-4 rounded-3 border-2 border border-dark">
        <input type="text" name="placeNumber" placeholder="Place Number" class="mb-4 rounded-3 border-2 border border-dark">
        <input type="text" name="price" placeholder="Price" class="mb-4 rounded-3 border-2 border border-dark">
        <input type="hidden" name="id" value="<?=$data['id']?>">
        <button style="background-color: black; width: 158px; height: 40px;color: white; border-radius: 20px;">Edit </button>
    </form> -->

    <div class="container mt-5">
              <h1 class="mb-5">Edit Flight</h1>
          <form class="row g-3" action="<?= URL ?>admins/editflight" method="post" >
          <div class="col-md-6">
            <label for="departure" class="form-label">Departure</label>
            <input name="departurePlace" type="text" class="form-control" id="departure">
          </div>
          <div class="col-md-6">
            <label for="destination" class="form-label">Destination</label>
            <input  name="arrivalPlace" type="text" class="form-control" id="destination">
          </div>
          <div class="col-md-6">
            <label for="departdate" class="form-label">Departure date</label>
            <input  name="departureDate" type="date" class="form-control" id="departdate">
          </div>
          <div class="col-md-6 removable">
            <label for="returndate" class="form-label">Return date</label>
            <input name="returnDate" type="date" class="form-control" id="returndate">
          </div>
          <div class="col-md-6">
            <label for="seats" class="form-label">Seats</label>
            <input name="placeNumber" type="number" id="seats" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="price" class="form-label">Price</label>
            <input name="price" type="number" class="form-control" id="price">
          </div>
          
          <div class="col-12 mt-5 d-flex justify-content-center">
          <input type="hidden" name="id" value="<?=$data['id']?>">
            <button type="submit" class="btn btn-primary btn-lg">Edit</button>
          </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>