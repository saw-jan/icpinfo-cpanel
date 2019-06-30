<?php
include("dashboard.php");
global $message;
?>
<style>
.nav.acc{
  background-color: #bf1e2e;
  color:#fff;
    border-right: 8px solid #6f1e2e;
}
.navTxt.acc{
  color:#fff;
}
</style>
<div class="contentSec">
  <form method="post" action="../fetchers/addAccount.php" enctype="multipart/form-data">
  <table style="width:100%;">
  <tr>
    <td style="padding:5px;">
      <span style="font-size:16px;font-weight:bold;color:#444;">CREATE ADMIN ACCOUNT</span>
    </td>
    <td style="padding:5px;">
        <span style="font-size:16px;font-weight:bold;color:#444;">ACCOUNTS</span>
    </td>
    </td>
  </tr>
    <tr>
      <td style="background-color:#ddd;padding:10px;">
        <style>
        .tb .td-txt{
          text-align:right;
        }
        .tb tr td{
          padding: 5px;
        }
        </style>
        <table class="tb">
          <tr>
            <td class="td-txt" align="rigth">
              <span class="txt lbl">Username: </span>
            </td>
            <td>
              <input type="text" name="username" placeholder="username" required />
            </td>
          </tr>
          <tr>
            <td class="td-txt">
              <span class="txt lbl">Password: </span>
            </td>
            <td>
              <input type="password" name="password" placeholder="password" required/>
            </td>
          </tr>
          <tr>
            <td class="td-txt">
              <span class="txt lbl">Confirm: </span>
            </td>
              <td>
              <input type="password" name="confirm" placeholder="confirm password" required/>
            </td>
          </tr>
          <tr>
            <td class="td-txt">
              <td>
                <input type="submit" name="add" value="CREATE" style="width:100px;"/>
            </td>
          </tr>
          <tr>
            <td>
            </td>
          <td>
            <span style="font-size:12px;color:red;"><?php  if(isset($_SESSION["msg"])){
            echo $_SESSION["msg"]; unset($_SESSION["msg"]);}?></span>
          </td>
        </tr>
        </table>
        </form>
      </td>
      <td style="background-color:#fff;width:60%;padding:10px;">
        <div class="list-sec">
          <table style="border:1px solid #aaa;width:100%;" cellspacing="0">
            <tr style="background-color:;border:1px solid #aaa;">
              <td style="background-color:#444;color:#fff;padding:10px;border-right:1px solid #fff;">ID</td>
              <td style="background-color:#444;color:#fff;padding:10px;border-right:1px solid #fff;">USERNAME</td>
              <td style="background-color:#444;color:#fff;padding:10px;border-right:1px solid #fff;">PASSWORD</td>
              <td style="background-color:#444;color:#fff;padding:10px;border-right:1px solid #fff;">ROLE</td>
              <td style="background-color:#444;color:#fff;padding:10px;"><span style="font-size:12px;">Delete</span></td
            </tr>
            <?php include("../fetchers/getAccounts.php");?>

          </table>
        </div>
        <span style="font-size:12px;color:red;"><?php  if(isset($_SESSION["tbMsg"])){
        echo $_SESSION["tbMsg"]; unset($_SESSION["tbMsg"]);}?></span>
      </td>
    </tr>
  </table>
  </div>
  </div>
  </body>
  </html>
