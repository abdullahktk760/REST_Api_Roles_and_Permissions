@extends('layouts/contentLayoutMaster')

@section('title', 'Permission')

@section('vendor-style')
  <!-- Vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
@endsection

@section('content')
{{-- <h3>Permissions List</h3>
<p>Each category (Basic, Professional, and Business) includes the four predefined roles shown below.</p> --}}

<!-- Permission Table -->
<div class="card">
  <div class="card-datatable table-responsive">
    <table class="datatables-permissions table" id="myTable">
      <thead class="table-light">
          <th></th>
          <th></th>
        </tr>
      </thead>
    </table>
  </div>
</div>
<!--/ Permission Table -->
@include('content/_partials/_modals/modal-add-permissions')
@endsection
{{-- this js Files for datatable--}}
@section('vendor-script')
  <!-- Vendor js files -->
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/mainjs/getting-permission-data.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/modal-add-role.js')) }}"></script>
  {{-- <script src="{{ asset(mix('js/scripts/pages/modal-add-permission.js')) }}"></script> --}}
  {{-- <script src="{{ asset(mix('js/scripts/pages/modal-edit-permission.js')) }}"></script> --}}

@endsection
