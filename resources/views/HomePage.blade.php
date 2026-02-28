  @extends('layouts.HomeLayout')
  @section('content')
  
  <!-- Form Start -->
     <div class="container">
        <div class="col-lg-4 mx-auto">
            <div class="card mt-5">
                <div class="card-header">Add Todo</div>
                <div class="card-body">
                    <form action="">
                        <input type="text" class="form-control mb-3" placeholder="Enter Todo Title">
                            <textarea name="description" id="description" class="form-control mb-3"></textarea>
                        <div class="form-group">
                            <label for="" class="">Deadline</label>
                            <input type="date" class="form-control mb-3">
                        </div>
                        <button class="btn btn-primary w-100">Add Todo</button>
                    </form>
            </div>
        </div>
     </div>
     </div>
    <!-- Form End -->
      @endsection
