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
				<h4>Lenders List</h4>
				<section class="ui segment">
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
				</section>
			</div>
		</div>
		
	</main>
	
<?php require_once VIEWS.DS.'pages/tmp/footer.php'?>
