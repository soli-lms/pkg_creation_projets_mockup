<?php include_once $_SERVER['DOCUMENT_ROOT'].'/config.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<!-- Inclure l'en-tête -->
    <?php include_once  $config['views_path'] . 'head.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">

<body class="sidebar-mini" style="height: auto;">
 
    <div class="wrapper">
        <!-- Navigation -->
        <?php include_once  $config['views_path'] . 'nav.php'; ?>
        <!-- Barre latérale -->
        <?php include_once  $config['views_path'] . 'aside.php'; ?>
        <div class="content-wrapper" style="min-height: 1302.4px;">

            <div class="content-header">
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title"> <i class="far fa-check-circle nav-icon"></i> Ajouter un Autorisation</h3>
                                </div>
                                <div class="card-body p-0">
                                    <div class="bs-stepper">
                                        <div id="deliverable-form">

                                            <div class="bs-stepper-header" role="tablist">
                                                <!-- Step 1 -->
                                                <div class="step" data-target="#description-part">
                                                    <button type="button" class="step-trigger" role="tab" aria-controls="description-part" id="description-part-trigger">
                                                        <span class="bs-stepper-circle">1</span>
                                                        <span class="bs-stepper-label">Informations</span>
                                                    </button>
                                                </div>
                                                <div class="line"></div>
                                                
                                                <!-- Step 2 -->
                                                <div class="step" data-target="#competence-part">
                                                    <button type="button" class="step-trigger" role="tab" aria-controls="competence-part" id="competence-part-trigger">
                                                        <span class="bs-stepper-circle">2</span>
                                                        <span class="bs-stepper-label">Competence</span>
                                                    </button>
                                                </div>
                                                <div class="line"></div>
                                                
                                                <!-- Step 3 -->
                                                <div class="step" data-target="#affectation-part">
                                                    <button type="button" class="step-trigger" role="tab" aria-controls="affectation-part" id="affectation-part-trigger">
                                                        <span class="bs-stepper-circle">3</span>
                                                        <span class="bs-stepper-label">Affectation</span>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="bs-stepper-content">
                                                <!-- your steps content here -->
                                                <div id="description-part" class="content" role="tabpanel"
                                                    aria-labelledby="description-part-trigger">
                                                    <div class="form-group">
                                                        <label for="titre">Titre du brief</label>
                                                        <input type="text" class="form-control" id="titre" name="titre"
                                                            value="Prototype">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea class="form-control" id="inputDescription"
                                                            name="description" rows="3">Description du projet</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="travail">Travail à faire</label>
                                                        <textarea class="form-control" id="inputTravailafaire"
                                                            name="travail"
                                                            rows="3">Concevoir et développer un site Web responsive pour le client</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="critere">Critère de validation</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control new-link-input reference-link" placeholder="Enter les Critères" id="linkInput1">
                                                            <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline-info add-link-btn" onclick="addLivrable1()">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                            </div>
                                                        </div>
                                                        <div id="livrables-list">
                                                            <input type="text" disabled class="form-control mb-3" name="deliverable[]" placeholder="Nom de livrable" value="Le site Web doit être entièrement responsive">
                                                            <input type="text" disabled class="form-control mb-3" name="deliverable[]" placeholder="Nom de livrable" value="respecter les meilleures pratiques en développement Web et répondre aux exigences du client">
                                                        </div>

                                                    </div>

                                                    <div class="form-group" id="deliverables-container">
                                                        <label for="livrable">Nom de livrable :</label>  
                                                        <button type="button" class="btn btn-outline-info" id="livrable3" onclick="addInput()">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                        <div id="livrables-list">
                                                            <input type="text" class="form-control mb-3" name="deliverable[]" placeholder="Nom de livrable" value="Presentation">
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="dateDebut">Date de début</label>
                                                        <input type="date" class="form-control" id="dateDebut"
                                                            name="dateDebut" value="2022-01-01">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="dateFin">Date de fin</label>
                                                        <input type="date" class="form-control" id="dateFin"
                                                            name="dateFin" value="2022-01-31">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="project_references">Reference</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control new-link-input reference-link" placeholder="Enter a link" id="linkInput">
                                                            <div class="input-group-append">
                                                            <button type="button" class="btn btn-outline-info add-link-btn" onclick="addLink()">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                            </div>
                                                        </div>
                                                        <ul class="list-group linked-items reference-list" id="referenceList">
                                                        </ul>
                                                    </div>


                                                    <button onclick="stepper.next()" class="btn btn-info">Submit</button>

                                                    <!-- <button
                                                        onclick="stepper.next()">Suivant</button> -->
                                                </div>
                                                <div id="competence-part" class="content" role="tabpanel"
                                                    aria-labelledby="projet-part-trigger">
                                                    <div class="form-group">
                                                        <h2>Compétences</h2>
                                                        <p>Veuillez sélectionner les compétences que vous possédez.</p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Competence</th>
                                                                    <th>Niveaux</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <label>
                                                                            <input type="checkbox" class="mr-2"
                                                                                name="competence" id="competence_mobile"
                                                                                value="imiter">
                                                                            <i class="fas fa-mobile-alt"></i> Maquetter
                                                                            une
                                                                            application mobile
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <select name="competence_mobile_level"
                                                                            class="form-control">
                                                                            <option value="imiter">Imiter</option>
                                                                            <option value="adapter">Adapter</option>
                                                                            <option value="transposer">Transposer
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <label>
                                                                            <input type="checkbox" class="mr-2"
                                                                                name="competence" id="competence_db"
                                                                                value="adapter">
                                                                            <i class="fas fa-database"></i> Manipuler
                                                                            une
                                                                            base de données - perfectionnement
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <select name="competence_db_level"
                                                                            class="form-control">
                                                                            <option value="imiter">Imiter</option>
                                                                            <option value="adapter">Adapter</option>
                                                                            <option value="transposer">Transposer
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <label>
                                                                            <input type="checkbox" class="mr-2"
                                                                                name="competence"
                                                                                id="competence_backend"
                                                                                value="transposer">
                                                                            <i class="fas fa-code"></i> Développer la
                                                                            partie
                                                                            back-end d’une application web ou web mobile
                                                                            -
                                                                            perfectionnement
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <select name="competence_backend_level"
                                                                            class="form-control">
                                                                            <option value="imiter">Imiter</option>
                                                                            <option value="adapter">Adapter</option>
                                                                            <option value="transposer">Transposer
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <label>
                                                                            <input type="checkbox" class="mr-2"
                                                                                name="competence" value="other" checked>
                                                                            <i class="fas fa-cogs"></i> Collaborer à la
                                                                            gestion d’un projet informatique et à
                                                                            l’organisation de l’environnement de
                                                                            développement
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <select name="competence_deploy_level"
                                                                            class="form-control">
                                                                            <option value="imiter">Imiter</option>
                                                                            <option value="adapter">Adapter</option>
                                                                            <option value="transposer">Transposer
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <label>
                                                                            <input type="checkbox" class="mr-2"
                                                                                name="competence" value="other" checked>
                                                                            <i class="fas fa-cogs"></i> Développer une
                                                                            application web responsive avec HTML, CSS et
                                                                            JavaScript
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <select name="competence_deploy_level"
                                                                            class="form-control">
                                                                            <option value="imiter">Imiter</option>
                                                                            <option value="adapter">Adapter</option>
                                                                            <option value="transposer">Transposer
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <label>
                                                                            <input type="checkbox" class="mr-2"
                                                                                name="competence" value="other" checked>
                                                                            <i class="fas fa-cogs"></i> Utiliser un
                                                                            framework PHP pour le développement backend
                                                                            (par
                                                                            exemple, Laravel)
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <select name="competence_deploy_level"
                                                                            class="form-control">
                                                                            <option value="imiter">Imiter</option>
                                                                            <option value="adapter">Adapter</option>
                                                                            <option value="transposer">Transposer
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <label>
                                                                            <input type="checkbox" class="mr-2"
                                                                                name="competence" value="other" checked>
                                                                            <i class="fas fa-cogs"></i> Créer et gérer
                                                                            une
                                                                            base de données MySQL pour l'application web
                                                                        </label>
                                                                    </td>
                                                                    <td>
                                                                        <select name="competence_deploy_level"
                                                                            class="form-control">
                                                                            <option value="imiter">Imiter</option>
                                                                            <option value="adapter">Adapter</option>
                                                                            <option value="transposer">Transposer
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>


                                                    </div>
                                                    <button class="btn btn-info"
                                                        onclick="stepper.previous()">Précédent</button>
                                                    <button class="btn btn-info"
                                                        onclick="stepper.next()">Suivant</button>
                                                </div>
                                                <div id="affectation-part" class="content" role="tabpanel"
                                                    aria-labelledby="affectation-part-trigger">
                                                    <div class="d-flex flex-column mt-3 form-check">
                                                        <input type="checkbox" id="checkAll" class="form-check-input"
                                                            id="flexCheckIndeterminate">
                                                        <label class="form-check-label"
                                                            for="flexCheckIndeterminate">Tout
                                                            cocher<br>
                                                            <?php
                                                            $apprenants = [
                                                                "sarsri imrane",
                                                                "Grain Reda",
                                                                "Bouik Hussein",
                                                                "Assaid Amina",
                                                                "zaani hamza",
                                                                "FAIZ SAFAA",
                                                                "El ajoumi Mohammed aymane",
                                                                "Lharrak Adnan",
                                                                "YASMINE DAIFANE",
                                                                "BEN NASAR ADNAN",
                                                                "Achaou Hamid",
                                                                "Betroji Jalil",
                                                                "lamchatab amine",
                                                                "Boukhar Soufiane"
                                                            ];
                                                            ?>

                                                            <div class="row">
                                                                <?php foreach ($apprenants as $apprenant): ?>
                                                                    <div class="col-sm-4 mb-2">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox"
                                                                                name="apprenants[]"
                                                                                value="<?php echo $apprenant; ?>" checked>
                                                                            <label class="form-check-label"
                                                                                for="<?php echo $apprenant; ?>">
                                                                                <?php echo $apprenant; ?>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                            </div>

                                                        </label>
                                                    </div>

                                                    <button class="btn btn-info"
                                                        onclick="stepper.previous()">Précédent</button>
                                                    <a href="./index.php" type="submit"
                                                        class="btn btn-info">Ajouter</a>
                                                </div>
                                                </d>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>
        </div>
    </div>

</body>

</html>