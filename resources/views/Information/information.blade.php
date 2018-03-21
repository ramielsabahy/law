@extends('layouts.main')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
<section class="content" style="height: 586px">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">من نحن</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel panel-default">

				        <div class="panel-body">
				            <form id="informations" method="POST" action="{{ route('editInfo') }}" data-validate="parsley">
				                {{ csrf_field() }}
				                <div class="form-group">
				                    <label for="name" style="float: right">
				                        العنوان
				                    </label>
				                    <input class="form-control" value="{{ $information['address'] }}" id="address" type="text" name="address" autocomplete="off" data-parsley-trigger="change focusout" data-parsley-required=''></input>
				                </div>
				                <div class="form-group">
				                    <label for="name" style="float: right">
				                        رقم الهاتف
				                    </label>
				                    <input class="form-control" id="phone" value="{{ $information['phone'] }}" type="text" name="phone" autocomplete="off" data-parsley-trigger="change focusout" data-parsley-required='true'></input>
				                </div>
				                <div class="form-group">
				                    <label for="name" style="float: right">
				                        عنوان Facebook
				                    </label>
				                    <input class="form-control" id="fb_id" type="text" value="{{ $information['fb_id'] }}" name="fb_id" ></input>
				                </div>
				                <div class="form-group">
				                    <label for="name" style="float: right">
				                        عنوان الموقع
				                    </label>
				                    <input class="form-control" id="title" type="text" value="{{ $information['title'] }}" name="title" ></input>
				                </div>
				                <div class="form-group">
				                    <label for="name" style="float: right">
				                        عنوان Twitter
				                    </label>
				                    <input class="form-control" id="tw_id" type="text" value="{{ $information['tw_id'] }}" name="tw_id"></input>
				                </div>
				                <div class="form-group">
				                    <label for="name" style="float: right">
				                        عنوان Google
				                    </label>
				                    <input class="form-control" id="google_id" type="text" value="{{ $information['google_id'] }}" name="google_id"></input>
				                </div>
				                <div class="form-group">
				                    <label for="name" style="float: right">
				                        عنوان Instagram
				                    </label>
				                    <input class="form-control" id="instagram_id" type="text" value="{{ $information['instagram_id'] }}" name="instagram_id"></input>
				                </div>
				                <div class="form-group">
				                    <label for="name" style="float: right">
				                        عنوان Linkedin
				                    </label>
				                    <input class="form-control" id="linked_id" type="text" value="{{ $information['linked_id'] }}" name="linked_id"></input>
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