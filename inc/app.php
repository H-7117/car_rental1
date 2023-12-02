<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$db_server = "localhost";
$db_user = "root";
$db_user_pass = "";
$db_name = "car_rental";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// // Function to authenticate user
// function myAppSignin($username, $password)
// {
//     global $users;

//     // Check if user exists and password matches
//     if (isset($users[$username]) && $users[$username] === $password) {
//         // Start a session and store the username
//         // session_start();
//         // $_SESSION['username'] = $username;
//         $_SESSION['isSignedIn'] = true;
//         return true; // Authentication successful
//     }

//     return false; // Authentication failed
// }

// // Function to check if user is logged in
// function myAppIsUserSignedIn()
// {
//     return isset($_SESSION['isSignedIn']);
// }

// // Function to log out user
// function myAppSignout()
// {
//     // Starting a session
//     // session_start();
//     session_unset();
//     session_destroy();
// }


// function addMenuItem($title, $url)
// {
//     global $menuItems;

//     // $menuItems += array($url=> $title);
//     $menuItems[$url] = $title;
// }

//
function myAppRenderMenu($menuName, $args)
{
    global $config;
    $src = array('{{title}}', '{{url}}');
    // print_r($menuItems);
    foreach ($config['menus'][$menuName] as $url => $title) {
        if (is_array($title)) {
            $newArray = array_keys($title);
            $target = array($newArray[0], $url);
            echo str_replace($src, $target, $args['submenu-start']);
            // print_r($title[$newArray[0]]);
            foreach ($title[$newArray[0]] as $_url => $_title) {
                $target = array($_title, $_url);
                echo str_replace($src, $target, $args['submenu-item']);
            }
            echo $args['submenu-end'];
        } else {
            $target = array($title, $url);
            echo str_replace($src, $target, $args['menu-item']);
        }
    }
}

/**
 * Validate a field based on the provided options.
 *
 * @param string $field The field value to validate.
 * @param string $options The validation options separated by pipe (|) character. ex. $options = "required|email|max:60|min:12"
 * @return string|null The error message if validation fails, or null if validation passes.
 */
function myAppFieldValidate($field, $instance, $options = "")
{
    $result = array();

    // Split options into an array
    $rules = explode('|', $options);

    foreach ($rules as $rule) {
        if ($rule === 'required') {
            if (empty($instance)) {
                // $result['error'] = true;
                $result['message'][] = 'The field ' . $field . ' is required.';
                // break;
            }
        }
        if ($rule === 'email') {
            if (!filter_var($instance, FILTER_VALIDATE_EMAIL)) {
                // $result['error'] = true;
                $result['message'][] = 'The field ' . $field . ' is invalid email format.';
                // break;
            }
        }

        // $minmax = explode(':', $rule);
        // if ($minmax[0] === 'max') {
        //     if (strlen($instance) > $minmax[1]) {
        //         // $result['error'] = true;
        //         $result['message'][] = 'The field ' . $field . ' length exceeds the maximum limit.';
        //         // break;
        //     }
        // }
        // if ($minmax[0] === 'min') {
        //     if (strlen($instance) < $minmax[1]) {
        //         // $result['error'] = true;
        //         $result['message'][] = 'The field ' . $field . ' length is less than the minimum limit.';
        //         // break;
        //     }
        // }
        if (strpos($rule, 'max:') === 0) {
            $maxValue = substr($rule, 4);
            if (strlen($instance) > $maxValue) {
                // $result['error'] = true;
                $result['message'][] = 'The field '.$field.' length exceeds the maximum limit.';
                // break;
            }
        }
        if (strpos($rule, 'min:') === 0) {
            $minValue = substr($rule, 4);
            if (strlen($instance) < $minValue) {
                // $result['error'] = true;
                $result['message'][] = 'The field '.$field.' length is less than the minimum limit.';
                // break;
            }
        }
    }
    if (($options !== "") && (!empty($result['message']))) {
        $result['pass'] = false;
    } else {
        $result['pass'] = true;
    }
    return $result;
}

function myAppRequestRoute()
{

    // Get the file name from the URL
    $pageName = $_SERVER['REQUEST_URI'];
    // echo "<h1>".$pageName ."</h1>";

    $pageName = str_replace(ROOT_PATH, "", $pageName);
    // echo "<h1>".$pageName ."</h1>";

    // echo $pageName;
    // $_SESSION['messages'] = array();
    // unset($_SESSION['messages']);
    $pageName = myAppDeleteLastSlash($pageName);

    //
    if ($pageName == "") {
        $pageName = "home";
    } else if ($pageName == "admin") {
        $pageName = "admin/home";
    }

    return $pageName;
}


function myAppCSRFToken($form = "form")
{
    // if (empty($_SESSION['csrf_token'][$form])) {
        $_SESSION['csrf_token'][$form] = bin2hex(random_bytes(32));
    // }
    return $_SESSION['csrf_token'][$form];
}

