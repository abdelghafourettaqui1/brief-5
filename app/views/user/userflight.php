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
            <a class="navbar-brand" href="#"><img src="../../../public/img/logo4.svg" alt="logo"></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>

            </div>
        </div>
    </nav>
<table class="table mx-0 my-5">
        <thead class="table-light">
            <tr>
                <th>ID flight</th>
                <th>Departure place</th>
                <th>Arrival place</th>
                <th>Departure date</th>
                <th>Price</th>
                <th>Reserve</th>
                <th>Flight type</th>
            </tr>
        </thead>
        <tbody>
            <?php
        //    echo"<pre>";
        //     print_r($data);
        //     return;
            ?>
            <?php foreach ($data['user'] as $datavalue) : ?>
                <tr>
                    <td><?= $datavalue['id']  ?></td>
                    <td><?= $datavalue['departurePlace'] ?></td>
                    <td><?= $datavalue['arrivalPlace']  ?> </td>
                    <td><?= $datavalue['departureDate']  ?></td>
                    <td><?= $datavalue['price'] . "<br>" ?></td>
                    <td>
                        <form action="<?= URL ?> users/booking" method="post">
                            <input type="hidden" name='booking' value="<?= $datavalue['id'] ?>">
                            <button type="submit" name='reserve' class="btn btn-outline-danger">Reserve</button>
                        </form>
                    </td>
                    <td>
                    <button type="submit" name='one way' class="btn btn-outline-info">One way</button>
                    <button type="submit" name='round-trip' class="btn btn-outline-primary">Round-trip</button> 
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>