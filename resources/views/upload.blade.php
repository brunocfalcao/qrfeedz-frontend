<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <h1>File Upload</h1>
    @if (isset($url))
        <p>File uploaded successfully: <a href="{{ $url }}">{{ $url }}</a></p>
    @endif
    <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <br><br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
