<?php

class LivresController extends AppController {


    public function index() {
        $this->set('livres', $this->Livre->find('all'));
  	}

    public function add() {
        Controller::loadModel('Auteur');


        if ($this->request->is('post')) { //Savoir si c'est get/put/post/delete

            $this->Livre->create(); //Appel d'une fonction pour créer un nouveau post

            if ($this->Livre->save($this->request->data)) {
              $this->Session->setFlash(__('Votre livre a bien été enregistrer.'));
              return $this->redirect(array('action' => 'index'));
            }

            $this->Session->setFlash(__('Impossible d\'ajouter ce livre.'));


        }

        $this->set('auteurs', $this->Auteur->find('all'));

    }



  	/*public function view($id = null) {
		if (!$id) { //Vérification que l'utilisateur à pas tapé une URL, sans l'ID
    		throw new NotFoundException(__('Auteur introuvable'));
    	}

		$auteur = $this->Auteur->findById($id); //Récupération de la donnée correspond à l'ID

		if (!$auteur) { //Vérification que l'utilisateur à pas tapé une URL, avec n'importe quel ID
            throw new NotFoundException(__('Auteur introuvable'));
        }

		$this->set('auteur', $auteur); //Retour de la donnée (on pourra l'appeler dans $post)
	}*/
}
?>