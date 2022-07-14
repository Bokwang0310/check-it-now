<!DOCTYPE html>
    <html>
        <head>
        <meta lang="ko">
        <meta translate="no">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1">
        <meta name="robots" content="noindex" />
        <title>Success</title>

	    <link rel="stylesheet" type="text/css" href="https://timetable.ahn.one/static/vendor/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://timetable.ahn.one/static/css/style.css">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap">
    </head>

<?php


// Variables for Timetable
$grade = '2';
$classId = $_POST['classId'];
$studentNumber = $_POST['studentNumber'];

// Select subject variable
$selA = $_POST['selA'];
$selB = $_POST['selB'];
$selC = $_POST['selC'];
$selLang = $_POST['selLang'];
$selArt = $_POST['selArt'];

// Student ID ex. 20100
$studentId = "2"."$classId"."$studentNumber";

// use to save .html files
$fileName = $studentId.".html";
if (strlen($studentId) == 5) {
    $isValidated = true;
} else {
    $isValidated = false;
}

// Submit Check Alert, First behavior to Save 
if ($isValidated) {
    echo '<script language="javascript">';
    echo 'alert("'.$studentId.$class.', 제출되었습니다.")';
    echo '</script>';
    // Zoom Anchor Tag

        // East Asia History
        if ($selA == "윤지은") {
            $selA_anchor = "<a href=\"https://zoom.us/j/3889715168\" target=\"_blank\">윤지은</a><br><p>(동아시아사A)</p>";
            $selAA_anchor = "<a href=\"https://zoom.us/j/3889715168\" target=\"_blank\">윤지은</a><br><p>(동아시아사A)</p>";
        }
        if ($selB == "윤지은") {
            $selB_anchor = "<a href=\"https://zoom.us/j/3889715168\" target=\"_blank\">윤지은</a><br><p>(동아시아사B)</p>";
            $selBB_anchor = "<a href=\"https://zoom.us/j/3889715168\" target=\"_blank\">윤지은</a><br><p>(동아시아사B)</p>";
        }


        // Social Culture
        if ($selA == "전세리") {
            $selA_anchor = "<a href=\"https://zoom.us/j/6486445167\" target=\"_blank\">전세리</a><br><p>(사문A)</p>";
            $selAA_anchor = "<a href=\"https://zoom.us/j/6486445167\" target=\"_blank\">전세리</a><br><p>(사문A)</p>";
        }
        if ($selB == "전세리") {
            $selB_anchor = "<a href=\"https://zoom.us/j/6486445167\" target=\"_blank\">전세리</a><br><p>(사문B)</p>";
            $selBB_anchor = "<a href=\"https://zoom.us/j/6486445167\" target=\"_blank\">전세리</a><br><p>(사문B)</p>";
        }
        if ($selC == "전세리") {
            $selC_anchor = "<a href=\"https://zoom.us/j/6486445167\" target=\"_blank\">전세리</a><br><p>(사문C)</p>";
            $selCC_anchor = "<a href=\"https://zoom.us/j/6486445167\" target=\"_blank\">전세리</a><br><p>(사문C)</p>";
        }


        // Life is beautiful
        if ($selA == "이재인") {
            $selA_anchor = "<a href=\"https://zoom.us/j/2496000445\" target=\"_blank\">이재인</a><br><p>(생명A1)</p>";
            $selAA_anchor = "<a href=\"https://zoom.us/j/2496000445\" target=\"_blank\">이재인</a><br><p>(생명A1)</p>";
        }
        if ($selB == "이재인") {
            $selB_anchor = "<a href=\"https://zoom.us/j/2496000445\" target=\"_blank\">이재인</a><br><p>(생명B1)</p>";
            $selBB_anchor = "<a href=\"https://zoom.us/j/2496000445\" target=\"_blank\">이재인</a><br><p>(생명B1)</p>";
        }
        if ($selC == "이재인") {
            $selC_anchor = "<a href=\"https://zoom.us/j/2496000445\" target=\"_blank\">이재인</a><br><p>(생명C1)</p>";
            $selCC_anchor = "<a href=\"https://zoom.us/j/2496000445\" target=\"_blank\">이재인</a><br><p>(생명C1)</p>";
        }
        if ($selA == "오참솔") {
            $selA_anchor = "<a href=\"https://zoom.us/j/8204582840\" target=\"_blank\">오참솔</a><br><p>(생명A2)</p>";
            $selAA_anchor = "<a href=\"https://zoom.us/j/8204582840\" target=\"_blank\">오참솔</a><br><p>(생명A2)</p>";
        }
        if ($selB == "오참솔") {
            $selB_anchor = "<a href=\"https://zoom.us/j/8204582840\" target=\"_blank\">오참솔</a><br><p>(생명B2)</p>";
            $selBB_anchor = "<a href=\"https://zoom.us/j/8204582840\" target=\"_blank\">오참솔</a><br><p>(생명B2)</p>";
        }
        if ($selC == "오참솔") {
            $selC_anchor = "<a href=\"https://zoom.us/j/8204582840\" target=\"_blank\">오참솔</a><br><p>(생명C2)</p>";
            $selCC_anchor = "<a href=\"https://zoom.us/j/8204582840\" target=\"_blank\">오참솔</a><br><p>(생명C2)</p>";
        }


        // Life is game 1
        if ($selA == "윤신혜") {
            $selA_anchor = "<a href=\"https://zoom.us/j/6474573961\" target=\"_blank\">윤신혜</a><br><p>(생윤A1)</p>";
            $selAA_anchor = "<a href=\"https://zoom.us/j/5243588965\" target=\"_blank\">김선훈</a><br><p>(생윤A1)</p>";
        }
        if ($selB == "윤신혜") {
            $selB_anchor = "<a href=\"https://zoom.us/j/6474573961\" target=\"_blank\">윤신혜</a><br><p>(생윤B1)</p>";
            $selBB_anchor = "<a href=\"https://zoom.us/j/5243588965\" target=\"_blank\">김선훈</a><br><p>(생윤B1)</p>";
        }
        if ($selC == "윤신혜") {
            $selC_anchor = "<a href=\"https://zoom.us/j/6474573961\" target=\"_blank\">윤신혜</a><br><p>(생윤C1)</p>";
            $selCC_anchor = "<a href=\"https://zoom.us/j/5243588965\" target=\"_blank\">김선훈</a><br><p>(생윤C1)</p>";
        }

        // Life is game 2
        if ($selA == "김선훈") {
            $selA_anchor = "<a href=\"https://zoom.us/j/5243588965\" target=\"_blank\">김선훈</a><br><p>(생윤A2)</p>";
            $selAA_anchor = "<a href=\"https://zoom.us/j/6474573961\" target=\"_blank\">윤신혜</a><br><p>(생윤A2)</p>";
        }
        if ($selB == "김선훈") {
            $selB_anchor = "<a href=\"https://zoom.us/j/5243588965\" target=\"_blank\">김선훈</a><br><p>(생윤B2)</p>";
            $selBB_anchor = "<a href=\"https://zoom.us/j/6474573961\" target=\"_blank\">윤신혜</a><br><p>(생윤B2)</p>";
        }
        if ($selC == "김선훈") {
            $selC_anchor = "<a href=\"https://zoom.us/j/5243588965\" target=\"_blank\">김선훈</a><br><p>(생윤C2)</p>";
            $selCC_anchor = "<a href=\"https://zoom.us/j/6474573961\" target=\"_blank\">윤신혜</a><br><p>(생윤C2)</p>";
        }


        // Travel Geo
        if ($selA == "이가현") {
            $selA_anchor = "<a href=\"https://zoom.us/j/8688438013\" target=\"_blank\">이가현</a><br><p>(여행지리A)</p>";
            $selAA_anchor = "<a href=\"https://zoom.us/j/8688438013\" target=\"_blank\">이가현</a><br><p>(여행지리A)</p>";
        }
        if ($selB == "이가현") {
            $selB_anchor = "<a href=\"https://zoom.us/j/8688438013\" target=\"_blank\">이가현</a><br><p>(여행지리B)</p>";
            $selBB_anchor = "<a href=\"https://zoom.us/j/8688438013\" target=\"_blank\">이가현</a><br><p>(여행지리B)</p>";
        }
        if ($selC == "이가현") {
            $selC_anchor = "<a href=\"https://zoom.us/j/8688438013\" target=\"_blank\">이가현</a><br><p>(여행지리C)</p>";
            $selCC_anchor = "<a href=\"https://zoom.us/j/8688438013\" target=\"_blank\">이가현</a><br><p>(여행지리C)</p>";
        }


        // Earth Science
        if ($selA == "김은미") {
            $selA_anchor = "<a href=\"https://zoom.us/j/7934329699\" target=\"_blank\">김은미</a><br><p>(지구A)</p>";
            $selAA_anchor = "<a href=\"https://zoom.us/j/7934329699\" target=\"_blank\">김은미</a><br><p>(지구A)</p>";
        }
        if ($selB == "김은미") {
            $selB_anchor = "<a href=\"https://zoom.us/j/7934329699\" target=\"_blank\">김은미</a><br><p>(지구B)</p>";
            $selBB_anchor = "<a href=\"https://zoom.us/j/7934329699\" target=\"_blank\">김은미</a><br><p>(지구B)</p>";
        }
        if ($selC == "김은미") {
            $selC_anchor = "<a href=\"https://zoom.us/j/7934329699\" target=\"_blank\">김은미</a><br><p>(지구C)</p>";
            $selCC_anchor = "<a href=\"https://zoom.us/j/7934329699\" target=\"_blank\">김은미</a><br><p>(지구C)</p>";
        }


        // Korea Geo 1
        if ($selA == "서희영") {
            $selA_anchor = "<a href=\"https://zoom.us/j/5581763373\" target=\"_blank\">서희영</a><br><p>(한지A1)</p>";
            $selAA_anchor = "<a href=\"https://zoom.us/j/6840736859\" target=\"_blank\">박선애</a><br><p>(한지A1)</p>";
        }
        if ($selB == "서희영") {
            $selB_anchor = "<a href=\"https://zoom.us/j/5581763373\" target=\"_blank\">서희영</a><br><p>(한지B1)</p>";
            $selBB_anchor = "<a href=\"https://zoom.us/j/6840736859\" target=\"_blank\">박선애</a><br><p>(한지B1)</p>";
        }
        if ($selC == "서희영") {
            $selC_anchor = "<a href=\"https://zoom.us/j/5581763373\" target=\"_blank\">서희영</a><br><p>(한지C1)</p>";
            $selCC_anchor = "<a href=\"https://zoom.us/j/6840736859\" target=\"_blank\">박선애</a><br><p>(한지C1)</p>";
        }


        // Korea Geo 2
        if ($selA == "박선애") {
            $selA_anchor = "<a href=\"https://zoom.us/j/6840736859\" target=\"_blank\">박선애</a><br><p>(한지A2)</p>";
            $selAA_anchor = "<a href=\"https://zoom.us/j/5581763373\" target=\"_blank\">서희영</a><br><p>(한지A2)</p>";
        }
        if ($selB == "박선애") {
            $selB_anchor = "<a href=\"https://zoom.us/j/6840736859\" target=\"_blank\">박선애</a><br><p>(한지B2)</p>";
            $selBB_anchor = "<a href=\"https://zoom.us/j/5581763373\" target=\"_blank\">서희영</a><br><p>(한지B2)</p>";
        }
        if ($selC == "박선애") {
            $selC_anchor = "<a href=\"https://zoom.us/j/6840736859\" target=\"_blank\">박선애</a><br><p>(한지C2)</p>";
            $selCC_anchor = "<a href=\"https://zoom.us/j/5581763373\" target=\"_blank\">서희영</a><br><p>(한지C2)</p>";
        }


        // Chemical Science
        if ($selA == "곽창용") {
            $selA_anchor = "<a href=\"https://zoom.us/j/4518407245\" target=\"_blank\">곽창용</a><br><p>(화학A)</p>";
            $selAA_anchor = "<a href=\"https://zoom.us/j/4518407245\" target=\"_blank\">곽창용</a><br><p>(화학A)</p>";
        }
        if ($selC == "곽창용") {
            $selC_anchor = "<a href=\"https://zoom.us/j/4518407245\" target=\"_blank\">곽창용</a><br><p>(화학C)</p>";
            $selCC_anchor = "<a href=\"https://zoom.us/j/4518407245\" target=\"_blank\">곽창용</a><br><p>(화학C)</p>";
        }


        // Physics Science
        if ($selB == "이상욱") {
            $selB_anchor = "<a href=\"https://zoom.us/j/3160741272\" target=\"_blank\">이상욱</a><br><p>(물리B)</p>";
            $selBB_anchor = "<a href=\"https://zoom.us/j/3160741272\" target=\"_blank\">이상욱</a><br><p>(물리B)</p>";
        }
        if ($selC == "이상욱") {
            $selC_anchor = "<a href=\"https://zoom.us/j/3160741272\" target=\"_blank\">이상욱</a><br><p>(물리C)</p>";
            $selCC_anchor = "<a href=\"https://zoom.us/j/3160741272\" target=\"_blank\">이상욱</a><br><p>(물리C)</p>";
        }


        // Foreign Language
        if ($selLang == "박빈") {
            $selLang_anchor = "<a href=\"https://zoom.us/j/8540396022\" target=\"_blank\">박빈</a><br><p>(일본어)</p>";
        }else {
            $selLang_anchor = "<a href=\"https://zoom.us/j/4590083489\" target=\"_blank\">박지선</a><br><p>(중국어)</p>";
        }


        // Art
        if ($selArt == "차경석") {
            $selArt_anchor = "<a href=\"https://zoom.us/j/5821627448\" target=\"_blank\">차경석</a><br><p>(미술창작)</p>";
        } else {
            $selArt_anchor = "<a href=\"https://zoom.us/j/8795597176\" target=\"_blank\">노수빈</a><br><p>(음악연주)</p>";
        }


        // Class Teacher
        if ($classId == "01") {
            $classTeacherAnchor = "<a href=\"https://zoom.us/j/3889715168\" name=\"윤지은\" target=\"_blank\">담임 줌</a>";
        } else if ($classId == "02") {
            $classTeacherAnchor = "<a href=\"https://zoom.us/j/6474573961\" name=\"윤신혜\" target=\"_blank\">담임 줌</a>";
        } else if ($classId == "03") {
            $classTeacherAnchor = "<a href=\"https://zoom.us/j/2496000445\" name=\"이재인\" target=\"_blank\">담임 줌</a>";
        } else if ($classId == "04") {
            $classTeacherAnchor = "<a href=\"https://zoom.us/j/6594501627\" name=\"최현지\" target=\"_blank\">담임 줌</a>";
        } else if ($classId == "05") {
            $classTeacherAnchor = "<a href=\"https://zoom.us/j/8540396022\" name=\"박빈\" target=\"_blank\">담임 줌</a>";
        } else if ($classId == "06") {
            $classTeacherAnchor = "<a href=\"https://zoom.us/j/7934329699\" name=\"김은미\" target=\"_blank\">담임 줌</a>";
        } else if ($classId == "07") {
            $classTeacherAnchor = "<a href=\"https://zoom.us/j/2220894600\" name=\"오민정\" target=\"_blank\">담임 줌</a>";
        } else if ($classId == "08") {
            $classTeacherAnchor = "<a href=\"https://zoom.us/j/8342219829\" name=\"박영선\" target=\"_blank\">담임 줌</a>";
        } else if ($classId == "09") {
            $classTeacherAnchor = "<a href=\"https://zoom.us/j/6486445167\" name=\"전세리\" target=\"_blank\">담임 줌</a>";
        } else if ($classId == "10") {
            $classTeacherAnchor = "<a href=\"https://zoom.us/j/6112062441\" name=\"박영걸\" target=\"_blank\">담임 줌</a>";
        }

        if ($classId == "01") {
            $timetable = "<!DOCTYPE html>
            <html>
                <head>
                    <meta charset=\"utf-8\">
                    <meta lang=\"ko\">
                    <meta translate=\"no\">
                    <meta name=\"viewport\" content=\"width=device-width, initial-scale=0.7, user-scalable=1\">
                    <title>Table $studentId</title>
            
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://timetable.ahn.one/static/vendor/bootstrap/css/bootstrap.css\">
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://timetable.ahn.one/static/css/style.css\">
                    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap\">
                </head>
                <body>
                    <div class=\"display\">
                        <div class=\"title\">
                            <h1>Table $studentId</h1>
                        </div>
                        <div class=\"table\">
                            <table>
                                <tr>
                                    <th>$classTeacherAnchor</th>
                                    <th>월</th>
                                    <th>화</th>
                                    <th>수</th>
                                    <th>목</th>
                                    <th>금</th>
                                </tr>
                                <tr>
                                    <td>1 (08:50)</td>
                                    <td>$selA_anchor</td>
                                    <td><a href=\"https://zoom.us/j/4864241619\" target=\"_blank\">조효경</a><br><p>(수학)</p></td>
                                    <td><a href=\"https://zoom.us/j/4864241619\" target=\"_blank\">조효경</a><br><p>(수학)</p></td>
                                    <td><a href=\"https://zoom.us/j/4864241619\" target=\"_blank\">조효경</a><br><p>(수학)</p></td>
                                    <td><a href=\"https://zoom.us/j/6200909873\" target=\"_blank\">박소현</a><br><p>(영어)</p></td>
                                </tr>
                                <tr>
                                    <td>2 (09:45)</td>
                                    <td>$selLang_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6200909873\" target=\"_blank\">박소현</a><br><p>(영어)</p></td>
                                    <td>$selCC_anchor</td>
                                    <td>$selBB_anchor</td>
                                    <td><a href=\"https://zoom.us/j/8342219829\" target=\"_blank\">박영선</a><br><p>(문학)</p></td>
                                </tr>
                                <tr>
                                    <td>3 (10:40)</td>
                                    <td>$selB_anchor</td>
                                    <td>$selB_anchor</td>
                                    <td><a href=\"https://zoom.us/j/9334540621\" target=\"_blank\">주오돈</a><br><p>(진로)</p></td>
                                    <td><a href=\"https://zoom.us/j/6200909873\" target=\"_blank\">박소현</a><br><p>(영어)</p></td>
                                    <td>$selCC_anchor</td>
                                </tr>
                                <tr>
                                    <td>4 (11:35)</td>
                                    <td><a href=\"https://zoom.us/j/2220894600\" target=\"_blank\">오민정</a><br><p>(문학)</p></td>
                                    <td>$selArt_anchor</td>
                                    <td>$selLang_anchor</td>
                                    <td><a href=\"https://zoom.us/j/3845559280\" target=\"_blank\">이규호</a><br><p>(스포츠생활)</p></td>
                                    <td>$selAA_anchor</td>
                                </tr>
                                <tr>
                                    <td>5 (13:40)</td>
                                    <td><a href=\"https://zoom.us/j/4864241619\" target=\"_blank\">조효경</a><br><p>(수학)</p></td>
                                    <td>$selA_anchor</td>
                                    <td><p class=\"standard\">동아리</p></td>
                                    <td>$selAA_anchor</td>
                                    <td>$selArt_anchor</td>
                                </tr>
                                <tr>
                                    <td>6 (14:35)</td>
                                    <td>$selC_anchor</td>
                                    <td><a href=\"https://zoom.us/j/2220894600\" target=\"_blank\">오민정</a><br><p>(문학)</p></td>
                                    <td><p class=\"standard\">자율</p></td>
                                    <td><a href=\"https://zoom.us/j/9334540621\" target=\"_blank\">주오돈</a><br><p>(문학)</p></td>
                                    <td>$selBB_anchor</td>
                                </tr>
                                <tr>
                                    <td>7 (15:30)</td>
                                    <td><a href=\"https://zoom.us/j/6200909873\" target=\"_blank\">박소현</a><br><p>(영어)</p></td>
                                    <td>$selC_anchor</td>
                                    <td></td>
                                    <td>$selLang_anchor</td>
                                    <td><p class=\"standard\">자율</p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </body>
            </html>";
        } else if ($classId == "02") {
            $timetable = "<!DOCTYPE html>
            <html>
                <head>
                    <meta charset=\"utf-8\">
                    <meta lang=\"ko\">
                    <meta translate=\"no\">
                    <meta name=\"viewport\" content=\"width=device-width, initial-scale=0.7, user-scalable=1\">
                    <title>Table $studentId</title>
            
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://timetable.ahn.one/static/vendor/bootstrap/css/bootstrap.css\">
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://timetable.ahn.one/static/css/style.css\">
                    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap\">
                </head>
                <body>
                    <div class=\"display\">
                        <div class=\"title\">
                            <h1>Table $studentId</h1>
                        </div>
                        <div class=\"table\">
                            <table>
                                <tr>
                                    <th>$classTeacherAnchor</th>
                                    <th>월</th>
                                    <th>화</th>
                                    <th>수</th>
                                    <th>목</th>
                                    <th>금</th>
                                </tr>
                                <tr>
                                    <td>1 (08:50)</td>
                                    <td>$selA_anchor</td>
                                    <td><a href=\"https://zoom.us/j/9334540621\" target=\"_blank\">주오돈</a><br><p>(진로)</p></td>
                                    <td><a href=\"https://zoom.us/j/6594501627\" target=\"_blank\">최현지</a><br><p>(영어)</p></td>
                                    <td><a href=\"https://zoom.us/j/3845559280\" target=\"_blank\">이규호</a><br><p>(스포츠생활)</p></td>
                                    <td><a href=\"https://zoom.us/j/9334540621\" target=\"_blank\">주오돈</a><br><p>(문학)</p></td>
                                </tr>
                                <tr>
                                    <td>2 (09:45)</td>
                                    <td>$selLang_anchor</td>
                                    <td><a href=\"https://zoom.us/j/8342219829\" target=\"_blank\">박영선</a><br><p>(문학)</p></td>
                                    <td>$selCC_anchor</td>
                                    <td>$selBB_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6594501627\" target=\"_blank\">최현지</a><br><p>(영어)</p></td>
                                </tr>
                                <tr>
                                    <td>3 (10:40)</td>
                                    <td>$selB_anchor</td>
                                    <td>$selB_anchor</td>
                                    <td><a href=\"https://zoom.us/j/4864241619\" target=\"_blank\">조효경</a><br><p>(수학)</p></td>
                                    <td><a href=\"https://zoom.us/j/4864241619\" target=\"_blank\">조효경</a><br><p>(수학)</p></td>
                                    <td>$selCC_anchor</td>
                                </tr>
                                <tr>
                                    <td>4 (11:35)</td>
                                    <td><a href=\"https://zoom.us/j/4864241619\" target=\"_blank\">조효경</a><br><p>(수학)</p></td>
                                    <td>$selArt_anchor</td>
                                    <td>$selLang_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6594501627\" target=\"_blank\">최현지</a><br><p>(영어)</p></td>
                                    <td>$selAA_anchor</td>
                                </tr>
                                <tr>
                                    <td>5 (13:40)</td>
                                    <td><a href=\"https://zoom.us/j/6594501627\" target=\"_blank\">최현지</a><br><p>(영어)</p></td>
                                    <td>$selA_anchor</td>
                                    <td><p class=\"standard\">동아리</p></td>
                                    <td>$selAA_anchor</td>
                                    <td>$selArt_anchor</td>
                                </tr>
                                <tr>
                                    <td>6 (14:35)</td>
                                    <td>$selC_anchor</td>
                                    <td><a href=\"https://zoom.us/j/4864241619\" target=\"_blank\">조효경</a><br><p>(수학)</p></td>
                                    <td><p class=\"standard\">자율</p></td>
                                    <td><a href=\"https://zoom.us/j/2220894600\" target=\"_blank\">오민정</a><br><p>(문학)</p></td>
                                    <td>$selBB_anchor</td>
                                </tr>
                                <tr>
                                    <td>7 (15:30)</td>
                                    <td><a href=\"https://zoom.us/j/2220894600\" target=\"_blank\">오민정</a><br><p>(문학)</p></td>
                                    <td>$selC_anchor</td>
                                    <td></td>
                                    <td>$selLang_anchor</td>
                                    <td><p class=\"standard\">자율</p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </body>
            </html>";
        } else if ($classId == "03") {
            $timetable = "<!DOCTYPE html>
            <html>
                <head>
                    <meta charset=\"utf-8\">
                    <meta lang=\"ko\">
                    <meta translate=\"no\">
                    <meta name=\"viewport\" content=\"width=device-width, initial-scale=0.7, user-scalable=1\">
                    <title>Table $studentId</title>
            
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://timetable.ahn.one/static/vendor/bootstrap/css/bootstrap.css\">
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://timetable.ahn.one/static/css/style.css\">
                    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap\">
                </head>
                <body>
                    <div class=\"display\">
                        <div class=\"title\">
                            <h1>Table $studentId</h1>
                        </div>
                        <div class=\"table\">
                            <table>
                                <tr>
                                    <th>$classTeacherAnchor</th>
                                    <th>월</th>
                                    <th>화</th>
                                    <th>수</th>
                                    <th>목</th>
                                    <th>금</th>
                                </tr>
                                <tr>
                                    <td>1 (08:50)</td>
                                    <td>$selA_anchor</td>
                                    <td>$selLang_anchor</td>
                                    <td><a href=\"https://zoom.us/j/3845559280\" target=\"_blank\">이규호</a><br><p>(스포츠생활)</p></td>
                                    <td><a href=\"https://zoom.us/j/9334540621\" target=\"_blank\">주오돈</a><br><p>(문학)</p></td>
                                    <td><a href=\"https://zoom.us/j/4864241619\" target=\"_blank\">조효경</a><br><p>(수학)</p></td>
                                </tr>
                                <tr>
                                    <td>2 (09:45)</td>
                                    <td><a href=\"https://zoom.us/j/6200909873\" target=\"_blank\">박소현</a><br><p>(영어)</p></td>
                                    <td><a href=\"https://zoom.us/j/9334540621\" target=\"_blank\">주오돈</a><br><p>(문학)</p></td>
                                    <td>$selCC_anchor</td>
                                    <td>$selBB_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6200909873\" target=\"_blank\">박소현</a><br><p>(영어)</p></td>
                                </tr>
                                <tr>
                                    <td>3 (10:40)</td>
                                    <td>$selB_anchor</td>
                                    <td>$selB_anchor</td>
                                    <td>$selArt_anchor</td>
                                    <td>$selLang_anchor</td>
                                    <td>$selCC_anchor</td>
                                </tr>
                                <tr>
                                    <td>4 (11:35)</td>
                                    <td>$selArt_anchor</td>
                                    <td><a href=\"https://zoom.us/j/4864241619\" target=\"_blank\">조효경</a><br><p>(수학)</p></td>
                                    <td><a href=\"https://zoom.us/j/8342219829\" target=\"_blank\">박영선</a><br><p>(문학)</p></td>
                                    <td><a href=\"https://zoom.us/j/2496000445\" target=\"_blank\">이재인</a><br><p>(진로)</p></td>
                                    <td>$selAA_anchor</td>
                                </tr>
                                <tr>
                                    <td>5 (13:40)</td>
                                    <td><a href=\"https://zoom.us/j/2220894600\" target=\"_blank\">오민정</a><br><p>(문학)</p></td>
                                    <td>$selA_anchor</td>
                                    <td><p class=\"standard\">동아리</p></td>
                                    <td>$selAA_anchor</td>
                                    <td>$selLang_anchor</td>
                                </tr>
                                <tr>
                                    <td>6 (14:35)</td>
                                    <td>$selC_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6200909873\" target=\"_blank\">박소현</a><br><p>(영어)</p></td>
                                    <td><p class=\"standard\">자율</p></td>
                                    <td><a href=\"https://zoom.us/j/4864241619\" target=\"_blank\">조효경</a><br><p>(수학)</p></td>
                                    <td>$selBB_anchor</td>
                                </tr>
                                <tr>
                                    <td>7 (15:30)</td>
                                    <td><a href=\"https://zoom.us/j/4864241619\" target=\"_blank\">조효경</a><br><p>(수학)</p></td>
                                    <td>$selC_anchor</td>
                                    <td></td>
                                    <td><a href=\"https://zoom.us/j/6200909873\" target=\"_blank\">박소현</a><br><p>(영어)</p></td>
                                    <td><p class=\"standard\">자율</p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </body>
            </html>";
        } else if ($classId == "04") {
            $timetable = "<!DOCTYPE html>
            <html>
                <head>
                    <meta charset=\"utf-8\">
                    <meta lang=\"ko\">
                    <meta translate=\"no\">
                    <meta name=\"viewport\" content=\"width=device-width, initial-scale=0.7, user-scalable=1\">
                    <title>Table $studentId</title>
            
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://timetable.ahn.one/static/vendor/bootstrap/css/bootstrap.css\">
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://timetable.ahn.one/static/css/style.css\">
                    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap\">
                </head>
                <body>
                    <div class=\"display\">
                        <div class=\"title\">
                            <h1>Table $studentId</h1>
                        </div>
                        <div class=\"table\">
                            <table>
                                <tr>
                                    <th>$classTeacherAnchor</th>
                                    <th>월</th>
                                    <th>화</th>
                                    <th>수</th>
                                    <th>목</th>
                                    <th>금</th>
                                </tr>
                                <tr>
                                    <td>1 (08:50)</td>
                                    <td>$selA_anchor</td>
                                    <td>$selLang_anchor</td>
                                    <td><a href=\"https://zoom.us/j/2220894600\" target=\"_blank\">오민정</a><br><p>(문학)</p></td>
                                    <td><a href=\"https://zoom.us/j/8795597176\" target=\"_blank\">노수빈</a><br><p>(진로)</p></td>
                                    <td><a href=\"https://zoom.us/j/6594501627\" target=\"_blank\">최현지</a><br><p>(영어)</p></td>
                                </tr>
                                <tr>
                                    <td>2 (09:45)</td>
                                    <td><a href=\"https://zoom.us/j/6594501627\" target=\"_blank\">최현지</a><br><p>(영어)</p></td>
                                    <td><a href=\"https://zoom.us/j/4864241619\" target=\"_blank\">조효경</a><br><p>(수학)</p></td>
                                    <td>$selCC_anchor</td>
                                    <td>$selBB_anchor</td>
                                    <td><a href=\"https://zoom.us/j/4864241619\" target=\"_blank\">조효경</a><br><p>(수학)</p></td>
                                </tr>
                                <tr>
                                    <td>3 (10:40)</td>
                                    <td>$selB_anchor</td>
                                    <td>$selB_anchor</td>
                                    <td>$selArt_anchor</td>
                                    <td>$selLang_anchor</td>
                                    <td>$selCC_anchor</td>
                                </tr>
                                <tr>
                                    <td>4 (11:35)</td>
                                    <td>$selArt_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6594501627\" target=\"_blank\">최현지</a><br><p>(영어)</p></td>
                                    <td><a href=\"https://zoom.us/j/4864241619\" target=\"_blank\">조효경</a><br><p>(수학)</p></td>
                                    <td><a href=\"https://zoom.us/j/4864241619\" target=\"_blank\">조효경</a><br><p>(수학)</p></td>
                                    <td>$selAA_anchor</td>
                                </tr>
                                <tr>
                                    <td>5 (13:40)</td>
                                    <td><a href=\"https://zoom.us/j/9334540621\" target=\"_blank\">주오돈</a><br><p>(문학)</p></td>
                                    <td>$selA_anchor</td>
                                    <td><p class=\"standard\">동아리</p></td>
                                    <td>$selAA_anchor</td>
                                    <td>$selLang_anchor</td>
                                </tr>
                                <tr>
                                    <td>6 (14:35)</td>
                                    <td>$selC_anchor</td>
                                    <td><a href=\"https://zoom.us/j/3845559280\" target=\"_blank\">이규호</a><br><p>(스포츠생활)</p></td>
                                    <td><p class=\"standard\">자율</p></td>
                                    <td><a href=\"https://zoom.us/j/6594501627\" target=\"_blank\">최현지</a><br><p>(영어)</p></td>
                                    <td>$selBB_anchor</td>
                                </tr>
                                <tr>
                                    <td>7 (15:30)</td>
                                    <td><a href=\"https://zoom.us/j/8342219829\" target=\"_blank\">박영선</a><br><p>(문학)</p></td>
                                    <td>$selC_anchor</td>
                                    <td></td>
                                    <td><a href=\"https://zoom.us/j/9334540621\" target=\"_blank\">주오돈</a><br><p>(문학)</p></td>
                                    <td><p class=\"standard\">자율</p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </body>
            </html>";
        } else if ($classId == "05") {
            $timetable = "<!DOCTYPE html>
            <html>
                <head>
                    <meta charset=\"utf-8\">
                    <meta lang=\"ko\">
                    <meta translate=\"no\">
                    <meta name=\"viewport\" content=\"width=device-width, initial-scale=0.7, user-scalable=1\">
                    <title>Table $studentId</title>
            
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://timetable.ahn.one/static/vendor/bootstrap/css/bootstrap.css\">
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://timetable.ahn.one/static/css/style.css\">
                    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap\">
                </head>
                <body>
                    <div class=\"display\">
                        <div class=\"title\">
                            <h1>Table $studentId</h1>
                        </div>
                        <div class=\"table\">
                            <table>
                                <tr>
                                    <th>$classTeacherAnchor</th>
                                    <th>월</th>
                                    <th>화</th>
                                    <th>수</th>
                                    <th>목</th>
                                    <th>금</th>
                                </tr>
                                <tr>
                                    <td>1 (08:50)</td>
                                    <td>$selA_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6200909873\" target=\"_blank\">박소현</a><br><p>(영어)</p></td>
                                    <td>$selLang_anchor</td>
                                    <td><a href=\"https://zoom.us/j/2220894600\" target=\"_blank\">오민정</a><br><p>(문학)</p></td>
                                    <td>$selArt_anchor</td>
                                </tr>
                                <tr>
                                    <td>2 (09:45)</td>
                                    <td><a href=\"https://zoom.us/j/6112062441\" target=\"_blank\">박영걸</a><br><p>(수학)</p></td>
                                    <td>$selLang_anchor</td>
                                    <td>$selCC_anchor</td>
                                    <td>$selBB_anchor</td>
                                    <td><a href=\"https://zoom.us/j/2496000445\" target=\"_blank\">이재인</a><br><p>(진로)</p></td>
                                </tr>
                                <tr>
                                    <td>3 (10:40)</td>
                                    <td>$selB_anchor</td>
                                    <td>$selB_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6200909873\" target=\"_blank\">박소현</a><br><p>(영어)</p></td>
                                    <td><a href=\"https://zoom.us/j/6112062441\" target=\"_blank\">박영걸</a><br><p>(수학)</p></td>
                                    <td>$selCC_anchor</td>
                                </tr>
                                <tr>
                                    <td>4 (11:35)</td>
                                    <td>$selLang_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6112062441\" target=\"_blank\">박영걸</a><br><p>(수학)</p></td>
                                    <td><a href=\"https://zoom.us/j/9334540621\" target=\"_blank\">주오돈</a><br><p>(문학)</p></td>
                                    <td>$selArt_anchor</td>
                                    <td>$selAA_anchor</td>
                                </tr>
                                <tr>
                                    <td>5 (13:40)</td>
                                    <td><a href=\"https://zoom.us/j/6200909873\" target=\"_blank\">박소현</a><br><p>(영어)</p></td>
                                    <td>$selA_anchor</td>
                                    <td><p class=\"standard\">동아리</p></td>
                                    <td>$selAA_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6112062441\" target=\"_blank\">박영걸</a><br><p>(수학)</p></td>
                                </tr>
                                <tr>
                                    <td>6 (14:35)</td>
                                    <td>$selC_anchor</td>
                                    <td><a href=\"https://zoom.us/j/9334540621\" target=\"_blank\">주오돈</a><br><p>(문학)</p></td>
                                    <td><p class=\"standard\">자율</p></td>
                                    <td><a href=\"https://zoom.us/j/6200909873\" target=\"_blank\">박소현</a><br><p>(영어)</p></td>
                                    <td>$selBB_anchor</td>
                                </tr>
                                <tr>
                                    <td>7 (15:30)</td>
                                    <td><a href=\"https://zoom.us/j/3845559280\" target=\"_blank\">이규호</a><br><p>(스포츠생활)</p></td>
                                    <td>$selC_anchor</td>
                                    <td></td>
                                    <td><a href=\"https://zoom.us/j/8342219829\" target=\"_blank\">박영선</a><br><p>(문학)</p></td>
                                    <td><p class=\"standard\">자율</p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </body>
            </html>";
        } else if ($classId == "06") {
            $timetable = "<!DOCTYPE html>
            <html>
                <head>
                    <meta charset=\"utf-8\">
                    <meta lang=\"ko\">
                    <meta translate=\"no\">
                    <meta name=\"viewport\" content=\"width=device-width, initial-scale=0.7, user-scalable=1\">
                    <title>Table $studentId</title>
            
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://timetable.ahn.one/static/vendor/bootstrap/css/bootstrap.css\">
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://timetable.ahn.one/static/css/style.css\">
                    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap\">
                </head>
                <body>
                    <div class=\"display\">
                        <div class=\"title\">
                            <h1>Table $studentId</h1>
                        </div>
                        <div class=\"table\">
                            <table>
                                <tr>
                                    <th>$classTeacherAnchor</th>
                                    <th>월</th>
                                    <th>화</th>
                                    <th>수</th>
                                    <th>목</th>
                                    <th>금</th>
                                </tr>
                                <tr>
                                    <td>1 (08:50)</td>
                                    <td>$selA_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6594501627\" target=\"_blank\">최현지</a><br><p>(영어)</p></td>
                                    <td>$selLang_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6112062441\" target=\"_blank\">박영걸</a><br><p>(수학)</p></td>
                                    <td>$selArt_anchor</td>
                                </tr>
                                <tr>
                                    <td>2 (09:45)</td>
                                    <td><a href=\"https://zoom.us/j/9334540621\" target=\"_blank\">주오돈</a><br><p>(문학)</p></td>
                                    <td>$selLang_anchor</td>
                                    <td>$selCC_anchor</td>
                                    <td>$selBB_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6112062441\" target=\"_blank\">박영걸</a><br><p>(수학)</p></td>
                                </tr>
                                <tr>
                                    <td>3 (10:40)</td>
                                    <td>$selB_anchor</td>
                                    <td>$selB_anchor</td>
                                    <td><a href=\"https://zoom.us/j/8342219829\" target=\"_blank\">박영선</a><br><p>(문학)</p></td>
                                    <td><a href=\"https://zoom.us/j/6594501627\" target=\"_blank\">최현지</a><br><p>(영어)</p></td>
                                    <td>$selCC_anchor</td>
                                </tr>
                                <tr>
                                    <td>4 (11:35)</td>
                                    <td>$selLang_anchor</td>
                                    <td><a href=\"https://zoom.us/j/2220894600\" target=\"_blank\">오민정</a><br><p>(문학)</p></td>
                                    <td><a href=\"https://zoom.us/j/6112062441\" target=\"_blank\">박영걸</a><br><p>(수학)</p></td>
                                    <td>$selArt_anchor</td>
                                    <td>$selAA_anchor</td>
                                </tr>
                                <tr>
                                    <td>5 (13:40)</td>
                                    <td><a href=\"https://zoom.us/j/6112062441\" target=\"_blank\">박영걸</a><br><p>(수학)</p></td>
                                    <td>$selA_anchor</td>
                                    <td><p class=\"standard\">동아리</p></td>
                                    <td>$selAA_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6594501627\" target=\"_blank\">최현지</a><br><p>(영어)</p></td>
                                </tr>
                                <tr>
                                    <td>6 (14:35)</td>
                                    <td>$selC_anchor</td>
                                    <td><a href=\"https://zoom.us/j/2496000445\" target=\"_blank\">이재인</a><br><p>(진로)</p></td>
                                    <td><p class=\"standard\">자율</p></td>
                                    <td><a href=\"https://zoom.us/j/3845559280\" target=\"_blank\">이규호</a><br><p>(스포츠생활)</p></td>
                                    <td>$selBB_anchor</td>
                                </tr>
                                <tr>
                                    <td>7 (15:30)</td>
                                    <td><a href=\"https://zoom.us/j/6594501627\" target=\"_blank\">최현지</a><br><p>(영어)</p></td>
                                    <td>$selC_anchor</td>
                                    <td></td>
                                    <td><a href=\"https://zoom.us/j/2220894600\" target=\"_blank\">오민정</a><br><p>(문학)</p></td>
                                    <td><p class=\"standard\">자율</p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </body>
            </html>";
        } else if ($classId == "07") {
            $timetable = "<!DOCTYPE html>
            <html>
                <head>
                    <meta charset=\"utf-8\">
                    <meta lang=\"ko\">
                    <meta translate=\"no\">
                    <meta name=\"viewport\" content=\"width=device-width, initial-scale=0.7, user-scalable=1\">
                    <title>Table $studentId</title>
            
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://timetable.ahn.one/static/vendor/bootstrap/css/bootstrap.css\">
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://timetable.ahn.one/static/css/style.css\">
                    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap\">
                </head>
                <body>
                    <div class=\"display\">
                        <div class=\"title\">
                            <h1>Table $studentId</h1>
                        </div>
                        <div class=\"table\">
                            <table>
                                <tr>
                                    <th>$classTeacherAnchor</th>
                                    <th>월</th>
                                    <th>화</th>
                                    <th>수</th>
                                    <th>목</th>
                                    <th>금</th>
                                </tr>
                                <tr>
                                    <td>1 (08:50)</td>
                                    <td>$selA_anchor</td>
                                    <td>$selArt_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6112062441\" target=\"_blank\">박영걸</a><br><p>(수학)</p></td>
                                    <td><a href=\"https://zoom.us/j/6200909873\" target=\"_blank\">박소현</a><br><p>(영어)</p></td>
                                    <td>$selLang_anchor</td>
                                </tr>
                                <tr>
                                    <td>2 (09:45)</td>
                                    <td><a href=\"https://zoom.us/j/2220894600\" target=\"_blank\">오민정</a><br><p>(문학)</p></td>
                                    <td><a href=\"https://zoom.us/j/2220894600\" target=\"_blank\">오민정</a><br><p>(문학)</p></td>
                                    <td>$selCC_anchor</td>
                                    <td>$selBB_anchor</td>
                                    <td><a href=\"https://zoom.us/j/9334540621\" target=\"_blank\">주오돈</a><br><p>(문학)</p></td>
                                </tr>
                                <tr>
                                    <td>3 (10:40)</td>
                                    <td>$selB_anchor</td>
                                    <td>$selB_anchor</td>
                                    <td>$selLang_anchor</td>
                                    <td><a href=\"https://zoom.us/j/3845559280\" target=\"_blank\">이규호</a><br><p>(스포츠생활)</p></td>
                                    <td>$selCC_anchor</td>
                                </tr>
                                <tr>
                                    <td>4 (11:35)</td>
                                    <td><a href=\"https://zoom.us/j/6200909873\" target=\"_blank\">박소현</a><br><p>(영어)</p></td>
                                    <td><a href=\"https://zoom.us/j/8342219829\" target=\"_blank\">박영선</a><br><p>(문학)</p></td>
                                    <td><a href=\"https://zoom.us/j/6200909873\" target=\"_blank\">박소현</a><br><p>(영어)</p></td>
                                    <td>$selLang_anchor</td>
                                    <td>$selAA_anchor</td>
                                </tr>
                                <tr>
                                    <td>5 (13:40)</td>
                                    <td>$selArt_anchor</td>
                                    <td>$selA_anchor</td>
                                    <td><p class=\"standard\">동아리</p></td>
                                    <td>$selAA_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6200909873\" target=\"_blank\">박소현</a><br><p>(영어)</p></td>
                                </tr>
                                <tr>
                                    <td>6 (14:35)</td>
                                    <td>$selC_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6112062441\" target=\"_blank\">박영걸</a><br><p>(수학)</p></td>
                                    <td><p class=\"standard\">자율</p></td>
                                    <td><a href=\"https://zoom.us/j/5821627448\" target=\"_blank\">차경석</a><br><p>(진로)</p></td>
                                    <td>$selBB_anchor</td>
                                </tr>
                                <tr>
                                    <td>7 (15:30)</td>
                                    <td><a href=\"https://zoom.us/j/6112062441\" target=\"_blank\">박영걸</a><br><p>(수학)</p></td>
                                    <td>$selC_anchor</td>
                                    <td></td>
                                    <td><a href=\"https://zoom.us/j/6112062441\" target=\"_blank\">박영걸</a><br><p>(수학)</p></td>
                                    <td><p class=\"standard\">자율</p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </body>
            </html>";
        } else if ($classId == "08") {
            $timetable = "<!DOCTYPE html>
            <html>
                <head>
                    <meta charset=\"utf-8\">
                    <meta lang=\"ko\">
                    <meta translate=\"no\">
                    <meta name=\"viewport\" content=\"width=device-width, initial-scale=0.7, user-scalable=1\">
                    <title>Table $studentId</title>
            
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://timetable.ahn.one/static/vendor/bootstrap/css/bootstrap.css\">
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://timetable.ahn.one/static/css/style.css\">
                    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap\">
                </head>
                <body>
                    <div class=\"display\">
                        <div class=\"title\">
                            <h1>Table $studentId</h1>
                        </div>
                        <div class=\"table\">
                            <table>
                                <tr>
                                    <th>$classTeacherAnchor</th>
                                    <th>월</th>
                                    <th>화</th>
                                    <th>수</th>
                                    <th>목</th>
                                    <th>금</th>
                                </tr>
                                <tr>
                                    <td>1 (08:50)</td>
                                    <td>$selA_anchor</td>
                                    <td>$selArt_anchor</td>
                                    <td><a href=\"https://zoom.us/j/9445576370\" target=\"_blank\">조영재</a><br><p>(수학)</p></td>
                                    <td><a href=\"https://zoom.us/j/6594501627\" target=\"_blank\">최현지</a><br><p>(영어)</p></td>
                                    <td>$selLang_anchor</td>
                                </tr>
                                <tr>
                                    <td>2 (09:45)</td>
                                    <td><a href=\"https://zoom.us/j/9445576370\" target=\"_blank\">조영재</a><br><p>(수학)</p></td>
                                    <td><a href=\"https://zoom.us/j/9445576370\" target=\"_blank\">조영재</a><br><p>(수학)</p></td>
                                    <td>$selCC_anchor</td>
                                    <td>$selBB_anchor</td>
                                    <td><a href=\"https://zoom.us/j/2220894600\" target=\"_blank\">오민정</a><br><p>(문학)</p></td>
                                </tr>
                                <tr>
                                    <td>3 (10:40)</td>
                                    <td>$selB_anchor</td>
                                    <td>$selB_anchor</td>
                                    <td>$selLang_anchor</td>
                                    <td><a href=\"https://zoom.us/j/9445576370\" target=\"_blank\">조영재</a><br><p>(수학)</p></td>
                                    <td>$selCC_anchor</td>
                                </tr>
                                <tr>
                                    <td>4 (11:35)</td>
                                    <td><a href=\"https://zoom.us/j/6594501627\" target=\"_blank\">최현지</a><br><p>(영어)</p></td>
                                    <td><a href=\"https://zoom.us/j/3845559280\" target=\"_blank\">이규호</a><br><p>(스포츠생활)</p></td>
                                    <td><a href=\"https://zoom.us/j/6594501627\" target=\"_blank\">최현지</a><br><p>(영어)</p></td>
                                    <td>$selLang_anchor</td>
                                    <td>$selAA_anchor</td>
                                </tr>
                                <tr>
                                    <td>5 (13:40)</td>
                                    <td>$selArt_anchor</td>
                                    <td>$selA_anchor</td>
                                    <td><p class=\"standard\">동아리</p></td>
                                    <td>$selAA_anchor</td>
                                    <td><a href=\"https://zoom.us/j/8342219829\" target=\"_blank\">박영선</a><br><p>(문학)</p></td>
                                </tr>
                                <tr>
                                    <td>6 (14:35)</td>
                                    <td>$selC_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6594501627\" target=\"_blank\">최현지</a><br><p>(영어)</p></td>
                                    <td><p class=\"standard\">자율</p></td>
                                    <td><a href=\"https://zoom.us/j/8342219829\" target=\"_blank\">박영선</a><br><p>(문학)</p></td>
                                    <td>$selBB_anchor</td>
                                </tr>
                                <tr>
                                    <td>7 (15:30)</td>
                                    <td><a href=\"https://zoom.us/j/9334540621\" target=\"_blank\">주오돈</a><br><p>(문학)</p></td>
                                    <td>$selC_anchor</td>
                                    <td></td>
                                    <td><a href=\"https://zoom.us/j/5821627448\" target=\"_blank\">차경석</a><br><p>(진로))</p></td>
                                    <td><p class=\"standard\">자율</p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </body>
            </html>";
        } else if ($classId == "09") {
            $timetable = "<!DOCTYPE html>
            <html>
                <head>
                    <meta charset=\"utf-8\">
                    <meta lang=\"ko\">
                    <meta translate=\"no\">
                    <meta name=\"viewport\" content=\"width=device-width, initial-scale=0.7, user-scalable=1\">
                    <title>Table $studentId</title>
            
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://timetable.ahn.one/static/vendor/bootstrap/css/bootstrap.css\">
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://timetable.ahn.one/static/css/style.css\">
                    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap\">
                </head>
                <body>
                    <div class=\"display\">
                        <div class=\"title\">
                            <h1>Table $studentId</h1>
                        </div>
                        <div class=\"table\">
                            <table>
                                <tr>
                                    <th>$classTeacherAnchor</th>
                                    <th>월</th>
                                    <th>화</th>
                                    <th>수</th>
                                    <th>목</th>
                                    <th>금</th>
                                </tr>
                                <tr>
                                    <td>1 (08:50)</td>
                                    <td>$selA_anchor</td>
                                    <td><a href=\"https://zoom.us/j/2220894600\" target=\"_blank\">오민정</a><br><p>(문학)</p></td>
                                    <td>$selArt_anchor</td>
                                    <td>$selLang_anchor</td>
                                    <td><a href=\"https://zoom.us/j/9445576370\" target=\"_blank\">조영재</a><br><p>(수학)</p></td>
                                </tr>
                                <tr>
                                    <td>2 (09:45)</td>
                                    <td><a href=\"https://zoom.us/j/5821627448\" target=\"_blank\">차경석</a><br><p>(진로))</p></td>
                                    <td><a href=\"https://zoom.us/j/4913630307\" target=\"_blank\">신호정</a><br><p>(영어)</p></td>
                                    <td>$selCC_anchor</td>
                                    <td>$selBB_anchor</td>
                                    <td>$selArt_anchor</td>
                                </tr>
                                <tr>
                                    <td>3 (10:40)</td>
                                    <td>$selB_anchor</td>
                                    <td>$selB_anchor</td>
                                    <td><a href=\"https://zoom.us/j/4913630307\" target=\"_blank\">신호정</a><br><p>(영어)</p></td>
                                    <td><a href=\"https://zoom.us/j/8342219829\" target=\"_blank\">박영선</a><br><p>(문학)</p></td>
                                    <td>$selCC_anchor</td>
                                </tr>
                                <tr>
                                    <td>4 (11:35)</td>
                                    <td><a href=\"https://zoom.us/j/8342219829\" target=\"_blank\">박영선</a><br><p>(문학)</p></td>
                                    <td><a href=\"https://zoom.us/j/9445576370\" target=\"_blank\">조영재</a><br><p>(수학)</p></td>
                                    <td><a href=\"https://zoom.us/j/3845559280\" target=\"_blank\">이규호</a><br><p>(스포츠생활)</p></td>
                                    <td><a href=\"https://zoom.us/j/9334540621\" target=\"_blank\">주오돈</a><br><p>(문학)</p></td>
                                    <td>$selAA_anchor</td>
                                </tr>
                                <tr>
                                    <td>5 (13:40)</td>
                                    <td><a href=\"https://zoom.us/j/9445576370\" target=\"_blank\">조영재</a><br><p>(수학)</p></td>
                                    <td>$selA_anchor</td>
                                    <td><p class=\"standard\">동아리</p></td>
                                    <td>$selAA_anchor</td>
                                    <td><a href=\"https://zoom.us/j/4913630307\" target=\"_blank\">신호정</a><br><p>(영어)</p></td>
                                </tr>
                                <tr>
                                    <td>6 (14:35)</td>
                                    <td>$selC_anchor</td>
                                    <td>$selLang_anchor</td>
                                    <td><p class=\"standard\">자율</p></td>
                                    <td><a href=\"https://zoom.us/j/4913630307\" target=\"_blank\">신호정</a><br><p>(영어)</p></td>
                                    <td>$selBB_anchor</td>
                                </tr>
                                <tr>
                                    <td>7 (15:30)</td>
                                    <td>$selLang_anchor</td>
                                    <td>$selC_anchor</td>
                                    <td></td>
                                    <td><a href=\"https://zoom.us/j/9445576370\" target=\"_blank\">조영재</a><br><p>(수학)</p></td>
                                    <td><p class=\"standard\">자율</p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </body>
            </html>";
        } else if ($classId == "10") {
            $timetable = "<!DOCTYPE html>
            <html>
                <head>
                    <meta charset=\"utf-8\">
                    <meta lang=\"ko\">
                    <meta translate=\"no\">
                    <meta name=\"viewport\" content=\"width=device-width, initial-scale=0.7, user-scalable=1\">
                    <title>Table $studentId</title>
            
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://timetable.ahn.one/static/vendor/bootstrap/css/bootstrap.css\">
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://timetable.ahn.one/static/css/style.css\">
                    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap\">
                </head>
                <body>
                    <div class=\"display\">
                        <div class=\"title\">
                            <h1>Table $studentId</h1>
                        </div>
                        <div class=\"table\">
                            <table>
                                <tr>
                                    <th>$classTeacherAnchor</th>
                                    <th>월</th>
                                    <th>화</th>
                                    <th>수</th>
                                    <th>목</th>
                                    <th>금</th>
                                </tr>
                                <tr>
                                    <td>1 (08:50)</td>
                                    <td>$selA_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6112062441\" target=\"_blank\">박영걸</a><br><p>(수학)</p></td>
                                    <td>$selArt_anchor</td>
                                    <td>$selLang_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6112062441\" target=\"_blank\">박영걸</a><br><p>(수학)</p></td>
                                </tr>
                                <tr>
                                    <td>2 (09:45)</td>
                                    <td><a href=\"https://zoom.us/j/3845559280\" target=\"_blank\">이규호</a><br><p>(스포츠생활)</p></td>
                                    <td><a href=\"https://zoom.us/j/5821627448\" target=\"_blank\">차경석</a><br><p>(진로)</p></td>
                                    <td>$selCC_anchor</td>
                                    <td>$selBB_anchor</td>
                                    <td>$selArt_anchor</td>
                                </tr>
                                <tr>
                                    <td>3 (10:40)</td>
                                    <td>$selB_anchor</td>
                                    <td>$selB_anchor</td>
                                    <td><a href=\"https://zoom.us/j/6112062441\" target=\"_blank\">박영걸</a><br><p>(수학)</p></td>
                                    <td><a href=\"https://zoom.us/j/9334540621\" target=\"_blank\">주오돈</a><br><p>(문학)</p></td>
                                    <td>$selCC_anchor</td>
                                </tr>
                                <tr>
                                    <td>4 (11:35)</td>
                                    <td><a href=\"https://zoom.us/j/4913630307\" target=\"_blank\">신호정</a><br><p>(영어)</p></td>
                                    <td><a href=\"https://zoom.us/j/4913630307\" target=\"_blank\">신호정</a><br><p>(영어)</p></td>
                                    <td><a href=\"https://zoom.us/j/4913630307\" target=\"_blank\">신호정</a><br><p>(영어)</p></td>
                                    <td><a href=\"https://zoom.us/j/2220894600\" target=\"_blank\">오민정</a><br><p>(문학)</p></td>
                                    <td>$selAA_anchor</td>
                                </tr>
                                <tr>
                                    <td>5 (13:40)</td>
                                    <td><a href=\"https://zoom.us/j/8342219829\" target=\"_blank\">박영선</a><br><p>(문학)</p></td>
                                    <td>$selA_anchor</td>
                                    <td><p class=\"standard\">동아리</p></td>
                                    <td>$selAA_anchor</td>
                                    <td><a href=\"https://zoom.us/j/2220894600\" target=\"_blank\">오민정</a><br><p>(문학)</p></td>
                                </tr>
                                <tr>
                                    <td>6 (14:35)</td>
                                    <td>$selC_anchor</td>
                                    <td>$selLang_anchor</td>
                                    <td><p class=\"standard\">자율</p></td>
                                    <td><a href=\"https://zoom.us/j/6112062441\" target=\"_blank\">박영걸</a><br><p>(수학)</p></td>
                                    <td>$selBB_anchor</td>
                                </tr>
                                <tr>
                                    <td>7 (15:30)</td>
                                    <td>$selLang_anchor</td>
                                    <td>$selC_anchor</td>
                                    <td></td>
                                    <td><a href=\"https://zoom.us/j/4913630307\" target=\"_blank\">신호정</a><br><p>(영어)</p></td>
                                    <td><p class=\"standard\">자율</p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </body>
            </html>";

            // Export studentId.html file to local directory
            file_put_contents ($fileName, $timetable);
            // Redirect client to Timetable location
            header('Location: https://timetable.ahn.one/'.$studentId);
        }
} else {
    echo '<script language="javascript">';
    echo 'alert("잘못된 접근입니다.");';
    echo 'window.location.href = \'http://timetable.ahn.one/\';';
    echo '</script>';
}

?>
