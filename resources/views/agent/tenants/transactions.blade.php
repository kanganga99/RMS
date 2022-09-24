<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table-stripped">
        <thead>
            <tr>
                <th>Rent</th>
                <th>Month</th>
                <th>Amount Due</th>
                <th>Due date</th>
                <th>Prepayments</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payments as $item)
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->rent }}</td>
                <td>{{ $item->month }}</td>
                <td>{{ $item->amountdue }}</td>
                <td>{{ $item->duedate}}</td>
                <td>{{ $item->prepayments }}</td>
            @endforeach
        </tbody>

    </table>
</body>

</html>
