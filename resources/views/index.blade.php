<button> <a href="add">add</a> </button>
<input type="text" name="search" id="search" placeholder="search">



<div id="data">

    @foreach ($data as $row)
        <div>
            Id : {{ $row->id }} 
            Name : {{ $row->name }}
            <a href="/delete?id={{ $row->id }}">Delete </a> 
            <a href="/update_promotion/{{ $row->id }}">/ Edit </a> 
            <br>
        </div>
    @endforeach
    
</div>

<script src="{{ URL::asset('js/search.js') }}"></script>