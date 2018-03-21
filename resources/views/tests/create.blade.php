@extends('layouts.main')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
<section class="content" style="height: 586px">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">انشاء اختبار جديد</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel panel-default">

				        <div class="panel-body">
				            <form id="myForm" method="POST" action="{{ route('createTest') }}" data-validate="parsley">
				                {{ csrf_field() }}
				                <div class="form-group">
				                    <label for="name" style="float: right">
				                        اسم المقرر
				                    </label>
				                    <select class="form-control" id="course" name="course" autocomplete="off" data-parsley-trigger="change focusout" data-parsley-required=''>
				                    	@foreach($courses as $course)
				                    		<option value="{{ $course->name }}">{{ $course->name }}</option>
				                    	@endforeach
				                    </select>
				                </div>
				                <div class="form-group">
				                    <label for="name" style="float: right">
				                        السؤال
				                    </label>
				                    <input class="form-control" id="question" type="text" name="question" autocomplete="off" data-parsley-trigger="change focusout" data-parsley-required=''></input>
				                </div>
				                <div class="form-group">
				                    <label for="name" style="float: right">
				                        الاجابه
				                    </label>
				                    <input class="form-control" id="answer" type="text" name="answer"></input>
				                </div>

				                <div class="form-group">
				                    <div class="text-center">
				                        <input class="btn btn-success" type="submit" style="padding-left: 25px;padding-right: 25px" value="تم">
				                    </div>
				                </div>
				            </form>
				        </div>
				    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script>
  $('#myForm').parsley();
</script>
@endsection