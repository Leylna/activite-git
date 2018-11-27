<?php
class personne{
	public $nom;
	public $email;
    public function personne(){
        $this->nom='sansnom';
        $this->email='sansemail';
    }
    public function afficher(){
        echo $this->nom.'<br/>';
        echo $this->email.'<br/>';
    }
}
$p1=new personne();
$p1->nom="jean";
$p1->email="jean@ailleurs.net";
var_dump($p1);

$p2=new personne();
var_dump($p2);

$p1->afficher();
$p2->afficher();

class Employe extends personne{
    public $badge;
    public function Employe(){
        parent::personne();
        $this->badge='numero de badge inconnu';
    }
    public function afficher(){
        parent::afficher();
        echo $this->badge;
    }
}
$e1=new Employe();
$e1->afficher();