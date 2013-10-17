<?php	

	function changeCurrentActivePage($target){
		
		$current = "class=active";
		//echo $target;
		if($target =="index") $a = $current;
		if($target == "finances") $b = $current;
		if($target == "about") $c = $current;
		if($target == "contact") $d = $current;
		
				
				$output='<div class="row">
							<div class="col-md-12">
								<ul class="nav nav-tabs">
									<li '.$a.'><a href="index.php">Home</a></li>
									<li '.$b.'><a href="finances.php">Finances</a></li>
									<li '.$c.'><a href="about.php">About</a></li>
									<li '.$d.'><a href="contact.php">Contact Us</a></li>
								</ul>
							</div>
						</div>';
									
			
			return $output;		
		
	}

?>