<h1>Options</h1>
<h3 class="title">Gérez ici les options de base du theme.</h3>

<form method="post" action="options.php">
	<?php settings_fields('l2-settings-group'); ?>
	<?php do_settings_sections('page_l2'); ?>
	<?php submit_button() ?>
</form>