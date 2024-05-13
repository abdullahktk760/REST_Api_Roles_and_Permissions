<!-- Add Task -->
<div class="modal fade" id="addTaskModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-task">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-2 pb-2">
                <div class="text-center mb-2">
                    <h1 class="task-title ">Add Task </h1>

                </div>
                <!-- Add Task Form -->
                <form id="addRoleForm" class="row" method="post" action="{{ route('tasks.store') }}">
                    @csrf
                    <div class="col-6">
                        <label class="form-label" for="title">Task Title</label> <span class="text-danger">*</span>
                        <input type="text" id="title" name="title" class="form-control"
                            placeholder="Enter Task Title like 'Create Plugin Page'" tabindex="-1"
                            data-msg="Please enter Task title" />
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="description">Description</label> <span
                            class="text-danger">*</span>
                        <input type="text" id="description" name="description" class="form-control"
                            placeholder="Enter description for task" data-msg="Please enter Task title" />
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="status">Status</label> <span class="text-danger">*</span>
                        <select id="status" name="status" class="form-select" data-msg="Please select a status">
                            <option value="">Select Status</option>
                            <option value="Active">Active</option>
                            <option value="InActive">InActive</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="status">Users</label>
                        <select id="status" name="user_id" class="form-select" data-msg="Please select a status">
                            <option value="">Select User</option>
                            @foreach ($user as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 text-center mt-2">
                        <button type="submit" class="btn btn-primary me-1">Submit</button>
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                            aria-label="Close">
                            Discard
                        </button>
                    </div>
                </form>
                <!--/ Add Task form End -->
            </div>
        </div>
    </div>
</div>

<!--/ Add Task Modal End-->
