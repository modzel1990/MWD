// first use of database - pick up data from database in to the table

<table style="border: 1px solid black;">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Surname</th>
  </tr>
  @foreach ($tests as $user)
  <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->Name}}</td>
    <td>{{$user->Surname}}</td>
  </tr>

@endforeach
</table>
