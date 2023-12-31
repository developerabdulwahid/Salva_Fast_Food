<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/admin"> <img alt="image" src="<?php echo e(asset('dashboard')); ?>/assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">Salva</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <!-- <li class="menu-header">Main</li> -->
            <li class="dropdown active">
              <a href="/admin" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>Careers</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo e(route('jobs')); ?>">Jobs</a></li>
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Queries</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo e(route('contacts.index')); ?>">Contact Us</a></li>
                <li><a class="nav-link" href="<?php echo e(route('franchises.index')); ?>">Franchise</a></li>
               </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="settings"></i><span>Settings</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo e(route('sliders.index')); ?>">Slider</a></li>
                <li><a class="nav-link" href="<?php echo e(route('documents.index')); ?>">Menu Document</a></li>
                <li><a class="nav-link" href="<?php echo e(route('dineIn.edit', ['id' => 1])); ?>">Dine In Document</a></li>
               </ul>
            </li>  

          </ul>
        </aside>
      </div><?php /**PATH D:\work\works OutSource\Salva_Fast_Food\resources\views/dashboard/includes/sidebar.blade.php ENDPATH**/ ?>