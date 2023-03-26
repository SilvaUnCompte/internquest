<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="search_bar" method="post">
        <select name="typeRecherche">
            <option value="">--Please choose an option--</option>
            <option value="pilot">Pilote</option>
            <option value="student">Etudiant</option>
        </select>
        <input type="search" placeholder="Search" name="research-input">
        <button type="submit" class="btn_model_animated">Search</button>
    </form>
    <?php
        include_once('/wamp64/www/projects/internquest/controler/data.php');
        if(isset($_POST['research-input']) && $_POST['typeRecherche'] == "pilot"){
            foreach(Data::researchPilot($_POST['research-input']) as $pilot){
                echo $pilot['_id'];
                echo $pilot['name']['first'];
                echo $pilot['name']['last'];
            }
        }elseif(isset($_POST['research-input']) && $_POST['typeRecherche'] == "student"){
            foreach(Data::researchStudent($_POST['research-input']) as $student){
                echo $student['_id'];
                echo $student['name']['first'];
                echo $student['name']['last'];
            }
        }
    ?>
</body>
</html>