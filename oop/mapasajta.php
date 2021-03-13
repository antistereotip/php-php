<?php
  require ("stranica.php");

  class MapaSajta extends Stranica
  {
    private $kolona2dugmici = array(
                           "s" => "re.php",
                           "ress" => "sd.php",
                           "da" => "da.php",
                           "der" => "mi.php"
                           );

    public function Prikazi()
    {
      echo "<html>\n<head>\n";
      $this->PrikaziNaslov();
      $this->PrikaziKljucneReci();
      $this->PrikaziStilove();
      echo "</head>\n<body>\n";
      $this->PrikaziZaglavlje();
      $this->PrikaziMeni($this->dugmici);
      $this->PrikaziMeni($this->kolona2dugmici);
      echo $this->sadrzaj;
      $this->PrikaziFusnotu();
      echo "</body>\n</html>\n";
    }
  }

  $mapasajta = new MapaSajta();

  $mapasajta -> sadrzaj ="<p>Mapa Sajta.</p>";

  $mapasajta->Prikazi();
?>
