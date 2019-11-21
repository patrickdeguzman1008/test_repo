<?php require_once VIEWS.DS.'pages/tmp/header.php'?>
</head>
<body style="">
  <?php require_once VIEWS.DS.'pages/tmp/navigation.php'?>
  
  <main class="ui main text container">
    <h1 class="ui header">Login Form</h1>
    <form class="ui form">
      <div class="field">
        <label>Email / Mobile Number</label>
        <input type="text" name="" placeholder="Mobile Number">
      </div>

      <div class="field">
        <label>Password</label>
        <input type="password" name="" placeholder="Password">
      </div>

      <button class="ui button primary" type="submit">Login</button>
    </form>
  </main>

  <?php require_once VIEWS.DS.'pages/tmp/footer.php'?>
