<!-- <form action="<?php echo site_url("action/contact"); ?>" method="post"> -->
<!-- <?php echo validation_errors(); ?> -->
<?php echo form_open('action/contact'); ?>
<div class="row mt-5">
    <div class="col-12 text-center">
        <h3>Créez vos identifiants</h3>
    </div>
    <div class="col-xs-12 col-md-6">
        <div class="form-group row mt-3">
            <div class="col-3">
                <label for="mail">E-mail</label>
            </div>
            <div class="col-8 ">
                <input type="text" class="form-control bg-light" name="mail" id="mail" width="200">
                <?php echo form_error('mail', '<p class="field-error">', '</p>'); ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-md-6">
        <div class="form-group row">
            <div class="col-3">
                <label for="motdpas">Créez votre mot de passe</label>
            </div>
            <div class="col-8">
                <input type="password" class="form-control" name="motdpas" id="motdpas" width="200">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-md-6">
        <div class="form-group row">
            <div class="col-3">
                <label for="confpas">Confirmation mot de passe</label>
            </div>
            <div class="col-8">
                <input type="password" class="form-control" name="confpas" id="confpas" width="200">
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
            <div class="col-3">
                <label for="Prenom">Prénom</label>
            </div>
            <div class="col-8">
                <input type="text" class="form-control" id="Prenom" name="prenom"><br>
            </div>
            <div class="col-3">
                <label for="nom">Nom</label>
            </div>
            <div class="col-8">
                <input type="text" class="form-control" id="nom" value="<?php echo !empty($_POST['nom']), $_POST['nom'] = ''; ?>" name="nom"><br>
                <?php echo form_error('nom', '<p class="field-error">', '</p>'); ?>
            </div>
            <div class="col-3">
                <label for="adresse">Adresse</label>
            </div>
            <div class="col-8">
                <input type="text" class="form-control" id="adresse" name="adresse"><br>
            </div>
            <div class="col-3">
                <label for="compadres">Complément d'adresse</label>
            </div>
            <div class="col-8">
                <input type="text" class="form-control" id="compadres" name="compadres"><br>
            </div>
            <div class="col-3">
                <label for="codpos">Code postal</label>
            </div>
            <div class="col-8">
                <input type="text" class="form-control" id="codpos" name="codpos"><br>
            </div>
            <div class="col-3">
                <label for="ville">Ville</label>
            </div>
            <div class="col-8">
                <input type="text" class="form-control" id="ville" name="ville"><br>
            </div>
            <div class="col-3">
                <label for="pays">Pays</label>
            </div>
            <div class="col-8">
                <input type="text" class="form-control" id="pays" name="pays">
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-12 mt-4">

            <img src="<?php echo base_url("assets/images/body/espace client/cadre numero.png"); ?>" class="img-fluid" min-width="100%" height="auto" alt="cadre contact">

        </div>
    </div>
</div>

<div class="text-center mt-4">
    <button type="submit"><img src="<?php echo base_url("assets/images/body/espace client/bouton_valider.png"); ?>" class="frm-submit" alt="bouton valider"></button>
</div>
<?php echo form_close() ?>
<div class="row">

    <a href="#"><img src="<?php echo base_url("assets/images/body/espace client/bas_de_page_pictos.png"); ?>" class="img-fluid" width="100%" height="auto" alt="image banniere"></a>

</div>