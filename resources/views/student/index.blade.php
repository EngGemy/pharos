@extends("layout.index")
@section('title','home')

@section('content')
<div class="pull-right">
    <a class="btn btn-success" href="{{route('student.create')}}">create new student</a>
</div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">address</th>
            <th scope="col">garde</th>
            <th scope="col">rank</th>
            <th scope="col">action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
        <tr>


                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->address}}</td>
                    <td>{{$student->grade}}</td>
                    <td>{{$student->student_rank}}</td>
                    <td> <a class="btn btn-primary" href="{{route('student.edit',$student->id)}}">edit</a></td>
                    <td> <a class="btn btn-info" href="{{route('student.show',$student->id)}}">show</a></td>
                    <td> <a class="btn btn-danger" href="{{route('student.delete',$student->id)}}">Delete</a></td>
        </tr>
        @endforeach

        </tbody>
    </table>

@endsection
