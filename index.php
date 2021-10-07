
<?php 
    // 1) Creare una variabile con un paragrafo di testo a vostra scelta
    $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.';
    // 'strlen()' riporta la lunghezza di ciò che si mette al suo interno 
    $textLength1 = strlen($text);
    
    // 3) Una parola da censurare viene passata dall'utente tramite parametro GET.
    // con '$_GET' ci facciamo passare il parametro dall'utente 
    $badword = $_GET["parola"];
    
    $newText = str_ireplace($badword, '***', $text);
    $textLength2 = strlen($newText);

?>

<!-- 2) Stampare a schermo il paragrafo e la sua lunghezza. -->
<!-- echo potremmo intenderlo come 'stampa' -->
<p><?php echo $text ?></p>
<span><?php echo $textLength1 ?></span>

<!-- 4) Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.  -->
<p><?php echo $newText ?></p>
<span><?php echo $textLength2 ?></span>


<!-- str_replace(cerca, sostituisci, dove_cercare)  'str_replace è case sensitive'-->
<!-- str_ireplace(cerca, sostituisci, dove_cercare)  'str_replace è case insensitive'-->


