<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Category Data Table</h4>

                    <a href="{{ route('category.create') }}" class="btn btn-primary">Add</a>


                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        Position
                                    </th>
                                    <th>Nepali Title</th>
                                    <th>English Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($categories as $category)
                                    <tr>
                                        <td>
                                            {{ $category->position }}
                                        </td>
                                        <td>
                                            {{ $category->nep_title }}


                                        </td>
                                        <td>
                                            {{ $category->eng_title }}


                                        </td>
                                        <td>
                                            <form action="{{ route('category.destroy',$category->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('category.edit',$category->id) }}" class="btn btn-sm btn-primary">Edit</a>

                                                <button class="btn btn-danger btn-sm">Delete</button>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
