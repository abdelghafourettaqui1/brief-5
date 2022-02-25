<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
    
</head>


<body>
  
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="./../../public/img/logo4.svg" alt="logo"></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>

            </div>
        </div>
    </nav>
    <div class="container pt-5">
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
    </div>

    <!-- <form action="<?= URL ?>admins/addflight" method="post" class=" container d-flex flex-column align-items-center" >
  <div class="alert alert-danger d-none">Please review the problems below:</div>

  <div class="mb-3 col-md-3">
    <label for="exampleInputName" class="form-label">Departure place</label>
    <input type="text" class="form-control" name="departurePlace" id="exampleInputName" placeholder="Departure place">
   
  </div>

  <div class="mb-3 col-md-3">
    <label for="exampleInputEmail" class="form-label">Arrival place</label>
    <input name="arrivalPlace" type="email" class="form-control" id="exampleInputEmail" placeholder="Arrival place" autocomplete="email" >
    
  </div>

  <div class="mb-3 col-md-3">
    <label for="exampleInputPassword" class="form-label">Departure date</label>
    <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" autocomplete="current-password" required>
    
  </div>

  <div class="mb-3 col-md-3">
    <label for="exampleInputPassword" class="form-label">Return date</label>
    <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" autocomplete="current-password" required>
    
  </div>
  <div class="mb-3 col-md-3">
    <label for="exampleInputPassword" class="form-label">Place number</label>
    <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" autocomplete="current-password" required>
    
  </div>
  <div class="mb-3 col-md-3">
    <label for="exampleInputPassword" class="form-label">Price</label>
    <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" autocomplete="current-password" required>
    
  </div>

</form> -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>