<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../index3.html" class="brand-link">
    <img src="<?= base_url('assets'); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url('assets'); ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../index.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v1</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../index2.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v2</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../index3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v3</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="widgets.html" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Widgets
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Layout Options
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">6</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="layout/top-nav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Top Navigation</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="layout/top-nav-sidebar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Top Navigation + Sidebar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="layout/boxed.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Boxed</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="layout/fixed-sidebar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fixed Sidebar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="layout/fixed-sidebar-custom.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fixed Sidebar <small>+ Custom Area</small></p>
              </a>
            </li>
            <li class="nav-item">
              <a href="layout/fixed-topnav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fixed Navbar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="layout/fixed-footer.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Fixed Footer</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="layout/collapsed-sidebar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Collapsed Sidebar</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Charts
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="charts/chartjs.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>ChartJS</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="charts/flot.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Flot</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="charts/inline.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inline</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>
              UI Elements
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="UI/general.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>General</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="UI/icons.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Icons</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="UI/buttons.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Buttons</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="UI/sliders.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sliders</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="UI/modals.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Modals & Alerts</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="UI/navbar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Navbar & Tabs</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="UI/timeline.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Timeline</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="UI/ribbons.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ribbons</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Forms
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="forms/general.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>General Elements</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="forms/advanced.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Advanced Elements</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="forms/editors.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Editors</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="forms/validation.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Validation</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Tables
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="tables/simple.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Simple Tables</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="tables/data.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>DataTables</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="tables/jsgrid.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>jsGrid</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">EXAMPLES</li>
        <li class="nav-item">
          <a href="calendar.html" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              Calendar
              <span class="badge badge-info right">2</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="gallery.html" class="nav-link active">
            <i class="nav-icon far fa-image"></i>
            <p>
              Gallery
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="kanban.html" class="nav-link">
            <i class="nav-icon fas fa-columns"></i>
            <p>
              Kanban Board
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-envelope"></i>
            <p>
              Mailbox
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="mailbox/mailbox.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inbox</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="mailbox/compose.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Compose</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="mailbox/read-mail.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Read</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Pages
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="examples/invoice.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Invoice</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="examples/profile.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Profile</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="examples/e-commerce.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>E-commerce</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="examples/projects.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Projects</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="examples/project-add.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Add</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="examples/project-edit.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Edit</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="examples/project-detail.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Project Detail</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="examples/contacts.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contacts</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="examples/faq.html" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>FAQ</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="examples/contact-us.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contact us</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-plus-square"></i>
            <p>
              Extras
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Login & Register v1
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="examples/login.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Login v1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="examples/register.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Register v1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="examples/forgot-password.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Forgot Password v1</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="examples/recover-password.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Recover Password v1</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Login & Register v2
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="examples/login-v2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Login v2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="examples/register-v2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Register v2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="examples/forgot-password-v2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Forgot Password v2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="examples/recover-password-v2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Recover Password v2</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="examples/lockscreen.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lockscreen</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="examples/legacy-user-menu.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Legacy User Menu</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="examples/language-menu.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Language Menu</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="examples/404.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Error 404</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="examples/500.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Error 500</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="examples/pace.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pace</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="examples/blank.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Blank Page</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../starter.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Starter Page</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-search"></i>
            <p>
              Search
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="search/simple.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Simple Search</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="search/enhanced.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Enhanced</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">MISCELLANEOUS</li>
        <li class="nav-item">
          <a href="https://adminlte.io/docs/3.0/" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>Documentation</p>
          </a>
        </li>
        <li class="nav-header">MULTI LEVEL EXAMPLE</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-circle nav-icon"></i>
            <p>Level 1</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              Level 1
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Level 2</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Level 2
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Level 3</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Level 3</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Level 3</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Level 2</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-circle nav-icon"></i>
            <p>Level 1</p>
          </a>
        </li>
        <li class="nav-header">LABELS</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-danger"></i>
            <p class="text">Important</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-warning"></i>
            <p>Warning</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Informational</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Gallery</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Gallery</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h4 class="card-title">FilterizR Gallery with Ekko Lightbox</h4>
            </div>
            <div class="card-body">
              <div>
                <div class="btn-group w-100 mb-2">
                  <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All items </a>
                  <a class="btn btn-info" href="javascript:void(0)" data-filter="1"> Category 1 (WHITE) </a>
                  <a class="btn btn-info" href="javascript:void(0)" data-filter="2"> Category 2 (BLACK) </a>
                  <a class="btn btn-info" href="javascript:void(0)" data-filter="3"> Category 3 (COLORED) </a>
                  <a class="btn btn-info" href="javascript:void(0)" data-filter="4"> Category 4 (COLORED, BLACK) </a>
                </div>
                <div class="mb-2">
                  <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle items </a>
                  <div class="float-right">
                    <select class="custom-select" style="width: auto;" data-sortOrder>
                      <option value="index"> Sort by Position </option>
                      <option value="sortData"> Sort by Custom Data </option>
                    </select>
                    <div class="btn-group">
                      <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending </a>
                      <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="filter-container p-0 row">
                  <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="sample 1 - white">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2" alt="white sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                    <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox" data-title="sample 2 - black">
                      <img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2" alt="black sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red">
                      <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red">
                      <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                    <a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox" data-title="sample 5 - black">
                      <img src="https://via.placeholder.com/300/000000?text=5" class="img-fluid mb-2" alt="black sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox" data-title="sample 6 - white">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=6" class="img-fluid mb-2" alt="white sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox" data-title="sample 7 - white">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2" alt="white sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                    <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox" data-title="sample 8 - black">
                      <img src="https://via.placeholder.com/300/000000?text=8" class="img-fluid mb-2" alt="black sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red">
                      <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox" data-title="sample 10 - white">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2" alt="white sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox" data-title="sample 11 - white">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=11" class="img-fluid mb-2" alt="white sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                    <a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox" data-title="sample 12 - black">
                      <img src="https://via.placeholder.com/300/000000?text=12" class="img-fluid mb-2" alt="black sample" />
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h4 class="card-title">Ekko Lightbox</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2" alt="white sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2" alt="black sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox" data-title="sample 5 - black" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/000000?text=5" class="img-fluid mb-2" alt="black sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox" data-title="sample 6 - white" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FFFFFF?text=6" class="img-fluid mb-2" alt="white sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox" data-title="sample 7 - white" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2" alt="white sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox" data-title="sample 8 - black" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/000000?text=8" class="img-fluid mb-2" alt="black sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox" data-title="sample 10 - white" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2" alt="white sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox" data-title="sample 11 - white" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/FFFFFF?text=11" class="img-fluid mb-2" alt="white sample" />
                  </a>
                </div>
                <div class="col-sm-2">
                  <a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox" data-title="sample 12 - black" data-gallery="gallery">
                    <img src="https://via.placeholder.com/300/000000?text=12" class="img-fluid mb-2" alt="black sample" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->