<div class="lime-header">
    <nav class="navbar navbar-expand-lg">
        <section class="material-design-hamburger navigation-toggle">
            <a href="javascript:void(0)" class="button-collapse material-design-hamburger__icon">
                <span class="material-design-hamburger__layer"></span>
            </a>
        </section>
        <?php
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT user.*, user_role.role 
              FROM user 
              JOIN user_role ON user.role_id = user_role.id
              WHERE user.role_id = ?";

        $menu = $this->db->query($queryMenu, [$role_id])->row_array();
        ?>
            <a class="navbar-brand" >
                <?= $menu['role']; ?>
            </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="material-icons">keyboard_arrow_down</i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 search" id="search">
                <input class="form-control mr-sm-2" type="search" placeholder="Search for projects, apps, pages..." aria-label="Search">
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle theme-settings-link" href="#">
                        <i class="material-icons">layers</i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a class="dropdown-item" href="#">Account</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li class="divider"></li>
                        <li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Log Out</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
