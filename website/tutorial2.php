<!DOCTYPE html>
<html>
<head>
	<?php
		$title = "[Tutorial]";
		$containsCode = true;
		include 'include/head.php';
	?>
</head>
<body>
	<?php
		$thisPage = "Tutorial";
		include 'include/header.php';
	?>
	<!--Start of this page's content-->
		<h2>
			Tutorial [ <a href="tutorial1.php">1</a> | 2 | <a href="tutorial3.php">3</a> ]
		</h2>
		<h4>Introduction</h4>
		<p>
			This is an introductory tutorial. It assumes that the reader knows basic processing and has read the previous tutorials, but no more.
		</p>
		<p>
			Sometimes, you may want greater control over 
		</p>

		<h4>Heading</h4>
<pre><code class="java">code();</code></pre>
		<p>
			text.
		</p>

		<h4>Result</h4>
		<p>
			This is what you should see when running this tutorial's code in processing.
		</p>
		<img class="img-thumbnail" style="margin: 0 auto; display:block"
			src="img/tutorial2.png" alt="Tutorial 2 Screenshot">

		<h4>Next Tutorial</h4>
		<p>
			<a href="tutorial3.php">Tutorial 3 - Parent and Child Zones</a>
		</p>

		<h4>Entire Source Code for Tutorial: 
			<a href="examples/Tutorial/Two/Two.pde">Download</a>
		</h4>
		<pre><code class="java"><?php
			include 'examples/Tutorial/Two/Two.pde';
		?></code></pre>
	<!--End of this page's content-->
	<?php
		include 'include/footer.php';
	?>
</body>
</html>