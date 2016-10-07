<?php 
setcookie("colors","red");
echo $_COOKIE['colors']
?>



<!--3. Пусть в массиве хранятся различные цвета для фона нашего сайта (5 цветов на выбор). Выбор цвета нужно сделать через поле ввода типа выпадающий список. Сделайте, чтобы браузер запоминал цвет фона сайта, куда мы заходим, на 5 минут, через 5 минут он снова становится тем, каким был по умолчанию и снова можно выбрать и задать цвет фона из выпадающего списка.-->

<?php
$colors = ['заленый'=>'green','синий'=>'blue','желный'=>'yellow','розовый'=>'pink','красный'=>'red'];

$bgcolor_default = 'red';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>homeWork_11</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body <?=$bgcolor_default ;?>
    

    

    <div class="container">
      
        <select>
            <option selected></option>
            <option></option>
            <option></option>
            <option></option>
            <option></option>
        </select>
        
        
    <!-- /.container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>


<!--http://www.myfirstsite.ru/articles/cookie-in-php-->