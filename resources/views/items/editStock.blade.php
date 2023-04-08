<h1>Modifier le stock</h1>
<form action="{{route('items.updateStock')}}" method="GET">
    @csrf
    @method('POST')
<select name="item_id" id="item_id">
@foreach ($items as $item)
    <option value="{{$item->id}}">{{$item->designation}}</option>
@endforeach
</select>
<input type="radio" name="in_out" id="in_out" value="in">
<label for="">Entrée stock</label>
<input type="radio" name="in_out" id="in_out" value="out">
<label for="">Sortie stock</label>
<br>
<label for="">Nombre</label>
<input type="number" name="number" id="number">
<button type="submit">submit</button>
</form>