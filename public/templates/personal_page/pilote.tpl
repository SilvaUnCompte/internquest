<div class="form-row">
    <div class="form-col">
        <div class="research-account-div">
            <label>Etudiants de ma promotion : </label>
            <input type="text" placeholder="Rechercher un étudiant...">
        </div>
        <div class="account-list">
            {for $i=0 to 4}
                <div class="account-example" id="student-{$i}">
                    <p class="account-title"><b>Lastname</b></p>
                    <p class="account-title"><b>Firstname</b></p>
                    <div>
                        <a class="account-company" href='#'>Editer</a>
                        <a class="account-company" href='#'>Supprimer</a>
                    </div>
                </div>
            {/for}
        </div>
        {if $smarty.session.type >= (2)}
            {include file="personal_page/admin.tpl"}
        {/if}
    </div>
    <div class="form-col buttons">
        <a class="add" href="/controler/pages/create_student.php"><button class="add">Ajouter un etudiant</button></a>
        {if $smarty.session.type >= (2)}
            <a class="add" href="/controler/pages/create_pilote.php"><button class="add">Ajouter un
                    pilote</button></a>
        {/if}
        <a class="add" href="/controler/pages/create_company.php"> <button class="add">Ajouter une
                entreprise</button></a>
        <a class="add" href="/controler/pages/create_internship.php"> <button class="add">Ajouter une offre de
                stage</button></a>
    </div>
</div>