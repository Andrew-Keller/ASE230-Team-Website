


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
}?>

<?php 
	function workExp(array $item) { ?>
			<article class="resume-timeline-item position-relative pb-5">
					<div class="resume-timeline-item-header mb-2">
						<div class="d-flex flex-column flex-md-row">
							<h3 class="resume-position-title font-weight-bold mb-1"><?=$item['title'] ?></h3>
							<div class="resume-company-name ms-auto"><?=$item['company']?></div>
						</div><!--//row-->
						<div class="resume-position-time"><?=$item['tenure'] ?></div>
					</div><!--//resume-timeline-item-header-->
					<div class="resume-timeline-item-desc">
						<p><?=$item['description'] ?></p>
						<?php if(empty($item['Achieivements'])) {} 
						else{
						?>
						<h4 class="resume-timeline-item-desc-heading font-weight-bold"><?='Achievements:'?></h4>
						<ul>
						<?php foreach($item['Acheivements'] as $acheivement) {?>
							<li><?=$acheivement?></li>
						<?php }}?>
						</ul>
						<?php if(empty($item['techUsed'])){ } 
						else{
						?>
						<h4 class="resume-timeline-item-desc-heading font-weight-bold"><?php 'Technologies used:'?></h4>
						<ul class="list-inline">
						<?php foreach($item['techUsed'] as $tech){ ?>
							<li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= $tech?></span></li>
						<?php }?>
						</ul>
					</div><!--//resume-timeline-item-desc-->

			</article><!--//resume-timeline-item-->
			<?php }?>
	<?php } ?>

?>

