<form action="index2.PHP" method="POST">
    A <input type="number" name="a">
    B <input type="number" name="b">
    <button type="submit">Enviar</button
</form>
<?php
    $a = $GET['a'];
    $b = $GET['b'];

    $c = $a * $b;

    print $c;

    ?>




