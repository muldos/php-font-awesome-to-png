<html>
	<body>
		<h1 id="php-font-awesome-to-png">PHP Font Awesome to PNG</h1>
		<p>This program allows you to extract the awesome
		[Font Awesome] (<a href="http://fortawesome.github.com/Font-Awesome/">http://fortawesome.github.com/Font-Awesome/</a>) icons as PNG images
		of specified size. It also output to base64 data uri format in a html file.</p>
		<h3 id="usage">Usage</h3>
		<p>To use the program, you need the Font Awesome TTF file &amp; _variables.scss file, which is available in
		[Font Awesome Github repository] (<a href="https://github.com/FortAwesome/Font-Awesome">https://github.com/FortAwesome/Font-Awesome</a>).</p>
		<ul>
		<li>download fontawesome and unzip</li>
		<li>copy scss\_variables.scss over as _variables.scss</li>
		<li>copy fonts\fontawesome-webfont.ttf over as fontawesome-webfont.ttf </li>
		<li>copy configs.php.dist and rename to configs.php</li>
		<li>edit configs.php to match your environment</li>
		<li>run generateIconData.php from browser or CLI to generate icons.data.php base on _variables.scss</li>
		<li>run generate.php to generate png icon images</li>
		</ul>
	</body>
</html>