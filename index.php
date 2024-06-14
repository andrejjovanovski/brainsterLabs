<?php
require_once "config/config.php"

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
    <nav>
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

  <!--    BANNER-->
    <div class="banner">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <h1>Brainster Labs</h1>
          <div class="carousel-item active first-slide">
          </div>
          <div class="carousel-item second-slide">
          </div>
          <div class="carousel-item third-slide">
          </div>
        </div>
      </div>
    </div>


    <!--    FILTERS-->
    <div class="filters">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 text-start p-0 active-marketing filter">
                    <label for="marketing" class="h6 p-4 m-0 w-100 d-flex justify-content-between">Проекти на студенти по академија <br> за маркетинг <i class="fa-solid fa-circle-check align-self-center icon-marketing"></i></label>
                    <input type="checkbox" id="marketing" class="filter-check-box d-none">
                </div>
                <div class="col-md-4 text-start p-0 active-programing filter">
                    <label for="programing" class="h6 p-4 m-0 w-100 d-flex justify-content-between">Проекти на студенти по академија <br> за програмирање <i class="fa-solid fa-circle-check align-self-center icon-programing"></i></label>
                    <input type="checkbox" id="programing" class="filter-check-box d-none">
                </div>
                <div class="col-md-4 text-start p-0 active-design filter">
                    <label for="design" class="h6 p-4 m-0 w-100 d-flex justify-content-between">Проекти на студенти по академија <br> за дизајн <i class="fa-solid fa-circle-check align-self-center icon-design" aria-hidden="true"></i></label>
                    <input type="checkbox" id="design" class="filter-check-box d-none">
                </div>
            </div>
        </div>
    </div>

<!--    CARDS-->
    <div class="projects-showcase pb-5">
        <h2 class="h1 fw-bold text-center py-5">Проекти</h2>
        <div class="container">
            <div class="row gy-5">
