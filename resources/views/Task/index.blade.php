@extends('layouts/contentLayoutMaster')

@section('title', 'Tasks')

@section('vendor-style')
    <!-- Vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
@endsection
@section('page-style')
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
@endsection

@section('content')
<p class="mb-2">The "Add New Task" and "Edit" buttons will be visible to users with Admin or Editor roles.</p>
<p class="mb-2">The "Delete" button will only be visible to users with the Admin role.</p>
<p class="mb-2">This functionality is based on roles, as specified in the assessment test. Users with specific roles can perform certain actions. However, we can also implement permission-based access control if needed. As a business, we prioritize flexibility and adaptability.</p>
    <div class="card">
        <div class="card-header">

            <div class="row">
                @hasanyrole('editor|admin')
                <button class="btn btn-primary" data-bs-target="#addTaskModal" data-bs-toggle="modal">Add New Task</button>
                @endhasanyrole

                <div class="col-12 mt-2 text-center">

                    @if ($errors->any() || session('success'))
                        <div id="flash-message"
                            class="alert @if ($errors->any()) alert-danger @else alert-success @endif">
                            @if ($errors->any())
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @else
                                {{ session('success') }}
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <table class="table " id="myTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>status</th>
                    <th>Assigned To</th>
                    @hasanyrole('editor|admin')
                    <th>Action</th>
                    @endhasanyrole
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $key => $task)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>
                        @if ($task->status == 'Active')
                            <span class="badge text-bg-success">{{ $task->status }}</span>
                        @else
                            <span class="badge text-bg-danger">{{ $task->status }}</span>
                        @endif
                        <td>
                            @if ($task->user)
                                {{ $task->user->name }}
                            @else
                                Not assigned
                            @endif
                        </td>
                        @hasanyrole('editor|admin')
                        <td>
                            <button class="btn btn-success get_data_for_edit_modal" data-task-id="{{ $task->id }}"
                                data-bs-target="#editTaskModal" data-bs-toggle="modal">Edit</button>
                            @role('admin')
                                <form id="delete-form-{{ $task->id }}" action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>

                                <a class="btn btn-danger" href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $task->id }}').submit();">
                                    Delete
                                </a>
                            @endrole
                        </td>
                        @endhasanyrole
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('content/_partials/_modals/modal-add-task')
    @include('content/_partials/_modals/modal-edit-task')
@endsection

@section('vendor-script')
    <!-- Vendor js files -->
    <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection
@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/scripts/pages/modal-edit-task.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/forms/task-form-validation.js')) }}"></script>
@endsection
