<?php
include("session.php");
$user = $_SESSION["username"];
?>
<html>
<head>
    <title></title>
    <link rel="icon" type="image/png" href="../assets/favicon.ico" />
    <link href="../style/dashboard_main.css" rel="stylesheet" />
    <link href="../style/login_main.css" rel="stylesheet" />
</head>
<body>
    <div class="wrap">
        <div class="sideSec">
            <div class="main-nav">
                <div style="margin:auto; background-color:#888;text-align:center;padding:10px 0px 10px 0px;">
                    <span style="color:#fff;">DASHBOARD<br /></span>
                </div>
                <table class="table" cellspacing="0">
                   <tr>
                        <td  class="nav hom"><a href="panel.php">
                            <table style="padding:0px;"><tr>
                                    <td style="text-align:left;"><span class="navTxt hom">HOME</span></td>
                                </tr>
                            </table>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td  class="nav std"><a href="students.php">
                             <table style=""><tr>
                                    <td style="text-align:left;"><span class="navTxt std">STUDENTS</span></td>
                                </tr>
                            </table>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td  class="nav lec"><a href="lecturers.php">
                             <table style=""><tr>
                                    <td style="text-align:left;"><span class="navTxt lec">LECTURERS</span></td>
                                </tr>
                            </table>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td  class="nav non"><a href="imp.php">
                             <table style=""><tr>
                                    <td style="text-align:left;"><span class="navTxt non">NON TEACHING</span></td>
                                </tr>
                            </table>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td  class="nav acc"><a href="accounts.php">
                             <table style=""><tr>
                                    <td style="text-align:left;"><span class="navTxt acc">ACCOUNTS</span></td>
                                </tr>
                            </table>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
        <div class="topSec">
            <table id="uTable"><tr>
                <td style="width:20%;text-align:left;">
                    <table><tr>
                        <td>
                            <img src="../assets/launcher.png" width="30" height="30"/>
                        </td>
                        <td style="color:#666;">Informatics College</td>
                        </tr></table>
                        </td>
                <td>
                <span style="font-size:20px; font-weight:bold;">ICP</span>
                <p style="font-size:16px;margin-top:-.5%;">DASHBOARD</p>
                    </td>
                <td style="width:20%;" align="right">
                <table>
                            <tr>
                                <td style="border-left:1px solid #999;"></td>
                                <td></td><td></td><td></td>
                                <td class="sett">
                                   <a href="logout.php"><img src="../assets/logout.png" width="20" alt="logout"/></a>
                                </td>
                                <td></td><td></td><td></td>
                                <td class="userimg">
                                    <a href="profile.php">
                                    <table><tr><td>
                                        <img src="../assets/pp.png" width="23"/></td>
                                        <td style="color:darkcyan;"><?php echo $user; ?></td>
                                        </tr></table>
                                    </a>
                                </td>
                            </tr>
                </table>
                    </td></tr></table>
        </div>
