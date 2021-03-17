@extends("theme")

@section("content")

    <div class="container col-lg-6">
    <h2>SEARCH EMPLOYEE</h2><BR>
    <table class="table table-borderless">
    <tr>
    <td>Employee Code</td>
    </tr>
    <tr><td><input type="text" class="form-control" placeholder="Enter Employee Code to Search"></td>

        <td><button class="btn btn-outline-danger">Search</button></td>
    </tr>
    </table>
    </div>
@endsection