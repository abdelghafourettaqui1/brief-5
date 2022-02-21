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

<h1 class="text-center my-4 fw-bold fs-2 "> Passenger</h1>


    <table class="table mx-0 my-5">
        <thead class="table-light">
            <tr>
                <th>ID passenger </th>
                <th>ID booking</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Delete passenger</th>
                <th>Edit passenger</th>

            </tr>
        </thead>
        <tbody>
            <?php
            // echo"<pre>";
            // print_r($data);
            // return;
            ?>
            <?php foreach ($data['user'] as $datavalue) : ?>
                <tr>
                    <td><?= $datavalue['idPassenger']  ?></td>
                    <td><?= $datavalue['idbooking'] ?></td>
                    <td><?= $datavalue['firstname']  ?> </td>
                    <td><?= $datavalue['lastname']  ?></td>
                    <td><?= $datavalue['gender'] ?></td>
                    <td><?= $datavalue['age'] . "<br>" ?></td>
                    <td>
                        <form action="deletepassenger" method="post">
                            <input type="hidden" name='delete' value="<?= $datavalue['idPassenger'] ?>">
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </td>
                    <td>
                        <form action="<?= URL ?>users/showForm" method="post">
                            <input type="hidden" name='edit' value="<?= $datavalue['idPassenger'] ?>">
                            <button type="submit" class="btn btn-outline-success">Update</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h1 class="text-center my-4 fw-bold fs-2 ">Add passenger</h1>


    <form class=" border border-dark border-3 rounded-3 col-sm-3 row  my-1 mx-auto p-4 " action="<?= URL ?>users/addpassenger" method="post">
        <input type="text" name="firstname" placeholder="Firstname" class="mb-2 rounded-3 border-2 border border-dark">
        <input type="text" name="lastname" placeholder="Lastname" class="mb-2 rounded-3  border-2  border border-dark">
        <input type="text" name="gender" placeholder="Gender" class="mb-2 rounded-3  border-2 border border-dark">
        <input type="text" name="age" placeholder="Age" class="mb-2 rounded-3  border-2 border border-dark">
        <button class="btn btn-primary btn-outline-dark">Add </button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>