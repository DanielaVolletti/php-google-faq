<?php
  // funzione per generare faq
  function generaFaqs($faq){
    echo "<div class='faq'> <h1>" . $faq['domanda'] . "</h1> <br> <p>" . $faq['risposta'] . "</p> <br> </div>";
  }
  // funzione per determinare il numero delle faqs
  function numeroFaq($faqs){
    $numFaqs= count($faqs);
    echo "<h5 class='conteggio-faqs'>Faqs: " . $numFaqs . "</h5>";    
  }

 ?>
