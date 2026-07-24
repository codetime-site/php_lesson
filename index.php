<?php


class car{
    public string $brand;
    public string $color;

    public function nameColor() : string {
        return "Машина " . $this -> brand . " с цветом " . $this -> color . "был здесь !" ; 
    }

}
