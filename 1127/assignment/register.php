<!-- 'functions.php' 파일을 포함하여 필요한 기능들을 가져옵니다. -->
<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
        <!-- 페이지의 제목을 설정합니다. -->
        <title>Registration system PHP and MySQL</title>
        
        <!-- 외부 스타일 시트를 포함하여 페이지의 스타일을 지정합니다. -->
        <link rel="stylesheet" href="style.css">
</head>
<body>
        <!-- 페이지의 헤더를 표시합니다. -->
        <div class="header">
                <h2>Register</h2>
        </div>

        <!-- 폼을 생성하고 데이터를 'register.php'로 전송합니다. -->
        <form method="post" action="register.php">

                <!-- 오류 메시지를 표시합니다. -->
                <?php echo display_error(); ?>

                <!-- 사용자명 입력란 -->
                <div class="input-group">
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                        <!-- 이전에 입력한 사용자명을 표시합니다. -->
                </div>

                <!-- 이메일 입력란 -->
                <div class="input-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>">
                        <!-- 이전에 입력한 이메일을 표시합니다. -->
                </div>
                
                <!-- 비밀번호 입력란 -->
                <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password_1">
                </div>

                <!-- 비밀번호 확인 입력란 -->
                <div class="input-group">
                        <label>Confirm password</label>
                        <input type="password" name="password_2">
                </div>

                <!-- 등록 버튼 -->
                <div class="input-group">
                        <button type="submit" class="btn" name="register_btn">Register</button>
                </div>

                <!-- 이미 회원이라면 로그인 링크를 표시합니다. -->
                <p>
                        Already a member? <a href="login.php">Sign in</a>
                </p>
</form>
</body>
</html>