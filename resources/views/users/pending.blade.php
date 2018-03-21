@extends('layouts.main')



@section('content')
<section class="content" style="height: 586px">
	<div class="panel panel-default" style="background-color: white;margin-top: 15px;" >

		<div class="panel-body">
			<table class="table table-hover">
				<thead>

					<th>
						الاسم بالعربية
					</th>
					<th>
						الاسم بالانجليزية
					</th>
					<th>
						الجوال
					</th>
					<th>
						البلد
					</th>
					<th>
						تفعيل
					</th>
				</thead>
				<tbody>
					@if($users->count() > 0)
						@foreach($users as $user)
							<tr>
								<td>
										{{ $user->arName }}
								</td>
								<td>
										{{ $user->enName }}
								</td>
								<td>
										{{ $user->mobile }}
								</td>
								<td>
										{{ $user->country }}
								</td>
								<td>
									<a href="{{ route('activate', ['id' => $user->id]) }}" class="btn btn-xs btn-danger">
										تفعيل
									</a>
								</td>
								
							</tr>
						@endforeach
					@else
						<tr>
							<th colspan="5" class="text-center">لا يوجد مستخدمين غير مفعلين.</th>
						</tr>
					@endif
				</tbody>
			</table>
		</div>
	</div>

	</section>
@stop