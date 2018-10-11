<?php
    require_once('Lannister.class.php');
    
    class Tyrion extends Lannister
    {
        public function sleepWith($object)
        {
            if ($object instanceof Jaime || $object instanceof Cersei)
                echo("Not even if I'm drunk !" . PHP_EOL);
            else if ($object instanceof Sansa)
                echo("Let's do this." . PHP_EOL);
        }
    }
?>