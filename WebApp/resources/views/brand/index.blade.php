<<<<<<< HEAD
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div>
    <ul>
        <li><a href="/brand/add" class="btn btn-primary">Add Brand</a></li>
        <li><a href="/" class="btn btn-primary">Back Home</a></li>
    </ul>
</div>
<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Command</th>
        </tr>
    </thead>
    <tbody>
        @foreach($arr as $v)
        <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->name}}</td>
            <td>
                <a href="/brand/details/{{$v->id}}" class="btn btn-primary">Details</a>
                <a href="/brand/edit/{{$v->id}}" class="btn btn-primary">Edit</a>
                <a href="/brand/delete/{{$v->id}}" class="btn btn-primary">Delete</a>
            </td>
        </tr>
=======
<link rel="stylesheet" href="/css/bootstrap.min.css">

<a href="/" class="btn btn-primary">Back Home</a>
<a href="/brand/add" class="btn btn-primary">Add Brand</a>

<table class="table table-bordered">
    <thead class="table-dark">
        <th>Id</th>
        <th>Name</th>
        <th>Command</th>
    </thead>
    <tbody>
        <!-- trong file namefile.blade.php -> su dung cu phap duyet vong lap khac cu phap php thong thuong -->
        @foreach($arr as $v)
            <tr>
                <td>{{$v->id}}</td>
                <td>{{$v->name}}</td>
                <td>
                    <a href="/brand/details/{{$v->id}}" class="btn btn-primary">Details</a>
                    <a href="/brand/edit/{{$v->id}}" class="btn btn-primary">Edit</a>
                    <a href="/brand/delete/{{$v->id}}" class="btn btn-primary">Delete</a>
                </td>
            </tr>
>>>>>>> ec25080 (backup for wls)
        @endforeach
    </tbody>
</table>