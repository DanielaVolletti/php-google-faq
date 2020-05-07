<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Faq Google</title>
    <?php
      require_once "faqs.php";
      require_once "function.php";
      $numberGetFaqs = $_GET['num'];
     ?>
  </head>
  <body>
    <!-- barra di navigazione -->
    <header>
      <div class="logo flex">
        <img src="img/logo.png" alt="">
        <h2>
          <a href="#">Privacy e termini</a>
        </h2>
      </div>
      <nav class="flex">
        <ul class="flex">
          <li>
            <a href="#">Introduzione</a>
          </li>
          <li>
            <a href="#">Norme sulla privacy</a>
          </li>
          <li>
            <a href="#">Termini di servizio</a>
          </li>
          <li>
            <a href="#">Tecnologie</a>
          </li>
          <li>
            <a href="#">Domande frequenti</a>
          </li>
        </ul>
        <a href="#">Account Google</a>
      </nav>
    </header>
    <!-- sezione faq -->
    <main>
      <?php
        // determinazione numero faqs
        numeroFaq($faqs);

        // ciclo foreach per generare faq in pagina
        foreach ($faqs as $chiave => $faq) {
          $chiave = $chiave + 1;
          if($chiave == $numberGetFaqs) {
            generaFaqs($faq);
          } 

        }

       ?>
    </main>
    <!-- footer -->
    <footer class="flex">
      <ul class="flex">
        <li>
          <a href="#">Google</a>
        </li>
        <li>
          <a href="#">Tutto su Google</a>
        </li>
        <li>
          <a href="#">Privacy</a>
        </li>
        <li>
          <a href="#">Termini</a>
        </li>
      </ul>
      <div class="language flex">
        <img src="img/language.png" alt="">
        <select class="" name="">
          <option value="">Italiano</option>
          <option value="">Afrikaans</option>
          <option value="">Bahasa Indonesia</option>
          <option value="">Bahasa Melayu</option>
          <option value="">Català</option>
          <option value="">Čeština</option>
          <option value="">Dansk</option>
          <option value="">Deutsch</option>
          <option value="">Eesti</option>
          <option value="">English</option>
          <option value="">English (United Kingdom)</option>
          <option value="">Español</option>
          <option value="">Español (Latinoamérica)</option>
          <option value="">Euskara</option>
          <option value="">Filipino</option>
          <option value="">Français</option>
          <option value="">Français (Canada)</option>
          <option value="">Galego</option>
          <option value="">Hrvatski</option>
          <option value="">Isizulu</option>
          <option value="">Íslenska</option>
          <option value="">Kiswahili</option>
          <option value="">Latviešu</option>
          <option value="">Português (Portugal)</option>
          <option value="">Ελληνικά</option>
          <option value="">Türkçe</option>
          <option value="">‫العربية‬</option>
          <option value="">日本語</option>
        </select>
      </div>
    </footer>

  </body>
</html>
