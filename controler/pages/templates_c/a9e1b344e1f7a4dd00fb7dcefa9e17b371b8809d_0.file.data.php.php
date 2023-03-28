<?php
/* Smarty version 4.2.1, created on 2023-03-28 11:26:22
  from 'C:\xampp\htdocs\www\internquest\controler\data.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6422b2be888c03_67864042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9e1b344e1f7a4dd00fb7dcefa9e17b371b8809d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\www\\internquest\\controler\\data.php',
      1 => 1679995154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6422b2be888c03_67864042 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>

    require ($_SERVER['DOCUMENT_ROOT'].'/database/connexion.php');
    class Data{
        public static function createPassword($rawPassword){
            $salt = bin2hex(random_bytes(16));
            $hash = hash_pbkdf2("sha512", $rawPassword, $salt, 1000, 64);
            return array("salt" => $salt, "hash" => $hash);
        }
        public static function checkPassword($rawPassword, $salt, $hash){
            $checkHash = hash_pbkdf2("sha512", $rawPassword, $salt, 1000, 64);
            return $checkHash == $hash;
        }
        public static function verifyEmailExist($email){
            global $account;
            if($account->findOne(['email' => $email]) == null){
                return -1;
            }else{
                return $account->findOne(["email" => $email], ['projection' => []])['_id'];
            }
        }
        public static function checkLogin($email, $password){
            global $account;
            $accountId = Data::verifyEmailExist($email);
            if($accountId!= -1){
                $passwordTab = $account->findOne(["_id" => $accountId], ['projection' => ["_id" => 0, "password" => 1]]);
                if(Data::checkPassword($password, $passwordTab["password"]["salt"], $passwordTab["password"]['hash'])){
                    return 0;
                }else{
                    return -2;
                }
            }else{
                return -1;
            }
        }
        public static function researchCompany($text){
            global $company;
            $resultsTab = $company->find([],['projection' => ['_id' => 1, 'name' => 1, 'visible' => 1, 'pilot_trust' => 1, 'grades' => 1]]);
            foreach($resultsTab as $doc){
                $averageGrade = 0;
                foreach($doc['grades'] as $grade){
                    $averageGrade += $grade['grade'];
                }
                if(str_contains(strtolower($doc['name']),strtolower($text)) && $doc['visible']){
                    echo '<div class="wrapper" value="'.$doc['_id'].'">';
                        echo '<div class="header header_home unselectable">'.$doc['name'].'</div>';
                        echo '<div class="content content_home">';
                            echo '<p class="unselectable">Note du pilote : '.$doc['pilot_trust'].'</p>';
                            echo '<p class="unselectable">'.(count($doc['grades']) != 0 ? $averageGrade/count($doc['grades']) : $averageGrade).'/5</p>';
                        echo '</div>';
                    echo '</div>';
                }
            }
        }
        public static function researchOffer($text){
            global $internship;
            $resultsTab = $internship->find([],['projection' => ['_id' => 1, 'title' => 1, 'lvl' => 1, 'duration' => 1, 'company_name' => 1, 'location' => 1, 'contactEmail' => 1, 'apply_count' => 1, 'enable' => 1]]);
            foreach($resultsTab as $doc){
                if(str_contains(strtolower($doc['title']),strtolower($text)) && $doc['enable']){
                    echo '<div class="wrapper" value="'.$doc['_id'].'">';
                        echo '<div class="header header_home unselectable">'.$doc['title'].'</div>';
                        echo '<div class="content content_home">';
                            echo '<p class="unselectable">'.$doc['lvl'].'</p>';
                            echo '<p class="unselectable">'.$doc['duration'].' semaines </p>';
                            echo '<p class="unselectable">'.$doc['location']['city'].'</p>';
                            echo '<p class="unselectable"><a href="mailto:'.$doc['contactEmail'].'">'.$doc['contactEmail'].'</a></p><br>';
                            echo '<p class="unselectable">✉︎ '.$doc['apply_count'].'</p>';
                        echo '</div>';
                        echo '<img class="image" src="/assets/images/corner.png" alt=\'corner-image\'>';
                    echo '</div>';
                }
            }
        }
        public static function get_researchOffersFilters($type){
            global $internship;
            if($type == 1){
                $resultsTab = $internship->find([],['projection' => ['_id' => 0, 'lvl' => 1]]);
                $studyLevels = array();
                foreach($resultsTab as $element){
                    if(!in_array($element['lvl'], $studyLevels)){
                        $studyLevels[$element['lvl']] = 1;
                    }else{
                        $studyLevels[$element['lvl']] += 1;
                    }
                }
                echo '<div class="filter">';
                echo '<div class="filter-title first">';
                echo '<h1>Niveau(x) d\'étude</h1>';
                echo '</div>';
                foreach($studyLevels as $element => $n){
                    echo '<div class="filters">';
                    echo '<div>';
                    echo '<input type="checkbox" name="schoolLevel" value='.$element.'>';
                    echo "<label>$element ($n)</label>";
                    echo '</div>';
                    echo '</div>';
                }
                echo '</div>';
            }elseif($type == 2){
                $resultsTab = $internship->find([],['projection' => ['_id' => 0, 'company_name' => 1]]);
                $companyNames = array();
                foreach($resultsTab as $element){
                    if(!in_array($element['company_name'], $companyNames)){
                        $companyNames[$element['company_name']] = 1;
                    }else{
                        $companyNames[$element['company_name']] += 1;
                    }
                }
                echo '<div class="filter">';
                echo '<div class="filter-title first">';
                echo '<h1>Entreprises</h1>';
                echo '</div>';
                foreach($companyNames as $element => $n){
                    echo '<div class="filters">';
                    echo '<div>';
                    echo '<input type="checkbox" name="typeRecherche">';
                    echo "<label>$element ($n)</label>";
                    echo '</div>';
                    echo '</div>';
                }
                echo '</div>';
            }
        }
        public static function durationFilter(){
            echo '<div class="filter">';
            echo '<div class="filter-title first">';
            echo '<h1>Durée du stage</h1>';
            echo '</div>';
            echo '<div class="filters duration">';
            echo '<div>';
            echo '<label>min</label>';
            echo '<input id="min-entry" type="number" min=1 max=28 name="min-duration">';
            echo '</div>';
            echo '<div>';
            echo '<label>max</label>';
            echo '<input id="max-entry" type="number" min=1 max=28 name="max-duration">';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        public static function get_researchCompanyFilters($type){
            global $company;
            if($type == 1){
                $resultsTab = $company->find([],['projection' => ['_id' => 0, 'sectors' => 1]]);
                $sectorsTab = array();
                foreach($resultsTab as $sectors1){
                    foreach($sectors1 as $n => $sectors2){
                        foreach($sectors2 as $n => $sector){
                            if(!(in_array($sector, array_keys($sectorsTab)))){
                                $sectorsTab[$sector] = 1;
                            }else{
                                $sectorsTab[$sector] += 1;
                            }
                        }
                    }
                }
                echo '<div class="filter">';
                echo '<div class="filter-title first">';
                echo '<h1>Secteurs d\'activité</h1>';
                echo '</div>';
                foreach($sectorsTab as $element => $n){
                    echo '<div class="filters">';
                    echo '<div>';
                    echo '<input type="checkbox" name="activitySectors" value='.$element.'>';
                    echo "<label>$element ($n)</label>";
                    echo '</div>';
                    echo '</div>';
                }
                echo '</div>';
            }elseif($type == 2){
                $resultsTab = $company->find([],['projection' => ['_id' => 0, 'grades' => 1]]);
                $gradesTab = array();
                foreach($resultsTab as $grades){
                    foreach($grades as $grade){
                        foreach($grade as $element){
                            if(!(in_array($element['grade'], array_keys($gradesTab)))){
                                $gradesTab[$element['grade']] = 1;
                            }else{
                                $gradesTab[$element['grade']] += 1;
                            }
                        }
                    }
                }
                echo '<div class="filter">';
                echo '<div class="filter-title first">';
                echo '<h1>Notes</h1>';
                echo '</div>';
                foreach($gradesTab as $element => $n){
                    echo '<div class="filters">';
                    echo '<div>';
                    echo '<input type="radio" name="grades" value='.$element.'>';
                    echo "<label>$element ($n)</label>";
                    echo '</div>';
                    echo '</div>';
                }
                echo '</div>';
            }
        }
    }
<?php }
}
