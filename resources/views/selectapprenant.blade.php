<form action="/insertapprenant" method="get">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <button>Add</button>
    </form>


@foreach ($selectapprenant as $row)
<div>
    Id : {{ $row->id }} 
    <br>
    Name : {{ $row->name }}
    <br>
    Email : {{ $row->email }}
    <br>
    IdPROMO : {{ $row->id_promo }}
    <a href="/deleteapprenant?id={{ $row->id }}">Delete </a> 
    <a href="/updateapprenant/{{ $row->id }}">/ Edit </a> 
    <br>
</div>
@endforeach