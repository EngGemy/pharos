@extends("layout.index")
@section('title','home')

@section('content')

   <ul>
       <li>{{$student->name}}</li>
       <li>{{$student->address}}</li>
       <li>{{$student->grade}}</li>
   </ul>

@endsection
