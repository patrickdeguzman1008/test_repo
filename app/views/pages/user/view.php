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
				<h3>User View</h3>
				<div class="ui segment">
					<h4>Jhon Doe</h4>
					<section>
						<div>Cash Advance    : <strong>5,000.00</strong> <a href="#">(Full Details)</a></div>
						<div>Product Advance : <strong>1,000.00</strong> <a href="#">(Full Details)</a> </div>
					</section>
					<div class="ui horizontal segments">
					    <div class="ui segment">
					      <div><strong>Personal</strong></div>
					      <div>First Name: <strong>Jhon</strong> </div>
					      <div>Last Name: <strong>Doe</strong> </div>
					    </div>

					    <div class="ui segment">
					      <div><strong>Contacts</strong></div>
					      <div>Mobile : <strong>11111111111</strong></div>
					      <div>Email  : <strong>gonzalesmarkangeloph@gmail.com</strong></div>
					    </div>

					    <div class="ui segment">
					      <div><strong>Others</strong></div>
					      <div>Status: <strong>Active</strong></div>
					      <div>Created At: 11/16/2019 </div>
					    </div>
					  </div>
					  <div>
					 	Class :<a href="#"><strong> CLASS B</strong></a> 
					  </div>
				</div>

				<div class="ui segment">
					<h4>History</h4>
					<table class="ui celled table">
					    <thead>
					       <tr>
					        	<th>Prev</th>
						        <th>Next</th>
						        <th>Date</th>
						        <th>Approved By</th>
						        <th>Reason</th>
					      </tr>
					  	</thead>
				       <tbody>
				        <tr>
				          <td data-label="Fullname">CLASS-C</td>
				          <td data-label="Email">CLASS-B</td>
				          <td data-label="Phone">Nov/ 16 / 2019</td>
				          <td data-label="Action">John Admin</td>
				          <td data-label="Action">
				          	<p>User needs to switch inable <br>to cash advance</p>
				          </td>
				        </tr>
				       </tbody>
				    </table>
				</div>
			</div>
		</div>
		
	</main>
	
<?php require_once VIEWS.DS.'pages/tmp/footer.php'?>
