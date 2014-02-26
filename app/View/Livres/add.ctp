<h1>Ajouter un livre</h1>
<?php
echo $this->Form->create('Livre');
echo $this->Form->input('titre');
echo $this->Form->input('nbPage');


	//echo $this->Form->input('auteur_id',array('type'=>'select'));

$i=0;

foreach ($auteurs as $auteurs) {
	$tab[$i] = $auteurs['Auteur']['nom'];
	$tab2[$i++] = $auteurs['Auteur']['id'];
}

	//var_dump($tab);


echo $this->Form->select('id', $auteurs['Auteur']);

echo $this->Form->end('Sauvegarder le livre');

?>