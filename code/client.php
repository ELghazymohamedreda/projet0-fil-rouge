<?php

include './login/employeesManager.php';
$employeeManager = new employeesManager();
$data = $employeeManager->getAllEmployees();



if(!empty($_POST)){

    $employee = new Employees();
    $filename = $_FILES["image"]["name"];
    $employeeManager = new EmployeesManager();
    $employee->setfirstName($_POST['first_name']);
    $employee->setlastName($_POST['last_name']);
    $employee->setAge($_POST['age']);
    $employee->setDepartment($_POST['department']);
    $employee->setOccupation($_POST['occupation']);
    $employee->setSalary($_POST['salary']);
    $employee->setImage($filename);
    
    $tempname = $_FILES["image"]['tmp_name'];
    $employeeManager->insertEmployees($employee);
    $employeeManager->uploadImage($filename,$tempname);

    header("location: admin.php");
}




?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lavage professionel</title>
  <link rel="icon" href="img/car wash (4).png" type="image" sizes="18x18">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/f3c2605260.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>

  <!-- Start Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <!-- <span>Car</span><span>Wash</span> -->
        <img src="img/car wash (4).png" width="70px" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="main-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.html#accueil">Accueil</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.html#services">Nos services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html#prix">Nos prix</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html#avantages">Nos avantages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-commencer" href="index.html/client.html">Suivi véhicule</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <br>
    <br>
    <center>
      <h1>Suivez votre véhicule </h1>
    </center>
    <br>
    <br>

    <!-- <table class="exproduitList table table-hover ">

    </table> -->

    <table class="container bg-light border broder-rounded w-100 px-5 table">
                
      <div class='tableTittles ms-2'>
      <thead class="thead-dark">
          <tr class=''>
              <th >Image</th>
              <th>Nom</th>
              <th>Prénom</th>
              <th>La date</th>       
              <th>Etat</th>
              <th>Le prix<th>
          </tr> 
         </thead>
      <div>
      

      <?php
      foreach($data as $employee){

      
  ?>
      <div class="tableElements mt-2">
          <tr>

              <td > <img class="border rounded-circle" style="max-width:50px;" src="<?php echo './img/' . $employee->getImage() ?>"></td>
              <td><?php echo $employee->getfirstName()?></td>
              <td><?php echo $employee->getlastName() ?></td>
              <td><?php echo $employee->getAge() ?></td>           
              <td><?php echo $employee->getOccupation() ?></td>
              <td><?php echo $employee->getSalary() ?></td>
            
          
          
          </tr>      
          <?php }?>
      <div>

  </table>
  </div>
  <br>
  <br>



<!-- Start Contact Us -->
  <div id="contact" class="contact-us">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-center text-md-left">
          <p>Si tu as aimé notre travail , n'hésites pas à nous contacter.</p>
        </div>
        <div class="col-md-4 text-center text-md-right">
          <a href="#footer">Contact Us</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Us -->
 <!-- Start Footer -->
 <div  class="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-6">
        <div class="site-info">
          <h2><span>Car</span><span>Wash</span></h2>
          <p>Le réseau de car wash est accessible partout en Tanger. Des solutions express et efficaces pour laver et
            entretenir vos véhicules, des sites de finition aérés et spacieux avec des aspirateurs gratuits, de
            nombreux choix de lavage et une gamme complète de produits d’entretien et d’accessoires.</p>
          <a href="#">Revenir à l'Accueil</a>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="helpful-links">
          <h2>Helpful Links</h2>
          <div class="row">
            <div class="col">
              <ul class="list-unstyled">
                <li><a href="index.html#accueil">Accueil</a></li>
                <li><a href="index.html#services">Nos services</a></li>
                <li><a href="index.html#prix">Nos prix</a></li>
                <li><a href="index.html#avantages">Nos avantage</a></li>
                <li><a href="index.html#contact">Contact</a></li>
              </ul>
            </div>
            <div class="col">

            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="contact">
          <h2>Contactez nous</h2>
          <ul id="footer" class="list-unstyled">
            <li>Rue beni ouryaghel 3 , 123 , Tanger </li>
            <li>Phone: 06 62 59 19 00</li>
            <li>Email: <a href="mailto:elghazy.mohamedreda@gmail.com">elghazy.mohamedreda@gmail.com</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Footer -->
  <!-- Start Copyright -->
  <div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 text-center text-sm-left text-uppercase">
          Copyright 2021 CarWash &copy;
        </div>
        <div class="col-sm-6 text-center text-sm-right">
          <ul class="list-unstyled">
            <li>
              <a href="#"><i class="https://www.facebook.com/XXXTENTACION.73/"></i></a>
            </li>
            <li>
              <a href="https://www.instagram.com/marocuino.off/?hl=fr"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
              <a href="https://github.com/ELghazymohamedreda"><i class="fa fa-github"></i></a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/mohamed-reda-el-ghazy-8646b123a/"><i class="fa fa-linkedin"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Copyright -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src='/crud/SuivreAuto.js'></script>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>