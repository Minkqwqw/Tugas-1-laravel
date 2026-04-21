<!DOCTYPE html>
<html>
<head>
    <title>Tugas MVC Laravel - Library</title>
<style>
    body { font-family: sans-serif; padding: 20px; background-color: #f4f4f9; }
    h1 { color: #333; }
    table { 
        border-collapse: collapse; 
        width: 100%; 
        max-width: 800px; 
        background: white; 
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        margin-bottom: 30px;
    }
    th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #ddd; }
    th { background-color: #4A90E2; color: white; }
    tr:hover { background-color: #f1f1f1; }
</style>
</head>
<body>
    <h1>Data Genre</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Genre</th>
        </tr>
        @foreach($genres as $genre)
        <tr>
            <td>{{ $genre['id'] }}</td>
            <td>{{ $genre['nama'] }}</td>
        </tr>
        @endforeach
    </table>

    <h1>Data Author</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Author</th>
            <th>Negara</th>
        </tr>
        @foreach($authors as $author)
        <tr>
            <td>{{ $author['id'] }}</td>
            <td>{{ $author['nama'] }}</td>
            <td>{{ $author['negara'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>