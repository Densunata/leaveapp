@extends('layout')

@section('content')
<div class="content">
    <h3>Welcome to my world</h3>
    <p>Your content goes here...</p>

    <div class="paldo-list">
        <h4>Paldo Managers</h4>
        <ul>

            <li>Boss Jeriel with iphone 16</li>
        </ul>
    </div>
</div>
<button type="button"
       onclick="window.location='{{ route('problems.edit', $problem->id) }}'"
       class="btn btn-primary">
   Edit Problem
</button>

@endsection
