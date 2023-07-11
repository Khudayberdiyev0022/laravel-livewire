<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Users</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Users</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="d-flex justify-content-end mb-2">
            <button wire:click.prevent="addNew" class="btn btn-primary">
              <i class="fas fa-plus-square mr-1"></i>
              Add New User
            </button>
          </div>
          <div class="card">
            <div class="card-body">
              <table class="table">
                <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Created At</th>
                  <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>Otto</td>
                  <td>
                    <a href=""><i class="far fa-edit mr-2"></i></a>
                    <a href=""><i class="fas fa-trash-alt" style="color: red"></i></a>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="form"  tabindex="-1" aria-labelledby="form" aria-hidden="true" wire:ignore>
    <div class="modal-dialog">
      <div class="modal-content">
        <form wire:submit.prevent="createUser">
          <div class="modal-header">
            <h5 class="modal-title">Add New User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" wire:model.defer="form.name" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="text" wire:model.defer="form.email" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="text" wire:model.defer="form.password"  class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Password Confirmation</label>
              <input type="text" wire:model.defer="form.password_confirmation"  class="form-control">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Modal End -->
</div>

