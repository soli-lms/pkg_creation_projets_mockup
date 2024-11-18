<?php include_once $_SERVER['DOCUMENT_ROOT'].'/config.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<!-- Include Head -->
<?php include_once  $config['views_path'] . 'head.php'; ?>

<body class="sidebar-mini" style="height: auto;">

    <div class="wrapper">
        <!-- Include Navigation -->
        <?php include_once  $config['views_path'] . 'nav.php'; ?>

        <!-- Include Sidebar -->
        <?php include_once  $config['views_path'] . 'aside.php'; ?>

        <div class="content-wrapper" style="min-height: 1302.4px;">
            <!-- Page Header -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6 text-info">
                            <h1>Les briefs projets</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <a href="./edit.php" class="btn btn-info float-right"><i class="far fa-edit"></i>
                                Modifier</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title"> <i class="far fa-check-circle nav-icon"></i> Ajouter un brief projet</h3>
                                    </div>
                                <div class="card-body">
                                    <!-- Project Name -->
                                    <div class="mb-3">
                                        <label class="fw-bold">Nom :</label>
                                        <p>Exemple de projet de développement Web</p>
                                    </div>

                                    <!-- Skills -->
                                    <div class="mb-3">
                                        <label class="fw-bold">Compétences :</label>
                                        <ul>
                                            <li>C1. Maquetter une application mobile <span class="badge bg-info">Imiter</span></li>
                                            <li>C2. Manipuler une base de données <span class="badge bg-warning">Adapter</span></li>
                                        </ul>
                                    </div>

                                    <!-- Work Description -->
                                    <div class="mb-3">
                                        <label class="fw-bold">Travail à faire :</label>
                                        <p>Concevoir et développer un site Web responsive pour une entreprise fictive.</p>
                                    </div>

                                    <!-- Validation Criteria -->
                                    <div class="mb-3">
                                        <label class="fw-bold">Critères de validation :</label>
                                        <p>Le site Web doit être entièrement responsive, respecter les meilleures pratiques en développement Web et répondre aux exigences du client.</p>
                                    </div>

                                    <!-- Dates -->
                                    <div class="mb-3">
                                        <label class="fw-bold">Date :</label>
                                        <p>Date de début : <span class="text-primary">1er janvier 2024</span></p>
                                        <p>Date de fin : <span class="text-danger">31 mars 2024</span></p>
                                    </div>

                                    <!-- Resources -->
                                    <div class="mb-3">
                                        <label class="fw-bold">Ressources :</label>
                                        <p><a href="https://exemple.com/ressources" target="_blank">https://exemple.com/ressources</a></p>
                                    </div>

                                    <!-- References -->
                                    <div class="mb-3">
                                        <label class="fw-bold">Référence :</label>
                                        <p><a href="https://exemple.com/reference" target="_blank">https://exemple.com/reference</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Include Footer -->
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/pkg_creation_projets/layout/footer.php"; ?>
    </div>

    <!-- Include Scripts -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>

</body>

</html>
