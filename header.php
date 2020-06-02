<header>
  <div class="header-logo">
    <h1>
      <a href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/images/params-logo.jpg" alt="Paramsのロゴ">
      </a>
    </h1>
  </div>

  <div class="header-nav">
    <nav>
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
        <div class="header-nav">
          <nav>
            <ul>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div id="nav-content" class="phone">
        <p>menu</p>
        <a href="#">- About</a>
        <a href="#">- Contact</a>
      </div>
    </nav>
  </div>
</header>