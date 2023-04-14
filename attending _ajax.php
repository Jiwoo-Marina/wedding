<?
    // ctrl + shift + R : 새로고침(캐시까지 삭제된다.)
    // 웹페이지에서 폼전송을 보내온 내용(네임 name='네임속성')을 받기
    $name = $_GET['user_name'];
    $email = $_GET['user_email'];
    $number = $_GET['number'];
    $events = $_GET['events'];

    echo "이름 : " . $name . "<br>";
    echo "이메일 : " . $email . "<br>";
    echo "게스트 멤버 인원수 : " . $number . "<br>";
    echo "이벤트 : " . $events . "<br>";
?>
