<!-- functions.php 파일을 포함하여 필요한 기능들을 가져옵니다. -->
<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
        <!-- 웹 페이지의 타이틀을 설정합니다. -->
        <title>Registration system PHP and MySQL - Create user</title>
        
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
        <div class="header">ㅋ
                <h2>Admin - create user</h2>
        </div>
         <!-- POST 메서드를 사용하여 데이터를 'create_user.php' 파일로 전송하는 폼을 생성합니다. -->
        <form method="post" action="create_user.php">

                <!-- 함수 display_error()를 호출하여 오류 메시지를 출력합니다. -->
                <?php echo display_error(); ?>

                <!-- 사용자명을 입력하는 input 필드를 생성합니다. -->
                <div class="input-group">
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                </div>                       

                <!-- 이메일을 입력하는 input 필드를 생성합니다. -->
                <div class="input-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>">
                </div>
                <!-- 사용자 유형을 선택하는 드롭다운 메뉴를 생성합니다. -->
                <div class="input-group">
                        <label>User type</label>
                        <select name="user_type" id="user_type" >
                                <option value=""></option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                        </select>
                </div>

                <!-- 비밀번호를 입력하는 input 필드를 생성합니다. -->
                <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password_1">
                </div>

                <!-- 비밀번호를 확인하는 input 필드를 생성합니다. -->
                <div class="input-group">
                        <label>Confirm password</label>
                        <input type="password" name="password_2">
                </div>

                <!-- 사용자를 생성하는 버튼을 생성합니다. -->
                <div class="input-group">
                        <button type="submit" class="btn" name="register_btn"> + Create user</button>
                </div>
        </form>
</body>
</html>