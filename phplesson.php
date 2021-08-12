<?php

class Entree {
    public $name;
    public $ingredients = array();
    public $sizes;

    public function hasIngredient($ingredient) {
        return in_array($ingredient, $this->ingredients);
    }

    public static function getSizes() {
        return array('small','medium','large');
    }
}

$sandwich = new Entree;
$sandwich->sizes = Entree::getSizes();

echo $sandwich->sizes;

?>