<!--                MARKETING CARDS-->
                <div class="col-md-6 col-lg-4 card-marketing filter-card">
                    <div class="card">
                        <img src="./images/marketing-01.jpg" class="card-img-top" alt="...">
                        <div class="card-body position-relative">
                            <p class="tag">Академија за Маркетинг</p>
                            <h5 class="card-title fw-bold">Име на проектот стои овде во две линии</h5>
                            <p class="card-text">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                            <p class="date fw-bold">Април-Октмоври 2019</p>
                            <a href="#" class="btn btn-primary float-end">Дознај повеќе</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 card-marketing filter-card">
                    <div class="card">
                        <img src="./images/marketing-02.jpg" class="card-img-top" alt="...">
                        <div class="card-body position-relative">
                            <p class="tag">Академија за Маркетинг</p>
                            <h5 class="card-title fw-bold">Име на проектот стои овде во две линии</h5>
                            <p class="card-text">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                            <p class="date fw-bold">Април-Октмоври 2019</p>
                            <a href="#" class="btn btn-primary float-end">Дознај повеќе</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 card-marketing filter-card">
                    <div class="card">
                        <img src="./images/marketing-03.jpg" class="card-img-top" alt="...">
                        <div class="card-body position-relative">
                            <p class="tag">Академија за Маркетинг</p>
                            <h5 class="card-title fw-bold">Име на проектот стои овде во две линии</h5>
                            <p class="card-text">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                            <p class="date fw-bold">Април-Октмоври 2019</p>
                            <a href="#" class="btn btn-primary float-end">Дознај повеќе</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 card-marketing filter-card">
                    <div class="card">
                        <img src="./images/marketing-06.jpg" class="card-img-top" alt="...">
                        <div class="card-body position-relative">
                            <p class="tag">Академија за Маркетинг</p>
                            <h5 class="card-title fw-bold">Име на проектот стои овде во две линии</h5>
                            <p class="card-text">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                            <p class="date fw-bold">Април-Октмоври 2019</p>
                            <a href="#" class="btn btn-primary float-end">Дознај повеќе</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 card-marketing filter-card">
                    <div class="card">
                        <img src="./images/marketing-07.jpg" class="card-img-top" alt="...">
                        <div class="card-body position-relative">
                            <p class="tag">Академија за Маркетинг</p>
                            <h5 class="card-title fw-bold">Име на проектот стои овде во две линии</h5>
                            <p class="card-text">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                            <p class="date fw-bold">Април-Октмоври 2019</p>
                            <a href="#" class="btn btn-primary float-end">Дознај повеќе</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 card-marketing filter-card">
                    <div class="card">
                        <img src="./images/marketing-08.jpg" class="card-img-top" alt="...">
                        <div class="card-body position-relative">
                            <p class="tag">Академија за Маркетинг</p>
                            <h5 class="card-title fw-bold">Име на проектот стои овде во две линии</h5>
                            <p class="card-text">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                            <p class="date fw-bold">Април-Октмоври 2019</p>
                            <a href="#" class="btn btn-primary float-end">Дознај повеќе</a>
                        </div>
                    </div>
                </div>

                <!--PROGRAMING CARDS-->
                <div class="col-md-6 col-lg-4 card-programing filter-card">
                    <div class="card">
                        <img src="./images/programing-01.avif" class="card-img-top" alt="...">
                        <div class="card-body position-relative">
                            <p class="tag">Академија за Програмирање</p>
                            <h5 class="card-title fw-bold">Име на проектот стои овде во две линии</h5>
                            <p class="card-text">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                            <p class="date fw-bold">Април-Октмоври 2019</p>
                            <a href="#" class="btn btn-primary float-end">Дознај повеќе</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 card-programing filter-card">
                    <div class="card">
                        <img src="./images/programing-02.avif" class="card-img-top" alt="...">
                        <div class="card-body position-relative">
                            <p class="tag">Академија за Програмирање</p>
                            <h5 class="card-title fw-bold">Име на проектот стои овде во две линии</h5>
                            <p class="card-text">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                            <p class="date fw-bold">Април-Октмоври 2019</p>
                            <a href="#" class="btn btn-primary float-end">Дознај повеќе</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 card-programing filter-card">
                    <div class="card">
                        <img src="./images/programing-03.avif" class="card-img-top" alt="...">
                        <div class="card-body position-relative">
                            <p class="tag">Академија за Програмирање</p>
                            <h5 class="card-title fw-bold">Име на проектот стои овде во две линии</h5>
                            <p class="card-text">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                            <p class="date fw-bold">Април-Октмоври 2019</p>
                            <a href="#" class="btn btn-primary float-end">Дознај повеќе</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 card-programing filter-card">
                    <div class="card">
                        <img src="./images/programing-05.avif" class="card-img-top" alt="...">
                        <div class="card-body position-relative">
                            <p class="tag">Академија за Програмирање</p>
                            <h5 class="card-title fw-bold">Име на проектот стои овде во две линии</h5>
                            <p class="card-text">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                            <p class="date fw-bold">Април-Октмоври 2019</p>
                            <a href="#" class="btn btn-primary float-end">Дознај повеќе</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 card-programing filter-card">
                    <div class="card">
                        <img src="./images/programing-06.avif" class="card-img-top" alt="...">
                        <div class="card-body position-relative">
                            <p class="tag">Академија за Програмирање</p>
                            <h5 class="card-title fw-bold">Име на проектот стои овде во две линии</h5>
                            <p class="card-text">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                            <p class="date fw-bold">Април-Октмоври 2019</p>
                            <a href="#" class="btn btn-primary float-end">Дознај повеќе</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 card-programing filter-card">
                    <div class="card">
                        <img src="./images/programing-04.avif" class="card-img-top" alt="...">
                        <div class="card-body position-relative">
                            <p class="tag">Академија за Програмирање</p>
                            <h5 class="card-title fw-bold">Име на проектот стои овде во две линии</h5>
                            <p class="card-text">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                            <p class="date fw-bold">Април-Октмоври 2019</p>
                            <a href="#" class="btn btn-primary float-end">Дознај повеќе</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 card-programing filter-card">
                    <div class="card">
                        <img src="./images/programing-07.avif" class="card-img-top" alt="...">
                        <div class="card-body position-relative">
                            <p class="tag">Академија за Програмирање</p>
                            <h5 class="card-title fw-bold">Име на проектот стои овде во две линии</h5>
                            <p class="card-text">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                            <p class="date fw-bold">Април-Октмоври 2019</p>
                            <a href="#" class="btn btn-primary float-end">Дознај повеќе</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 card-programing filter-card">
                    <div class="card">
                        <img src="./images/programing-08.avif" class="card-img-top" alt="...">
                        <div class="card-body position-relative">
                            <p class="tag">Академија за Програмирање</p>
                            <h5 class="card-title fw-bold">Име на проектот стои овде во две линии</h5>
                            <p class="card-text">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                            <p class="date fw-bold">Април-Октмоври 2019</p>
                            <a href="#" class="btn btn-primary float-end">Дознај повеќе</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 card-programing filter-card">
                    <div class="card">
                        <img src="./images/programing-09.avif" class="card-img-top" alt="...">
                        <div class="card-body position-relative">
                            <p class="tag">Академија за Програмирање</p>
                            <h5 class="card-title fw-bold">Име на проектот стои овде во две линии</h5>
                            <p class="card-text">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                            <p class="date fw-bold">Април-Октмоври 2019</p>
                            <a href="#" class="btn btn-primary float-end">Дознај повеќе</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 card-programing filter-card">
                    <div class="card">
                        <img src="./images/programing-10.avif" class="card-img-top" alt="...">
                        <div class="card-body position-relative">
                            <p class="tag">Академија за Програмирање</p>
                            <h5 class="card-title fw-bold">Име на проектот стои овде во две линии</h5>
                            <p class="card-text">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                            <p class="date fw-bold">Април-Октмоври 2019</p>
                            <a href="#" class="btn btn-primary float-end">Дознај повеќе</a>
                        </div>
                    </div>
                </div>

