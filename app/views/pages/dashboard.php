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
			<div class="four wide column">
				<div class="ui secondary vertical menu">
				  <a class="active item">
				    Class
				  </a>
				  <a class="item">Create</a>
				  <a class="item">List</a>
				</div>
			</div>

			<div class="ten wide column">
				<div class="ui segment">
					<h3>Create Class</h3>
					<form class="ui form">
				      <div class="field">
				        <label>Class Name</label>
				        <input type="text" name="" placeholder="Mobile Number">
				      </div>

				      <div class="field">
				        <label>Date</label>
				        <input type="date" name="">
				      </div>

				      <div class="field">
				        <label>Time</label>
				        <input type="time" name="">
				      </div>

				      <button class="ui button primary" type="submit">Create Class</button>
				    </form>
				</div>
			</div>
		</div>
		
	</main>
	
<?php require_once VIEWS.DS.'pages/tmp/footer.php'?>
