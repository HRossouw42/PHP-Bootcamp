<?php

    class NightsWatch implements IFighter
    {

        private $array = array();

        public function recruit($person)
        {
            $this->array[] = $person;
        }

        function fight()
        {
            foreach ($this->array as $person) {
                if (method_exists(get_class($person), 'fight'))
                    $person->fight();
            }
        }
    }