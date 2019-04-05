<!DOCTYPE html >
<html leng="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="static/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="static/main.css">
</head>
<body>
<?
    include 'libs/negoogle.php';

    if(isset($_POST['query'])){
    $query = $_POST['query'];
	
    $google = new negoogle();
    
    $google->search($query);

    $url = $google->getUrl();
    $title = $google->getTitle();
    $text = $google->getText();

    
    include 'template/index.php';

}else{

    include 'template/index.php';
}

?>
 </body>
</html>


