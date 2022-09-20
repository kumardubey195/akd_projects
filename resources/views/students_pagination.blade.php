<div class="container">
    <div class="row">
        {{-- <div class="col-sm-6">
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city">
                </div>
                <div class="mb-3">
                    <label for="marks" class="form-label">Marks</label>
                    <input type="number" class="form-control" id="marks" name="marks">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @if (session()->has('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
        </div> --}}
        <div class="col-sm-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">CITY</th>
                        <th scope="col">MARKS</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $stu)
                    <tr>
                        <td>{{$stu->id}}</td>
                        <td>{{$stu->name}}</td>
                        <td>{{$stu->city}}</td>
                        <td>{{$stu->marks}}</td>
                        <td>
                            <a href="{{ url('/edit', $stu->id) }}" class="btn btn-info btn-sm">Edit</a>
                            <a href="{{ url('/delete', $stu->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div id="pagination">
                {{ $students->links() }}
            </div>
        </div>
    </div>
</div>
