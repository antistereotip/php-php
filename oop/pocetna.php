<?php
  require("stranica.php");

  $pocetnastrana = new Stranica();

  $pocetnastrana->sadrzaj ="<!-- page content -->
                       <section>
                       <h2>Dobrodošli na Aksa stranice.</h2>
                       <p>....</p>
                       <p>.....</p>
                       </section>";
  $pocetnastrana->Prikazi();
?>

