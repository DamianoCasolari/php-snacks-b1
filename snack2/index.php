<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella
documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un
numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

// if($submit_e){

// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket Teams</title>


    <!--link font-awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- link bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"
        defer></script>
</head>

<body class="d-flex justify-content-center align-items-center mt-5 flex-column">



    <form class="w-50" method="GET">
        <div class="card p-5 bg-dark text-white shadow-lg rounded-5">
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Your name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Your email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label fw-bold">Your age</label>
                <input type="number" class="form-control" id="age" name="age">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary ">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </form>


    <div class="w-50 mt-4 text-danger fw-bold text-center">
        <?php
        if ($_GET) {
            if (strlen($name) > 3 && strpos($email, '@') && strpos($email, '.') && is_numeric($age)) {
                echo "conforme";
            } else {
                echo "non conforme";
            }
        } ?>

    </div>


</body>

</html>