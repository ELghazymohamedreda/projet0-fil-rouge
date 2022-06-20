<?php
include 'employeesManager.php';
 
if(isset($_GET['id'])){

    $employeesManager =  new EmployeesManager();
    $id = $_GET['id'];
    $employeesManager->deleteEmployee($id);
    
    header('location:admin.php');
}

?>