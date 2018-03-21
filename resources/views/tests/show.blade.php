@extends('layouts.main')



@section('content')
<section class="content" style="height: 586px">
	<div class="panel panel-default" style="background-color: white;margin-top: 15px;" >

		<div class="panel-body">
			<table class="table table-hover">
				<thead>

					<th>
						اسم المقرر
					</th>
					<th>
						السؤال
					</th>
					<th>
						الاجابه
					</th>
					<th>
						تعديل
					</th>
					<th>
						حذف
					</th>
				</thead>
				<tbody>
					@if($tests->count() > 0)
						@foreach($tests as $test)
							<tr>
								<td>
										{{ $test->course }}
								</td>
								<td>
										{{ $test->question }}
								</td>
								<td>
										{{ $test->answer }}
								</td>
								<td>
									<a href="{{ route('editTest', ['id' => $test->id]) }}" class="btn btn-xs btn-info">
										تعديل
									</a>
								</td>
								<td>
									<a href="{{ route('deleteTest', ['id' => $test->id]) }}" class="btn btn-xs btn-danger">
										حذف
									</a>
								</td>
								
							</tr>
						@endforeach
					@else
						<tr>
							<th colspan="5" class="text-center">لا يوجد اختبارات.</th>
						</tr>
					@endif
				</tbody>
			</table>
		</div>
	</div>

	</section>
@stop