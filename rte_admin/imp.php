<?php
include("dashboard.php");
?>
<style>
.nav.non{
  background-color: #bf1e2e;
  color:#fff;
    border-right: 8px solid #6f1e2e;
}
.navTxt.non{
  color:#fff;
}
</style>
<div class="contentSec">
  <form method="post" action="../fetchers/addImp.php" enctype="multipart/form-data">
  <table style="width:100%;">
  <tr>
    <td style="padding:5px;">
      <span style="font-size:16px;font-weight:bold;color:#444;">ADD OFFICE PERSONNEL</span>
    </td>
    <td style="padding:5px;">
        <span style="font-size:16px;font-weight:bold;color:#444;">LIST OF STAFFS</span>
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
              <span class="txt lbl">Name: </span>
            </td>
            <td>
              <input type="text" name="name" placeholder="name"required />
            </td>
          </tr>
          <tr>
            <td class="td-txt">
              <span class="txt lbl">E-Mail: </span>
            </td>
            <td>
              <input type="text" name="mail" placeholder="e-mail" required/>
            </td>
          </tr>
          <tr>
            <td class="td-txt">
              <span class="txt lbl">Contact: </span>
            </td>
              <td>
              <input type="text" name="contact" placeholder="contact" required/>
            </td>
          </tr>
          <tr>
            <td class="td-txt">
              <span class="txt lbl">Photo (Square): </span>
            </td>
              <td>
              <input type="file" name="file" value="Attach File" />
            </td>
          </tr>
          <tr>
            <td class="td-txt">
              <td>
                <input type="submit" name="add" value="Add" style="width:100px;"/>
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
              <td style="background-color:#444;color:#fff;padding:10px;border-right:1px solid #fff;">Name</td>
              <td style="background-color:#444;color:#fff;padding:10px;border-right:1px solid #fff;">Mail</td>
              <td style="background-color:#444;color:#fff;padding:10px;border-right:1px solid #fff;">Contact</td>
              <td style="background-color:#444;color:#fff;padding:10px;"><span style="font-size:12px;">Delete</span></td
            </tr>
            <?php include("../fetchers/getImp.php");?>
          </table>
        </div>
      </td>
    </tr>
  </table>
</div>
</div>
</body>
</html>
