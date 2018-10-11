<?php
    include_once('Lannister.class.php');
    class Jaime extends Lannister
    {
        public function sleepWith($object)
        {
            if ($object instanceof Tyrion)
                echo("Not even if I'm drunk ! " . PHP_EOL);
            else if ($object instanceof Sansa)
                echo("Let's do this." . PHP_EOL);
            else if ($object instanceof Cersei)
                echo("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
        }
    }
?>