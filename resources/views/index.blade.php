

@extends("theme")

@section("content")

    <div class="container col-lg-6">
    <h2>ADD EMPLOYEE</h2><BR>
    <table class="table table-borderless">
    <tr>
        <td><input type="text" class="form-control" placeholder="Employee Name"></td>
    </tr>
    <tr>
        <td><input type="text" class="form-control" placeholder="Employee Code"></td>
    </tr>
    <tr>
        <td><input type="text" class="form-control" placeholder="Designation"></td>
    </tr>
    <tr>
        <td><input type="number" class="form-control" placeholder="Salary"></td>
    </tr>
    <tr>
    <td>Date Of Birth</td>
    </tr>
    <tr>
    
        <td><input type="date" class="form-control" placeholder="Dob"></td>
    </tr>
    <tr>
        <td><input type="text" class="form-control" placeholder="Place"></td>
    </tr>
    <tr>
        <td><input type="number" class="form-control" placeholder="pincode"></td>
    </tr>
    <tr>
        <td><input type="number" class="form-control" placeholder="Phone"></td>
    </tr>
    <tr>
        <td><button class="btn btn-danger">SUBMIT</button></td>
    </tr>
    </table>
    </div>
    @endsection
