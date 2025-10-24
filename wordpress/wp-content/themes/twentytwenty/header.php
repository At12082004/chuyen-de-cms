<?php
/**
 * Custom Header file for Group C (Bootstrap + Font Awesome)
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <?php wp_head(); ?>

  <style>
    /* ======== HEADER STYLE ======== */
    .custom-header {
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .navbar-toggler {
      border: none;
    }

    .navbar-toggler:focus {
      box-shadow: none;
    }

    .main-menu li a {
      color: #333;
      font-weight: 500;
      text-decoration: none;
      transition: color 0.2s;
    }

    .main-menu li a:hover {
      color: #007bff;
    }

    /* ======== SEARCH FORM STYLE ======== */
    .search-form {
      display: flex;
      align-items: center;
      max-width: 280px;
    }

    .search-form input[type="search"] {
      border: 1px solid #ccc;
      border-right: none;
      height: 34px;
      font-size: 14px;
      padding: 4px 8px;
      color: #333;
      flex: 1;
    }

    .search-form input:focus {
      border-color: #007bff;
      outline: none;
      box-shadow: none;
    }

    .search-form button {
      border: 1px solid #ccc;
      background-color: #f8f9fa;
      height: 34px;
      padding: 0 12px;
      font-size: 14px;
      color: #333;
      cursor: pointer;
      transition: all 0.2s;
    }

    .search-form button:hover {
      background-color: #e9ecef;
      border-color: #999;
    }

    @media (max-width: 992px) {
      .d-flex.align-items-center.gap-3.flex-grow-1 {
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
      }
      .search-form {
        width: 100%;
        margin-top: 10px;
      }
    }
  </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="site-header" class="custom-header py-2">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">

      <!-- LOGO -->
      <a class="navbar-brand fw-bold text-dark" href="<?php echo esc_url(home_url('/')); ?>">Group C</a>

      <!-- Mobile Toggle -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarGroupC" aria-controls="navbarGroupC" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-between" id="navbarGroupC">

        <!-- LEFT: Home + Search -->
        <div class="d-flex align-items-center gap-3 flex-grow-1">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-light px-3 py-1">Home</a>

          <!-- SEARCH FORM -->
          <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
            <input type="search" name="s" placeholder="Search" value="<?php echo get_search_query(); ?>">
            <button type="submit">Submit</button>
          </form>
        </div>

        <!-- CENTER: MENU -->
        <nav class="mx-4">
          <?php
          wp_nav_menu(array(
              'theme_location' => 'primary',
              'menu_class'     => 'main-menu d-flex list-unstyled mb-0 gap-4',
              'container'      => false,
              'fallback_cb'    => '__return_false',
              'depth'          => 1
          ));
          ?>
        </nav>

        <!-- RIGHT: ICONS -->
        <div class="d-flex align-items-center gap-3 mt-2 mt-lg-0">
          <!-- Menu -->
          <button class="btn btn-link text-dark d-flex flex-column align-items-center">
            <i class="fa-solid fa-ellipsis"></i>
            <small>Menu</small>
          </button>

          <!-- Search -->
          <a href="<?php echo esc_url(home_url('/')); ?>?s=" class="btn btn-link text-dark d-flex flex-column align-items-center">
            <i class="fa-solid fa-magnifying-glass"></i>
            <small>Search</small>
          </a>

          <!-- Account -->
          <div class="dropdown">
            <button class="btn btn-link text-dark dropdown-toggle d-flex flex-column align-items-center" data-bs-toggle="dropdown">
              <i class="fa-solid fa-user-circle"></i>
              <small>Account</small>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow-sm">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>
