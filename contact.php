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
        <a class="logo" href="./index.php">
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
            <a class="btn-primary" href="#">Вработи наш студент</a>
        </div>

        <div class="hamburger">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </nav>

    <div class="content-wrapper">
        <!--    FORM-->
        <div class="form-wrapper py-5">
            <h1 class="display-2 fw-bold text-center py-5">Вработи студенти</h1>
            <div class="container">
                <form action="success-message" class="row g-4 py-5 px-3" method="POST">
                    <div class="col-md-6">
                        <label for="fullName" class="form-label fw-bold">Име и презиме</label>
                        <input name="full_name" type="text" class="form-control" id="fullName" placeholder="Вашето име и презиме" required>
                    </div>
                    <div class="col-md-6">
                        <label for="companyName" class="form-label fw-bold">Име на компанија</label>
                        <input name="company_name" type="text" class="form-control" id="companyName" placeholder="Име на вашата компанија" required>
                    </div>
                    <div class="col-md-6">
                        <label for="contactEmail" class="form-label fw-bold">Контакт имејл</label>
                        <input name="company_email" type="email" class="form-control" id="contactEmail" placeholder="Контакт имејл на вашата компанија" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phoneNumber" class="form-label fw-bold">Контакт телефон</label>
                        <input name="phone_number" type="text" class="form-control" id="phoneNumber" placeholder="Контакт телефон на вашата компанија" required>
                    </div>
                    <div class="col-md-6">
                        <label for="academyType" class="form-label fw-bold">Тип на студент</label>
                        <select name="academy_type_id" class="form-select mb-3 fw-bold" id="academyType" aria-label=".form-select-lg example" required>
                            <option value="" selected disabled hidden class="fw-bold">Изберете тип на студент</option>
                            <?php
                            $sql = "SELECT * FROM academy_type";
                            $run = $conn->query($sql);
                            $results = $run->fetch_all(MYSQLI_ASSOC);

                            var_dump($results);

                            foreach ($results as $result) {
                                echo "<option value='" . $result['academy_id'] . "'>" . $result['academy_name'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6 button-wrapper">
                        <button type="submit" class="btn btn-primary btn-lg">ИСПРАТИ</button>
                    </div>
                </form>
            </div>
        </div>

        <!--    FOOTER-->
        <footer class="footer text-center text-white py-2 bg-dark">
            <p class="m-0">Изработено со <span>&#10084;</span> од Андреј</p>
        </footer>
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
