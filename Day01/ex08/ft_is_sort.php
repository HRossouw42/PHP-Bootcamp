#!/usr/bin/php
<?php
    function ft_is_sort($input){
        $sorted = $input;
        sort($sorted);
        if (array_diff_assoc($sorted, $input) == null)
            return true;
        return false;
	}
?>

<?PHP
//$tab = array("!/@#;^", "42", "Hello World", "hi", "zZzZzZz");
$tab[] = "What are we doing now ?";
$tab[] = "Like totes";
if (ft_is_sort($tab))
    echo "The array is sorted\n";
else
    echo "The array is not sorted\n";
?>