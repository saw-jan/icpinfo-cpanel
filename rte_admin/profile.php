<?php
include("dashboard.php");
$name=$_SESSION['username'];
?>
<style>
</style>
<div class="contentSec">
  <form method="post" action="../fetchers/updatePro.php" enctype="multipart/form-data">
  <table style="width:100%;">
  <tr>
    <td style="padding:5px;">
      <span style="font-size:16px;font-weight:bold;color:#444;">YOUR ACCOUNT</span>
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
              <input type="text" name="name" value="<?php echo $_SESSION['username']; ?>" disabled='disabled' />
            </td>
          </tr>
          <tr>
            <td class="td-txt">
              <span class="txt lbl">Old Password: </span>
            </td>
            <td>
              <input type="password" name="oldpass" placeholder="old password" required/>
            </td>
          </tr>
          <tr>
            <td class="td-txt">
              <span class="txt lbl">New Password: </span>
            </td>
            <td>
              <input type="password" name="password" placeholder="new password" required/>
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
            <td class="td-txt"></td>
              <td>
                <input type="submit" name="add" value="UPDATE" style="width:100px;"/>
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
      <td width="40%">
        <div style="border:1px solid #aaa;padding:10%;">
          <center>
          <table>
            <tr>
              <td>
                <img src="../assets/pp.png" style="border-radius:40px;"/>
              </td>
            </tr>
            <tr>
              <td align="center">
                <?php echo $name; ?>
              </td>
            </tr>
          </table>
        </center>
        </div>
      </td>
    </tr>
  </table>
</div>
</div>
</body>
</html>
