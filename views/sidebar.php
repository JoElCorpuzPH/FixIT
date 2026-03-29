<?php

$roleId = $_SESSION['role_id'] ?? null;

if (!$roleId) {
  header('Location: login.php');
  exit;
}

// 1. Identify the current page for the "active" class
$current_page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// 2. Get the role from the session (default to 0 or null if not set)
$role_id = isset($_SESSION['role_id']) ? $_SESSION['role_id'] : 0;


?>


<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href="./index.php" class="brand-link">
      <!--begin::Brand Image-->
      <img
        src="./assets/img/AdminLTELogo.png"
        alt="AdminLTE Logo"
        class="brand-image opacity-75 shadow" />
      <!--end::Brand Image-->
      <!--begin::Brand Text-->
      <span class="brand-text fw-light">I-SeRVE</span>
      <!--end::Brand Text-->
    </a>
    <!--end::Brand Link-->
  </div>
  <!--end::Sidebar Brand-->
  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <!--begin::Sidebar Menu-->
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="navigation"
        aria-label="Main navigation"
        data-accordion="false"
        id="navigation">
        <?php
        $rolePages = [
          1 => "admin/index.php",
          2 => "employee/index.php",
          3 => "user/index.php"
        ];

        $roleLink = $rolePages[$_SESSION['role_id']] ?? "index.php";
        ?>




        <li class="nav-item">
          <a href="index.php" class="nav-link <?php echo ($current_page == 'dashboard') ? 'active' : ''; ?>">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>Main Dashboard</p>
          </a>
        </li>

        <?php if ($role_id == 1 || $role_id == 2): ?>
          <li class="nav-item">
            <a href="index.php?page=job_requests" class="nav-link <?php echo ($current_page == 'job_requests') ? 'active' : ''; ?>">
              <i class="nav-icon bi bi-tools"></i>
              <p>Job Requests</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=inventory_requests" class="nav-link <?php echo ($current_page == 'inventory_requests') ? 'active' : ''; ?>">
              <i class="nav-icon bi bi-cart"></i>
              <p>Inventory Requests</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=inventory_mgmt" class="nav-link <?php echo ($current_page == 'inventory_mgmt') ? 'active' : ''; ?>">
              <i class="nav-icon bi bi-box"></i>
              <p>Inventory Management</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=user_mgmt" class="nav-link <?php echo ($current_page == 'user_mgmt') ? 'active' : ''; ?>">
              <i class="nav-icon bi bi-people"></i>
              <p>User Management</p>
            </a>
          </li>

        <?php elseif ($role_id == 3): ?>
          <li class="nav-item">
            <a href="index.php?page=service_request" class="nav-link <?php echo ($current_page == 'service_request') ? 'active' : ''; ?>">
              <i class="nav-icon bi bi-clipboard-check"></i>
              <p>Service Request</p>
            </a>
          </li>
        <?php endif; ?>




      </ul>
      <!--end::Sidebar Menu-->
    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->