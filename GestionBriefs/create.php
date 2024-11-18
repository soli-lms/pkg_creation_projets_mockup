<?php include_once $_SERVER['DOCUMENT_ROOT'].'/config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
   <script src="/node_modules/admin-lte/plugins/bs-stepper/js/bs-stepper.min.js"></script>

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
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6 text-info">
                            <h1>Les briefs projets</h1>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title"> <i class="far fa-check-circle nav-icon"></i> Ajouter un brief projet</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="bs-stepper">
                                            <div id="deliverable-form">

                                                    <div class="bs-stepper-header" role="tablist">
                                                        <!-- Step 1 -->
                                                        <div class="step" data-target="#description-part">
                                                            <button type="button" class="step-trigger" role="tab" aria-controls="description-part" id="description-part-trigger">
                                                                <span class="bs-stepper-circle">1</span>
                                                                <span class="bs-stepper-label">Détails du projet</span>
                                                            </button>
                                                        </div>
                                                        <div class="line"></div>
                                                        
                                                        <!-- Step 2 -->
                                                        <div class="step" data-target="#competence-part">
                                                            <button type="button" class="step-trigger" role="tab" aria-controls="competence-part" id="competence-part-trigger">
                                                                <span class="bs-stepper-circle">2</span>
                                                                <span class="bs-stepper-label">Compétences requises</span>
                                                            </button>
                                                        </div>
                                                        <div class="line"></div>
                                                        
                                                        <!-- Step 3 -->
                                                        <div class="step" data-target="#affectation-part">
                                                            <button type="button" class="step-trigger" role="tab" aria-controls="affectation-part" id="affectation-part-trigger">
                                                                <span class="bs-stepper-circle">3</span>
                                                                <span class="bs-stepper-label">Affecter une équipe</span>
                                                            </button>
                                                        </div>
                                                    </div>


                                                <div class="bs-stepper-content">
                                                    <!-- your steps content here -->
                                                    <div id="description-part" class="content" role="tabpanel"
                                                        aria-labelledby="description-part-trigger">
                                                        <div class="form-group">
                                                            <label for="titre"> <i class="fa fa-file-alt" style="margin-right: 8px; color: #0f9333;"></i> Titre du brief </label>
                                                            <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre de projet" >                                                        
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <label for="inputDescription" class="form-label fw-bold ">
                                                                Description
                                                            </label>
                                                            <textarea 
                                                                class="form-control rounded-3 shadow-sm border-primary" 
                                                                id="inputDescription" 
                                                                name="description" 
                                                                rows="4" 
                                                                placeholder="Ajoutez une description détaillée ici..."></textarea>
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <label for="inputTravailafaire" class="form-label fw-bold ">
                                                                Travail à faire
                                                            </label>
                                                            <textarea 
                                                                class="form-control rounded-3 shadow-sm border-secondary"
                                                                id="inputTravailafaire" 
                                                                name="travail" 
                                                                rows="4" 
                                                                placeholder="Décrivez le travail à faire ici..."></textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="critere"> <i class="fa fa-check-square" style="margin-right: 8px; color: #ff0033;"></i> Critère de validation </label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control new-link-input reference-link" placeholder="Enter les Critères" id="linkInput1">
                                                                <div class="input-group-append">
                                                                <button type="button" class="btn btn-outline-info add-link-btn" onclick="addLivrable1()">
                                                                    <i class="fas fa-plus"></i>
                                                                </button>
                                                                </div>
                                                            </div>
                                                            <div id="livrables-list">
                                                            </div>
                                                            <div class="text-muted mt-2">
                                                                <i class="fas fa-info-circle me-1"></i> Le site Web doit être entièrement responsive 
                                                            </div>
                                                            <div class="text-muted mt-2">
                                                                <i class="fas fa-info-circle me-1"></i> respecter les meilleures pratiques en développement Web et répondre aux exigences du client 
                                                            </div>

                                                        </div>

                                                        <div class="form-group" id="deliverables-container">
                                                            <label for="livrable"> <i class="fa fa-file-powerpoint " style="margin-right: 8px; color: #28a745;"></i> Nom de livrable </label>
                                                            <button type="button" class="btn float-right btn-outline-info" id="livrable3" onclick="addInput()">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                            <div id="livrables-list">
                                                                <input type="text" class="form-control mb-3" name="deliverable[]" placeholder="Nom de livrable" >
                                                            </div>
                                                            <div class="text-muted mt-2">
                                                                <i class="fas fa-info-circle me-1"></i> Presentation 
                                                                <i class="fas fa-info-circle me-1"></i> Code 
                                                            </div>

                                                        </div>

                                                        <div class="form-group">
                                                            <label for="dateDebut"> <i class="far fa-calendar-alt" style="margin-right: 8px; color: #ffc107;"></i> Date de début </label>
                                                            <input type="date" class="form-control" id="dateDebut" name="dateDebut" value="2022-01-01">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="dateFin"><i class="far fa-calendar-alt" style="margin-right: 8px; color: #ffc107;"></i> Date de fin </label>
                                                            <input type="date" class="form-control" id="dateFin" name="dateFin" value="2022-01-31">
                                                        </div>                                                        
                                                        <div class="form-group">
                                                            <label for="project_references"> <i class="fa fa-external-link-alt" style="margin-right: 8px; color: #17a2b8;"></i> Référence </label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control new-link-input reference-link" placeholder="Enter a link" id="linkInput">
                                                                <div class="input-group-append">
                                                                <button type="button" class="btn btn-outline-info add-link-btn" onclick="addLink()">
                                                                    <i class="fas fa-plus"></i>
                                                                </button>
                                                                </div>
                                                            </div>
                                                            <div class="text-muted mt-2">
                                                                <i class="fas fa-info-circle me-1"></i> https://www.google.com/
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
                                                            <table class="table" style="width: 100%; border-collapse: collapse;">
                                                                <thead style="background-color: #6c757d; color: white; text-align: left;">
                                                                    <tr>
                                                                        <th style="padding: 10px;">Compétence</th>
                                                                        <th style="padding: 10px;">Niveaux</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr style="background-color: #f8f9fa; transition: background-color 0.3s;">
                                                                        <td style="padding: 10px; display: flex; align-items: center;">
                                                                            <div class="form-check">
                                                                                <input type="checkbox" class="form-check-input" id="competence_mobile" name="competence" value="maquetter">
                                                                                <i class="fas fa-mobile-alt" style="margin-right: 8px; color: #007bff;"></i>
                                                                                <label class="form-check-label" for="competence_mobile">Maquetter une application mobile</label>
                                                                            </div>
                                                                        </td>
                                                                        <td style="padding: 10px;">
                                                                            <select name="competence_mobile_level" class="custom-select" style="width: 100%; padding: 5px;">
                                                                                <option value="imiter">Imiter</option>
                                                                                <option value="adapter">Adapter</option>
                                                                                <option value="transposer">Transposer</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr style="background-color: #ffffff; transition: background-color 0.3s;">
                                                                        <td style="padding: 10px; display: flex; align-items: center;">
                                                                            <div class="form-check">
                                                                                <input type="checkbox" class="form-check-input" id="competence_db" name="competence" value="manipuler">
                                                                                <i class="fas fa-database" style="margin-right: 8px; color: #17a2b8;"></i>
                                                                                <label class="form-check-label" for="competence_db">Manipuler une base de données - perfectionnement</label>
                                                                            </div>
                                                                        </td>
                                                                        <td style="padding: 10px;">
                                                                            <select name="competence_db_level" class="custom-select" style="width: 100%; padding: 5px;">
                                                                                <option value="imiter">Imiter</option>
                                                                                <option value="adapter">Adapter</option>
                                                                                <option value="transposer">Transposer</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr style="background-color: #f8f9fa; transition: background-color 0.3s;">
                                                                        <td style="padding: 10px; display: flex; align-items: center;">
                                                                            <div class="form-check">
                                                                                <input type="checkbox" class="form-check-input" id="competence_backend" name="competence" value="developper">
                                                                                <i class="fas fa-code" style="margin-right: 8px; color: #28a745;"></i>
                                                                                <label class="form-check-label" for="competence_backend">Développer la partie back-end d’une application web ou web mobile</label>
                                                                            </div>
                                                                        </td>
                                                                        <td style="padding: 10px;">
                                                                            <select name="competence_backend_level" class="custom-select" style="width: 100%; padding: 5px;">
                                                                                <option value="imiter">Imiter</option>
                                                                                <option value="adapter">Adapter</option>
                                                                                <option value="transposer">Transposer</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr style="background-color: #ffffff; transition: background-color 0.3s;">
                                                                        <td style="padding: 10px; display: flex; align-items: center;">
                                                                            <div class="form-check">
                                                                                <input type="checkbox" class="form-check-input" id="competence_collaborate" name="competence" value="collaborer" checked>
                                                                                <i class="fas fa-cogs" style="margin-right: 8px; color: #ffc107;"></i>
                                                                                <label class="form-check-label" for="competence_collaborate">Collaborer à la gestion d’un projet informatique</label>
                                                                            </div>
                                                                        </td>
                                                                        <td style="padding: 10px;">
                                                                            <select name="competence_collaborate_level" class="custom-select" style="width: 100%; padding: 5px;">
                                                                                <option value="imiter">Imiter</option>
                                                                                <option value="adapter">Adapter</option>
                                                                                <option value="transposer">Transposer</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <button class="btn btn-info"
                                                            onclick="stepper.previous()">Précédent</button>
                                                        <button class="btn btn-info float-right"
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
                                                                    "Zakaria Azizi",
                                                                    "Fahd suirita",
                                                                    "Aoulad Amar Samir",
                                                                    "Ayoub Amazu",
                                                                    "Bardich Oussama",
                                                                    "BASRI Yahya",
                                                                    "Bennani Kabchi Mohammed Amine ",
                                                                    "Boussakla Yahya",
                                                                    "Chabbeh Aymen",
                                                                    "Dehbi Dina",
                                                                    "El Bakali Ayoub",
                                                                    "El Bouzidi Ayoub",
                                                                    "El Ibbawi Abdelilah",
                                                                    "El Mrabet Abderrafie",
                                                                    "Jarane Hamza",
                                                                    "MEZZIANE Mohamed",
                                                                    "TAMRAOUI Abdelouahab",
                                                                    "Tribak El yedri Ayoub",
                                                                    "BOUGTOUB Samia",
                                                                    "ZOUBAIR Douae",
                                                                ];
                                                                ?>

                                                                <div class="row">
                                                                    <?php foreach ($apprenants as $apprenant): ?>
                                                                        <div class="col-sm-4 mb-2">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="checkbox"
                                                                                    name="apprenants[]"
                                                                                    value="<?php echo $apprenant; ?>" >
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
                                                            onclick="stepper.previous()">Précédent
                                                        </button>
                                                        <a href="./index.php" type="submit"
                                                            class="btn btn-info float-right">Ajouter</a>
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
    <!-- Inclure le script -->
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/modules/pkg_creation_projets/layout/footer.php" ?>
</body>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
<script>
        
    //! Initialize CKEditor
    function initializeEditor(selector) {
        ClassicEditor
            .create(document.querySelector(selector))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    }
    //* Initialize editors for multiple elements
        initializeEditor('#inputDescription');
        initializeEditor('#inputTravailafaire');
        initializeEditor('#inputcriterevalidation');

    //! BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    //* Check all checkboxes when the page loads                        
    document.getElementById('checkAll').addEventListener('change', function () {
        // Select all checkboxes with the class .form-check-input
        var checkboxes = document.querySelectorAll('.form-check-input');  
        
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = this.checked;  // Set the checked state based on "checkAll"
        }, this); // 'this' refers to the checkAll checkbox element
    });

    //! Add a new livrable to the list
    function addInput() {
        // Create a new input element
        var input = document.createElement("input");
        input.type = "text";
        input.className = "form-control mb-3";
        input.name = "deliverable[]"; // Using array syntax for form submission
        input.placeholder = "Nom de livrable";

        // Append the new input to the container
        document.getElementById("deliverables-container").appendChild(input);
    }

    //! Add a new link to the list
    function addLink() {
        const linkInput = document.getElementById('linkInput');
        const fullLink = linkInput.value.trim();

        if (fullLink) {
            // Display only a short intro of the link (e.g., first 15 characters)
            const linkIntro = fullLink.length > 15 ? fullLink.substring(0, 15) + '...' : fullLink;

            // Create a new list item
            const listItem = document.createElement('li');
            listItem.className = 'list-group-item d-flex justify-content-between align-items-center';

            // Create the copy button with the intro text
            const copyButton = document.createElement('button');
            copyButton.className = 'btn btn-outline-secondary copy-link-btn ml-2';
            copyButton.innerText = linkIntro;
            copyButton.onclick = function() {
                navigator.clipboard.writeText(fullLink);
                alert("Link copied to clipboard!");
            };

            // Create the remove button with a trash icon
            const removeButton = document.createElement('button');
            removeButton.className = 'btn btn-outline-danger remove-link-btn ml-2';
            removeButton.innerHTML = '<i class="fas fa-trash"></i>';
            removeButton.onclick = function() {
                listItem.remove();
            };

            // Append both buttons to the list item
            listItem.appendChild(copyButton);
            listItem.appendChild(removeButton);

            // Append the list item to the reference list
            document.getElementById('referenceList').appendChild(listItem);

            // Clear the input field
            linkInput.value = '';
        }
    }

    //! Add a new deliverable to the list
    function addLivrable1() {
        // Get the value from the input field with id 'linkInput'
        var deliverableValue = document.getElementById('linkInput1').value.trim();

        // If the value is not empty, create a new input and buttons
        if (deliverableValue !== "") {
            var newDiv = document.createElement('div');
            newDiv.classList.add('livrable-item');

            // Create the new input element
            var newInput = document.createElement('input');
            newInput.type = 'text';
            newInput.classList.add('form-control', 'mb-3');
            newInput.name = 'deliverable[]';
            newInput.placeholder = 'Nom de livrable';
            newInput.value = deliverableValue;  // Set the value to what was entered in 'linkInput'
            newInput.disabled = true;  // Disable the input initially

            // Create the delete button with a trash icon
            var deleteButton = document.createElement('button');
            deleteButton.type = 'button';
            deleteButton.classList.add('btn', 'btn-outline-danger', 'btn-sm');
            deleteButton.innerHTML = '<i class="fas fa-trash"></i>';
            deleteButton.onclick = function() { removeLivrable(deleteButton); };

            // Create the modify button with an edit icon (replace button with the icon only)
            var modifyButton = document.createElement('button');
            modifyButton.type = 'button';
            modifyButton.classList.add('btn', 'btn-outline-warning', 'btn-sm');
            modifyButton.innerHTML = '<i class="fas fa-edit"></i>';  // Modify to just the icon
            modifyButton.onclick = function() { modifyLivrable(modifyButton); };

            // Append the new elements to the container
            newDiv.appendChild(newInput);
            newDiv.appendChild(deleteButton);
            newDiv.appendChild(modifyButton);

            // Append the new div to the list of deliverables
            document.getElementById('livrables-list').appendChild(newDiv);

            // Clear the input field after adding the deliverable
            document.getElementById('linkInput').value = "";
        } else {
            alert("Please enter a valid deliverable name.");
        }
            function removeLivrable(button) {
                var livrableItem = button.parentNode;  // Get the parent div of the button (the whole item)
                livrableItem.remove();  // Remove the entire item from the list
            }

        function modifyLivrable(button) {
            var livrableItem = button.parentNode;  // Get the parent div of the button (the whole item)
            var inputField = livrableItem.querySelector('input');  // Get the input field inside the div
            
            // Enable the input field for modification
            inputField.disabled = !inputField.disabled;
            
            // Change the button text to reflect the state
            if (inputField.disabled) {
                // When the input is disabled, show the modify icon
                button.innerHTML = '<i class="fas fa-edit"></i>';
            } else {
                // When the input is enabled, show the save icon
                button.innerHTML = '<i class="fas fa-save"></i>';
            }

        }
    }

</script>
</html>