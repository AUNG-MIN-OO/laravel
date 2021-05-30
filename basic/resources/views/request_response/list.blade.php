<table class="table table-hover mb-0">
    <div class="d-flex justify-content-between align-items-center">
        <h3>Update Item</h3>
        <a href="{{ route('form.create') }}" class="btn btn-sm btn-primary">
            Add Item
        </a>
    </div>
    @if(session('status1'))
        <p class="text-danger font-weight-bold">{!! @session('status1') !!}</p>
    @endif
    <thead>
    <tr>
        <th>#</th>
        <th>Item Name</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Control</th>
        <th>Date/Time</th>
    </tr>
    </thead>
    <tbody>
    @foreach(\App\Item::all() as $i)
        <tr>
            <td>{{ $i->id }}</td>
            <td>{{ $i->name }}</td>
            <td>{{ $i->price }}</td>
            <td>{{ $i->stock }}</td>
            <th>
                <a href="{{route('form.destroy',$i->id)}}" class="btn btn-danger btn-sm">Delete</a>
                <a href="{{route('form.edit',$i->id)}}" class="btn btn-info btn-sm">Edit</a>
            </th>
            <td>{{ $i->created_at->diffForHumans() }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
