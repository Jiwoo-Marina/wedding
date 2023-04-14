<?
    // ctrl + shift + R : 새로고침(캐시까지 삭제된다.)
    // 웹페이지에서 폼전송을 보내온 내용(네임 name='네임속성')을 받기
    $irum          = $_POST['irum'];
    $email          = $_POST['email'];
    $guest_number   = $_POST['guest_number'];
    $event          = $_POST['event'];

    // 서버(관리자)가 클라이언트(고객)에게 응답(Response)하는 방법
    echo $irum."님! 폼메일을 잘 받았습니다. 빠른시간 내에 답변 드리겠습니다.";
?>
