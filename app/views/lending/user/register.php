<?php require_once VIEWS.DS.'pages/tmp/header.php'?>
</head>
<body style="">
  <?php //require_once VIEWS.DS.'pages/tmp/navigation.php'?>
  
  <main class="ui main text container">
  	<h1 class="ui header">Registration Form</h1>

    <form class="ui form" method="post" action="/LDUser/add_user">
      <div class="field">
        <label>First Name</label>
        <input type="text" name="firsrname" placeholder="First Name">
        <small>*Some warning that needs to be solved</small>
      </div>
         <div class="field">
        <label>Middle Name</label>
        <input type="text" name="middlename" placeholder="Last Name">
      </div>
      <div class="field">
        <label>Last Name</label>
        <input type="text" name="lastname" placeholder="Last Name">
      </div>
      <div class="field">
        <label>Email</label>
        <input type="email" name="email" placeholder="Email">
      </div>

      <div class="field">
        <label>Phone</label>
        <input type="text" name="phone" placeholder="Phone">
      </div>

      <div class="field">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password">
      </div>

      <div class="field">
        <label>
           <input type="checkbox" name="" class="ui checkbox">
          Agree to terms and condition
        </label>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>

      <button class="ui button primary" type="submit">Submit</button>
    </form>
  </main>
  <script type="text/javascript" defer>
  $('.ui.checkbox')
    .checkbox()
  ;
  </script>
<?php require_once VIEWS.DS.'pages/tmp/footer.php'?>
