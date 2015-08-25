<?php

require_once("includes/initialize.php");

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo APP_NAME; ?></title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/mine.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body style="background:#adadad;">

    <div class="fixed">
      <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">
            <h1><a href="#"><img src="img/iconText30white.png"></a></h1>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
        </ul>

        <section class="top-bar-section">

          <ul class="left">
            <li><a href="#"><img src="img/ic_add.png" style="height:20px"> New Message</a></li>
          </ul>

          <ul class="right">
            <li class="has-dropdown">
              <a href="#"><img src="img/ic_profile.png" style="height:20px"> Oliver Martinez</a>
              <ul class="dropdown">
                <li><a href="#"><img src="img/ic_account.png" style="height:20px"> Account</a></li>
                <li><a href="#"><img src="img/ic_settings.png" style="height:20px"> Settings</a></li>
                <li><a href="#"><img src="img/ic_logout.png" style="height:20px"> Logout</a></li>
              </ul>
            </li>
          </ul>

        </section>
      </nav>
    </div>

    <div id="mainContainer">
      <table style="width:100%;" cellspacing="0">
        <thead>
          <tr>
            <th width="10%">Phone</th>
            <th width="20%">Contacts</th>
            <th width="30%" style="background-color:#ffffff;">Messages</th>
            <th width="60%">Something Else</th>
          </tr>
        </thead>
        <tbody>
          <tr style="background:#eeeeee;">
            <!-- PHONE -->
            <td>
              
            </td>
            <!-- CONTACTS -->
            <td>
              <ul id="contactsList">
                <li>
                  
                </li>
              </ul>
            </td>
            <!-- MESSAGES -->
            <td style="background:#ffffff;">
              <ul id="messagesList">
                <li>
                  <div class="row">
                    <p class="bubbletime mine">10:00AM Sent</p><br/>
                    <p class="bubble mine">
                      Message Message Message Message Message Message Message Message Message
                    </p>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <p class="bubbletime other">10:00AM</p><br/>
                    <p class="bubble other">
                      Message Message Message Message Message Message Message Message Message Message Message Message Message Message Message Message Message Message Message Message Message Message Message Message Message Message Message
                    </p>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <p class="bubbletime mine">10:00AM Sent</p><br/>
                    <p class="bubble mine">
                      Message Message Message Message Message Message Message Message Message
                    </p>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <p class="bubbletime other">10:00AM</p><br/>
                    <p class="bubble other">
                      Message Message Message Message Message Message Message Message Message Message Message Message Message Message Message Message Message
                    </p>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <p class="bubbletime mine">10:00AM Sent</p><br/>
                    <p class="bubble mine">
                      Message Message Message Message Message Message Message Message Message
                    </p>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <p class="bubbletime mine">10:00AM Sending...</p><br/>
                    <p class="bubble mine">
                      Message Message
                    </p>
                  </div>
                </li>
              </ul>
              <div class="row" style="padding-top:20px; border-top: 1px solid #e8e8e8;">
                <div class="large-10 columns" style="padding:0px; margin:0px;">
                  <textarea placeholder="Write your message..."></textarea>
                </div>
                <div class="large-2 columns">
                  <a href="#" class="small secondary button" style="padding:10px; margin:0px;">Send</a>
                </div>
              </div>
            </td>
            <!-- SOMETHING -->
            <td>
              
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>

    <script>
      $(document).foundation();
    </script>

  </body>
</html>
