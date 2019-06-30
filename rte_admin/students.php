<?php
include("dashboard.php");
?>
<style>
.nav.std{
  background-color: #bf1e2e;
  color:#fff;
    border-right: 8px solid #6f1e2e;
}
.navTxt.std{
  color:#fff;
}
</style>
<div class="contentSec">
<form method="post" action="../fetchers/addStudent.php">
<table style="width:100%;">
<tr>
  <td style="padding:5px;">
    <span style="font-size:16px;font-weight:bold;color:#444;">ADD STUDENT</span>
  </td>
  <td style="padding:5px;">
      <span style="font-size:16px;font-weight:bold;color:#444;">LIST OF STUDENTS</span>
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
            <span class="txt lbl">Student ID: </span>
          </td>
          <td>
            <input type="text" name="studentid" placeholder="student id"required />
          </td>
        </tr>
        <tr>
          <td class="td-txt">
            <span class="txt lbl">Studen Name: </span>
          </td>
          <td>
            <input type="text" name="studentname" placeholder="student name" required/>
          </td>
        </tr>
        <tr>
          <td class="td-txt">
            <span class="txt lbl">Password: </span>
          </td>
            <td>
            <input type="text" name="studentpass" placeholder="password" required/>
          </td>
        </tr>
        <tr>
          <td class="td-txt">
            <span class="txt lbl">Email: </span>
          </td>
            <td>
            <input type="text" name="studentmail" placeholder="e-mail" required/>
          </td>
        </tr>
        <tr>
          <td class="td-txt">
            <span class="txt lbl">Gender: </span></td>
            <td><select style="padding:5px;border-radius:5px;" name="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
          </td>
        </tr>
        <tr>
          <td class="td-txt">
            <span class="txt lbl">Faculty: </span></td>
            <td><select style="padding:5px;border-radius:5px;" name="faculty">
              <option value="bit">BIT</option>
              <option value="bba">BBA</option>
            </select>
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
            <td style="background-color:#444;color:#fff;padding:10px;border-right:1px solid #fff;">Student ID</td>
            <td style="background-color:#444;color:#fff;padding:10px;border-right:1px solid #fff;">Student Name</td>
            <td style="background-color:#444;color:#fff;padding:10px;border-right:1px solid #fff;">E-mail</td>
            <td style="background-color:#444;color:#fff;padding:10px;border-right:1px solid #fff;">Gender</td>
            <td style="background-color:#444;color:#fff;padding:10px;border-right:1px solid #fff;">Faculty</td>
            <td style="background-color:#444;color:#fff;padding:10px;"><span style="font-size:12px;">Delete</span></td
          </tr>
          <?php include("../fetchers/getStudents.php");?>
        </table>
      </div>
    </td>
  </tr>
</table>
</div>
</div>
</body>
</html>
