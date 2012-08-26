<?php
//require_once('./inc/classTextile.php');
require_once('./inc/markdown.php');
function deck_header($title, $author, $style, $transition)
{
return <<<HEAD
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<title>$title</title>
	
	<!-- Info about this deck -->
	<meta name="description" content="A Sample Deck.js Deck">
	<meta name="author" content="$author">
	<meta name="viewport" content="width=1024, user-scalable=no">
	
	<!-- Core and extension CSS files -->
	<link rel="stylesheet" href="./inc/deck/core/deck.core.css">
	<link rel="stylesheet" href="./inc/deck/extensions/goto/deck.goto.css">
	<link rel="stylesheet" href="./inc/deck/extensions/menu/deck.menu.css">
	<link rel="stylesheet" href="./inc/deck/extensions/navigation/deck.navigation.css">
	<link rel="stylesheet" href="./inc/deck/extensions/status/deck.status.css">
	<link rel="stylesheet" href="./inc/deck/extensions/hash/deck.hash.css">
	
	<!-- Theme CSS files -->
	<link rel="stylesheet" href="./inc/deck/themes/style/$style.css">
	<link rel="stylesheet" href="./inc/deck/themes/transition/$transition.css">
	
	<!-- The JS file that makes this all work -->
	<script src="./inc/deck/modernizr.custom.js"></script>
</head>

<body class="deck-container">

<!-- THE DECK STARTS HERE -->
<section class="slide">

<h2>$title</h2>
	
<h3>$author</h3>

</section>

<section class="slide">\n\n
HEAD;
}
function deck_footer() 
{
return <<<FOOT
</section>
<!-- THE DECK ENDS HERE -->

<!-- deck.goto snippet -->
<form action="." method="get" class="goto-form">
	<label for="goto-slide">Go to slide:</label>
	<input type="text" name="slidenum" id="goto-slide" list="goto-datalist">
	<datalist id="goto-datalist"></datalist>
	<input type="submit" value="Go">
</form>

<!-- Grab CDN jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.min.js"></script>
<script>window.jQuery || document.write('<script src="./inc/deck/jquery-1.7.min.js"><\/script>')</script>

<!-- Deck Core and extensions -->
<script src="./inc/deck/core/deck.core.js"></script>
<script src="./inc/deck/extensions/hash/deck.hash.js"></script>
<script src="./inc/deck/extensions/menu/deck.menu.js"></script>
<script src="./inc/deck/extensions/goto/deck.goto.js"></script>
<script src="./inc/deck/extensions/status/deck.status.js"></script>
<script src="./inc/deck/extensions/navigation/deck.navigation.js"></script>

<!-- Initialize the deck -->
<script>
$(function() {
	$.deck('.slide');
});
</script>

</body>
</html>
FOOT;
}
