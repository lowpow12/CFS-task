@extends('layouts.master')

@section('pageTitle', 'Home')

@section('main')
  <div class="container">
    <div class="main">
      <div class="task-summary-container">
       <h1 class="task-summary-heading">Customer Feedback System</h1>

      <div>
      <div class="task-list-task-buttons">
      <a href="{{ route('feedbacks.create') }}">
      <button class="form-button">
        <span class="material-icons">add</span>Create A New Feedback
      </div>
    </div>
  </div>
</body>
@endsection