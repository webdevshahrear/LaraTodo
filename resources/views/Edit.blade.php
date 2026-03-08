  @extends('layouts.HomeLayout')
  @section('title', 'Add Todo')
  @section('content')
  
  <!-- Form Start -->
     <div class="container">
        <div class="col-lg-4 mx-auto">
            <div class="card mt-5">
                <div class="card-header">Edit Todo</div>
                <div class="card-body">
                    <form action="{{ route('update', $Todo->id) }}" method="POST">
                        @csrf
                        <input value="{{ $Todo->title }}" type="text" class="form-control mb-3" name="title" placeholder="Enter Todo Title">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                            <textarea name="description" id="description" placeholder="description" class="form-control mb-3">{{ $Todo->description }}</textarea>
                              @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="" class="">Deadline</label>
                            <input name="deadline" type="date" class="form-control mb-3" value="{{ $Todo->deadline }}">
                                @error('deadline')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <button class="btn btn-primary w-100">Update Todo</button>
                    </form>
            </div>
        </div>
     </div>
     </div>
    <!-- Form End -->
      @endsection
