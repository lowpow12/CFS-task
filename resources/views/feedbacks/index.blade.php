@extends('layouts.master')

@section('pageTitle', $pageTitle)

@section('main')
  <div class="task-list-container">
    <h1 class="task-list-heading">Feedbacks List</h1>
    
  
  <div>

    <div class="task-list-table-head">
      <div class="task-list-header-task-name">Sender</div>
      <div class="task-list-header-detail">Feedbacks</div>
      <div class="task-list-header-due-date">Comments</div>
      <div class="task-list-header-progress">Media</div>
    </div>

    @foreach ($feedback as $id => $feedback)
      <div class="table-body">
        <div class="table-body-task-name">
          {{ $feedback->sender }}
        </div>
        <div class="table-body-detail"> {{ $feedback->feedbacks }} </div>
        <div class="table-body-due-date"> {{ $feedback->comments }} </div>
        
						<tr>
							<td><img width="150px" src="{{ url('/data_file/'.$feedback->file) }}"></td>
</tr>

        <a href="{{ route('feedbacks.edit', ['id' => $feedback->id]) }}">Edit</a> &nbsp;
        <a href="{{ route('feedbacks.delete', ['id' => $feedback->id]) }}">Delete</a>
        
      </div>
    @endforeach
  </div>
@endsection