<?php 
class Bata{
   public $id,
    $model,
    $marque,
    $description,
    $carIntCh,
    $volant,
    $porte,
    $siege,
    $carburant,
    $couleur,
    $imgPrcl,
    $img1,
    $img2,
    $img3,
    $img4,
    $img5,
    $img6,
    $img7,
    $img8,
    $img9;
    public function __construct(
        $id,
        $model,
        $marque,
        $description,
        $carIntCh,
        $volant,
        $porte,
        $siege,
        $carburant,
        $couleur,
        $imgPrcl,
        $img1,
        $img2,
        $img3,
        $img4,
        $img5,
        $img6,
        $img7,
        $img8,
        $img9
    ){
        $this->id = $id;
        $this->model = $model;
        $this->marque = $marque;
        $this->description = $description;
        $this->carIntCh = $carIntCh;
        $this->volant = $volant;
        $this->porte = $porte;
        $this->siege = $siege;
        $this->carburant = $carburant;
        $this->couleur = $couleur;
        $this->imgPrcl = $imgPrcl;
        $this->img1 = $img1;
        $this->img2 = $img2;
        $this->img3 = $img3;
        $this->img4 = $img4;
        $this->img5 = $img5;
        $this->img6 = $img6;
        $this->img7 = $img7;
        $this->img8 = $img8;
        $this->img9 = $img9;
     }
    }
?>