@extends('layouts.master')

@section('main')
  <div class="container">
    <div class="main">
      <div class="task-summary-container">
       <h1 class="task-summary-heading">Summary of Your Tasks</h1>

      <div  class="task-summary-list">
        <span class="material-icons">check_circle</span>
        <h2>You have completed 1 task</h2>
      </div>

      <div>
      <button class="form-button">
        <span class="material-icons">add</span>Create A New Feedback
      </div>
    </div>
  </div>
</body>
@endsection