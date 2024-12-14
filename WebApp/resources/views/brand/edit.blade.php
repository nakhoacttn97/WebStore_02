<<<<<<< HEAD
<div>
    <p>{{$msg}}</p>
</div>
<form method="post">
    @csrf
    <input type="hidden" value="{{$v->id}}">
=======
<p>{{$msg}}</p>
<form method="post">
    @csrf
    <input type="hidden" value="{{$v->id}}" name="id">
>>>>>>> ec25080 (backup for wls)
    <div>
        <label>Name</label>
        <input type="text" name="name" value="{{$v->name}}">
    </div>
    <div>
        <button>Save Changes</button>
    </div>
</form>