<?php

$parag_received = $_GET['paragraph'];
$bad_received = $_GET['badword'];

?>


<h3>
    the "<?php echo $parag_received ?>" lenght is (<?php echo strlen($parag_received) ?>)
</h3>

<p>this is a badword: <?php echo str_replace($bad_received, '***', $bad_received) ?></p>