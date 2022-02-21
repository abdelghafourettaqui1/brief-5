<!DOCTYPE html>
<html lang="en">
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
<h1 class="text-center my-4 fw-bold fs-2 ">edit flight</h1>

    <form class=" border border-dark border-3 rounded-3 col-sm-3 row  my-5 mx-auto p-4 " action="<?= URL ?>admins/editflight" method="post">
        <input  type="text" name="departurePlace" placeholder="DeparturePlace" class="mb-4 rounded-3 border-2 border border-dark" >
        <input type="text" name="arrivalPlace"  placeholder="ArrivalPlace" class="mb-4 rounded-3 border-2 border border-dark">
        <input type="text" name="departureDate"  placeholder="DepartureDate" class="mb-4 rounded-3 border-2 border border-dark">
        <input type="text" name="passengerNumber" placeholder="PassengerNumber" class="mb-4 rounded-3 border-2 border border-dark">
        <input type="text" name="placeNumber" placeholder="PlaceNumber" class="mb-4 rounded-3 border-2 border border-dark">
        <input type="text" name="price" placeholder="Price" class="mb-4 rounded-3 border-2 border border-dark">
        <input type="hidden" name="id" value="<?=$data['id']?>">
        <button style="background-color: black; width: 158px; height: 40px;color: white; border-radius: 20px;">Edit </button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>