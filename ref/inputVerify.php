<!DOCTYPE html>
    <html>
        <head>
        <meta lang="ko">
        <meta translate="no">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1">
        <meta name="robots" content="noindex" />
        <title>Validating...</title>

	    <link rel="stylesheet" type="text/css" href="https://timetable.ahn.one/static/vendor/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://timetable.ahn.one/static/css/style.css">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap">
    </head>

<?php

// Variables for Timetable Main page
$studentId = $_POST['studentId'];
$fileName = $studentId.".html";
if (file_exists("$fileName")) {
    header("Location: https://timetable.ahn.one/$studentId");
} else if (strlen($studentId) == 5) {
    echo "<script>
            alert(\"학번 $studentId\에 대한 시간표를 찾을 수 없으므로 새 시간표 생성 페이지로 이동합니다.\");
            window.location.href = 'https://timetable.ahn.one/new';
        </script>";
} else {
    echo "<script>
            alert(\"잘못된 접근입니다.\");
            window.close();
        </script>";
}
clearstatcache();

?>
