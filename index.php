<?php
include("logincheck.php");
?>
 <html>
<head>
  <title>Informatics College Pokhara</title>
  <link rel="icon" type="image/png" href="assets/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="style/login_main.css"/>
</head>
  <body>
    <form method="post" action="" id="login-form">
    <div class="contain">
      <div class="l_box">
        <table class="tb outer">
          <tr>
            <td align="center">
              <img class="logo_login" src="assets/logo.png" alt="icp logo"/>
            </td>
          </tr>
          <tr>
            <td align="center">
              <table class="tb 1">
                <tr>
                  <td colspan="2"><span class="txt hdr">Log In</span>
                    <hr>
                    <br></td>
                </tr>
                <tr>
                  <td class="td right">
                    <span class="txt lbl">Username:</span>
                  </td>
                  <td>
                    <input type="text" name="user" placeholder="username" value="<?php if(isset($_COOKIE['login_user'])){ echo $_COOKIE['login_user'];} ?>" required/>
                  </td>
                </tr>
                <tr>
                  <td class="td right">
                    <span class="txt lbl">Password:</span>
                  </td>
                  <td>
                    <input type="password" name="password" placeholder="password" value="<?php if(isset($_COOKIE['login_password'])){ echo $_COOKIE['login_password'];} ?>" required/>
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <input type="checkbox" name="remember" <?php if(isset($_COOKIE['login_user'])){?>checked<?php } ?>/>
                    <label class="txt lbl" for="remember-me">Remember me</label><br><br>
                    <input type="submit" name="login" value="LOG IN"/>
                  </td>
                </tr>
            </table>
            <label class="error" style="font-size: 12px;color:red;"><?php if(isset($error)){ echo $error;} ?></label>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </form>
  </body>
</html>
