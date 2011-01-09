<?php include("funn/header.php"); 
	if($sts != false): 	?>
<div id="statsInfo">
	<section id="today" class="statsSection"> 
		<h2>Month to Date</h2>
		<div id="todayStats">
			<?php $lu = $general['LastUpdate'];
				lastUpdate($lu);
				echo "<p>". number_format($general['TotalVisits'][0]). " total visits this month</p>\n";
				echo "<p>".number_format($general['TotalUnique'][0]). " total uniques this month</p>\n"; ?>
		</div>
		<br class="clear"/> 
	</section> <!-- closes today div --> 
	 
	<section id="hours" class="statsSection"> 
		<h2>Hourly Breakdown</h2> 
		<img src="<?php echo chartURL($hourMetaC,$hourData,$hourCols);?>" alt="hour chart"/>
		<div class="tableHold">
			<?php drawTable($time12Args);
				drawTable($time24Args);?>	
			<br class="clear"/>
		</div> <!-- closes tableHold div --> 
	</section> <!-- closes hours div --> 
	 
	<section id="month" class="statsSection"> 
		<h2>Month to Date</h2>
		<img src="<?php echo chartURL($monthMetaC,$monthData,$monthCols);?>" alt="month to date line chart" />
		<div class="tableHold">
			<?php drawTable($month15Args);
				if(count($month['Date']) > 15):
					drawTable($month30Args);
				endif; ?>
		<br class="clear"/>
		</div> <!-- closes tableHold div -->     
	</section> <!-- closes month div --> 
	<section id="browserOS" class="statsSection"> 
		<div id="browser" class="tableHold"> 
			<h2>Top Browsers</h2> 
			<img src="<?php echo chartURL($browserMeta,'','');?>" alt="browser breakdown pie chart" />
			<?php drawTable($browserArgs); ?>
			<br class="clear" />
		</div> <!-- closes broswer div --> 
		<div id="os" class="tableHold"> 
			<h2>Top Operating Systems</h2> 
			<img src="<?php echo chartURL($osMeta,'','');?>" alt="browser breakdown pie chart" />
			<?php drawTable($osArgs); ?>
			<br class="clear" />
		</div> <!-- closes broswe div --> 
	</section> <!-- closes browseOS div --> 
	<section id="domainIP" class="statsSection"> 
		<div class="tableHold">
			<h2>Top 15 Countries</h2>
			<img src="<?php echo chartURL($ccMap,'','');?>" alt="world chart" />
			<?php drawTable($domainArgs); ?>
			<h2>Top 10 IPs</h2>
			<?php  drawTable($ipArgs);?>
			<br class="clear" />
		</div> <!-- closes tableHold div --> 
	</section> <!-- closes domainIP div --> 
	<section id="content" class="statsSection">
		<h2>Files &amp; Pages</h2>
		<aside id="files">
			<h2>File Types</h2>
			<?php drawTable($fileArgs); ?>
		</aside> <!-- closes files div --> 
		<aside id="pages"> 
			<h2>Top 15 Pages</h2> 
			<?php drawTable($pagesArgs); ?>
		</aside> <!-- closes pages div -->
		<br class="clear" />
	</section> 
	<section id="searchReffs" class="statsSection"> 
		<h2>Search Engines &amp; Refferals</h2>
			<?php drawTable($searchArgs); ?>
		<br class="clear" />
		<div class="tableHold">
			<aside id="se">
				<h2>Top 15 Search Engines</h2>
				<?php drawTable($refArgs);?>
			</aside>
			<aside id="robots">
				<h2>Robots</h2>
				<?php drawTable($robotArgs);	?>
			</aside>
			<br class="clear" />
		</div> <!-- closes tableHold div -->
		<div class="tableHold">
			<aside id="searchPhrase">
				<h2>Top 10 Search Phrases</h2>
				<?php drawTable($searchPArgs); ?>
			</aside> <!-- closes searchPhrase div --> 
			<aside id="searchWord">
				<h2>Top 10 Search Words</h2>
				<?php drawTable($searchWArgs); ?>
			</aside> <!-- closes searchPhrase div --> 
			<br class="clear"/>
		</div> <!-- closes tableHold div -->
	</section> <!-- closes robots div --> 
	<section id="errors" class="statsSection">
		<h2>Errors</h2>
		<?php drawTable($errorArgs); ?>
	</section> <!-- closes errors div -->
</div> <!-- closes statsInfo div -->
<?php 
else:
	echo 'invalid file';
endif;
include("funn/footer.php"); ?>