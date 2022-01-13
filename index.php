<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (!isset($_SESSION['user'])) {
        header('location:index.php?page=connexion');
    }
    function viewIsExist(String $nameViewRequested): String {
        $serverViewPath = Constants::getViewPath();
        $fileRequested = trim(strtolower($nameViewRequested)) . '.view' . '.php';
        return $serverViewPath . $fileRequested;
    }

    $pageRequested = viewIsExist($_GET['page']);

    if (file_exists($pageRequested)) {
        if ($_GET['page'] == "404") {
            http_response_code(404);
            include('view/404.view.php');
        } else {
            include($pageRequested);
        }
    } else {
        http_response_code(404);
        include('view/404.view.php');
    }
    ?>
</body>
</html>