<?php
    include_once("./assets/php/template/htmlTemplateHeader.php");
?>
<body id="expositions">
		<?php
            include_once("./assets/php/template/navMenu.php");
        ?>		
	<div class="main">
		<div id="head-container"> 
			<?php
				include_once("./assets/php/template/header.php");
			?>
		</div>	

	    <h1 role="heading" aria-level="1">Expositions</h1>
		

		<!-- DÉBUT agenda  -->
		<div class="agenda">
			<div class="table-responsive">
				<table class="table table-condensed table-bordered">
					<thead>
						<tr>
							<th>Date</th>
							<th>Time</th>
							<th>Event</th>
						</tr>
					</thead>
					<tbody>
						<!-- Single event in a single day -->
						<tr>
							<td class="agenda-date" class="active" rowspan="1">
								<div class="dayofmonth">26</div>
								<div class="dayofweek">Saturday</div>
								<div class="shortdate text-muted">July, 2014</div>
							</td>
							<td class="agenda-time">
								5:30 AM
							</td>
							<td class="agenda-events">
								<div class="agenda-event">
									<i class="glyphicon glyphicon-repeat text-muted" title="Repeating event"></i> 
									Fishing
								</div>
							</td>
						</tr>
						
						<!-- Multiple events in a single day (note the rowspan) -->
						<tr>
							<td class="agenda-date" class="active" rowspan="3">
								<div class="dayofmonth">24</div>
								<div class="dayofweek">Thursday</div>
								<div class="shortdate text-muted">July, 2014</div>
							</td>
							<td class="agenda-time">
								8:00 - 9:00 AM 
							</td>
							<td class="agenda-events">
								<div class="agenda-event">
									Doctor's Appointment
								</div>
							</td>
						</tr>
						<tr>
							<td class="agenda-time">
								10:15 AM - 12:00 PM 
							</td>
							<td class="agenda-events">
								<div class="agenda-event">
									Meeting with executives
								</div>
							</td>
						</tr>
						<tr>
							<td class="agenda-time">
								7:00 - 9:00 PM
							</td>
							<td class="agenda-events">
								<div class="agenda-event">
									Aria's dance recital
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!-- FIN agenda  -->

        <?php
            include_once("./assets/php/template/footer.php");
        ?>

	</div>
	<?php
        include_once("./assets/php/template/loadLibJS.php");
    ?>
	<script>
		$(document).ready(function () {
			$(".nav li").removeClass("active");
			$('#nav-exposition').addClass('active');
		});
	</script>
</body>
</html>