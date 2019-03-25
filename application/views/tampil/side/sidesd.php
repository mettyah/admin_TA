<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
        <div class="pull-left info">
          <p style="color: #ffffff;">Admin SD</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->

      <ul class="sidebar-menu">
       <!--  <li class="header">MAIN NAVIGATION</li> -->
        <li class="treeview">
          <a href="<?php echo base_url('siswa/siswasd')?>">
            <i class="fa fa-graduation-cap"></i> <span>Siswa</span>

            <span class="pull-right-container">
            </span>
          </a>
        </li>
      </ul>
      <ul class="sidebar-menu">
       <!--  <li class="header">MAIN NAVIGATION</li> -->
        <li class="treeview">
          <a href="<?php echo base_url('nilai/nilaisd')?>">
            <i class="fa fa-dashboard"></i> <span>Nilai</span>

            <span class="pull-right-container">
            </span>
          </a>
        </li>
      </ul>

       <ul class="sidebar-menu">
       <!--  <li class="header">MAIN NAVIGATION</li> -->
        <li class="treeview">
          <a href="<?php echo base_url('siswa/siswasd/pgsd')?>">
            <i class="fa fa-newspaper-o"></i> <span>Verifikasi</span>

            <span class="pull-right-container">
            </span>
          </a>
        </li>
      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>
