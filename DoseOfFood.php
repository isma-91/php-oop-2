<?php

trait DoseOfFood
{
    public float $weight;

    public function getDoseOfFood(float $weight) {
      $dose = ($weight * 2) / 100;
      return number_format($dose,3).'gr al giorno per un cane di ' . $weight . 'kg.';
    }
}