<header>
<!-- Navigation Menu -->
    <div class="logo">
        <a href="<?php echo BASE_URL . '/index.php' ?>" class="logo-text"><span>BlogLogo</span></a>
    </div>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
        <li class="nav-item">
          <a href="<?php echo BASE_URL . '/index.php' ?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">About</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Services</a>
        </li>

        <?php if (isset($_SESSION['id'])): ?>
          <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa fa-user"></i>
                <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down"></i>
          </a>
            <ul>
              <?php if ($_SESSION['admin']): ?>
                <li class="nav-item">
                  <a href="#" class="dashboard">Dashboard</a>
                </li>
              <?php endif; ?>
              <li class="nav-item">
                <a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Logout</a>
              </li>
            </ul>
          </li>

        <?php else: ?>
          <li class="nav-item">
              <a href="<?php echo BASE_URL . '/register.php' ?>" class="nav-link">Sign up</a>
          </li>
          <li class="nav-item">
              <a href="<?php echo BASE_URL . '/login.php' ?>" class="nav-link">Login</a>
          </li>
        <?php endif; ?>
    </ul>
  </header>

