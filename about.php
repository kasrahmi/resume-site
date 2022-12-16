<!DOCTYPE html>

<html>
    <head>
        <script>
            function submit1()
            {
            let text;
            if (confirm("از صحت اطلاعات وارد شده اطمینان دارید؟") == true) {
            text = "ارسال شد!";
            } else {
            text = "کنسل شد!";
            }


            window.alert(text);
            }

        </script>
        <meta charset="utf-8">
        <title>ارتباط</title>
        <link rel="stylesheet" href="style.css">
        <style>
            footer {
              text-align: center;
              padding: 3px;
              background-color: #333;
              color: white;
            }
        </style>
    </head>
    <body dir="rtl" bgcolor=#111 >

        <!-- <nav class="navbar"></nav> -->
        <ul class="header">
            <center><b>به نام خداوند رنگین کمان</b></center>
            <li><a href="index.php">خانه</a></li>
            <li><a href="intro.php">معرفی</a></li>
            <li><a href="skills.php">مهارتها</a></li>
            <li><a href="achievment.php">افتخارات</a></li>
            <li><a href="about.php">تماس با من</a></li>
        </ul>
        <div class="container">
            <form method="post">
                شما از دو راه لینک های فوتر یا پر کردن این فرم میتونید با من ارتباط بگیرید.
                <br>
                <br>
              <label for="fname">نام</label>
              <input type="text" id="fname" name="firstname" placeholder="نام شما ...">
          
              <label for="lname">نام خانوادگی</label>
              <input type="text" id="lname" name="lastname" placeholder="نام خانوادگی شما ...">
              
              <label for="lname">ایمیل</label>
              <input type="text" id="mail" name="email" placeholder="ایمیل شما ...">
              
              <label for="subject">موضوع</label>
              <textarea id="subject" name="subject" placeholder="نوشته شما ..." style="height:200px"></textarea>
          
              <button onclick="submit1()">ارسال</button>

            </form>
            
          </div>
          
            
            <footer>
              <p>
              <a href="https://a.kasrahmi@gmail.com"><img src="gmail" alt="gmail" width="80"></a>
              <a href="https://www.instagram.com/kasra.hmi/"><img src="Instagram_logo_2016.png" alt="instagram" width="80"></a>
              <a href="https://github.com/kasrahmi"><img src = "github.png" alt="github" width="80"></a>
            </p>
            </footer>
            
          
        <!-- ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        } -->

    </body>
</html>

<?php
    if(isset($_POST['lastname']))
    {
    chdir("text files");

    $fileCount = count (glob ('*.txt'));
    $newName = ( $fileCount + 1) . '.txt';

    $data=$_POST['lastname'];

    $fp = fopen($newName, 'a');
    fwrite($fp, $data . PHP_EOL);
    fclose($fp);
    }
?>

<?php
    if(isset($_POST['email']))
    {

    $fileCount = count (glob ('*.txt'));
    $newName = ($fileCount) . '.txt';
    
    $data=$_POST['email'];

    $fp = fopen($newName, 'a');
    fwrite($fp, $data . PHP_EOL);
    fclose($fp);
    }
?>

<?php
    if(isset($_POST['subject']))
    {
    
    $fileCount = count (glob ('*.txt'));
    $newName = ( $fileCount ) . '.txt';

    $data=$_POST['subject'];

    $fp = fopen($newName, 'a');
    fwrite($fp, $data . PHP_EOL);
    fclose($fp);
    }
?>