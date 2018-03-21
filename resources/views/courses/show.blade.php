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
						رابط المقرر
					</th>
					<th>
						تعديل
					</th>
					<th>
						حذف
					</th>
				</thead>
				<tbody>
					@if($courses->count() > 0)
						@foreach($courses as $course)
							<tr>
								<td>
										{{ $course->name }}
								</td>
								<td>
										<a href="{{ $course->link }}">
											انقر لعرض الرابط
										</a>
								</td>
								<td>
									<a href="{{ route('editCourse', ['id' => $course->id]) }}" class="btn btn-xs btn-info">
										تعديل
									</a>
								</td>
								<td>
									<a href="{{ route('deleteCourse', ['id' => $course->id]) }}" class="btn btn-xs btn-danger">
										حذف
									</a>
								</td>
								
							</tr>
						@endforeach
					@else
						<tr>
							<th colspan="5" class="text-center">لا يوجد مقررات.</th>
						</tr>
					@endif
				</tbody>
			</table>
		</div>
	</div>

	</section>
@stop