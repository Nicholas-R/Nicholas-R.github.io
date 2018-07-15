<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Создание формы обратной связи</title>
<meta http-equiv="Refresh" content="4; URL=http://index.html/"> 
</head>
<body>



<?php
 
  $sendto = "test@gmail.com"; 
  $username = $_POST['name']; 
  $userskype = $_POST['Skype']; 
  $usermail = $_POST['email'];
  $message = $_POST['message']

// проверяем наличие данных в чекбоксе и сохраняем их
  $bem = '';
    if (empty($_POST["bem"]))
    {
       $bem = "Не знает БЭМ";
    }
    elseif (!empty($_POST["bem"]) && is_array($_POST["bem"]))
    {
       $bem = implode(" ", $_POST["bem"]);
    };

  $sem = '';
    if (empty($_POST["sem"]))
    {
       $sem = "Не верстает семантично";
    }
    elseif (!empty($_POST["sem"]) && is_array($_POST["sem"]))
    {
       $sem = implode(" ", $_POST["sem"]);
    };

  $webpack = '';
    if (empty($_POST["webpack"]))
    {
       $webpack = "Не использовал Webpack";
    }
    elseif (!empty($_POST["webpack"]) && is_array($_POST["webpack"]))
    {
       $webpack = implode(" ", $_POST["webpack"]);
    };

  $sass = '';
    if (empty($_POST["sass"]))
    {
       $sass = "Не пользовался препроцессорами";
    }
    elseif (!empty($_POST["sass"]) && is_array($_POST["sass"]))
    {
       $sass = implode(" ", $_POST["sass"]);
    };

  $es = '';
    if (empty($_POST["es"]))
    {
       $es = "Не знаком с JavaScript";
    }
    elseif (!empty($_POST["es"]) && is_array($_POST["es"]))
    {
       $es = implode(" ", $_POST["es"]);
    };

  $jq = '';
    if (empty($_POST["jq"]))
    {
       $jq = "Не знаком с jQuery";
    }
    elseif (!empty($_POST["jq"]) && is_array($_POST["jq"]))
    {
       $jq = implode(" ", $_POST["jq"]);
    };

  $svg = '';
    if (empty($_POST["svg"]))
    {
       $svg = "Не работает с SVG";
    }
    elseif (!empty($_POST["svg"]) && is_array($_POST["svg"]))
    {
       $svg = implode(" ", $_POST["svg"]);
    };

  $gulp = '';
    if (empty($_POST["gulp"]))
    {
       $gulp = "Не знает Gulp/Grunt";
    }
    elseif (!empty($_POST["gulp"]) && is_array($_POST["gulp"]))
    {
       $gulp = implode(" ", $_POST["gulp"]);
    };

  $git = '';
    if (empty($_POST["git"]))
    {
       $git = "Не использует Git";
    }
    elseif (!empty($_POST["git"]) && is_array($_POST["git"]))
    {
       $git = implode(" ", $_POST["git"]);
    };
 
// проверяем наличие данных в радиокнопке  и сохраняем их
  $seo = '';
    if (empty($_POST["seo"]))
    {
       $seo = "SEO оптимизация не требуется";
    }
    elseif (!empty($_POST["seo"]) && is_array($_POST["seo"]))
    {
       $seo = implode(" ", $_POST["seo"]);
    }
 
  $year =$_POST ['year']; // сохраняем данные из выпадающего списка
 
// Формирование заголовка письма
  $subject = "Новое сообщение";
  $headers = "From: " . strip_tags($usermail) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
 
// Формирование тела письма
  $msg = "<html><body style='font-family:Arial,sans-serif;'>";
  $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
  $msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
  $msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
  $msg .= "<p><strong>Скайп:</strong> ".$userskype."</p>\r\n";
  $msg .= "<p><strong>Сообщение:</strong> ".$message."</p>\r\n";
  $msg .= "<p><strong>Опыт:<br/> </strong> ".$bem."</p>\r\n";
  $msg .= "<p>".$sem."</p>\r\n";
  $msg .= "<p>".$webpack."</p>\r\n";
  $msg .= "<p>".$sass."</p>\r\n";
  $msg .= "<p>".$es."</p>\r\n";
  $msg .= "<p>".$jq."</p>\r\n";
  $msg .= "<p>".$svg."</p>\r\n";
  $msg .= "<p>".$gulp."</p>\r\n";
  $msg .= "<p>".$git."</p>\r\n";
  $msg .= "</body></html>";
 
// отправка сообщения
  if(@mail($sendto, $subject, $msg, $headers)) {
  echo "<center><h3>Спасибо, анкета отправлена</h3></center>"; 
  } else {
  echo "<center><h3>Извините, анкета не отправлена</h3></center>"; 
  }
 
?>

</body>
</html>