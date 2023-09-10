
=======

<?php	
function createCard(array $array, $index){ ?>
	<header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src=<?= $array[$index]['picture'] ?> alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $array[$index]['name'] ?></h1>
							    <div class="title mb-3"><?= $array[$index]['desiredJobtitle'] ?></div> 
								<a href="detail.php?index=<?= $index ?>" class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class=\"secondary-info col-auto mt-2\">
						    </div><!--//secondary-info-->
					    </div><!--//row-->
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
<?php } ?>
<?php

function memberAge($birthday){
	$birthday = date('Y-m-d', strtotime($birthday));
	$today = date('Y-m-d');
	$years = date_diff(date_create($birthday), date_create($today));
	return $years->format('%y');
}

?>

