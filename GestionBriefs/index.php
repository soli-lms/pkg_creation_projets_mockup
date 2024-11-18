<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
    <?php include_once  $config['views_path'] . 'head.php'; ?>

<body class="sidebar-mini" style="height: auto;">

    <div class="wrapper">
        <!-- Navigation -->
        <?php include_once  $config['views_path'] . 'nav.php'; ?>
        <!-- Barre latérale -->
        <?php include_once  $config['views_path'] . 'aside.php'; ?>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6 text-info">
                            <h1>Les briefs projets</h1>
                        </div>
                        <div class="col-sm-6 ">
                            <a href="./create.php" type="button" class="btn btn-info float-right">
                                <i class="fas fa-plus"></i> Ajouter un brief projet
                            </a>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Contenu principal -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Boîte par défaut -->
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title"> <i class="far fa-check-circle nav-icon"></i> Tableau des brief projets</h3>
                                </div>
                                <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-3">
                                        <label for="skill">Compétence :</label>
                                        <select class="form-control" id="skill">
                                            <option value="">Toutes</option>
                                            <option value="C1">Maquetter une application mobile</option>
                                            <option value="C2">Manipuler une base de données - perfectionnement</option>
                                            <option value="C3">Développer la partie back-end d’une application web ou web mobile - perfectionnement</option>
                                            <option value="C4">Collaborer à la gestion d’un projet informatique et à l’organisation de l’environnement de développement - perfectionnement</option>
                                            <option value="C5">Développer une application mobile native, avec Android et React Native</option>
                                            <option value="C6">Préparer et exécuter les plans de tests d’une application</option>
                                            <option value="C7">Préparer et exécuter le déploiement d’une application web et mobile - perfectionnement</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="projectName">Rechercher</label>
                                        <input type="text" class="form-control" id="projectName" placeholder="Nom du projet :...">
                                    </div>
                                </div>

                                        
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Titre</th>
                                                <th>Compétence</th>
                                                <th>Date debut</th>
                                                <th>Date de fin</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Lab-Markdown</td>
                                                <td><ul>
                                                    <li>C1. Maquetter une application mobile <span>(Imiter)</span></li>
                                                    <li>C2. Manipuler une base de données <span>(Adapter)</span> </li>
                                                </ul></td>
                                                <td>2021-12-01</td>
                                                <td>2021-12-8</td>
                                                <td class="text-center">
                                                    <!-- View Button -->
                                                    <a href="./show.php" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    
                                                    <!-- Edit Button -->
                                                    <a href="./edit.php" class="btn btn-outline-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    
                                                    <!-- Delete Button -->
                                                    <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </td>

                                                    
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <div class="d-flex justify-content-between align-items-center p-2">
                                        <div class="d-flex align-items-center mb-2">
                                            <button type="button" class="btn btn-default btn-sm">
                                                <i class="fas fa-download"></i> IMPORT
                                            </button>
                                            <button type="button" class="btn btn-default btn-sm mt-0 mx-2">
                                                <i class="fas fa-upload"></i> EXPORT
                                            </button>
                                        </div>
                                        <div class="mr-5">
                                            <ul class="pagination  m-0 float-right">
                                                <li class="page-item"><a class="btn btn-light" href="#">«</a></li>
                                                <li class="page-item"><a class="btn btn-info active" href="#">1</a></li>
                                                <li class="page-item"><a class="btn btn-light"  href="#">2</a></li>
                                                <li class="page-item"><a class="btn btn-light" href="#">3</a></li>
                                                <li class="page-item"><a class="btn btn-light" href="#">»</a></li>
                                            </ul>
                                        </div>
                                    </div>     
                                </div>
                                <!-- /.card-footer-->

                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
                                     <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/pkg_creation_projets/layout/footer.php" ?>

    </div>
</body>

<!-- get script -->


</html>