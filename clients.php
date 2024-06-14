<?php
require_once "config/config.php";

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
<!--    NAVBAR-->
    <nav class="shadow">
        <a class="logo" href="./home">
            <img src="./images/Logo.png" alt="brainster logo" />
            <p>brainster</p>
        </a>

        <div class="nav-links">
            <div class="close-icon-wrapper">
                <i class="fa-solid fa-xmark close-icon"></i>
            </div>

            <ul>
                <li><a href="https://brainster.co/marketing/" target="_blank">Академија за маркетинг</a></li>
                <li><a href="https://brainster.co/full-stack/" target="_blank">Академија за програмирање</a></li>
                <li><a href="https://brainster.co/data-science" target="_blank">Академија за data science</a></li>
                <li><a href="https://brainster.co/graphic-design/" target="_blank">Академија за дизајн</a></li>
            </ul>
            <a class="btn-primary" href="./form">Вработи наш студент</a>
        </div>

        <div class="hamburger">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </nav>

<!--TABLE-->
    <div class="table-wrapper">
        <div class="container">
            <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Име и презиме</th>
                <th scope="col">Име на компанија</th>
                <th scope="col">Имејл</th>
                <th scope="col">Контакт Телефон</th>
                <th scope="col">Тип на студент</th>
                <th scope="col">Креиран на</th>
            </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM student_requests";

                $run = $conn->query($sql);
                $results = $run->fetch_all(MYSQLI_ASSOC);

                foreach ($results as $result) : ?>
                <tr>
                    <td><?php echo $result['request_id'];?></td>
                    <td><?php echo $result['name'];?></td>
                    <td><?php echo $result['company_name'];?></td>
                    <td><?php echo $result['email'];?></td>
                    <td><?php echo $result['phone_number'];?></td>
                    <td><?php

                        $type_id = $result['academy_type_id'];

                        $sql = "SELECT * FROM academy_type WHERE academy_id = ?";
                        $run = $conn->prepare($sql);
                        $run->bind_param('i', $type_id);
                        $run->execute();

                        $results = $run->get_result();
                        $results = $results->fetch_assoc();

                        echo $results['academy_name'];


                        ?></td>
                    <td><?php

                        $creation_date = strtotime($result['created_at']);
                        $new_date = date("M, jS Y", $creation_date);
                        echo $new_date;

                    ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        </div>

    </div>


    <!--    SCRIPTS-->

    <!--    RESPONSIVE NAVBAR-->
    <script src="./js/navbar.js"></script>
    <!--    BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!--latest font awesome cdn-->
    <script src="https://kit.fontawesome.com/7cba051bd4.js" crossorigin="anonymous"></script>
</body>
</html>