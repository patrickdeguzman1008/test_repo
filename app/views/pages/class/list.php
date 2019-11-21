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
				<h3>Class List</h3>
				<div class="ui segment">
					<table class="ui celled table">
					    <thead>
					       <tr>
					        	<th>Class Name</th>
						        <th>Day</th>
						        <th>Time</th>
						        <th>Action</th>
					      </tr>
					  	</thead>
				       <tbody>
				       	<?php foreach($classList as $class) :?>
				       		<tr>
				       			<td><?php echo $class->name?></td>
				       			<td><?php echo $class->day?></td>
				       			<td><?php echo $class->time?></td>
				       			<td data-label="Edit"><a href="/LDClass/preview/<?php echo $class->id?>">Preview</a></td>
				       		</tr>
				       	<?php endforeach;?>
				       </tbody>
				    </table>
				</div>
			</div>
		</div>
		
	</main>
	
<?php require_once VIEWS.DS.'pages/tmp/footer.php'?>
