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
          <p style="color: #ffffff;">Sekretaris Pusat</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu</li>
        <li class="treeview">
          <a href="<?php echo base_url('admin/adminsekretaris')?>">
            <i class="fa fa-home"></i>
              <span>Dashboard</span>
              <span class="pull-right-container">
            </span>
          </a>
        </li>
      </ul>
      <ul class="sidebar-menu">
       <!--  <li class="header">MAIN NAVIGATION</li> -->
        <li class="treeview">
          <a href="<?php echo base_url('petugas/petugasdata')?>">
            <i class="fa fa-user"></i> <span>Petugas</span>

            <span class="pull-right-container">
            </span>
          </a>
        </li>
      </ul>
      <ul class="sidebar-menu">
      <ul class="sidebar-menu">
        <li class="header">Siswa</li>


      <ul class="sidebar-menu">
       <!--  <li class="header">MAIN NAVIGATION</li> -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-graduation-cap"></i> <span>Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('siswa/siswasekretaris/sistk')?>"><i class="fa fa-circle-o"></i>TK</a></li>
            <li><a href="<?php echo base_url('siswa/siswasekretaris/sissd')?>"><i class="fa fa-circle-o"></i> SD</a></li>
            <li><a href="<?php echo base_url('siswa/siswasekretaris/sissmp')?>"><i class="fa fa-circle-o"></i> SMP</a></li>
          </ul>
        </li>
      </ul>
      <ul class="sidebar-menu">
       <!--  <li class="header">MAIN NAVIGATION</li> -->
        <li class="treeview">
          <a href="<?php echo base_url('nilai/nilai')?>">
            <i class="fa fa-pencil"></i>
            <span>Nilai</span>
            <span class="pull-right-container">
               <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('nilai/nilai')?>"><i class="fa fa-circle-o"></i>TK</a></li>
            <li><a href="<?php echo base_url('nilai/nilai/nisd')?>"><i class="fa fa-circle-o"></i> SD</a></li>
            <li><a href="<?php echo base_url('nilai/nilai/nismp')?>"><i class="fa fa-circle-o"></i> SMP</a></li>
          </ul>
        </li>
      </ul>

     <!--  -->

       <ul class="sidebar-menu">
       <!--  <li class="header">MAIN NAVIGATION</li> -->
        <li class="treeview">
          <a href="<?php echo base_url('verifikasi_awal/verifikasi_awal')?>">
            <i class="fa fa-newspaper-o"></i> <span>Verifikasi Pendaftaran User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('verifikasi_awal/verifikasi_awal/pgtk')?>"><i class="fa fa-circle-o"></i>TK</a></li>
            <li><a href="<?php echo base_url('verifikasi_awal/verifikasi_awal/pgsd')?>"><i class="fa fa-circle-o"></i> SD</a></li>
            <li><a href="<?php echo base_url('verifikasi_awal/verifikasi_awal/pgsmp')?>"><i class="fa fa-circle-o"></i> SMP</a></li>
          </ul>
        </li>
      </ul>

       <ul class="sidebar-menu">
       <!--  <li class="header">MAIN NAVIGATION</li> -->
        <li class="treeview">
          <a href="<?php echo base_url('verifikasi/verifikasi')?>">
            <i class="fa fa-newspaper-o"></i> <span>Verifikasi Daftar Ulang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('verifikasi/verifikasi/pgtk')?>"><i class="fa fa-circle-o"></i>TK</a></li>
            <li><a href="<?php echo base_url('verifikasi/verifikasi/pgsd')?>"><i class="fa fa-circle-o"></i> SD</a></li>
            <li><a href="<?php echo base_url('verifikasi/verifikasi/pgsmp')?>"><i class="fa fa-circle-o"></i> SMP</a></li>
          </ul>
        </li>
      </ul>

      <ul class="sidebar-menu">
       <!--  <li class="header">MAIN NAVIGATION</li> -->
        <li class="treeview">
          <a href="<?php echo base_url('')?>">
            <i class="fa fa-tags"></i> <span>Pengumuman</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('verifikasi/verifikasi/pgtk')?>"><i class="fa fa-circle-o"></i>Awal</a></li>
            <li><a href="<?php echo base_url('verifikasi/verifikasi/pgsd')?>"><i class="fa fa-circle-o"></i>Final</a></li>
          </ul>
        </li>
      </ul>

      <ul class="sidebar-menu">
       <!--  <li class="header">MAIN NAVIGATION</li> -->
        <li class="treeview">
          <a href="<?php echo base_url('verifikasi/verifikasi/pgsd')?>">
            <i class="fa fa-list"></i> <span>Grafik Kuisioner</span>
          </a>
        </li>
      </ul>
      <ul class="sidebar-menu">
       <!--  <li class="header">MAIN NAVIGATION</li> -->
        <li class="treeview">
          <a href="<?php echo base_url('verifikasi/verifikasi')?>">
            <i class="fa fa-book"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('verifikasi/verifikasi/pgtk')?>"><i class="fa fa-circle-o"></i>TK</a></li>
            <li><a href="<?php echo base_url('verifikasi/verifikasi/pgsd')?>"><i class="fa fa-circle-o"></i> SD</a></li>
            <li><a href="<?php echo base_url('verifikasi/verifikasi/pgsmp')?>"><i class="fa fa-circle-o"></i> SMP</a></li>
          </ul>
        </li>
      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>

  <script type="text/javascript">
  function kirimsegment(param){
      document.location='<?php echo base_url(); ?>siswa/siswasekretaris'+param;
  }
  </script>
