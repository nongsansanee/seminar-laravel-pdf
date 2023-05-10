<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="d-flex justify-content-end mb-4">
    <a class="btn btn-primary" href="{{ URL::to('/employee/downloadpdf') }}" target="_blank">Download to PDF</a>
</div>
<table class="table table-bordered mb-5">
    <thead>
    <tr class="table-danger">
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">DOB</th>
    </tr>
    </thead>
    <tbody>
    @foreach($employees ?? '' as $data)
        <tr>
            <th scope="row">{{ $data->id }}</th>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->phone_number }}</td>
            <td>{{ $data->dob }}</td>
        </tr>
    @endforeach
    </tbody>
</body>
</html>
