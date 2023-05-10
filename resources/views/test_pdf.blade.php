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
   </style>
</head>
<body class="font-sarabun">
 <h1>Hello Test Laravel DomPDF ทดสอบ</h1>
<table >
    <thead>
        <tr>
           <th>No.</th>

           <th>FirstName</th>

           <th>LastName</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>

            <td>FirstName1</td>

            <td>LastName1</td>
        </tr>

    </tbody>
</table>
</body>
</html>
