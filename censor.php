<?php

$parag_received = $_GET['paragraph'];
$bad_received = $_GET['badword'];

$cens_arr = str_split($bad_received);

$cens = str_replace($cens_arr, '*', $bad_received)
 

?>


<h3>
    "<?php echo $parag_received ?>" lenght is (<?php echo strlen($parag_received) ?>)
</h3>

<!-- <p><?php echo str_replace($bad_received, '***', $bad_received) ?> is a bad word</p> -->

<h3> <?php echo $cens ?> is a bad word of <?php echo strlen($bad_received) ?> letters</h3>

<a href="http://localhost/php-badwords/index.php?">
    Go back to form
</a>
<!-- <form action="index.php" method="GET">
    <button type="submit">Go back</button>
</form> -->