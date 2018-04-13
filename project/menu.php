<?php
$pagename=$_SERVER['PHP_SELF'];
?>
<div id="menu">
			<ul>
				<li><a href="index.php" <?php if(strstr($pagename, "index.php")) { echo "class='active'";} ?>>Home</a></li>
				<li><a href="about.php" <?php if(strstr($pagename, "about.php")) { echo "class='active'";} ?>>About</a></li>
				<li><a href="contact.php" <?php if(strstr($pagename, "contact.php")) { echo "class='active'";} ?>>Contact</a></li>
				<li><a href="faq.php" <?php if(strstr($pagename, "faq.php")) { echo "class='active'";} ?>>FAQ</a></li>
				<li><a href="help.php" <?php if(strstr($pagename, "help.php")) { echo "class='active'";} ?>>Help</a></li>
			</ul>
		</div>