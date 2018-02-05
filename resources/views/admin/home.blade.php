@extends('layouts.app')

@section('content')

	<div class="c-wrap-list">

        <div class="c-cta">
            <h2 class="o-title">Users</h2>
        </div>
        
        <div class="c-wrapper--columns">
        	<table style="width:100%;text-align: left">
        		<thead>
        			<th>
        				Username
        			</th>
        			<th>
        				E-mail Address
        			</th>
        			<th>
        				# Notes
        			</th>
        		</thead>
        		<tbody>
        			@foreach ($users as $user)
						<tr>
	        				<td style="font-size:12px;padding:5px 0px;">
	        					{{ $user->username}}
	        				</td>
	        				<td style="font-size:12px;padding:5px 0px;">
	        					{{ $user->email}}
	        				</td>
	        			</tr> 
					@endforeach
        		</tbody>
        	</table>
            
        </div>

    </div>

@endsection