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

      <section class="ui segment">
        <h3>Create Lender</h3>
        <form class="ui form">
          <div class="field">
            <label>First Name</label>
            <input type="text" name="" placeholder="First Name">
            <small>*Some warning that needs to be solved</small>
          </div>
          <div class="field">
            <label>Last Name</label>
            <input type="text" name="" placeholder="Last Name">
          </div>
          <div class="field">
            <label>Email</label>
            <input type="email" name="" placeholder="Email">
          </div>

          <div class="field">
            <label>Phone</label>
            <input type="text" name="" placeholder="Phone">
          </div>

          <div class="field">
            <label>Password</label>
            <input type="password" name="" placeholder="Password">
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
      </section>
     
  </main>
  <script type="text/javascript" defer>
  $('.ui.checkbox')
    .checkbox()
  ;
  </script>
    </div>
    
  </main>
  
<?php require_once VIEWS.DS.'pages/tmp/footer.php'?>