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
        if(isset($_POST['research-input'])){
            include_once('/wamp64/www/projects/internquest/controler/data.php');
            foreach(Data::researchPilot($_POST['research-input']) as $pilot){
                echo $pilot['_id'];
                echo $pilot['name']['first'];
                echo $pilot['name']['last'];
            }
        }
    ?>
    <form id="search_bar" method="post">
        <input type="search" placeholder="Search" name="research-input">
        <button type="submit" class="btn_model_animated">Search</button>
    </form>
</body>
</html>