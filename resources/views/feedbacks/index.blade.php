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

    <div class="table-body">
      <div class="table-body-task-name">
        First Task
      </div>
      <div class="table-body-detail">This is First Task</div>
      <div class="table-body-due-date">2023-07-19</div>
      <div class="table-body-progress">In Progress</div>
    </div>
  </div>
@endsection