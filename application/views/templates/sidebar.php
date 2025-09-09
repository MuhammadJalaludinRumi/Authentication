

<div class="lime-sidebar">
	<div class="lime-sidebar-inner slimscroll">
		<ul class="accordion-menu">
			<?php
			$role_id = $this->session->userdata('role_id');
			$queryMenu = "SELECT user_menu.id, user_menu.menu
                          FROM user_menu 
                          JOIN user_access_menu 
                            ON user_menu.id = user_access_menu.menu_id
                          WHERE user_access_menu.role_id = $role_id
                          ORDER BY user_access_menu.menu_id ASC";
			$menu = $this->db->query($queryMenu)->result_array();
			?>
			<!-- looping menu -->
			<?php foreach ($menu as $m) : ?>
				<li class="sidebar-title">
					<?= $m['menu']; ?>
				</li>

				<!-- siapkan sub-menu sesuai menu -->
				<?php
				$menuId = $m['id'];
				$querySubMenu = "SELECT * FROM user_sub_menu
                                 JOIN user_menu ON user_sub_menu.menu_id = user_menu.id
                                 WHERE user_sub_menu.menu_id = $menuId
                                   AND user_sub_menu.is_active = 1";
				$subMenu = $this->db->query($querySubMenu)->result_array();
				?>
				<?php foreach ($subMenu as $sm) : ?>
					<li>
						<a href="<?= base_url($sm['url']); ?>" class="sidebar-link <?= ($title == $sm['title']) ? 'active' : ''; ?>">
							<span class="material-icons sidebar-icon"><?= $sm['icon']; ?></span>
							<span class="sidebar-text"><?= $sm['title']; ?></span>
						</a>
					</li>
				<?php endforeach ?>
				<hr>
			<?php endforeach; ?>

		</ul>
	</div>
</div>
