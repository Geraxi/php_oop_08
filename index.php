<?php

trait Calculator {
    public function sum($a, $b) {
        return $a + $b;
    }

    public function sub($a, $b) {
        return $a - $b;
    }

    public function mul($a, $b) {
        return $a * $b;
    }

    public function div($a, $b) {
        return $b != 0 ? $a / $b : 'Errore: divisione per zero';
    }

    public function sqr($a) {
        return sqrt($a);
    }
}

?>
