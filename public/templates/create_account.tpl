{include file='helpers/header.tpl'}

<link rel="stylesheet" href="/public/styles/create/create.css">


<main id="basic-core">
    <div class="form-box">
        <h1>Ajouter un {$account_type == (1) ? 'pilote' : 'etudiant'}</h1>
        <form>
            <div class="form-row">
                <div class="form-col">
                    <div class="form-group">
                        <input type="text" class="form-control" id="input_email" placeholder="Email" required
                            pattern="[^@\s]+@[^@\s]+.[^@\s]">
                        <input type="text" class="form-control" id="input_password" placeholder="Mot de passe" required
                            pattern="[A-Za-z-]$">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="input_lastname" placeholder="Nom" required
                            pattern="[A-Za-z-]$">
                        <input type="text" class="form-control" id="input_firstname" placeholder="Prenom" required
                            pattern="[A-Za-z-]$">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="input_campus" placeholder="Campus" required
                            pattern="[A-Za-z-]$">
                        <input type="text" class="form-control" id="input_promotion" placeholder="Promotion" required
                            pattern="[A-Za-z-]$">
                    </div>
                </div>
                <img src="/assets/images/default.png" alt="add user" id="avatar">
            </div>
            <input type="submit"><input type="reset">

        </form>
    </div>
</main>

{include file="helpers/footer.tpl"}
<script src="../public/js/create.js"></script>