<table style="text-align: center; align: center;">
<tbody>
<tr>
<td class="<?php if (!$eyes){echo "noshow";} ?>">
    <header class="major">
		<h2>Eye Colour</h2>
		<p><a href="#eyesinfo">Learn more</a></p>
	</header>
</td>
<td class="<?php if (!$blood){echo "noshow";} ?>">
    <header class="major">
		<h2>Blood Type</h2>
		<p><a href="#bloodinfo">Learn more</a></p>
	</header>    
</td>
<td class="<?php if (!$chin){echo "noshow";} ?>">
<header class="major">
	<h2>Cleft Chin</h2>
	<p><a href="#chininfo">Learn more</a></p>
</header>    
</td>
<td class="<?php if (!$dimples){echo "noshow";} ?>">
    <header class="major">
    	<h2>Dimples</h2>
    	<p><a href="#dimplesinfo">Learn more</a></p>
    </header>
</td>
<td class="<?php if (!$hair){echo "noshow";} ?>">
    <header class="major">
		<h2>Hair Type</h2>
		<p><a href="#hairinfo">Learn more</a></p>
	</header>
</td>
</tr>
<tr>
<td class="<?php if (!$eyes){echo "noshow";} ?>">
    <ul class="icons major">
		<li class="<?php if(max($mleyes[0], $mleyes[1], $mleyes[2]) != $mleyes[0]){echo "noshow"; } ?>"><img class="qimg" src="images/questions/brown eye.png" /><h3><?php echo $mleyes[0]; ?>%</h3></li>
		<li class="<?php if(max($mleyes[0], $mleyes[1], $mleyes[2]) != $mleyes[1]){echo "noshow"; } ?>"><img class="qimg" src="images/questions/green eye.png" /><h3><?php echo $mleyes[1]; ?>%</h3></li>
		<li class="<?php if(max($mleyes[0], $mleyes[1], $mleyes[2]) != $mleyes[2]){echo "noshow"; } ?>"><img class="qimg" src="images/questions/blue eye.png" /><h3><?php echo $mleyes[2]; ?>%</h3></li>
	</ul>
</td>
<td class="<?php if (!$blood){echo "noshow";} ?>">
    <ul class="icons major">
		<li class="<?php if(max($mlblood[0], $mlblood[1], $mlblood[2], $mlblood[3]) != $mlblood[0]){echo "noshow"; } ?>"><img class="qimg" src="images/questions/O.png" /><h3><?php echo $mlblood[0]; ?>%</h3></li>
		<li class="<?php if(max($mlblood[0], $mlblood[1], $mlblood[2], $mlblood[3]) != $mlblood[1]){echo "noshow"; } ?>"><img class="qimg" src="images/questions/A.png" /><h3><?php echo $mlblood[1]; ?>%</h3></li>
		<li class="<?php if(max($mlblood[0], $mlblood[1], $mlblood[2], $mlblood[3]) != $mlblood[2]){echo "noshow"; } ?>"><img class="qimg" src="images/questions/B.png" /><h3><?php echo $mlblood[2]; ?>%</h3></li>
		<li class="<?php if(max($mlblood[0], $mlblood[1], $mlblood[2], $mlblood[3]) != $mlblood[3]){echo "noshow"; } ?>"><img class="qimg" src="images/questions/AB.png" /><h3><?php echo $mlblood[3]; ?>%</h3></li>
	</ul>
</td>
<td class="<?php if (!$chin){echo "noshow";} ?>">
<ul class="icons major">
	<li><h2>Chance:</h2><h3><?php echo $mlchin; ?>%</h3></li>
</ul>    
</td>
<td class="<?php if (!$dimples){echo "noshow";} ?>">
    <ul class="icons major">
		<li><h2>Chance:</h2><h3><?php echo $mldimples; ?>%</h3></li>
	</ul>
</td>
<td class="<?php if (!$hair){echo "noshow";} ?>">
    <ul class="icons major">
		<li class="<?php if(max($mlhair[0], $mlhair[1], $mlhair[2]) != $mlhair[0]){echo "noshow"; } ?>"><img class="qimg" src="images/questions/curly hair.jpg" /><h3><?php echo $mlhair[0]; ?>%</h3></li>
		<li class="<?php if(max($mlhair[0], $mlhair[1], $mlhair[2]) != $mlhair[1]){echo "noshow"; } ?>"><img class="qimg" src="images/questions/wavy hair.jpg" /><h3><?php echo $mlhair[1]; ?>%</h3></li>
		<li class="<?php if(max($mlhair[0], $mlhair[1], $mlhair[2]) != $mlhair[2]){echo "noshow"; } ?>"><img class="qimg" src="images/questions/straight hair.jpg" /><h3><?php echo $mlhair[2]; ?>%</h3></li>
	</ul>
</td>
</tr>
</tbody>
</table>

<table style="text-align: center; align: center; margin-top: -40px;">
<tbody>
<tr>
<td class="<?php if (!$marfan){echo "noshow";} ?>">
    <header class="major">
	    <h2>Marfan Syndrome</h2>
	    <p><a href="#marfaninfo">Learn more</a></p>
    </header>
</td>
<td class="<?php if (!$sickle){echo "noshow";} ?>">
    <header class="major">
	    <h2>Sickle Cell Disease</h2>
	    <p><a href="#sickleinfo">Learn more</a></p>
    </header>
</td>
<td class="<?php if (!$cystic){echo "noshow";} ?>">
    <header class="major">
	    <h2>Cystic Fibrosis</h2>
	    <p><a href="#cysticinfo">Learn more</a></p>
    </header>
</td>
</tr>
<tr>
<td class="<?php if (!$marfan){echo "noshow";} ?>">
<ul class="icons major">
	<li><h2>Chance:</h2><h3><?php echo $mlmarfan; ?>%</h3></li>
</ul>    
</td>
<td class="<?php if (!$sickle){echo "noshow";} ?>">
<ul class="icons major">
	<li><h2>Chance:</h2><h3><?php echo $mlsickle; ?>%</h3></li>
</ul>    
</td>
<td class="<?php if (!$cystic){echo "noshow";} ?>">
<ul class="icons major">
	<li><h2>Chance:</h2><h3><?php echo $mlcystic; ?>%</h3></li>
</ul>    
</td>
</tr>
</tbody>
</table>
