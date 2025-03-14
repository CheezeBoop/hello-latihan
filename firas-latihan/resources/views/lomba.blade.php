<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lomba Form</title>
    <link href="https://cdn.jsdelivr.net/npm/ bootstrap@5.3.2/dist/css/ bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Lomba Form</h2>
        <form action="/submit-lomba" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Peserta:</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <input type="text" class="form-control" name="kelas" required>
            </div>
            <div class="form-group">
                <label for="judul_poster">Judul Poster:</label>
                <input type="text" class="form-control" name="judul_poster" required>
            </div>
            <div class="form-group">
                <label for="lomba_photo">Profile Photo:</label>
                <input type="file" class="form-control-file" name="lomba_photo" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/ bootstrap@5.3.2/dist/js/ bootstrap.bundle.min.js" ></script>
</body>
</html>