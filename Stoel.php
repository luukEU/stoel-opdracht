<?php

class Stoel {

  // Eigenschappen
  private string $kleur;
  private int $zithoogte;

  // Constructor
  public function __construct(string $ingevoerdeKleur, int $ingevoerdeZithoogte) {
    $this->kleur = $ingevoerdeKleur;
    $this->zithoogte = $ingevoerdeZithoogte;
  }

  // Kleur tonen
  public function echoKleur(): string {
    return "De stoel is: " . $this->kleur;
  }

  // Zithoogte tonen
  public function echoZithoogte(): string {
    return "Zithoogte " . $this->kleur . " stoel: " . $this->zithoogte;
  }

  // Zithoogte verstellen
  public function verstelZithoogte(int $nieuweHoogte): void {
    $this->zithoogte = $nieuweHoogte;
  }
}

?>
