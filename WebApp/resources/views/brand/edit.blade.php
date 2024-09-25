<div>
    <p>{{$msg}}</p>
</div>
<form method="post">
    @csrf
    <input type="hidden" value="{{$v->id}}">
    <div>
        <label>Name</label>
        <input type="text" name="name" value="{{$v->name}}">
    </div>
    <div>
        <button>Save Changes</button>
    </div>
</form>