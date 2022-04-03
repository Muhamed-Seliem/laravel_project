
@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end my-4">
<a href="{{route('myenroll')}}" class="btn btn-info">My Enrollments</a>
</div>

<div class="row">
@foreach($courses as $course)
<?php
$count=0;
$cont=0;
?>
@foreach(Auth::user()->enrollments as $enroll)


        @if($enroll->course_id==$course->id)
      <?php  ++$cont ?>
        @endif
@endforeach
<?php if($cont==$count){?>
<div class="col-md-4">
      <img width="90%" height="300px" src="https://img.freepik.com/free-photo/e-learning-online-digital-age-knowledge-education-training-seminar-personal-development_113717-127.jpg?w=826" class="card-img-top" alt="...">
        <h5 class="card-title">{{$course->name}}</h5>
        <p class="card-text">{{$course->desc}}</p>
        <p>{{$course->duration}}<p>
        <a href="{{route('enroll',$course->id)}}" style="float:right;" class="btn btn-success  mx-2">enroll</a>
        <a href="{{route('viewcourse',$course->id)}}" style="float:right;" class="btn btn-danger"><i class="fa-solid fa-eye"></i></a>

        
        </div>
<?php }?>
@endforeach



</div>





@endsection
