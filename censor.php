<?php

$parag_received = $_GET['paragraph'];
$bad_received = $_GET['badword'];

$parag_len = strlen($parag_received);

// $cens_arr = str_split($bad_received);
$cens = str_replace($bad_received, '*****', $parag_received);

?>


<h3>
    <?php echo $cens ?> lenght is <?php echo $parag_len; ?>
</h3>

<a href="http://localhost/php-badwords/index.php?">
    Go back to form
</a>

<!-- <form action="index.php" method="GET">
    <button type="submit">Go back</button>
</form> -->