<!-- 'functions.php' 파일을 포함하여 필요한 기능들을 가져옵니다. -->
<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
        
        <!-- 'functions.php' 파일을 포함하여 필요한 기능들을 가져옵니다. -->
        <title>Registration system PHP and MySQL</title>

        <!-- 외부 스타일 시트를 포함하여 페이지의 스타일을 지정합니다. -->
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <!-- 페이지의 헤더를 표시합니다. -->
        <div class="header">
                <h2>Login</h2>
        </div>

        <!-- 폼을 생성하고 데이터를 'login.php'로 전송합니다. -->
        <form method="post" action="login.php">

                <!-- 오류 메시지를 표시합니다. -->
                <?php echo display_error(); ?>

                <!-- 사용자명 입력란 -->
                <div class="input-group">
                        <label>Username</label>
                        <input type="text" name="username" >
                </div>

                <!-- 비밀번호 입력란 -->
                <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password">
                </div>

                <!-- 로그인 버튼 -->
                <div class="input-group">
                        <button type="submit" class="btn" name="login_btn">Login</button>
                </div>
                
                <!-- 회원이 아니라면 회원가입 링크를 표시합니다. -->
                <p>
                        Not yet a member? <a href="register.php">Sign up</a>
                </p>
        </form>
</body>
</html>