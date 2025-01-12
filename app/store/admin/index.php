<?php
include_once '../../../resources/store/config.php';
include_once '../../../resources/store/functions.php';

include_once '../backEnd/header.php';
if(!isset($_SESSION['username'])) {
   redirect('../index.php');
}
echo "<div id='page-wrapper'>
           <div class='container-fluid'>";
             
if($_SERVER['REQUEST_URI'] == '/app/store/admin/' || $_SERVER['REQUEST_URI'] == '/app/store/admin/index.php') {
   include '../backEnd/adminReports.php';
}

if(isset($_GET['orders'])) {
   include('../backEnd/adminOrders.php');
}

if(isset($_GET['products'])) {
   include('../backEnd/adminProducts.php');
}

if(isset($_GET['addProduct'])) {
   include('../backEnd/adminAddProducts.php');
}

if(isset($_GET['editProduct'])) {
   include('../backEnd/adminEditProducts.php');
}

if(isset($_GET['categories'])) {
   include('../backEnd/adminCategories.php');
}

if(isset($_GET['users'])) {
   include('../backEnd/adminUsers.php');
}

if(isset($_GET['slider'])) {
   include('../backEnd/slides.php');
}

if(isset($_GET['addUser'])) {
   include('../backEnd/adminAddUser.php');
}

if(isset($_GET['editUser'])) {
   include('../backEnd/adminEditUser.php');
}

   
   echo "</div>
         <!-- /.container-fluid -->
       </div>
       <!-- /#page-wrapper -->
     </div>
     <!-- /#wrapper -->";

include_once '../backEnd/footer.php';   

?>
