#!/usr/bin/php
<?php
	function ft_is_sort($tab)
	{
		if (is_array($tab) == FALSE)
			return (NULL);
		$tab2 = $tab;
		sort($tab2);
		$dif = array_diff_assoc($tab2, $tab);
		if (empty($dif) == TRUE)
			print("Le tableau est trie\n");
		else
			print("Le tableau n'est pas trie\n");
	}
	$tab = array("bleu", "rouge", "jaune", "vert");
	//$tab = array("b", "r", "j", "v", "z");
	//$tab = array("a", "b", "c", "d", "e");
	ft_is_sort($tab);
?>
