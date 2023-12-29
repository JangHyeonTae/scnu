<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <title>WEB</title>
    <link rel="stylesheet" type="text/css" href="./css/common.css">
    <link rel="stylesheet" type="text/css" href="./css/message.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <style>
        .description-box {
            border: 1px solid #000; /* You can adjust the border style as needed */
            padding: 10px; /* Add padding for better visual appearance */
            text-align: center;
        }

        /* Center the description and the box */
        .centered-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Adjust as needed */
        }
    </style>
</head>
<body> 
    <header>
        <?php include "header.php";?>
    </header>  

    <div id="board_area" class="centered-content">
        <section>
            <h1>캐릭터소개</h1>
            <div id="main_img_bar1">
                <img src="./img/char1.png">
            </div>

            <table class="list-table">
                <thead>
                    <tr>
                        <th width="500" style="text-align: center;">설명</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="description-box">자주 삐지는 기본 캐릭터로 쓰담쓰담을 좋아합니다.</td>
                    </tr>
                </tbody>
            </table>
            <div id="main_img_bar1">
                <img src="./img/char2.png">
            </div>

            <table class="list-table">
                <thead>
                    <tr>
                        <th width="500" style="text-align: center;">설명</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="description-box">신이나면 멈출줄 모르는 질주본능을 가진 활동적인 캐릭터로 자주 혼내줘야 합니다.</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>

</body>
</html>