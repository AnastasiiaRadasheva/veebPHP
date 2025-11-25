<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>PHP tööd</title>
    <link rel="stylesheet" href="style/styleCSS.css">
    <script src="js/muusika.js" defer></script>
    <script src="js/jsSYNjaTANA.js"></script>
</head>
<body>

<?php
//päis
include("header.php");
?>
<?php
//navigeerimidmenüü
include("nav.php");
?>
<div class = "container">
        <div>
        <?php
        if (isset($_GET['link'])){
            include('content/'.$_GET['link']);
        }else{
            include('content/avaleht.php');
        }
        ?>
        </div>
        <div>
            <img src="image/smile.png" alt="pilt vabal valikul">
            <table id = "synipaev">
                <tr>
                    <td>
                        <input type="button" value="TÄNA ON" onclick="tana()">
                        <input type="button" value="Minu sünnipäevani 2008,02,13" onclick="synnipaev()">
                        <div id="tulemus"></div>

                    </td>
                </tr>
            </table>
        </div>

</div>

<?php
//jalus
include("footer.php");
?>

<script src="js/javascriptRaamat.js"></script>

</body>
</html>














