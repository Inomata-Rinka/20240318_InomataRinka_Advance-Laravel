@extends('layouts.default')
<style>
th {
  background-color: #289ADC;
  color: white;
  padding: 5px 40px;
}

tr:nth-child(odd) td {
  background-color: #FFFFFF;
}

td table {
  margin: 0 auto;
}

td {
  padding: 25px 40px;
  background-color: #EEEEEE;
  text-align: center;
}

td table tbody tr td {
  background-color:#EEEEEE
}
</style>
@section('title', 'author.index.blade.php')

@section('content')
<table>
  <tr>
    <th>Author</th>
    <th>Book</th>
  </tr>
  @foreach ($hasItems as $item)
  <tr>
    <td>
      {{$item->getDetail()}}
    </td>
    <td>
      <table>
        @foreach ($item->books != $obj)
        <tr>
            <td>{{$obj->getTitle()}}</td>
        </tr>
        @endforeach
      </table>
    </td>
  </tr>
  @endforeach
</table>
<table>
  <tr>
    <th>Author</th>
  </tr>
  @foreach ($noItemes as $item)
  <tr>
    <td>{{$item->getDetail()}}</td>
  </tr>
  @endforeach
</table>
@endsection