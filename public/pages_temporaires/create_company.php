<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/styles/create/create.css">
    <title>Document</title>
</head>
<body>
    <main id="basic-core">
        <div class="form-box">
            <h2>Ajouter une entreprise</h2>
            <form action="/controler/create_company.php" method="post">
                <div class="form-row">
                    <div class="form-line">
                        <label for="input-name">Nom</label>
                        <div class="form-group">
                        <input type="text" class="form-control" id="input-name" placeholder="Nom de l'entreprise" required
                            pattern="[A-Za-z-]$">
                        </div>
                        <label for="input_localisation">Localisations</label>
                        <div class="form-group">
                            <input type="text" class="form-control localisation-input" id="input_street" placeholder="Numéro de rue" required
                                pattern="[A-Za-z-]$">
                            <input type="text" class="form-control localisation-input" id="input_city" placeholder="Nom de la ville" required
                                pattern="[A-Za-z-]$">
                            <input type="text" class="form-control localisation-input" id="input_postal" placeholder="Code postal" required
                                pattern="[0-9]$">
                            <button type="button" onclick="add_location()">+</button>
                        </div>
                        <div id="entry-address" class="entry-box"></div>
                        <label for="input_localisation">Secteur d'activité</label>
                        <div class="form-group">
                            <input type="text" class="form-control" id="input_sector" placeholder="Secteur d'activité" required
                                pattern="[A-Za-z-]$">
                            <button type="button" onclick="add_sector()">+</button>
                        </div>
                        <div id="entry-sector" class="entry-box"></div>
                    </div>
                    <img src="/assets/images/default.png" alt="add user" id="avatar">
                </div>
                <div id="invisible-div">

                </div>
                <nav id="form-button"><input type="submit" value="Valider"><input type="reset" onclick="clear_field()"></nav>
            </form>
        </div>
    </main>
    <script src="/public/js/add_field/company.js"></script>
</body>
</html>