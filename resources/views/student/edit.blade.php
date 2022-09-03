@extends("layout.index")
@section('title','home')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('student.update',$student->id)}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">student name</label>
            <input type="text" class="form-control" name="name"  value="{{$student->name}}" id="name" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="address" class="form-label">student address</label>
            <input type="text" class="form-control" name="address"  value="{{$student->address}}" id="address" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="grade" class="form-label">student grade</label>
            <input type="number" class="form-control" name="grade" value="{{$student->grade}}"  id="grade" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="rank" class="form-label">student rank</label>
            <input type="number" class="form-control" name="student_rank" value="{{$student->student_rank}}"   id="address" aria-describedby="emailHelp">

        </div>


        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
