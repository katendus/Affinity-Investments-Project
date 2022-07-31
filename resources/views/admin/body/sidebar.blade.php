@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
 
@endphp


  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar"> 
    
        <div class="user-profile">
      <div class="ulogo">
         <a href="{{ url('admin/dashboard') }}">
          <!-- logo for regular state and mobile devices -->
           <div class="d-flex align-items-center justify-content-center">           
              <img src="{{ asset('backend/images/logo-dark.png') }}" alt="">              
              <h3>Affinity Investments</h3>
           </div>
        </a>
      </div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
      
<!--     <li class="{{ ($route == 'dashboard')? 'active':'' }}"><a href="{{ url('admin/dashboard') }}"><i data-feather="pie-chart"></i>
 -->    
 <li class="{{ ($route == 'dashboard')? 'active':'' }}"><a href="{{ url('admin/dashboard') }}"><i data-feather="pie-chart"></i>
      <span>Dashboard</span>
          </a>
        </li>  
    

        <li class="treeview {{ ($prefix == '/grid')?'active':'' }}  ">
          <a href="#">
            <i data-feather="server"></i>
            <span>Data Grid</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($route == 'ppg.grid')? 'active':'' }}"><a href="{{ route('ppg.grid') }}"><i class="ti-more"></i>Data Grid</a></li>
            <li class="{{ ($route == 'add.grid')? 'active':'' }}"><a href="{{ route('add.grid') }}"><i class="ti-more"></i>Add Record</a></li>            
          </ul>
        </li> 
    
        
      </ul>
    </section>
  
  </aside>
