@ @extends('layouts.main')
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
      @include('shared.sidebar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('shared.header')
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        
        <div class="row">
          <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">ventas</h5>
                  </div>
                  
                </div>
                <div id="chart"></div>
              </div>
            </div>
          </div>
          
        </div>
       
 <!--  inicio footer-->
<!--  fin footer-->
      </div>
    </div>
  </div>