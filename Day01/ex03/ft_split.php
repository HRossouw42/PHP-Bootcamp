#!/usr/bin/php
<?php
	function ft_split($str)
	{
		$input = array_filter(explode(' ', $str));
		sort($input);
		return $input;
	}
?>

<?php
print_r(ft_split("Hello   World AAA"));
?>