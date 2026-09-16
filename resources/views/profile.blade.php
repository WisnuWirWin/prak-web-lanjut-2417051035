<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 - Wisnu Wira Winata</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url("{{ asset('background.jpeg') }}");
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile {
            width: 380px;
            text-align: center;
        }

        .profile-image {
            width: 220px;
            height: 220px;
            border-radius: 50%;
            border: 2px solid #555;
            object-fit: cover;
            margin-bottom: 45px;
        }

        .info {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .box {
            width: 100%;
            height: 60px;
            background-color: #d3d3d3;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 28px;
            color: #111;
        }
    </style>
</head>

<body>

    <div class="profile">
        <img 
            src= "{{ asset('pp.jpeg') }}" 
            alt="Foto Profil" 
            class="profile-image"
        >

        <div class="info">
            <div class="box">{{$nama}}</div>
            <div class="box">{{$nim}}</div>
            <div class="box">{{$kelas}}</div>
        </div>

    </div>

</body>
</html>