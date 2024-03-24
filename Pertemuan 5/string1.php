<?php
	$loremipsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id volutpat nunc, at dapibus ipsum. Curabitur in lacus feugiat, efficitur nunc at, rutrum quam. Maecenas egestas imperdiet nunc a porttitor. Pellentesque eget leo in est hendrerit venenatis. Sed leo magna, viverra ullamcorper sodales in, pretium et diam. Phasellus dapibus magna ante, at elementum odio lobortis eu. Pellentesque ut quam at ante pharetra pellentesque at vitae est. Nulla facilisi. Mauris gravida nec odio vel porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam varius velit sed lacus tristique, vel ornare felis egestas. Phasellus sodales accumsan orci sed gravida. Quisque egestas magna ipsum, ac ultrices augue aliquam eu. Sed tempus nunc facilisis dolor semper blandit. Vestibulum ut condimentum nunc, vel euismod tortor. Morbi ut libero nisi.";
	echo "<p>{$loremipsum}</p>";
	echo "Panjang Karakter : " .strlen($loremipsum) . "<br>";
	echo "Panjang Kata: " .str_word_count($loremipsum) . "<br>";
	echo "<p>" . strtolower($loremipsum) . "</p>";
	echo "<p>" . strtolower($loremipsum) . "</p>";
?>