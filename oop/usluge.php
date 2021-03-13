<?php
  require ("stranica.php");

  class StranicaUsluge extends Stranica
  {
    private $kolona2dugmici = array(
                           "Oprema" => "oprema.php",
                           "Izrada" => "izrada.php",
                           "Servis" => "servis.php",
						   "Inovacije" => "inovacije.php"
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

  $usluge = new StranicaUsluge();

  $usluge -> sadrzaj ="<p>lol.</p>";

  $usluge->Prikazi();
?>
