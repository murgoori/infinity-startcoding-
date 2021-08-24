<?php
 
    session_start();    // 새로운 세션을 하나 생성한다
 
    $user_info = array( "user1" => "pass" , "user2" => "1234" );    
    // 인덱스명 : 아이디 / 요소값 : 비밀번호
 
    if ( isset( $_REQUEST[id] ) && isset( $_REQUEST[pw] )) {     
   //id와 pw가 존재한다면? = 아이디와 비밀번호를 입력했다면?
 
        if ( $user_info[$_REQUEST[id] ] === $_REQUEST[pw] ) {        
        //$user_info배열의 인덱스와 요소값과 일치하자면?
                                                    
            $_SESSION[id]=$_REQUEST[id];
            $_SESSION[login_time]=date('Y-m-d');
            
            echo "<script> alert('login success'); </script>";
 
        }else{                                                        
        // 아이디와 비밀번호가 일치하지 않는다
            echo "<script> alert('login failed');</script>";
        }
        echo '<meta http-equiv="refresh" content="0">';                
        // 새로고침
 
    }else{        
    // 로그인 하기 전, $_REQUEST변수에 아이디와 비밀번호가 저장되기 전                                                 
    
    /*
    echo "Cookie : ";
    print_r($_COOKIE);
    echo "<br>";
    echo "Session : ";
    print_r($_SESSION);
    */

    if ( !isset($_SESSION[id]) && !isset($_SESSION[login_time]) ){
    // 세션의 id와 login_time이 존재하지 않으면 아래 HTML코드를 화면에 출력
?>
        <!doctype html>
        <html>
        <head></head>
 
        <body>
            <form method=POST action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                ID : <input type="text" name="id" /><br/>
                PASSWORD :<input type="password" name="pw"/><br/>
                <input type="submit" value="Login"/>
            </form>
        </body>
        </html>
 
<?php
 
        }else{                                                      
        // 세션값들이 존재한다면 다음 문장 출력
 
            echo "already login <br>";
            echo "<a href=logout.php> Logout </a>";
        }
    }
?>