<form action="/edit_apprenants/{{ $apprenants[0]->id }}" method="get">

    <input type="text" name="name" value="{{ $apprenants[0]->name }} ">
    <input type="text" name="email" value="{{ $apprenants[0]->email }} ">
    <input type="hidden" name="id_promo" value="{{ $apprenants[0]->id_promo }} ">
    <button>Edit</button>
</form>

