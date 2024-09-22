<div>
    <ul>
        <li><a href="/brand/add">Add Brand</a></li>
        <li><a href="/">Back Home</a></li>
    </ul>
</div>

<?php var_dump($arr) ?>

<table>
    <thead>
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
                <a href="/brand/details/{{$v->id}}">Details</a>
                <a href="/brand/edit/{{$v->id}}">Edit</a>
                <a href="/brand/delete/{{$v->id}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>