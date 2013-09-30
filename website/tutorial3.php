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
			Tutorial [ <a href="tutorial1.php">1</a> | <a href="tutorial2.php">2</a> | 3 ]
		</h2>
		<h4>Introduction</h4>
		<p>
			This is an introductory tutorial. It assumes that the reader knows basic processing and has read the previous tutorials, but no more.
		</p>
		<p>
			The Simple Multi-Touch toolkit, also known as SMT, makes using multi-touch interactions in sketches easy. In this tutorial, we will walk though the absolute basics of SMT and how to get started with making your own multi-touch applications.
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
			src="img/tutorial3.png" alt="Tutorial 3 Screenshot">

		<h4>Entire Source Code for Tutorial: 
			<a href="examples/Tutorial/Three/Three.pde">Download</a>
		</h4>
		<pre><code class="java"><?php
			include 'examples/Tutorial/Three/Three.pde';
		?></code></pre>
	<!--End of this page's content-->
	<?php
		include 'include/footer.php';
	?>
</body>
</html>