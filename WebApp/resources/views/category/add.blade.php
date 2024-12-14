<<<<<<< HEAD
<form>
=======
@extends('shared/dashboard')

@section('title', 'Add Category')

@section('body')
<a href="/category">Back Category</a>
<p>{{$msg}}</p>
<form method="post">
    <!-- bat buoc khai bao csrf -->
>>>>>>> ec25080 (backup for wls)
    @csrf
    <div>
        <label>Name</label>
        <input type="text" name="category_name">
    </div>
    <div>
        <button>Save Changes</button>
    </div>
<<<<<<< HEAD
</form>
=======
</form>
@stop
>>>>>>> ec25080 (backup for wls)
