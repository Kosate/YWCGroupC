<?php 
  function css() {
?>
  @font-face {
      font-family: 'RSU_Regular';
      src: url('assets/rsufont/RSU_light.ttf');
  }

  body {
    font-family: 'RSU_Regular', Tahoma, Arial, sans-serif;
    background: #e8e8e8;
    -webkit-font-smoothing: antialiased;
  }
  #navbar {
    background: #fff;
    box-shadow: #555 2px 0px 5px;
  }
  #logo{
  padding:10px;
  }
  #register{
    vertical-align: text-button;
  }
  .navbar .navbar-nav {
  display: inline-block;
  float: none;
  vertical-align: top;
}

<?php
  }

  function navbar() {
?>
<nav id="navbar" class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header text-center">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.php"><img id='logo'  height="120px"   src="assets/images/Logo.png" ></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right" id="register">
        <li><a href="profile.php">Profile</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php 
  } 
?>