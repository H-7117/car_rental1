<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Define a constant
define('ROOT_PATH', '/car_rental/');
define('BASE_PATH', __DIR__);


require_once('inc/app.php');


$connection = db_connect($db_server, $db_user, $db_user_pass, $db_name);

$pageName = myAppRequestRoute();

// ==============================================================================


function logout(){
    session_unset();
    unset($_SESSION['userId']);
    session_destroy();
    header('Location: '.ROOT_PATH);
}

if ($pageName=='logout') {
    logout();
    header('Location: '.ROOT_PATH);
}

if(str_contains($pageName,"admin")){
    if(!$_SESSION['isAdmin']){
        header("Location: ".ROOT_PATH);
        exit;
    }
}

if ($pageName=='account') {
    if(!$_SESSION['isLoggedIn']){
        header("Location: ".ROOT_PATH);
        exit;
    }
}

// ===============================================================================================
// ===============================================================================================
// ===============================================================================================

if($_SERVER['REQUEST_METHOD'] === "POST"){
    // =============================================
    if(isset($_POST['form']) && ($_POST['form'] === "car_delete")){
        $carId = $_POST['car_id'];
        $checkCarId = array(
            "column" => "id",
            "operator" => "=",
            "value" => $carId
        );
        $where = array();
        $where[] = $checkCarId;
        $result = db_delete($connection, "cars", $where);
        if($result){
            header("Location: " .ROOT_PATH."admin");
            exit;
        }
    }
    // =============================================
    if(isset($_POST['form']) && ($_POST['form'] === "car_create")){
        $image = $_FILES['image']['name'];
        $imagePath = 'uploads/images/' .$image;
        move_uploaded_file($_FILES['image']['tmp_name'],$imagePath);
        $data = array(
            "name" => $_POST['name'],
            "category" => $_POST['category'],
            "description" => $_POST['description'],
            "price" => $_POST['price'],
            'image' => $image
        );
        $car = db_insert($connection, "cars", $data);
        if($car){
            header("Location: " .ROOT_PATH."admin");
            exit;
        }
    }
    // =============================================
    if(isset($_POST['form']) && ($_POST['form'] === "car_edit")){
        // print_r($_POST);exit;
        $carId = $_POST['car_id'];

        //
        $image = null;
        if(isset($_FILES['image']['name']) && ($_FILES['image']['name'] != '')){
            $image = $_FILES['image']['name'];
            $imagePath = 'uploads/images/' .$image;
            move_uploaded_file($_FILES['image']['tmp_name'],$imagePath);
        }
        $checkCarId = array(
            "column" => "id",
            "operator" => "=",
            "value" => $carId
        );
        //
        if($image != null){
            $data = array(
                "name" => $_POST['name'],
                "category" => $_POST['category'],
                "description" => $_POST['description'],
                "price" => $_POST['price'],
                "image" => $image,
            );
        }else{
            $data = array(
                "name" => $_POST['name'],
                "category" => $_POST['category'],
                "description" => $_POST['description'],
                "price" => $_POST['price'],
            );
        }

        
        $where = array();
        $where[] = $checkCarId;
        $car = db_update($connection, "cars", $data, $where);

    }

    // =============================================
    if(isset($_POST['form']) && ($_POST['form'] === "user_edit")){
        // print_r($_POST);exit;
        $userid = $_POST['user_edit'];
        
        $checkCarId = array(
            "column" => "id",
            "operator" => "=",
            "value" => $userid
        );

            $data = array(
                "user_name" => $_POST['name'],
                "user_password" => $_POST['password'],
                "role" => $_POST['role'],
            );
        
        }

        
        $where = array();
        $where[] = $checkCarId;
        $users = db_update($connection, "users", $data, $where);

    }

    if(isset($_POST['form']) && ($_POST['form'] === "user_delete")){
        $user_id = $_POST['user_id'];
        $checkUserId = array(
            "column" => "id",
            "operator" => "=",
            "value" => $user_id
        );
        $where = array();
        $where[] = $checkUserId;
        $newReslut = db_delete($connection, "users", $where);
        if($newReslut){
            header("Location: " .ROOT_PATH."admin/users");
            exit;
        }
    }

    // =============================================
    if(isset($_POST['form']) && ($_POST['form'] === "login")){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $checkUsername = array(
            "column" => "user_name",
            "operator" => "=",
            "value" => $username
        );
        $checkPassword = array(
            "column" => "user_password",
            "operator" => "=",
            "value" => $password
        );
        $where = array();
        $where[] = $checkPassword;
        $where[] = $checkUsername;
        $user = db_select($connection, "users", "*", $where);
        
        // print_r($user[0]);exit;

        if(count($user) > 0){
            $_SESSION['userId'] = $user[0]['Id'];
            $_SESSION['isLoggedIn'] = true;
            $_SESSION['isAdmin'] = $user[0]['role'];
            header("Location: ".ROOT_PATH);
            exit;
        }
    }
    // =============================================
    if(isset($_POST['form']) && ($_POST['form'] === "signup")){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        if($password !== $repassword){
            header("Location: ".ROOT_PATH."signup");
            exit;
        }
        $data = array(
            "user_name" => $username,
            "user_password" => $password
        );
        $user = db_insert($connection, "users", $data);
        // print_r($user); exit;
        if($user){
            header("Location: ".ROOT_PATH."login");
            exit;
        }
    }


    // =============================================
    if(isset($_POST['form']) && ($_POST['form'] === "account_create")){
        $name = $_POST['name'];
        $driving_licenese = $_POST['driving_licenese'];
        $identity_number = $_POST['identity_number'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        // if($password !== $repassword){
        //     header("Location: ".ROOT_PATH."signup");
        //     exit;
        // }
        $data = array(
            "name" => $name,
            "driving_licenese" => $driving_licenese,
            "identity_number" => $identity_number,
            "address" => $address,
            "phone" => $phone,
            "user_id" => $_SESSION['userId'],
        );
        $user = db_insert($connection, "customer", $data);
        // print_r($user); exit;
        if($user){
            header("Location: ".ROOT_PATH."login");
            exit;
        }
    }


    // =============================================
    if(isset($_POST['form']) && ($_POST['form'] === "rent_create")){
        // print_r($_POST);exit;
        $carId = $_POST['car_id'];
        $checkUserId = array(
            "column" => "id",
            "operator" => "=",
            "value" => $carId
        );
        $where = array();
        $where[] = $checkUserId;
        $car = db_select($connection, "cars", "*", $where);
        $carId = $car[0]['id'];
        $carPrice = $car[0]['price'];

        // user
        $checkUserId = array(
            "column" => "user_id",
            "operator" => "=",
            "value" => $_SESSION['userId']
        );
        $where = array();
        $where[] = $checkUserId;
        $customer = db_select($connection, "customer", "*", $where);
        // print_r($customer);exit;
        $customerId= $customer[0]['id'];
        //
        
        $started = strtotime($_POST['started']);
        $ended = strtotime($_POST['ended']);
        $total_time = $ended - $started;
        $mins = $total_time / 60;
        $hours = $mins/60;
        $days = $hours / 24 ;
        $total = $days * $carPrice; 
        // print($started); print("<b>"); print($ended); exit;
        $data = array(
            "car_id" => $carId,
            "customer_id" => $customerId,
            "started" => date('Y-m-d H:i:s',$started),
            "ended" => date('Y-m-d H:i:s',$ended),
            "total" => $total,
        );
        $rent = db_insert($connection, "rents", $data);

    }












// user_delete







// ==============================================================================

$pageName = explode("?",$pageName)[0];
// echo $pageName; exit;
// Construct the file path
$filePath = 'pages/' . $pageName . '.php';


// Check if the file exists
if (file_exists($filePath)) {
    if(str_contains($pageName,"admin")){
        require_once('layout/admin_header.php');
    }else{
        require_once('layout/header.php');
    }
    // Include or require the file
    require_once($filePath);
    if(str_contains($pageName,"admin")){
        require_once('layout/admin_footer.php');
    }else{
        require_once('layout/footer.php');
    }
} else {
    require_once('layout/header.php');
    // File not found, handle the error
    require_once('pages/notfound.php');
    require_once('layout/footer.php');
}