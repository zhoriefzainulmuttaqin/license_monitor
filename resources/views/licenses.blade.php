<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LITS LICENSES</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Nama Klien</th>
                <th>Domain</th>
                <th>License Key</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($licenses as $license)
                <tr>
                    <td>{{ $license->client_name }}</td>
                    <td>{{ $license->domain }}</td>
                    <td>{{ $license->license_key }}</td>
                    <td>{{ $license->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
