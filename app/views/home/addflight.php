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
          <a class="nav-link fw-bold active "  href="<?= URL.'admins/checkreservation'?>">Reservation</a>
        </li>
      </ul>
      <form class="d-flex" method="post" action="<?= URL ?>admins/logout">
        <button class="btn btn-outline-dark" type="submit">logout</button>
      </form>
    </div>
  </div>
</nav>
    <!-- <div class="container pt-5">
        <h1 class="text-center my-4 fw-bold fs-2 ">Add flight</h1>

        <form class=" border border-dark border-3 rounded-3 col-sm-3 row  my-1 mx-auto p-4 " action="<?= URL ?>admins/addflight" method="post">
            <input type="text" name="departurePlace" placeholder="Departure place" class="mb-2 rounded-3 border-2 border border-dark">
            <input type="text" name="arrivalPlace" placeholder="Arrival place" class="mb-2 rounded-3  border-2  border border-dark">
            <input type="text" name="departureDate" placeholder="Departure date" class="mb-2 rounded-3  border-2 border border-dark">
            <input type="text" name="returnDate" placeholder="Return Date" class="mb-2 rounded-3  border-2 border border-dark">
            <input type="text" name="placeNumber" placeholder="Place number" class="mb-2 rounded-3 border border-2  border-dark">
            <input type="text" name="price" placeholder="Price" class="mb-2 rounded-3 border border-2  border-dark ">
            <button class="btn btn-primary btn-outline-dark btn-lg">Add </button>
        </form>
    </div> -->
    <!-- <div class="container mt-5">
        <h1 class="mb-5">Add Flight</h1>
        <form action="<?= URL ?>admins/addflight" method="post" class=" container d-flex flex-column align-items-center mt-5">
           
            <div class="mb-3 col-md-3">
                <label for="exampleInputName" class="form-label">Departure place</label>
                <input type="text" class="form-control" name="departurePlace" id="exampleInputName" placeholder="Departure place">

            </div>

            <div class="mb-3 col-md-3">
                <label for="exampleInputEmail" class="form-label">Arrival place</label>
                <input name="arrivalPlace" type="text" class="form-control" id="exampleInputEmail" placeholder="Arrival place">

            </div>

            <div class="mb-3 col-md-3">
                <label for="exampleInputPassword" class="form-label">Departure date</label>
                <input type="date" name="departureDate" class="form-control" id="exampleInputPassword" placeholder="Departure date">

            </div>

            <div class="mb-3 col-md-3">
                <label for="exampleInputPassword" class="form-label">Return date</label>
                <input type="date" name="returnDate" class="form-control" id="exampleInputPassword" placeholder="Return date">

            </div>
            <div class="mb-3 col-md-3">
                <label for="exampleInputPassword" class="form-label">Place number</label>
                <input type="text" name="placeNumber" class="form-control" id="exampleInputPassword" placeholder="Place number">

            </div>
            <div class="mb-3 col-md-3">
                <label for="exampleInputPassword" class="form-label">Price</label>
                <input type="text" name="price" class="form-control" id="exampleInputPassword" placeholder="Price">

            </div>
            <div class="mb-3 col-md-3 d-flex justify-content-center">
                <button class=" btn btn-lg btn-primary btn-outline-dark ">Add </button>

            </div>


        </form>
    </div> -->

    <div class="container mt-5">
              <h1 class="mb-5">Add Flight</h1>
          <form class="row g-3" action="<?= URL ?>admins/addflight" method="post" >
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
            <button type="submit" class="btn btn-primary btn-lg">Add</button>
          </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>