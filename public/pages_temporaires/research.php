<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/styles/generics/commons/commons.css">
    <link rel="stylesheet" href="/public/styles/research/research_style.css">
    <link rel="stylesheet" href="/public/styles/cards/style.css">
</head>
<body>
    <?php include('/wamp64/www/projects/internquest/controler/data.php');?>
    <main>
        <div id="first_row" class="row">
            <form id="filters_column" method="post">
                <div class="filter">
                    <div class="filter-title first">
                        <h1>Type de recherche</h1>
                        <a id="close-filters-button">✖</a>
                    </div>
                    <div class="filters">
                        <div>
                            <input type="radio" name="typeRecherche" value="offer">
                            <label>Offre de stage</label>
                        </div>
                        <div>
                            <input type="radio" name="typeRecherche" value="company">
                            <label>Entreprise</label>
                        </div>
                    </div>
                </div>
                <?php
                    if(isset($_POST['typeRecherche'])){
                        if($_POST['typeRecherche'] == 'offer'){
                            Data::get_researchOffersFilters(1);
                            Data::get_researchOffersFilters(2);
                            Data::durationFilter();
                        }elseif($_POST['typeRecherche'] == 'company'){
                            Data::get_researchCompanyFilters(1);
                            Data::get_researchCompanyFilters(2);
                        }
                    }
                ?>
                <div class="button-research-type">
                    <button type="submit" class="btn_model_animated">Confirmer</button>
                    <button type="reset" class="btn_model_animated">Réinitialiser</button>
                </div>
            </form>
            <div id="search_and_results_column">
                <div>
                    <div id="search_row">
                        <form id="search_bar" method="post">
                            <button id="show_filters_button" class="btn_model_animated" type="button">Filtres</button>
                            <input type="search" placeholder="Search">
                            <button type="submit" class="btn_model_animated">Search</button>
                        </form>
                    </div>
                    <div id="results_row" class="row">
                        <div id="card_list">
                            
                        </div>
                        <div id="card_info_showing">
                            <div id="title">
                                <h1>Intitulé du stage</h1>
                            </div>
                            <div id="data">
                                <ul>
                                    <li><b>Niveau d'étude :</b></li>
                                    <li><b>Durée :</b></li>
                                    <li><b>Nom de l'entreprise :</b></li>
                                    <li><b>Email de contact :</b></li>
                                    <li><b>Description :</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="/public/js/research.js"></script>
</body>
</html>