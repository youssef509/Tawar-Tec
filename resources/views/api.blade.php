
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Hosting accounts</h1>
    <table>
        <thead>
        <tr>
            <th>Account ID</th>
            <th>Username</th>
            <th>Server</th>
            <th>Hostname</th>
            <th>Start Date</th>
            <th>End Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($accounts as $account)
            <tr>
                <td>{{ $account['account_id'] }}</td>
                <td>{{ $account['username'] }}</td>
                <td>{{ $account['server'] }}</td>
                <td>{{ $account['hostname'] }}</td>
                <td>{{ $account['start_date'] }}</td>
                <td>{{ $account['end_date'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
