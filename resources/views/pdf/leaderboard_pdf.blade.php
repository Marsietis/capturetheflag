<!-- resources/views/leaderboard_pdf.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <style>
        /* Add your PDF styles here */
        /* For example: */
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
<h1>Leaderboard</h1>
<p>Generated at: {{ now()->format('Y-m-d H:i:s T') }}</p>
<p>Last Activity: {{ $users->first()->leaderboard->updated_at->format('Y-m-d H:i:s T') }}</p>

<table>
    <tr>
        <th>Position</th>
        <th>Name</th>
        <th>Score</th>
        <th>Last task solved</th>
    </tr>
    @foreach($users as $user)
        @php
            $index = $loop->index + 1;
        @endphp
        <tr>
            <td>{{ $index }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->leaderboard->score }}</td>
            <td>{{ $user->leaderboard->updated_at->format('Y-m-d H:i:s') }}</td>
        </tr>
    @endforeach
</table>

<div class="footer">
    <p><a href="https://capturetheflag.lt">https://capturetheflag.lt</a></p>
</div>
</body>
</html>
