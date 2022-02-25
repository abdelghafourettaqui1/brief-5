<!DOCTYPE html>
<html lang="en">


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

    <h1 class="text-center my-4 fw-bold fs-2 "> Edit booking </h1>

    <?php
    // print_r($data['idbooking']);
    ?>
    <table class="table mx-0 my-5">
        <thead class="table-light">
            <tr>
                <th>ID flight</th>
                <th>Departure place</th>
                <th>Arrival place</th>
                <th>Departure date</th>
                <th class="return-date">Return date </th>
                <th>Price</th>
                <th>Reserve</th>

            </tr>
        </thead>
        <div class="mx-5 mt-5" method="post">
            <button type="submit" name='one way' class="btn btn-outline-info one-way "> One way</button>
            <button type="submit" name='round-trip' class="btn btn-outline-primary round-trip">Round-trip</button>
        </div>


        <tbody>
            <?php
            //    echo"<pre>";
            //     print_r($data);
            //     return;

            ?>
            <?php foreach ($data['flight'] as $datavalue) : ?>

                <tr>
                    <td><?= $datavalue['id']  ?></td>
                    <td><?= $datavalue['departurePlace'] ?></td>
                    <td><?= $datavalue['arrivalPlace']  ?> </td>
                    <td><?= $datavalue['departureDate']  ?></td>
                    <td class="return-date"><?= $datavalue['returnDate']  ?></td>
                    <td><?= $datavalue['price']  ?></td>

                    <td>
                        <button type="submit" data-id="<?= $datavalue['id'] ?>" name='reserve' class="btn btn-outline-danger reserve data " id="reservationBtn">Reserve</button>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <div class="d-none passenger" id="passengerR">
        <h1 class="text-center my-4 fw-bold fs-2 "> Your passenger </h1>
        <table class="table mx-0 my-5">
            <thead class="table-light">
                <tr>
                    <th>ID passenger </th>

                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Gender</th>
                    <th>Age</th>

                    <th>Validate</th>

                </tr>
            </thead>
            <tbody>
                <?php
                // echo"<pre>";
                // print_r($data);
                // return;
                ?>
                <?php foreach ($data['passenger'] as $datavalue) : ?>
                    <tr>
                        <td><?= $datavalue['idPassenger']  ?></td>
                        <td><?= $datavalue['firstname']  ?> </td>
                        <td><?= $datavalue['lastname']  ?></td>
                        <td><?= $datavalue['gender'] ?></td>
                        <td><?= $datavalue['age'] . "<br>" ?></td>
                        <td>
                            <form action="<?= URL ?>users/editreservation" method="post">
                                <input type="hidden" name='validate' value="<?= $datavalue['idPassenger'] ?>">
                                <input type="hidden" name='ID' class="value" value="" >
                                <input type="hidden" name="flightType" class="flightType">
                                <input type="hidden" name='idbooking' value="<?= $data['idbooking'] ?>">
                                <button type="submit" name="valid" class="btn btn-primary">Validate</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        var round_trip = document.querySelector('.round-trip');
        var one_way = document.querySelector('.one-way');
        var return_date = document.querySelectorAll('.return-date');
        let textValue = document.querySelectorAll('#textValue');
        var reserve = document.querySelector('#reservationBtn');
        var passenger = document.getElementById('passengerR');
        const element = document.querySelector('.data');



      

        var data = document.querySelectorAll('.data');
        data.forEach(function(element) {
            element.addEventListener('click', function() {
                // console.log("hello");
                passenger.classList.remove("d-none")
                passenger.style.display = 'block'
                document.querySelector(".value").value = element.dataset.id;
            })
        });

     



        round_trip.addEventListener('click', open);

        function open() {
            return_date.forEach(e => {
                e.classList.remove("d-none");
                e.classList.add("d-block");
                document.querySelector(".flightType").value = 1
            });

        }



        one_way.addEventListener('click', close);

        function close() {
            return_date.forEach(e => {
                e.classList.remove("d-block");
                e.classList.add("d-none");
                document.querySelector(".flightType").value = 0;
            });

        }


        //    const hello= document.querySelector(".value").value;
        //    console.log(hello);
    </script>


</body>

</html>