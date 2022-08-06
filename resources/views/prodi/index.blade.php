<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Prodi</title>
</head>

<body>
    <h2>Data Prodi</h2>
    {{ $nama }}
    <hr>

    @foreach ($prodis as $prodi)
        {{ $prodi }} <br>
    @endforeach

</body>

</html>
