<?php

class AuteursController extends AppController {
	public function index() {
        $this->set('auteurs', $this->Auteur->find('all'));
  	}

  	public function view($id = null) {
		if (!$id) { //Vérification que l'utilisateur à pas tapé une URL, sans l'ID
    		throw new NotFoundException(__('Auteur introuvable'));
    	}

		$auteur = $this->Auteur->findById($id); //Récupération de la donnée correspond à l'ID

		if (!$auteur) { //Vérification que l'utilisateur à pas tapé une URL, avec n'importe quel ID
            throw new NotFoundException(__('Auteur introuvable'));
        }

		$this->set('auteur', $auteur); //Retour de la donnée (on pourra l'appeler dans $post)
	}
}
?>