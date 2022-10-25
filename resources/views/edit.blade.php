@foreach ($Promotion as $value)
    
<form action="{{url('edit')}}/{{$value->id}}" method="get">
    @csrf
    Name_promotion<input type="text" value="{{$value->name}}" name="Name">
    <button>Update</button>
</form>
@endforeach