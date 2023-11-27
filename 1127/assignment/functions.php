<?php 
session_start();

// 데이터베이스에 연결
$db = mysqli_connect('localhost', 'root', '', 'multi_login');

// 변수 선언
$username = "";
$email    = "";
$errors   = array(); 

// register_btn이 클릭되면 register() 함수 호출
if (isset($_POST['register_btn'])) {
        register();
}

// 사용자 등록 함수
function register(){
        // call these variables with the global keyword to make them available in function
        global $db, $errors, $username, $email;

        // 폼에서 입력된 값들을 받아옴. e() 함수를 호출하여 값의 이스케이프 수행
        // 값에 따른 이스케이프 정의
        $username    =  e($_POST['username']);
        $email       =  e($_POST['email']);
        $password_1  =  e($_POST['password_1']);
        $password_2  =  e($_POST['password_2']);

        // 폼 유효성 검사: 폼이 올바르게 작성되었는지 확인
        if (empty($username)) { 
                array_push($errors, "Username is required"); 
        }
        if (empty($email)) { 
                array_push($errors, "Email is required"); 
        }
        if (empty($password_1)) { 
                array_push($errors, "Password is required"); 
        }
        if ($password_1 != $password_2) {
                array_push($errors, "The two passwords do not match");
        }

        // 폼에 오류가 없을 경우 사용자 등록
        if (count($errors) == 0) {
                // 비밀번호를 암호화하여 데이터베이스에 저장
                $password = md5($password_1);

                if (isset($_POST['user_type'])) {
                        $user_type = e($_POST['user_type']);
                        $query = "INSERT INTO users (username, email, user_type, password) 
                                          VALUES('$username', '$email', '$user_type', '$password')";
                        mysqli_query($db, $query);
                        $_SESSION['success']  = "New user successfully created!!";
                        header('location: home.php');
                }else{
                        $query = "INSERT INTO users (username, email, user_type, password) 
                                          VALUES('$username', '$email', 'user', '$password')";
                        mysqli_query($db, $query);

                        // 생성된 사용자의 ID를 가져옴
                        $logged_in_user_id = mysqli_insert_id($db);

                        // 로그인한 사용자를 세션에 저장
                        $_SESSION['user'] = getUserById($logged_in_user_id);
                        $_SESSION['success']  = "You are now logged in";
                        header('location: index.php');                          
                }
        }
}

// ID에 해당하는 사용자 정보를 가져오는 함수
function getUserById($id){
        global $db;
        $query = "SELECT * FROM users WHERE id=" . $id;
        $result = mysqli_query($db, $query);

        $user = mysqli_fetch_assoc($result);
        return $user;
}

// 문자열 이스케이프
function e($val){
        global $db;
        return mysqli_real_escape_string($db, trim($val));
}

// 오류 메시지 출력 함수
function display_error() {
        global $errors;

        if (count($errors) > 0){
                echo '<div class="error">';
                        foreach ($errors as $error){
                                echo $error .'<br>';
                        }
                echo '</div>';
        }
}       

// 사용자가 로그인 중인지 확인
function isLoggedIn()
{
        if (isset($_SESSION['user'])) {
                return true;
        }else{
                return false;
        }
}

// 로그아웃 요청 시 세션 파기 및 사용자 정보 삭제
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: login.php");
}

// login_btn이 클릭되면 login() 함수 호출
if (isset($_POST['login_btn'])) {
    login();
}

// 사용자 로그인 함수
function login(){
    global $db, $username, $errors;

    // 폼에서 입력된 값들을 받아옴. e() 함수를 호출하여 값의 이스케이프 수행
    $username = e($_POST['username']);
    $password = e($_POST['password']);

    // 폼이 올바르게 작성되었는지 확인
    if (empty($username)) {
            array_push($errors, "Username is required");
    }
    if (empty($password)) {
            array_push($errors, "Password is required");
    }

    // 오류가 없을 경우 로그인 시도
    if (count($errors) == 0) {
            $password = md5($password);

            $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
            $results = mysqli_query($db, $query);

            // 사용자 발견    
            if (mysqli_num_rows($results) == 1) { 
                    // 사용자가 user인지 admin인지 확인
                    $logged_in_user = mysqli_fetch_assoc($results);
                    if ($logged_in_user['user_type'] == 'admin') {

                            $_SESSION['user'] = $logged_in_user;
                            $_SESSION['success']  = "You are now logged in";
                            header('location: admin/home.php');               
                    }else{
                            $_SESSION['user'] = $logged_in_user;
                            $_SESSION['success']  = "You are now logged in";

                            header('location: index.php');
                    }
            }else {
                    array_push($errors, "Wrong username/password combination");
            }
    }
}

// 사용자가 관리자인지 확인
function isAdmin()
{
        if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
                return true;
        }else{
                return false;
        }
}
?>