<!--                DESIGN-->
                <div class="col-md-6 col-lg-4 card-design filter-card">
                    <div class="card">
                        <img src="./images/design-01.avif" class="card-img-top" alt="...">
                        <div class="card-body position-relative">
                            <p class="tag">Академија за Дизајн</p>
                            <h5 class="card-title fw-bold">Име на проектот стои овде во две линии</h5>
                            <p class="card-text">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                            <p class="date fw-bold">Април-Октмоври 2019</p>
                            <a href="#" class="btn btn-primary float-end">Дознај повеќе</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 card-design filter-card">
                    <div class="card">
                        <img src="./images/design-02.avif" class="card-img-top" alt="...">
                        <div class="card-body position-relative">
                            <p class="tag">Академија за Дизајн</p>
                            <h5 class="card-title fw-bold">Име на проектот стои овде во две линии</h5>
                            <p class="card-text">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                            <p class="date fw-bold">Април-Октмоври 2019</p>
                            <a href="#" class="btn btn-primary float-end">Дознај повеќе</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 card-design filter-card">
                    <div class="card">
                        <img src="./images/design-03.avif" class="card-img-top" alt="...">
                        <div class="card-body position-relative">
                            <p class="tag">Академија за Дизајн</p>
                            <h5 class="card-title fw-bold">Име на проектот стои овде во две линии</h5>
                            <p class="card-text">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                            <p class="date fw-bold">Април-Октмоври 2019</p>
                            <a href="#" class="btn btn-primary float-end">Дознај повеќе</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 card-design filter-card">
                    <div class="card">
                        <img src="./images/design-04.avif" class="card-img-top" alt="...">
                        <div class="card-body position-relative">
                            <p class="tag">Академија за Дизајн</p>
                            <h5 class="card-title fw-bold">Име на проектот стои овде во две линии</h5>
                            <p class="card-text">Краток опис во кој студентите ќе можат да опишат за што се работи во проектот.</p>
                            <p class="date fw-bold">Април-Октмоври 2019</p>
                            <a href="#" class="btn btn-primary float-end">Дознај повеќе</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--    FOOTER-->
    <footer class="footer text-center text-white py-2 bg-dark">
        <p class="m-0">Изработено со <span>&#10084;</span> од Андреј</p>
    </footer>

<!--    CARDS FILTER SCRIPT-->
    <script src="./js/cards_filter.js"></script>
    <script src="./js/navbar.js"></script>
    <!--    BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!--latest font awesome cdn-->
    <script src="https://kit.fontawesome.com/7cba051bd4.js" crossorigin="anonymous"></script>
</body>
</html>
