<?
function location($location1, $location2 = ""){
	$list  = "	<div class = 'location'>";
	$list .= "	<p><a href = ".$web_site."> <i class='fa fa-home'></i></a> > ";
	$list .= $location1;
	if($location2 != ""){
		$list .= " > ".$location2."	</p>";
	}
	$list .= "	</div>";
	return $list;
}
?>