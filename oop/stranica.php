<?php
class Stranica
{
  // Atributi klase stranica
  public $sadrzaj;
  public $naslov = "Aska dečije igraonice - Oprema za igraonice";
  public $kljucnereci = "Aska, Oprema za igraonice, Dečije igraonice, Tobogani, Laser maze, Laser tag";
  public $dugmici = array("Početna"   => "pocetna.php", 
                        "Kontakt"  => "kontakt.php", 
                        "Usluge" => "usluge.php", 
                        "Mapa sajta" => "mapasajta.php"
                    );

  // class Page's operations
  public function __set($ime, $vrednost)
  {
    $this->$ime = $vrednost;
  }

  public function Prikazi()
  {
    echo "<html>\n<head>\n";
    $this -> PrikaziNaslov();
    $this -> PrikaziKljucneReci();
    $this -> PrikaziStilove();
    echo "</head>\n<body>\n";
    $this -> PrikaziZaglavlje();
    $this -> PrikaziMeni($this->dugmici);
    echo $this->sadrzaj;
    $this -> PrikaziFusnotu();
    echo "</body>\n</html>\n";
  }

  public function PrikaziNaslov()
  {
    echo "<title>".$this->naslov."</title>";
  }

  public function PrikaziKljucneReci()
  {
    echo "<meta name='keywords' content='".$this->kljucnereci."'/>";
  }

  public function PrikaziStilove()
  { 
    ?>   
    <link href="styles.css" type="text/css" rel="stylesheet">
    <?php
  }

  public function PrikaziZaglavlje()
  { 
    ?>   
    <!-- page header -->
    <header>    
      <img src="logo.gif" alt="TLA logo" height="70" width="70" /> 
      <h1>ASKA Dečije igraonice</h1>
    </header>
    <?php
  }

  public function PrikaziMeni($dugmici)
  {
    echo "<!-- menu -->
    <nav>";

    while (list($ime, $url) = each($dugmici)) {
      $this->PrikaziDugme($ime, $url, 
               !$this->DaLiJeURLTrenutnaStranica($url));
    }
    echo "</nav>\n";
  }

  public function DaLiJeURLTrenutnaStranica($url)
  {
    if(strpos($_SERVER['PHP_SELF'],$url)===false)
    {
      return false;
    }
    else
    {
      return true;
    }
  }

  public function PrikaziDugme($ime,$url,$active=true)
  {
    if ($active) { ?>
      <div class="menuitem">
        <a href="<?=$url?>">
        <img src="s-logo.gif" alt="" height="20" width="20" />
        <span class="menutext"><?=$ime?></span>
        </a>
      </div>
      <?php
    } else { ?>
      <div class="menuitem">
      <img src="side-logo.gif">
      <span class="menutext"><?=$ime?></span>
      </div>
      <?php
    }  
  }

  public function PrikaziFusnotu()
  {
    ?>
    <!-- page footer -->
    <footer>
      <p>&copy; Aska Dečije Igraonice ASKA DOO IMM.<br />
      Pogledajte našu 
      <a href="legal.php">legal information page</a>.</p>
    </footer>
    <?php
  }
}
?>

