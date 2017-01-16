<?php
  require_once('./libs/PHPTAL-1.3.0/PHPTAL.php');
  include('beer.php');
  // Create a new template
  $template = new PHPTAL('index.xhtml');

  // Variables for processing
  $template->page_title = "Growl Microbrewery";

  $template->beer_menu = array(
    new Beer("Pilsner", 7.00),
    new Beer("IPA", 6.50),
    new Beer("Lager", 6.00),
    new Beer("Stout", 8.00)
  );

  try {
    echo $template->execute();
  } catch (Exception $e) {
    echo $e;
  }
?>
