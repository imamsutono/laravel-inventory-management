<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn {{ $id ? 'btn-primary' : 'btn-dark' }}" data-bs-toggle="modal"
        data-bs-target="#categoryForm{{ $id ?? '' }}">
        @if ($id)
            <i class="fas fa-edit"></i>
        @else
            <span>Add New</span>
        @endif
    </button>

    <!-- Modal -->
    <div class="modal fade" id="categoryForm{{ $id ?? '' }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="categoryFormLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ $action }}" method="POST">
                    @csrf
                    @if ($id)
                        @method('PUT')
                    @endif

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="categoryFormLabel">Product Category</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name', $name) }}" required>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
