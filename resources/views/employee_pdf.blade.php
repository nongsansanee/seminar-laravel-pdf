<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{public_path('fonts/THSarabunNew.ttf')}}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
        }
        .font-sarabun {
            font-family: 'THSarabunNew', sans-serif;
            font-size: 16px;
        }
        table {
            border-collapse: collapse;
            width: 100%;

        }
        .page-break {
            page-break-before: always;
        }
        .footer-page {
            position: fixed;
            right: 20px;
            bottom: 2px;
        }
        .footer-date {
            position: fixed;
            bottom: 5px;
            left: 0px;
            right: 0px;
            width: 100%;


            font-size: 17px;
        }
    </style>
</head>
<body class="font-sarabun">
<h2 class="text-center mb-1 ">รายงานรายชื่อเจ้าหน้าที่</h2>
<table >
    <thead class="h1-sarabun ">
    <tr >
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">วันเกิด</th>
    </tr>
    </thead>
    <tbody>
    @php
        $my_page=1;
    @endphp
    @foreach($employees ?? '' as $data)

        <tr>

            <th scope="row">{{ $data->id }}</th>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->phone_number }}</td>
            <td>{{ $data->dob }}</td>
        </tr>
        @if(($loop->iteration % 17) ==0)
            <div class="footer-page">{{$my_page}}/{{$pages}}</div>
            <footer class="footer-date">
                <p class="p-left">{{$date_print}}<br>
            </footer>
            <div class="page-break"></div>
            @php
                $my_page++;
            @endphp
        @endif
    @endforeach
    </tbody>
</table>
<div class="footer-page">{{$my_page}}/{{$pages}}</div>
<footer class="footer-date">
    <p class="p-left">{{$date_print}}<br>
</footer>
</body>
</html>