function myAppFormValidate()
{
    if (isset($_POST['form_name']) && $_POST['csrf_token'] && hash_equals($_SESSION['csrf_token'][$_POST['form_name']], $_POST['csrf_token'])) {
        // CSRF token is valid
        return true;
    } else {
        // CSRF token is invalid
        return false;
    }
}

function myAppHandleFileUpload($file, $directory = "", $type = "public")
{
    $path = BASE_PATH;
    if($type === "private"){
        $path .= '/private/';
    }else{
        $path .= '/public/';
    }
    // @TODO 
    $path .= $directory ;
    $uploadPath = $path .'/'. basename($file['name']);

    // Check if file is a valid upload
    if (!is_uploaded_file($file['tmp_name'])) {
        return false; //"Invalid file upload.";
    }

    // Check if the target directory exists, create it if necessary
    if (!file_exists($path)) {
        mkdir($path, 0755, true);
    }

    // Move the uploaded file to the target directory
    if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
        return true; // "File uploaded successfully.";
    } else {
        return false; // "File upload failed.";
    }
}

function myAppDeleteLastSlash($string)
{
    if (substr($string, -1) === '/') {
        $string = substr_replace($string, "", -1);
    }
    return $string;
}



// ==============================================

function db_connect($servername, $username, $password, $dbname){

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        //die("Connection failed: " . mysqli_connect_error());
        return array("status" => "error", "code" => 401, "message" => mysqli_connect_error());
    }

    return $conn;
}

function db_close($conn){

    try{
        mysqli_close($conn);
    } catch(Exception $e){
        return array("status" => "error", "code" => 402, "message" => $e->getMessage());
    }
}

// function db_execute_query($conn, $sql){
//     try{
//         $result = mysqli_query($conn, $sql);
//     }catch(Exception $e) {
//         return array("status" => "error", "code" => 403, "message" => $e->getMessage());
//     }
//     return $result;
// }
function db_execute_query($conn, $sql){
    try {
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            throw new Exception(mysqli_error($conn));
        }
    } catch (Exception $e) {
        return array("status" => "error", "code" => 403, "message" => $e->getMessage());
    }
    
    return $result;
}

function db_select($conn, $table, $columns = "*", $where = ""){

    if (is_array($columns)) {
        $columns = implode(", ", $columns);
    }

    $sql = "SELECT $columns FROM $table";

    if (is_array($where) && !empty($where)) {
        $whereClause = _buildWhereClause($conn, $where);
        $sql .= " WHERE $whereClause";
    }
    else if (!empty($where)) {
        $sql .= " WHERE $where";
    }

    try{
        $result = db_execute_query($conn, $sql);
    }catch(Exception $e){
        return array("status" => "error", "code" => 404, "message" => $e->getMessage());
    }

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function db_insert($conn, $table, $data){

    $columns = implode(", ", array_keys($data));
    $values = "'" . implode("', '", array_values($data)) . "'";

    $sql = "INSERT INTO $table ($columns) VALUES ($values)";

    db_execute_query($conn, $sql);

    $result = mysqli_insert_id($conn);
    if(!$result){
        return array("status" => "error", "code" => 405, "message" => mysqli_error($conn));
    }
    return $result;
}

function db_update($conn, $table, $data, $where){

    $set = "";

    foreach ($data as $column => $value) {
        $set .= "$column = '$value', ";
    }

    $set = rtrim($set, ", ");

    $sql = "UPDATE $table SET $set";
    if (is_array($where) && !empty($where)) {
        $whereClause = _buildWhereClause($conn, $where);
        $sql .= " WHERE $whereClause";
    }
    else if (!empty($where)) {
        $sql .= " WHERE $where";
    }

    try{
        $result = db_execute_query($conn, $sql);
        return $result;
    }catch(Exception $e){
        return array("status" => "error", "code" => 406, "message" => $e->getMessage());
    }
}

function db_delete($conn, $table, $where){

    $sql = "DELETE FROM $table";
    if (is_array($where) && !empty($where)) {
        $whereClause = _buildWhereClause($conn, $where);
        $sql .= " WHERE $whereClause";
    }
    else if (!empty($where)) {
        $sql .= " WHERE $where";
    }
    $result = db_execute_query($conn, $sql);

    if(!$result){
        return array("status" => "error", "code" => 407, "message" => mysqli_error($conn));
    }

    return $result;
}

function _escapeValue($conn, $value) {
    return mysqli_real_escape_string($conn, $value);
}

function _buildWhereClause($conn, $where) {

    $conditions = [];

    foreach ($where as $condition) {
        $column = _escapeValue($conn, $condition['column']);
        $operator = _escapeValue($conn, $condition['operator']);
        $value = _escapeValue($conn, $condition['value']);
        $conditions[] = "$column $operator '$value'";
    }

    $out = implode(" AND ", $conditions);
    return $out;
}