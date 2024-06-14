<?php
require_once "config/config.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['full_name'];
    $company_name = $_POST['company_name'];
    $email = $_POST['company_email'];
    $phone_number = $_POST['phone_number'];
    $academy_type_id = $_POST['academy_type_id'];

    $sql = "INSERT INTO student_requests (name, company_name, email, phone_number, academy_type_id) VALUES(?, ?, ?, ?, ?)";

    $run = $conn->prepare($sql);
    $run->bind_param("ssssi", $name, $company_name, $email, $phone_number, $academy_type_id);
    $run->execute();

    header("refresh:5; clients");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--    BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--    CSS STYLESHEET-->
    <link rel="stylesheet" href="./css/main.css" />
    <title>Brainster Labs</title>
</head>
<body>
    <div class="employment-redirect text-center d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="text-wrapper">
                <h1 class="display-5 fw-bold">Вашата апликација е успешно испратена!</h1>
                <h2 class="display-6">Ве молиме почекајте!</h2>
            </div>
        </div>
    </div>

<!--    BOOTSTRAP-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<!--latest font awesome cdn-->
<script src="https://kit.fontawesome.com/7cba051bd4.js" crossorigin="anonymous"></script>
</body>
</html>
