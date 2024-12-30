<x-app-layout>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between">
              <h4>Create Company</h4>
              <a href="{{ route('company.index') }}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">

                <form action="{{ route('company.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-4 col-6">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>

                            @enderror
                        </div>

                        <div class="mb-4 col-6">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">

                            @error('email')
                            <p class="text-danger">{{ $message }}</p>

                            @enderror

                        </div>

                        <div class="mb-4 col-6">
                            <label for="phone">Phone <span class="text-danger">*</span></label>
                            <input type="tel" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
                            @error('phone')
                            <p class="text-danger">{{ $message }}</p>

                            @enderror
                        </div>

                        <div class="mb-4 col-6">
                            <label for="tel">Telephone <span class="text-danger">*</span></label>
                            <input type="tel" name="tel" id="tel" class="form-control" value="{{ old('tel') }}">
                            @error('tel')
                            <p class="text-danger">{{ $message }}</p>

                            @enderror
                        </div>

                        <div class="mb-4 col-6">
                            <label for="facebook">Facebook </label>
                            <input type="text" name="facebook" id="facebook" class="form-control" value="{{ old('facebook') }}">
                        </div>

                        <div class="mb-4 col-6">
                            <label for="instagram">Instagram </label>
                            <input type="text" name="instagram" id="instagram" class="form-control" value="{{ old('instagram') }}">
                        </div>


                        <div class="mb-4 col-6">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" name="logo" id="logo" class="form-control">
                            @error('logo')
                            <p class="text-danger">{{ $message }}</p>

                            @enderror
                        </div>

                        <div class="mb-4 col-12">
                            <button type="submmit" class="btn btn-primary">Save Record</button>
                        </div>

                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>