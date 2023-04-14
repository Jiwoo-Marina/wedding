<?
    // 데이터베이스(Data Base) 인증(인가) Authentication
    // 1.데이터베이스 서버
    // 2.데이터베이스 사용자 이름
    // 3.데이터베이스 사용자 비밀번호
    // 4.데이터베이스 이름
    $user_name = '차분희';
    $user_email = 'moonseonjong@naver.com';
    $user_guest = '3';
    $user_event = 'SQL이벤트';
    $user_date = '2023-04-12';

    $conn = mysqli_connect($user_name,$user_email,$user_guest,$user_event,$user_date );
    mysqli_set_charset($conn, 'utf8');

    $user_name = '이소라';
    $user_email = 'leesora@naver.com';
    $user_guest = '3';
    $user_event = '신상품 24시간 세일 이벤트';
    $user_date = '2023-04-14';


    // 데이터베이스 접속(Connection)
    $sql = "INSERT INTO form_mail(user_name, user_email, user_guest, user_event, user_date) 
            VALUES('$user_name','$user_email','$user_guest','$user_event','$user_date')";
    $res = mysqli_query($conn, $sql);
    
    if($res==true){
        echo "데이터 저장 되었습니다.";
    }
    else{
        echo "데이터 저장 실패했습니다.";
    }



?>
