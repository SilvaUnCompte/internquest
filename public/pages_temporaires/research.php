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
    <?php include('/wamp64/www/others/internquest_1/internquest/controler/data.php');?>
    <main>
        <div id="first_row" class="row">
            <form id="filters_column" method="get">
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
                        <?php $var = $_GET['typeRecherche']; ?>
                        <form id="search_bar" method="post">
                            <button id="show_filters_button" class="btn_model_animated" type="button">Filtres</button>
                            <input type="search" placeholder="Search" name="research-input">
                            <button type="submit" class="btn_model_animated">Search</button>
                        </form>
                    </div>
                    <div id="results_row" class="row">
                        <div id="card_list">
                            <?php
                                if(isset($_POST['research-input'])){
                                    if($_GET['typeRecherche'] == 'offer'){
                                        Data::researchOffer(htmlspecialchars($_POST['research-input']));
                                    }elseif($_GET['typeRecherche'] == 'company'){
                                        Data::researchCompany(htmlspecialchars($_POST['research-input']));
                                    }
                                }
                            ?>
                        </div>
                        <div id="card_info_showing">
                            <div id="card_infos">
                            
                            </div>
                            <?php
                            // session_start();
                            // $_SESSION['type'] = 0;
                                //if($_SESSION['type'] == 0){
                                    echo '<button id="postuler-button" class="btn_model_animated"> Postuler </button>';
                                //}elseif($_SESSION['type'] == 1){
                                    echo '<div id="buttons-div"><button id="modify-button" class="btn_model_animated"> Modifier </button>';
                                    echo '<button id="delete-button" class="btn_model_animated"> Supprimer </button></div>';
                                //}
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="/public/js/research.js"></script>
    <script src="/public/js/add_field/show_offer_data.js"></script>
    <script src="/public/js/add_field/show_company_data.js"></script>
</body>
</html>