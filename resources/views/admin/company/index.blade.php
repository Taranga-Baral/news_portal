<x-app-layout>
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between">
              <h4>Company  Data Table</h4>
              @if (!$company)
              <a href="{{ route('company.create') }}" class="btn btn-primary">Add</a>
              @endif

              @if ($company)
              <label for="company added" class="btn btn-success">Company Added</label>
              @endif

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        SN
                      </th>
                      <th>Logo</th>
                      <th>Company Name</th>
                      <th>Phone</th>
                      <th>Tel</th>
                      <th>Email</th>
                      <th>Facebook</th>
                      <th>Instagram</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @if ($company)
                    <tr>
                        <td>
                          1
                        </td>
                        <td><img width="100" height="100" src="{{ asset($company->logo) }}" alt="{{ $company->name }}"></td>
                        <td>{{ $company->name }}</td>
                       <td>{{ $company->phone }}</td>
                        <td>{{ $company->tel }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->facebook }}</td>
                        <td>{{ $company->instagram }}</td>
                        <td>


                          <form action="{{ route('company.destroy', $company->id) }}" method="post">
                              @csrf
                              @method('delete')

                              <button class="mb-4 btn btn-sm btn-danger">Delete</button>
                          </form>

                          <a href="{{ route('company.edit', $company->id) }}" class="mb-4 btn btn-md btn-primary">Edit</a>
                        </td>

                      </tr>
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>
