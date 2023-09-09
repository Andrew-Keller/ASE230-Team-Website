<?php

/*
Member age
- create a function that calculates the team member's age based on their date of birth (parameter) and current date. Display the age both on the index and detail pages.


*/


/*
Card on the index page: create a function that displays each member's information on the index page. The function accepts the member's information (array) and the index of the member (number) as parameters, and it must display the code for the card filled with the member's information.
*/

/*
Work experiences on the detail page: create a function that displays each work experience item on the detail page. The function accepts one work experience item as a parameter, and it must display the code for the work experience filled with the employment information.

*/


?>

<?php	
function createCard(array $array, $index){ ?>
	<header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src=<?= $array[$index]['picture'] ?> style= "height:220px;width:190px" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?= $array[$index]['name'] ?></h1>
							    <div class="title mb-3"><?= $array[$index]['desiredJobtitle'] ?></div> 
								<a href="detail.php?index=<?= $index ?>" class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
						    </div><!--//secondary-info-->
					    </div><!--//row-->
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
<?php } ?>