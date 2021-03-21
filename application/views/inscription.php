<!-- <form action="<?php echo site_url("action/contact"); ?>" method="post"> -->
<!-- <?php echo validation_errors(); ?> -->
<?php echo form_open('action/contact'); ?>
<div id="valide">
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h3>Créez vos identifiants</h3>
        </div>
        <div class="col-xs-12 col-md-6">
            <div class="form-group row mt-3">
                <div class="col-4">
                    <label for="mail">E-mail</label>
                </div>
                <div class="col-8 ">
                    <input type="text" class="form-control bg-transparent" name="mail" id="mail" width="200">
                    <?php echo form_error('mail', '<p class="field-error">', '</p>'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <div class="form-group row">
                <div class="col-4">
                    <label for="motdpas">Créez votre mot de passe</label>
                </div>
                <div class="col-8">
                    <input type="password" class="form-control bg-transparent" name="motdpas" id="motdpas" width="200">
                    <?php echo form_error('motdpas', '<p class="field-error">', '</p>'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="form-group row">
                    <div class="col-4">
                        <label for="confpas">Confirmation mot de passe</label>
                    </div>
                    <div class="col-8">
                        <input type="password" class="form-control bg-transparent" name="confpas" id="confpas" width="200">
                        <?php echo form_error('confpas', '<p class="field-error">', '</p>'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 text-center mt-2">
            <h3>Créez vos identifiants</h3>
        </div>
        <div class="col-xs-12 col-md-6 mt-5">
            <div class="form-group row">
                <div class="col-4">
                    <label for="Prenom">Prénom</label>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control bg-transparent" id="Prenom" name="prenom">
                    <?php echo form_error('prenom', '<p class="field-error">', '</p>'); ?><br>
                </div>
                <div class="col-4">
                    <label for="nom">Nom</label>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control bg-transparent" id="nom" name="nom">
                    <?php echo form_error('nom', '<p class="field-error">', '</p>'); ?><br>
                </div>
                <div class="col-4">
                    <label for="adresse">Adresse</label>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control bg-transparent" id="adresse" name="adresse">
                    <?php echo form_error('adresse', '<p class="field-error">', '</p>'); ?><br>
                </div>
                <div class="col-4">
                    <label for="compadres">Complément d'adresse</label>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control bg-transparent" id="compadres" name="compadres">
                    <?php echo form_error('compadres', '<p class="field-error">', '</p>'); ?><br>
                </div>
                <div class="col-4">
                    <label for="codpos">Code postal</label>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control bg-transparent" id="codpos" name="codpos">
                    <?php echo form_error('codpos', '<p class="field-error">', '</p>'); ?><br>
                </div>
                <div class="col-4">
                    <label for="ville">Ville</label>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control bg-transparent" id="ville" name="ville">
                    <?php echo form_error('ville', '<p class="field-error">', '</p>'); ?><br>
                </div>
                <div class="col-4">
                    <label for="pays">Pays</label>
                </div>
                <div class="col-8">
                    <input type="text" class="form-control bg-transparent" id="pays" name="pays">
                    <?php echo form_error('pays', '<p class="field-error">', '</p>'); ?><br>
                </div>

            </div>
        </div>


        <div class="col-xs-12 col-md-6  mt-4">

            <img src="<?php echo base_url("assets/images/body/espace client/cadre numero.png"); ?>" class="img-fluid" min-width="100%" height="auto" alt="cadre contact">

        </div>

    </div>

    <div class="text-center mt-4">
        <button type="submit"><img src="<?php echo base_url("assets/images/body/espace client/bouton_valider.png"); ?>" class="frm-submit" alt="bouton valider"></button>
    </div>
    <p class="erreur" id="red"></p>
</div>
<?php echo form_close() ?>
<div class="row mt-3">
    <a href="#"><img src="<?php echo base_url("assets/images/body/espace client/bas_de_page_pictos.png"); ?>" class="img-fluid" width="100%" height="auto" alt="image banniere"></a>
</div>
</div>