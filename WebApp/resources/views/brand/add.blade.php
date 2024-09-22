<div>
    <ul>
        <li><a href="/brand">Back Brand</a></li>
        <li><a href="/">Back Home</a></li>
    </ul>
</div>
<p>{{$msg}}</p>
<form method="POST">
    @csrf
    <div>
        <label>Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <button>Save Changes</button>
    </div>
</form>