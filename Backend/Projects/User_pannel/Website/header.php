<?php
function active($currect_page)
{
  $url_array=explode('/', $_SERVER['REQUEST_URI']) ;
  $url=end($url_array);  
  if($currect_page==$url)
  {
    echo 'active'; //class name in css 
  } 
}
?>
<header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke">
        <h1><a class="navbar-brand mr-lg-5" href="index.php">
				<span class="log" style="margin-left:-20px">Live</span>floor
			</a>
		</h1>
        <a href="" style="float:left">
		<?php
		if(isset($_SESSION['user']))
		{
			echo " / Welcome... ". $_SESSION['user'];
		}
		?>
		</a>
		<!-- if logo is image enable this   
		<a class="navbar-brand" href="#index.php">
			<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
		</a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index" style="margin-left:-4px">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="services">Services</a>
            </li>
			
            <li class="nav-item">
              <a class="nav-link" href="contact">Contact</a>
            </li>
			
			<li class="nav-item">
              <a class="nav-link" href="signup">Sign Up</a>
            </li>

          </ul>
        </div>
        <div class="d-lg-block d-none">
          <a href="contact.php" class="btn btn-style btn-secondary" style="margin-right: 110px">Get Free Estimate</a>
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon" style="position:absolute; right:140px; top:6px"></i>
				</div>
			<div>
				<?php
				if(isset($_SESSION['user']))
				{
				?>
				<a href="Profile">
					<img src="image\User.png" width="20px" alt="" style="position:absolute; right:-9px;top:6px;">
					<span style="position:absolute; right:20px;top:6px;">
						My~Account
					</span>	
				</a>
				<a href="logout">
					<img src="image\User.png" width="20px" alt="" style="position:absolute; right:112px;top:6px;">
					<span style="position:absolute; right:-60px;top:6px">
						Logout
					</span>	
				</a>		
				<?php
				}
				else
				{	
				?>
				<li class="nav-item">
					<a class="nav-link" href="login">Login</a>
				</li>
				<?php
				}
				?>			
            </div>
              </label>
			</div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
</header>