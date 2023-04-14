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

    $user_name  = $_POST['irum'];
    $user_email = $_POST['email'];
    $user_guest = $_POST['guest_number'];
    $user_event = $_POST['irum'];


    // 데이터베이스 접속(Connection)
    echo $user_name . "님! 폼메일을 잘 받았습니다."


?>
