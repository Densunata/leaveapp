
@extends('layout')

@section('content')

    <div class="content">
    <h3>Welcome to the Employee Paldo</h3>
    <div id="main-content" class="flex-grow-1 p-3">
        <h1>Paldo Management</h1>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
    </div>
    </div>

@endsection

