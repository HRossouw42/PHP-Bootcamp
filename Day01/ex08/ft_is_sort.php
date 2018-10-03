<?php
    function ft_is_sort($input){
        $sorted = $input;
        sort($sorted);
        if (array_diff_assoc($sorted, $input) == null)
            return true;
        return false;
	}
?>
