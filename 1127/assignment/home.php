<?php 
// 'functions.php' 파일을 포함하여 필요한 기능들을 가져옵니다.
include('../functions.php');

// 만약 현재 사용자가 관리자가 아니라면 로그인 페이지로 이동합니다.
if (!isAdmin()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: ../login.php');
}

// 'logout' 파라미터가 존재하면 세션을 파기하고 사용자 정보를 지운 후 로그인 페이지로 이동합니다.
if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['user']);
        header("location: ../login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
        <!-- 페이지의 제목을 설정합니다. -->
        <title>Home</title>

        <!-- 외부 스타일 시트를 포함하여 페이지의 스타일을 지정합니다. -->
        <link rel="stylesheet" type="text/css" href="../style.css">

        <style>
        /* .header 클래스에 대한 스타일을 설정합니다. */
        .header {
                background: #003366;
        }

        /* 'register_btn' 이름을 가진 버튼에 대한 스타일을 설정합니다. */
        button[name=register_btn] {
                background: #003366;
        }
        </style>
</head>
<body>
        <!-- 페이지의 헤더를 표시합니다. -->
        <div class="header">
                <h2>Admin - Home Page</h2>
        </div>
        <!-- 알림 메시지를 표시합니다. -->
        <div class="content">
                <?php if (isset($_SESSION['success'])) : ?>
                        <div class="error success" >
                                <h3>
                                        <?php 
                                                echo $_SESSION['success']; 
                                                unset($_SESSION['success']);
                                        ?>
                                </h3>
                        </div>
                <?php endif ?>

                <!-- 로그인한 사용자 정보를 표시합니다. -->
                <div class="profile_info">
                        <img src="../images/admin_profile.png"  >

                        <div>                                
                                <?php  if (isset($_SESSION['user'])) : ?>
                                        <!-- 사용자명을 강조하여 표시합니다. -->
                                        <strong><?php echo $_SESSION['user']['username']; ?></strong>

                                        <small>
                                                <!-- 사용자 유형을 소문자에서 대문자로 변환하여 표시합니다. -->
                                                <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
                                                <br>
                                                <!-- 로그아웃 링크를 표시합니다. -->
                                                <a href="home.php?logout='1'" style="color: red;">logout</a>
                                                <!-- 새로운 사용자를 추가하는 링크를 표시합니다. -->
                                                &nbsp; <a href="create_user.php"> + add user</a>
                                        </small>

                                <?php endif ?>
                        </div>
                </div>
        </div>
</body>
</html>