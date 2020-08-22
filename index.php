


<?php require_once('includes/topbar.php')?>

  <!-- Main Sidebar Container -->
<?php require_once('includes/sidebar.php')?>

<?php
    if (isset($_GET['page'])){

        switch ($_GET['page']){

            case 'dashboard';
                $template = 'dashboard.php';
                break;

            case 'deposit';
                $template = 'deposit.php';
                break;

            case 'profile';
                $template = 'profile.php';
                break;

            case 'withdraw';
                $template = 'withdraw.php';
                break;

            case 'transactions';
                $template = 'transactions.php';
                break;

            default :
                $template = "dashboard.php";

        }
    }else{
            $template = "dashboard.php";
        }
        require_once $template;
?>



    
    
  
