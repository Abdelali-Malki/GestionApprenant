@foreach ($data as $item)

<div>
    for
    id: {{ $item->id }} 
    
    name : {{ $item->name }}
    <a href="/delete?id={{ $item->id }}">delete</a> 
    <a href="/update/{{ $item->id }}">/edit</a>
    
</div>
    
@endforeach