<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Layout setup</title>
<link href="css/jquery-ui-1.8.11.custom.css" type="text/css" rel="stylesheet" />
<link href="css/lightning.css" type="text/css" rel="stylesheet" />
<link href="css/warhawk.css" type="text/css" rel="stylesheet" />
<link href="css/mustang.css" type="text/css" rel="stylesheet" />
<style>

</style>
</head>

<body>
<div id="europe">
	<nav id="tabNav">
		<ul>
			<li class="todayTab"><a href="#tabs-1" data-sec="today">Today</a>
				<span class="navIcon todayIcon"> 
					<span><?php echo date('M');?></span>
					<?php echo date('j');?>
				</span> <!-- closes todayIcon span -->
			</li>
			<li class="year2DateTab"><a href="y2d.php">Year to Date</a></li>
			<li class="monthlyTab"><a href="monthly.php" data-sec="monthly">Month to Date</a>
				<span class="navIcon monthIcon"> 
					<span class="calRing"></span> 
					<span class="calRing"></span> 
					<span class="calPaper"> 
						<span class="calName"><?php echo date("M");?></span> 
					</span> 
				</span> <!-- closes monthIcon span -->
			</li>
			<li class="hourlyTab"><a href="hourly.php" data-flot="true" data-sec="hourly">Hourly</a>
				<div class="navIcon hourlyIcon">
					<div class="clock">
						<div class="minuteHand"></div>
						<div class="hourHand hour<?php echo date('h');?>"></div>
						<div class="clockDot"></div>
					</div>
				</div>
			</li>
			<li class="browserTab"><a href="browser.php" data-sec="browser">Browser</a></li>
			<li class="osTab"><a href="os.php">OS</a>
				<span class="navIcon OSIcon"> 
					<span class="OSscreen"></span> 
					<span class="OSbase"></span> 
				</span> <!-- closes OSIcon span --> 
			</li>
			<li class="geoTab"><a href="#geo">Geo</a>
				<span class="navIcon countryIcon"> 
					<span class="ring ring1"></span> 
					<span class="ring ring2"></span> 
					<span class="ring ring3"></span> 
					<span class="ring ring4"></span> 
					<span class="ring ring5"></span> 
				</span> <!-- closes countryIcon span -->
			</li>
			<li class="contentTab"><a href="#content">Content</a>
				<span class="navIcon fileIcon"> 
					<span></span>
					<table>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
						<tr><td></td></tr>
					</table>
				</span> <!-- closes fileIcon span -->
			</li>
			<li class="robotsTab"><a href="robots.php" data-sec="robots">Robots</a>
				<div class="navIcon robotIcon"> 
					<span class="robotAntena"></span> 
					<span class="robotAntena"></span> 
					<div class="robotFace"> 
						<span class="robotEye"></span> 
						<span class="robotEye"></span> 
						<table class="robotMouth"> 
							<tr> 
								<td></td><td></td><td></td><td></td> 
							</tr> 
							<tr> 
								<td></td><td></td><td></td><td></td> 
							</tr> 
						</table> 
					</div> <!-- closes robotFace span--> 
				</div> <!-- closes robotIcon span--> 
			</li>
			<li class="searchTab"><a href="search.php" data-sec="searches">Searches</a>
				<div class="navIcon searchIcon">
					<span class="searchGlass"></span>
					<span class="searchHandle"></span>
				</div>
			</li>
			<li class="errorsTab"><a href="errors.php">Errors</a>
				<span class="navIcon errorIcon"></span> <!-- closes errorIcon span -->
			</li>
		</ul>
	</nav>
	<div id="tabs-1">
		<section id="today" class="statsSection"> 
			<h2>Today</h2>
			<div id="todayStats">
				<p><span class="bold">Last Updated:</span> Friday, April 1, 2011 at: 9:17 p.m.</p> 
				<p> 10 new records since last update.</p> 
				<p>58 total visits this month</p> 
				<p>57 total uniques this month</p>
			</div><!--closes todayStats div-->
		</section>
	</div>
	</div> <!-- closes europe div -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
<script async src="js/jquery.flot.js"></script>
<script async src="js/flot.pie.js"></script>
<script async src="js/colorHelper.js"></script>
<script async src="js/superfortress.js"></script>
<script async src="js/ju87.js"></script>
<script>
$(window).load(function(){
	$("#europe").tabs({
		load: function(e,uid){
			var sec = uid.tab.dataset.sec;
			tabFuns[sec].startUp();
		},
		cache:true,
		fx: {
			opacity: 'toggle'
		},
		ajaxOptions: {
			error: function( xhr, status, index, anchor ) {
					$( anchor.hash ).html(
						"Couldn't load this tab. We'll try to fix this as soon as possible. " +
						"If this wouldn't be a demo." );
				}
		}
	});
});
</script>
</html>