<?php function DrawNavMain($navMainOn) { ?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-navbar shadow">
			<div class="container">
				<a class="navbar-brand" href="/index.php"><img src="/img/logos/children-are-unique-academy.jpg" alt="Children Are Unique Academy"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCCLLC" aria-controls="navbarCCLLC" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCCLLC">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item<?php if($navMainOn=="Home"){?> active<?php } ?>">
							<a class="nav-link" href="/index.php">Home<?php if($navMainOn=="Home"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item<?php if($navMainOn=="For Families"){?> active<?php } ?>">
							<a class="nav-link" href="/families/index.php">For Families<?php if($navMainOn=="For Families"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item<?php if($navMainOn=="Enrolling"){?> active<?php } ?>">
							<a class="nav-link" href="/enrolling/index.php">Enrolling<?php if($navMainOn=="Enrolling"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item<?php if($navMainOn=="Contact"){?> active<?php } ?>">
							<a class="nav-link" href="/contact/index.php">Contact<?php if($navMainOn=="Contact"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
						<li class="nav-item<?php if($navMainOn=="About Us"){?> active<?php } ?>">
							<a class="nav-link" href="/about/index.php">About Us<?php if($navMainOn=="About Us"){?><span class="sr-only"> (current)</span><?php } ?></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
<?php } ?>