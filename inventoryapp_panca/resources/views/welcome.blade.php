<!DOCTYPE html>
<html lang="id">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Selamat Datang - SanberBook</title>
</head>

<body>
   <h1>SELAMAT DATANG {{ strtoupper($firstName) }} {{ strtoupper($lastName) }}!</h1>
   <p><strong>Terima kasih telah bergabung di Sanberbook. Social Media kita bersama!</strong></p>

   <h2>Data yang Anda Input:</h2>
   <p><strong>Nama:</strong> {{ $firstName }} {{ $lastName }}</p>
   <p><strong>Gender:</strong> {{ $gender }}</p>
   <p><strong>Nationality:</strong> {{ $nationality }}</p>
   <p><strong>Language Spoken:</strong> {{ $language }}</p>
   <p><strong>Bio:</strong> {{ $bio }}</p>

   <a href="/">Kembali ke Beranda</a>
</body>

</html>
