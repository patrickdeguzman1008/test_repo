<?php require_once VIEWS.DS.'pages/tmp/header.php'?>
</head>
<body style="">

	<main class="ui container">
		<div class="ui inverted menu">
		  <a class="active item">
		    Home
		  </a>
		  <a class="item">
		    Messages
		  </a>
		  <a class="item">
		    Friends
		  </a>
		</div>


		<div class="ui grid">
			<?php require_once VIEWS.DS.'pages/tmp/sidebar.php'?>
			<div class="twelve wide column">
				<h3>Class View</h3>
				<div class="ui segment">
					<h4>Class Info</h4>
					<div class="ui horizontal segments">
					    <div class="ui segment">
					      <div><strong>Class</strong></div>
					      <div>Class Name:<strong><?php echo $class->name?></strong> </div>
					      <div>Date Createad:<strong><?php echo $class->created_on?></strong> </div>
					    </div>

					    <div class="ui segment">
					      <div><strong>Schedule</strong></div>
					      <div><a href="#">Preview</a></div>
					      <div>Upnext (Nov 20)</div>
					    </div>

					    <div class="ui segment">
					      <div><strong>Others</strong></div>
					      <div>Total Attendees: 33</div>
					      <div><a href="#">History</a> </div>
					    </div>
					  </div>
				</div>

				<div class="ui segment">
					<h4>Schedule</h4>
					<?php $dates = getDayMonthOccurence('2019' , '11');?>

					<div>
						November
						<?php foreach($dates as $date) :?>
							<a class="ui label"><?php echo $date?></a>
						<?php endforeach;?>
					</div>
				</div>

				<div class="ui segment">
					<h4>Class List</h4>
					<table class="ui celled table">
					    <thead>
					       <tr>
					        	<th>Fullname</th>
						        <th>Email</th>
						        <th>Phone</th>
						        <th>Action</th>
					      </tr>
					  	</thead>
				       <tbody>
				        <tr>
				          <td data-label="Fullname">Jhon doe</td>
				          <td data-label="Email">sample@email.com</td>
				          <td data-label="Phone">09063387451</td>
				          <td data-label="Action"><a href="/pages/user_view">Preview</a></td>
				        </tr>
				        <tr>
				          <td data-label="Fullname">Jhon doe</td>
				          <td data-label="Email">sample@email.com</td>
				          <td data-label="Phone">09063387451</td>
				          <td data-label="Action"><a href="/pages/user_view">Preview</a></td>
				        </tr>
				       </tbody>
				    </table>
				</div>
			</div>
		</div>
		
	</main>
	
<?php require_once VIEWS.DS.'pages/tmp/footer.php'?>
