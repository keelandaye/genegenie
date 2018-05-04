<!-- Eye Colour -->
<section class="wrapper style1 special <?php if (!$eyes){echo "noshow";} ?>">
	<div class="inner">
		<header class="major">
			<h2>Eye Colour</h2>
			<p><a href="#eyesinfo">Learn more</a></p>
		</header>

		<ul class="icons major">
			<li class="<?php if($mleyes[0]==0){echo "noshow"; } ?>"><img class="qimg <?php if(max($mleyes[0], $mleyes[1], $mleyes[2]) == $mleyes[0]) { echo "selected"; }?>" src="images/questions/brown eye.png" /><h3><?php echo $mleyes[0]; ?>%</h3></li>
			<li class="<?php if($mleyes[1]==0){echo "noshow"; } ?>"><img class="qimg <?php if(max($mleyes[0], $mleyes[1], $mleyes[2]) == $mleyes[1]) { echo "selected"; }?>" src="images/questions/green eye.png" /><h3><?php echo $mleyes[1]; ?>%</h3></li>
			<li class="<?php if($mleyes[2]==0){echo "noshow"; } ?>"><img class="qimg <?php if(max($mleyes[0], $mleyes[1], $mleyes[2]) == $mleyes[2]) { echo "selected"; }?>" src="images/questions/blue eye.png" /><h3><?php echo $mleyes[2]; ?>%</h3></li>
		</ul>
	</div>
</section>

<!-- Blood Type -->
<section class="wrapper style2 special <?php if (!$blood){echo "noshow";} ?>">
	<div class="inner">
		<header class="major">
			<h2>Blood Type</h2>
			<p><a href="#bloodinfo">Learn more</a></p>
		</header>

		<ul class="icons major">
			<li class="<?php if($mlblood[0]==0){echo "noshow"; } ?>"><img class="qimg <?php if(max($mlblood[0], $mlblood[1], $mlblood[2], $mlblood[3]) == $mlblood[0]) { echo "selected"; }?>" src="images/questions/O.png" /><h3><?php echo $mlblood[0]; ?>%</h3></li>
			<li class="<?php if($mlblood[1]==0){echo "noshow"; } ?>"><img class="qimg <?php if(max($mlblood[0], $mlblood[1], $mlblood[2], $mlblood[3]) == $mlblood[1]) { echo "selected"; }?>" src="images/questions/A.png" /><h3><?php echo $mlblood[1]; ?>%</h3></li>
			<li class="<?php if($mlblood[2]==0){echo "noshow"; } ?>"><img class="qimg <?php if(max($mlblood[0], $mlblood[1], $mlblood[2], $mlblood[3]) == $mlblood[2]) { echo "selected"; }?>" src="images/questions/B.png" /><h3><?php echo $mlblood[2]; ?>%</h3></li>
			<li class="<?php if($mlblood[3]==0){echo "noshow"; } ?>"><img class="qimg <?php if(max($mlblood[0], $mlblood[1], $mlblood[2], $mlblood[3]) == $mlblood[3]) { echo "selected"; }?>" src="images/questions/AB.png" /><h3><?php echo $mlblood[3]; ?>%</h3></li>
		</ul>
	</div>
</section>

<!-- Cleft Chin -->
<section class="wrapper style3 special <?php if (!$chin){echo "noshow";} ?>">
	<div class="inner">
		<header class="major">
			<h2>Cleft Chin</h2>
			<p><a href="#chininfo">Learn more</a></p>
		</header>

		<ul class="icons major">
			<li><h2>Chance:</h2><h3><?php echo $mlchin; ?>%</h3></li>
		</ul>
	</div>
</section>

<!-- Dimples -->
<section class="wrapper style1 special <?php if (!$dimples){echo "noshow";} ?>">
	<div class="inner">
		<header class="major">
			<h2>Dimples</h2>
			<p><a href="#dimplesinfo">Learn more</a></p>
		</header>

		<ul class="icons major">
			<li><h2>Chance:</h2><h3><?php echo $mldimples; ?>%</h3></li>
		</ul>
	</div>
</section>

<!-- Hair Type -->
<section class="wrapper style2 special <?php if (!$hair){echo "noshow";} ?>">
	<div class="inner">
		<header class="major">
			<h2>Hair Type</h2>
			<p><a href="#hairinfo">Learn more</a></p>
		</header>

		<ul class="icons major">
			<li class="<?php if($mlhair[0]==0){echo "noshow"; } ?>"><img class="qimg <?php if(max($mlhair[0], $mlhair[1], $mlhair[2]) == $mlhair[0]) { echo "selected"; }?>" src="images/questions/curly hair.jpg" /><h3><?php echo $mlhair[0]; ?>%</h3></li>
			<li class="<?php if($mlhair[1]==0){echo "noshow"; } ?>"><img class="qimg <?php if(max($mlhair[0], $mlhair[1], $mlhair[2]) == $mlhair[1]) { echo "selected"; }?>" src="images/questions/wavy hair.jpg" /><h3><?php echo $mlhair[1]; ?>%</h3></li>
			<li class="<?php if($mlhair[2]==0){echo "noshow"; } ?>"><img class="qimg <?php if(max($mlhair[0], $mlhair[1], $mlhair[2]) == $mlhair[2]) { echo "selected"; }?>" src="images/questions/straight hair.jpg" /><h3><?php echo $mlhair[2]; ?>%</h3></li>
		</ul>
	</div>
</section>
	
<!-- Marfan -->
<section class="wrapper style3 special <?php if (!$marfan){echo "noshow";} ?>">
	<div class="inner">
		<header class="major">
			<h2>Marfan Syndrome</h2>
			<p><a href="#marfaninfo">Learn more</a></p>
		</header>

		<ul class="icons major">
			<li><h2>Chance:</h2><h3><?php echo $mlmarfan; ?>%</h3></li>
		</ul>
	</div>
</section>

<!-- Sickle Cell -->
<section class="wrapper style1 special <?php if (!$sickle){echo "noshow";} ?>">
	<div class="inner">
		<header class="major">
			<h2>Sickle Cell Disease</h2>
			<p><a href="#sickleinfo">Learn more</a></p>
		</header>

		<ul class="icons major">
			<li><h2>Chance:</h2><h3><?php echo $mlsickle; ?>%</h3></li>
		</ul>
	</div>
</section>

<!-- Cystic Fibrosis -->
<section class="wrapper style2 special <?php if (!$cystic){echo "noshow";} ?>">
	<div class="inner">
		<header class="major">
			<h2>Cystic Fibrosis</h2>
			<p><a href="#cysticinfo">Learn more</a></p>
		</header>

		<ul class="icons major">
			<li><h2>Chance:</h2><h3><?php echo $mlcystic; ?>%</h3></li>
		</ul>
	</div>
</section>