<li class="nav-item has-treeview">
            <a href="#"
              class="nav-link <?php echo (strpos($current_route, 'Gestion des briefs') !== false) ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-project-diagram"></i>
              <p>
                Gestion des projets
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/modules/pkg_creation_projets/GestionBriefs/index.php"
                  class="nav-link <?php echo (strpos($current_route, 'Briefs') !== false) ? 'active' : ''; ?>">
                  <i class="far fa-file-alt nav-icon"></i>
                  <p>Création brief projet</p>
                </a>
              </li>
            </ul>
</li>