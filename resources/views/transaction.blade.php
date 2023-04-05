<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaction</title>
</head>
<body>
    <table>
        <h1>Tes Coding </h1>
        <div class="card">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Transaksi</th>
                    <th>Total Item</th>
                    <th>Total Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
        </div>
        <tbody>
            @foreach ($data as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->no_transaction }}</td>
                <td>{{ $data->item }}</td>
                <td>{{ $data->qty }}</td>
                <td class="text-center">
                    <a href="{{ route('transaction_detail', $data->id) }}">View</a>
                    <a href="#">Update</a>
                    <a href="#">Delete</a>
                </td>
            </tr>   
            @endforeach
            
        </tbody>
    </table>
    </body>
    </html>