<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Games</title>
</head>
<body>

<table border="1">
    <tr>
        <th>Game</th>
        <th>Publisher</th>
        <th>Release Date</th>
    </tr>
    @for($i = 0; $i < count($games); $i++)
        <tr>
            <td>{{ $games[$i]->title }}</td>
            <td>{{ $games[$i]->publisher }}</td>
            <td>{{ $games[$i]->releasedate }}</td>
        </tr>
    @endfor
</table>

</body>
</html>
