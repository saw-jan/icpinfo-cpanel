<?php
include("dashboard.php");
?>
<style>
.nav.hom{
  background-color: #bf1e2e;
  color:#fff;
  border-right: 8px solid #6f1e2e;
}
.navTxt.hom{
  color:#fff;
}
</style>
<div class="contentSec">
  <form method="post" action="../fetchers/addNotice.php" enctype="multipart/form-data">
  <table style="width:100%;">
  <tr>
    <td style="padding:5px;">
      <span style="font-size:16px;font-weight:bold;color:#444;">POST NOTICE</span>
    </td>
    <td style="padding:5px;">
        <span style="font-size:16px;font-weight:bold;color:#444;">HISTORY</span>
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
              <span class="txt lbl">Title: </span>
            </td>
            <td>
              <textarea rows="3" cols="40" name="title" placeholder="title" required></textarea>
            </td>
          </tr>
          <tr>
            <td class="td-txt">
              <span class="txt lbl">Body: </span>
            </td>
            <td>
              <textarea rows="8" cols="40" name="content" placeholder="content" required></textarea>
            </td>
          </tr>
          <tr>
            <td class="td-txt">
              <span class="txt lbl">Attachment: </span>
            </td>
              <td>
              <input type="file" name="file" value="Attach File" />
            </td>
          </tr>
          <tr>
            <td class="td-txt">
              <td>
                <input type="submit" name="add" value="POST" style="width:100px;"/>
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
              <td style="background-color:#444;color:#fff;padding:10px;border-right:1px solid #fff;">TTILE</td>
              <td style="background-color:#444;color:#fff;padding:10px;border-right:1px solid #fff;">CONTENT</td>
              <td style="background-color:#444;color:#fff;padding:10px;"><span style="font-size:12px;">Delete</span></td
            </tr>
            <?php include("../fetchers/getNotice.php");?>
          </table>
        </div>
      </td>
    </tr>
  </table>
</div>
</div>
</body>
</html>
