<!-- resources/views/domain-check.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Domain Checker</title>
</head>
<body>
    <form action="{{ route('domain.check') }}" method="post">
        @csrf
        <input type="text" name="domain" placeholder="Enter domain name (with or without TLD)" required>
        <button type="submit">Check Availability</button>
    </form>

    @if(session('results'))
        <ul>
            @foreach (session('results') as $result)
                <li>
                    {{ $result['domain'] }} - 
                    @if ($result['available'])
                        <span style="color: green;">Available</span>
                    @else
                        <span style="color: red;">Not Available</span>
                        @if (isset($result['error']))
                            (Error: {{ $result['error'] }})
                        @endif
                    @endif
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>