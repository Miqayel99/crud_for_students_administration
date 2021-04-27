@extends('students.layout')

@section('content')

    <div class="pull-left">
        <h2>{{ $student->studname }}'s info </h2>
    </div>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-alert" href="{{ route('students.index')  }}">Back</a>
            </div>
        </div>
    </div>



    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Course</th>
            <th>Fee</th>
        </tr>
            <tr>
                <td>{{ $student->studname }}</td>
                <td>{{ $student->course }}</td>
                <td>{{ $student->fee }}</td>
            </tr>
    </table>
