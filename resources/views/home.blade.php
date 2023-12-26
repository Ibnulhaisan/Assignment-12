@extends('layout.app')


@section('content')
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    @include('component.sidebar')
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-home"></i>
            </span> Dashboard
          </h3>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
              </li>
            </ul>
          </nav>
        </div>

@include('component.card')
@include('component.visitandsales')
@include('component.recentticket')
@include('component.recentupdate')
@include('component.projectstatus')

</div>
<!-- content-wrapper ends -->
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
@endsection