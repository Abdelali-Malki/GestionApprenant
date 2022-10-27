<form action="/edit/{{ $data[0]->id }}" method="get">

    <input type="text" name="name" value="{{ $data[0]->name }} ">
    <button>Edit</button>
</form>

@foreach ($data as $item)
    <div>
        <h1> {{ $item->name }} _ {{ $item->email }} </h1>
    </div>
@endforeach



