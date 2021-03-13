<?php
  require ("page.php");

  class SitemapPage extends Page
  {
    private $row2buttons = array(
                           "s" => "re.php",
                           "ress" => "sd.php",
                           "da" => "da.php",
                           "der" => "mi.php"
                           );

    public function Display()
    {
      echo "<html>\n<head>\n";
      $this->DisplayTitle();
      $this->DisplayKeywords();
      $this->DisplayStyles();
      echo "</head>\n<body>\n";
      $this->DisplayHeader();
      $this->DisplayMenu($this->buttons);
      $this->DisplayMenu($this->row2buttons);
      echo $this->content;
      $this->DisplayFooter();
      echo "</body>\n</html>\n";
    }
  }

  $sitemap = new SitemapPage();

  $sitemap -> content ="<p>sitemap.</p>";

  $sitemap->Display();
?>
