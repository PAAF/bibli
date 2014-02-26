<?php

class Livre extends AppModel {
	public $belongsTo = 'Auteur';

	public $validate = array( //Comment valider les données quand save() est appelé
        'titre' => 'alphaNumeric',
        'nbPage' => 'Numeric'
    );
}

?>