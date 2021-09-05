<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Bearbeiten</title>
    <!-- Set base for relative urls to the directory of index.php: -->
    <base href="<?= ROOT_URL ?>/">
    <link rel="stylesheet" href="public/css/app.css">



    <link rel="stylesheet" href="public/bootstrap-4.5.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="public/fontawesome-free-5.15.1-web/css/all.css">
    <!-- Mein css -->
    <link rel="stylesheet" href="public/css/Style.css">
    <!-- Einbinden von JavaScript -->
    <script src="public/jQuery/jquery-3.5.1.js"></script>
    <script src="public/bootstrap-4.5.3-dist/js/bootstrap.js"></script>
    <!-- Mein JavaScript -->
    <script src="public/JavaScript/StyleJavaScript.js"></script>

</head>
<body class="bodyContact">

<!-- Inhalts Container -->
<div class="container screenSize">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Reparaturwerkstatt</h1>
            <p class="lead">Auftrag erfassen</p>
            <form class="needs-validation" id="CustomizationForm" action="update?id=<?= $res['personalienID'] ?>" method="post" novalidate>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="auftragsID">Auftrags ID</label>
                        <input type="text" class="form-control" id="auftragsID" value="<?= $res['personalienID']; ?>" disabled>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $res['name']; ?>" required>
                        <div class="valid-feedback">
                            Sieht gut aus!
                        </div>
                        <div class="invalid-feedback">
                            Bitte Name eingeben!
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <!-- Email abfrage-->
                    <div class="input-group is-invalid">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validatedInputGroupPrepend">Email @</span>
                        </div>
                        <input type="text" class="form-control" aria-describedby="validatedInputGroupPrepend" id="email" name="email" value="<?= $res['email']; ?>" required>
                        <div class="valid-feedback">
                            Sieht gut aus!
                        </div>
                        <div class="invalid-feedback">
                            Bitte Email eingeben!
                        </div>
                    </div>
                </div>
                <!--
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                 -->
                <div class="mb-3">
                    <!-- Telefonnummer abfrage-->
                    <div class="input-group is-invalid">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validatedInputGroupPrepend">Telefonnummer</span>
                        </div>
                        <input type="text" class="form-control" aria-describedby="validatedInputGroupPrepend" id="telefon" name="telefon" value="<?= $res['telefonnummer']; ?>">
                        <div class="valid-feedback">
                            Sieht gut aus!
                        </div>
                    </div>
                </div>


                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="dringlichkeit">Dringlichkeit</label>
                        <input type="text" class="form-control" id="auftragsID" value="<?= Dringlichkeit::asArray()[$res['dringlichkeit']]['name'] ?>" disabled>
                        <div class="valid-feedback">
                            Sieht gut aus!
                        </div>
                        <div class="invalid-feedback">
                            Bitte ein dringlichkeit wählen.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="werkzeug">Werkzeug</label>
                        <select class="custom-select" id="werkzeug" name="werkzeug"  required>
                            <?php foreach ($resultat as $werkzeug) { ?>
                                <option value="<?=$werkzeug['WerkzeugID'] ?>" <?= ($werkzeug['WerkzeugID'] == $res['FK_werkzeugID']) ? 'selected' : ''  ?> >
                                    <?= $werkzeug['nameWerkzeug']?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                        <div class="valid-feedback">
                            Sieht gut aus!
                        </div>
                        <div class="invalid-feedback">
                            Bitte ein Genre wähln.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationTooltip04">Status</label>
                        <div class="custom-file mb-3">
                            <div class="form-check"  >
                                <input class="form-check-input" type="radio" name="status" id="statusPendent" value="0"  <?= 0 == $res['status'] ? "checked" : "" ?>>
                                <label class="form-check-label" for="statusPendent">
                                    Pendent.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="statusAbgeschlossen" value="1" <?= 1 == $res['status'] ? "checked" : "" ?>>
                                <label class="form-check-label" for="statusAbgeschlossen">
                                    Abgeschlossen.
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="ausgabe" class="btn btn-outline-dark">Zurück</a>
                <button name="ResetForm" class="btn btn-outline-danger" id="ResetForm" type="button">zurücksetzen</button>
                <button class="btn btn-outline-success" type="submit">Formular senden</button>
            </form>
        </div>
    </div>
</div>

<script src="public/js/app.js"></script>
</body>

</body>
</html>