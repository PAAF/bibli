<h1><?php echo h($auteur['Auteur']['nom']); ?></h1>

Ses livres (<?php echo $this->Html->link('Ajouter un livre',
		    array('controller' => 'livres', 'action' => 'add')
			); ?>):

	<?php
		foreach ($auteur['Livre'] as $aut) {
			echo '<br/>&nbsp;-&nbsp;'.$aut['titre'];
		}
	?>
