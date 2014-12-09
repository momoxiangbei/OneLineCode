

<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
  <link href="../css/login.css" rel="stylesheet" type="text/css" />
  <title>登录/注册</title>
 </head>
 <body class="logged_out_page_big_signup">
   <div class="ContentWrapper">
     <div>
      <div class="HomeLoggedOut HomeLoggedOutBigSignup">
       <div class="container">
        <div class="signup">
         <div class="signup_form_big_buttons">
          <div class="e_col w3_5 signup_form">
           <form class="" action="/signup/signup_POST/" method="POST" target="_self">
            <div class="row ">
             <div class="row">
              <div class="e_col connect_buttons instruction_text three_connect_buttons" >
               <div class="row connect_buttons_row">
                <a class="google_button submit_button" href="#" tabindex="5"><span class="google_button_text">GitHub登陆</span></a>
                <a class="facebook_button submit_button" href="#" tabindex="6" ><span class="facebook_button_text">Google登陆</span></a>
                <a class="twitter_button submit_button" href="#" tabindex="6">QQ登陆</a>
               </div>
                <a class="signup_email_link" href="../Register/register.php" tabindex="8" id="__w2_fM1I1tk_bypass_connect_link">邮箱注册</a>.
                <span class="tos_disclaimer">注册即表示您已阅读并同意<a href="/about/tos" target="_blank">服务条款</a>。</span>
              </div>
             </div>
            </div>
           </form>
          </div>
         </div>
        </div>
        <div class="login">
         <div id="ld_umwktc_73015">
          <div id="__w2_CDnarYh_logged_out_header_login">
           <div class="associated_login" id="__w2_CDnarYh_associated"></div>
           <div class="regular_login">

            <form class="inline_login_form" method="post" id="__w2_CDnarYh_login_form" action="login.php">
             <div class="title">
              Login
             </div>
             <div class="form_inputs">
              <div class="form_column">

              用户名或邮箱:<input class="text header_login_text_box ignore_interaction" group="__w2_CDnarYh_interaction" type="text" placeholder="速度要快~姿势要帅" name="name_email" tabindex="1" w2cid="CDnarYh" id="__w2_CDnarYh_email" />

              </div>
              <div class="form_column">
              密码: 
               <input class="text header_login_text_box ignore_interaction" group="__w2_CDnarYh_interaction" type="password" placeholder="Password" name="password" tabindex="2" w2cid="CDnarYh" id="__w2_CDnarYh_password" />
              <?php
                    session_start();
                    error_reporting(0);
                    require_once '../config/db.php';
                    $name_email=$_POST['name_email'];
                    $password=$_POST['password'];
                    $verify=$_POST['verify'];

                    $result=mysql_query('select * from users'); 
                    $date=array();
                    while ($row=mysql_fetch_assoc($result) ){
                         $date[]=$row;
                    }
                    foreach ($date as $user) {
                      if (($user['nick_name'] == $name_email||$user['email']==$name_email)&& $user['password'] == $password &&$verify==$_SESSION['verify']) {
                        $_SESSION['user_id']=$user['id'];
                        $_SESSION['nick_name']=$user['nick_name']; 
                        header("location:../Personal-info/index.php");
                      }elseif(($user['nick_name'] == $name_email||$user['email']==$name_email)&& $user['password'] != $password){
                          echo "密码错误";
                      }elseif(($user['nick_name'] != $name_email||$user['email']!=$name_email)&& $user['password'] == $password){
                          echo "用户名或密码错误";
                      }elseif (($user['nick_name'] == $name_email||$user['email']==$name_email)&& $user['password'] == $password &&$verify!=$_SESSION['verify']) {
                          echo "验证码错误";
                      }
                    }
               ?> 
               
               <img id="captcha_img" src="../config/verify.php?r=<?php echo rand();?>">
               <a href="javascript:void()" onclick="document.getElementById('captcha_img').src='../config/verify.php?r='+Math.random()">看不清？</a>
               <p>请输入验证码：<input type="text" name="verify"></p>
               <div group="__w2_CDnarYh_login_options" id="__w2__u_f1S0VDuQGd">
                <a class="forgot_password" href="#" id="__w2_CDnarYh_forgot_password_link">忘记密码?</a>
               </div>
              </div>


              <div class="remember_me" group="__w2_CDnarYh_login_options" id="__w2__u_QS0RQBoith">
               <input class="passwordless_checkbox ignore_interaction" group="__w2_CDnarYh_interaction" type="checkbox" checked="checked" 
               name="remember_me" value="remember_me" tabindex="3" w2cid="CDnarYh" id="__w2_CDnarYh_allow_passwordless" />
               <Rem><label for="__w2_CDnarYh_allow_passwordless">记住我</label></Rem>
              </div>
              <input class="submit_button ignore_interaction" group="__w2_CDnarYh_interaction" type="submit" value="登陆" tabindex="4" w2cid="CDnarYh" id="__w2_CDnarYh_submit_button" />
             </div>
            </form>


           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
   </div>
 </body>
</html>