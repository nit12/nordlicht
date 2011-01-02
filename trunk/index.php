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
			<?php tableMeta2($time,$timeMetaT,12);
			tableMeta2($time,$timeMetaT,false,12); ?>    
		<br class="clear"/>    
		</div> <!-- closes tableHold div --> 
	</section> <!-- closes hours div --> 
	 
	<section id="month" class="statsSection"> 
		<h2>Month to Date</h2>
		<img src="<?php echo chartURL($monthMetaC,$monthData,$monthCols);?>" alt="month to date line chart" />
		<div class="tableHold">
			<?php tableMeta2($month,$monthMetaT,15);
				tableMeta2($month,$monthMetaT,false,15); ?>
		<br class="clear"/>
		</div> <!-- closes tableHold div -->     
	</section> <!-- closes month div --> 
	<section id="browserOS" class="statsSection"> 
		<div id="browser" class="tableHold"> 
			<h2>Top Browsers</h2> 
			<img src="<?php echo chartURL($browserMeta,'','');?>" alt="browser breakdown pie chart" />
			<?php tableMeta($brSec,$brMetaT); ?>
			<br class="clear" />
		</div> <!-- closes broswer div --> 
		<div id="os" class="tableHold"> 
			<h2>Top Operating Systems</h2> 
			<img src="<?php echo chartURL($osMeta,'','');?>" alt="browser breakdown pie chart" />
			<?php tableMeta($osSec,$osMetaT); ?>
			<br class="clear" />
		</div> <!-- closes broswe div --> 
	</section> <!-- closes browseOS div --> 
	<section id="domainIP" class="statsSection"> 
		<div class="tableHold">
			<h2>Top 15 Countries</h2>
			<img src="<?php echo chartURL($ccMap,'','');?>" alt="world chart" />
			<?php $robotArgs = array('section'=>$domain,'meta'=>$domainMetaT,'limit'=>15,'sort'=>'Hits','cc'=>$cc);
			robotTable2($robotArgs); ?>
			<h2>Top 10 IPs</h2>
			<?php  sortTable($IPs,$IPMetaT,10,'Hits');?>
			<br class="clear" />
		</div> <!-- closes tableHold div --> 
	</section> <!-- closes domainIP div --> 
	<section id="content" class="statsSection">
		<h2>Files &amp; Pages</h2>
		<aside id="files">
			<h2>File Types</h2>
			<?php sortTable($files,$filesMetaT,false,'Hits'); ?>
		</aside> <!-- closes files div --> 
		<aside id="pages"> 
			<h2>Top 15 Pages</h2> 
			<?php $pagesArgs = array('section'=>$pages,
							'meta'=>$pagesMetaT,
							'limit'=>15,
							'sort'=>'Pages',
							'baseURL'=>$statsURL);
			robotTable2($pagesArgs);?>
		</aside> <!-- closes pages div -->
		<br class="clear" />
	</section> 
	<section id="searchReffs" class="statsSection"> 
		<h2>Search Engines &amp; Refferals</h2>
			<?php $pagearg = array('section'=>$pageRef,'meta'=>$pageRefMetaT,'sort'=>'Hits','limit'=>15);
				robotTable2($pagearg); ?>
		<br class="clear" />
		<div class="tableHold">
			<aside id="se">
				<h2>Top 15 Search Engines</h2>
				<?php 
				$refarg = array('section'=>$searchRef,'meta'=>$searchRefMetaT,'sort'=>'Hits','limit'=>15);
						robotTable2($refarg);?>
			</aside>
			<aside id="robots">
				<h2>Robots</h2>
				<?php sortTable($robot,$robotMetaT,10,'Hits');	?>
			</aside>
			<br class="clear" />
		</div> <!-- closes tableHold div -->
		<div class="tableHold">
			<aside id="searchPhrase">
				<h2>Top 10 Search Phrases</h2>
				<?php sortTable($searchPhrase,$searchPhraseMetaT,10,'Number of search'); ?>
			</aside> <!-- closes searchPhrase div --> 
			<aside id="searchWord">
				<h2>Top 10 Search Words</h2>
				<?php sortTable($searchWord,$searchWordMetaT,10,'Number of search'); ?>
			</aside> <!-- closes searchPhrase div --> 
			<br class="clear"/>
		</div> <!-- closes tableHold div -->
	</section> <!-- closes robots div --> 
	<section id="errors" class="statsSection">
		<h2>Errors</h2>
		<?php 	$pagearg = array('section'=>$errors,'meta'=>$errorMetaT,'sort'=>'Hits','error'=>$apacheStatusCode);
				robotTable2($pagearg); ?>
	</section> <!-- closes errors div -->
</div> <!-- closes statsInfo div -->
<?php 
else:
	echo 'invalid file';
endif;
include("funn/footer.php"); ?>