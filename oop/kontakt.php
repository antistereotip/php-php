<?php
  require("stranica.php");

  $kontaktstrana = new Stranica();

  $kontaktstrana->sadrzaj ="<!-- page content -->
                       <section>
                       <h2>Kontakt stranica.</h2>
                       <p>....</p>
                       <p>.....</p>
                       </section>";
  $kontaktstrana->Prikazi();
?>