<div class="pageSlide" id="pageMyProject">
	<div class="contain-page">

		<div id="github"><a href="https://github.com/JeromeCyrus" target="_blank">Mon GitHub</a></div>
		<div class="menu-onglet">
			<nav>
				<ul class="tab-list">
					<li class="onglet-item active" data-target="#first">Puissance 4</li>
					<li class="onglet-item" data-target="#second">Tweet Academie</li>
					<li class="onglet-item" data-target="#three">My Meetic</li>
				</ul>
			</nav>
		</div>
		<div class="tab-content">
			<div class="tab-pane active" id="first">
				<?php include('projectPuissance4.php') ?>
			</div>
			<div class="tab-pane" id="second">
				<?php include('projectTweet.php') ?>
			</div>
			<div class="tab-pane" id="three">
				<?php include('projectMyMeetic.php') ?>
			</div>
		</div>
	</div>
</div>