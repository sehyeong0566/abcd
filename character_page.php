<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <title>유튜봐</title>
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
            <h1>카테고리</h1>
            <div id="main_img_bar1">
                <img src="./img/char1.PNG">
            </div>

            <table class="list-table">
                <thead>
                    <tr>
                        <th width="500" style="text-align: center;">설명</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="description-box">먹방</td>
                    </tr>
                </tbody>
            </table>
            <div id="main_img_bar1">
                <img src="./img/char2.PNG">
            </div>

            <table class="list-table">
                <thead>
                    <tr>
                        <th width="500" style="text-align: center;">설명</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="description-box">게임</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>

</body>
</html>