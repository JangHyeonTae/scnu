﻿<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";
    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";
?>		
        <div id="top">
            <h3>
                <a href="index.php">WEB</a>
            </h3>
            <ul id="top_menu">  
<?php
    if(!$userid) {
?>                
                <li><a href="member_form.php">회원 가입</a> </li>
                <li> | </li>
                <li><a href="login_form.php">로그인</a></li>
<?php
    } else {
                $logged = $username."(".$userid.")";
?>
                <li><?=$logged?> </li>
                <li> <a></a> </li>
                <li><a href="logout.php">로그아웃</a> </li>
                <li> <a></a></li>
                <li><a href="member_modify_form.php">정보 수정</a></li>
<?php
    }
?>
<?php
    if($userid == "hyeontae") {
?>
                <li> | </li>
                <li><a href="admin.php">관리자 모드</a></li>
<?php
    }
?>
            </ul>
        </div>
        <div id="menu_bar">
            <ul>  
                <li><a href="index.php">HOME</a></li>
                <li><a href="character_page.php">캐릭터</a></li>                                
                <li><a href="board_list.php">공지사항</a></li>
                <li><a href="mypage.php">마이페이지</a></li>
            </ul>
        </div>