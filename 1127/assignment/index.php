 <!-- 'functions.php' 파일을 포함하여 필요한 기능들을 가져옵니다. -->
<?php 
        include('functions.php');

        // 사용자가 로그인하지 않은 경우 로그인 페이지로 이동합니다.
        if (!isLoggedIn()) {
                $_SESSION['msg'] = "You must log in first";
                header('location: login.php');
        }
?>
<!DOCTYPE html>
<html>
<head>
        <title>Home</title>
        <!-- 외부 스타일 시트를 포함하여 페이지의 스타일을 지정합니다. -->
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <!-- 페이지의 헤더를 표시합니다. -->
        <div class="header">
                <h2>Home Page</h2>
        </div>
        <div class="content">
                <!-- 알림 메시지를 표시합니다. -->
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
                        <!-- 이미지를 표시합니다. -->
                        <img src="images/user_profile.png"  >

                        <div>
                                <?php  if (isset($_SESSION['user'])) : ?>
                                        <!-- 사용자명을 강조하여 표시합니다. -->
                                        <strong><?php echo $_SESSION['user']['username']; ?></strong>

                                        <small>
                                                <!-- 사용자 유형을 소문자에서 대문자로 변환하여 표시합니다. -->
                                                <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
                                                <br>
                                                <!-- 로그아웃 링크를 표시합니다. -->
                                                <a href="index.php?logout='1'" style="color: red;">logout</a>
                                        </small>

                                <?php endif ?>
                        </div>
                </div>
        </div>
</body>
</html>