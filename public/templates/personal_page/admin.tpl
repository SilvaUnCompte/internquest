<div class="form-row">
    <div class="form-col">
        <div class="research-account-div">
            <label>Pilote de mon centre : </label>
            <input type="text" placeholder="Rechercher un pilote...">
        </div>
        <div class="account-list">
            {for $i=0 to 4}
                <div class="account-example" id="student-{$i}">
                    <p class="account-title"><b>Lastname</b></p>
                    <a class="account-company" href='#'>Firstname</a>
                </div>
            {/for}
        </div>
    </div>
</div>