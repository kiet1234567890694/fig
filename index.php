<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fig</title>
</head>
<body>
    <?php
        include('../fig/inc/header.php');
    ?>
    <h1>
        <?php
            include_once('../fig/system/libs/Main.php');
            include_once('../fig/system/libs/DController.php');
        

            // $main = new Main();

            $url = $_GET['url'];
            $url = rtrim($url,'/');
            //explode phá hủy ('/', trong chuỗi $url)
            $url = explode('/',$url);

            include_once('../fig/app/controllers/'.$url[0].'.php');
            
            $ctrler = new $url[0]();
            $ctrler->{$url[1]}($url[2],$url[3]);


            echo '<pre>';
            print_r($url);
            echo '<pre>';


            echo 'class: '.$url[0]. '<br/>';
            echo 'methods: '.$url[1]. '<br/>';
            echo 'para: '.$url[2]. '<br/>';
            echo 'id: '.$url[3]. '<br/>';
        ?>
    </h1>
    <?php
        include('../fig/inc/footer.php');
    ?>
</body>
</html>