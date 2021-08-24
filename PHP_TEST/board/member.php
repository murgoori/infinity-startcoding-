<?php
// 회원가입시 입력하는 아이디,비밀번호,이메일값들을 변수에 저장한다
//$user_id = $_POST[user_id];
//$user_pw = $_POST[user_pw];
//$email   = $_POST[email];
 
if( $user_id != '' && $user_pw != '' && $email != '' ){ // 아이디, 비밀번호, 이메일을 입력했다면,
        
    include "db_info.php";

    $ret = mysqli_select_db($conn, "board");
    // True or False 반환
    if ( !$ret ){
        die('MySQL select ERROR : '. mysqli_error($conn));                                                                   // 그림2
    }
    
    // #3 Query 실행
    // 중북되는 값 확인하기
    // $user_id : 사용자가 가입하려고 하는 아이디
    // 해당 아이디가 DB에 있는지 확인한다
    $sql = "SELECT * FROM user WHERE user_id='{$user_id}'";  
 
    // mysql_query( 변수 ); => 변수에 저장된 쿼리문을 실행한다
    // SELECT 구문은 resource or False 반환
    // 나머지 구문들은 True or False 반환
    $resource = mysqli_query($conn, $sql );
 
    // mysql_num_rows( resource ); => 행의 개수 반환
    $num = mysqli_num_rows( $resource );
    
    if ( $num > 0 ){  // 아이디가 이미 존재한다면 이전 페이지로 돌아가자                                        // 그림4
        echo "<script> alert('이미 존재하는 아이디입니다.');</script>";  
        echo "<script>window.history.back();</script>";
        exit(0);
    }
    // 아이디가 존재 하지 않다면
    $sql = "INSERT INTO user(user_id, user_pw, email) VALUE( '{$user_id}',md5('{$user_pw}'),'{$email}')";
    $ret = mysqli_query($conn, $sql );
    // True or False 반환
    if ( $ret ){  
        echo "<script> alert('회원가입이 완료되었습니다');</script>";                                            // 그림3
        echo "<meta http-equiv='refresh'content=\"0;url='http://http://startcoding.epizy.com/index.php'\">"; // 그림5
        exit(0);
    }else{
        die('MySQL Query ERROR : '. mysqli_error($conn));
    }
}else{
 
?>




<?php
$URL = "http://startcoding.epizy.com/"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>회원가입 페이지</title>
    <meta name="description" content="Start Coding">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="../../common/css/common.css">
    <link href="bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="signup.css" rel="stylesheet">
</head>
<body>

<?php include "../../nav_main.php";?>

    <div class="container">
      <form class="form-signin" method=POST >
        <h2 class="form-signin-heading">Please Sign Up</h2>
        <!-- 아이디 !-->
        <input type="text" name="user_id" class="form-control" placeholder="User ID" required autofocus>
        <!-- 비밀번호 !-->
        <input type="password" name="user_pw" class="form-control" placeholder="Password" required>
 
        <!-- 이메일 !-->
        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
 
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
 
      </form>
    </div>
  </body>
</html>
 
<?php
}
?>