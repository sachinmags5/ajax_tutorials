<?php
	$names[]='Sachin';
	$names[]='jay';
	$names[]='dipak';
	$names[]='mayu';
	$names[]='babbo';
	$names[]='raj';
	$names[]='Salu';
	
	foreach ($names as $name) {
		if( $name == $_REQUEST['var1'])
		{
			echo "<div style='color: red';>". $_REQUEST['var1']." is available i list";
		}

		
		
		
	}
	
	//echo $_REQUEST['var1'];
?>
