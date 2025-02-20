<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            /* Background & body */
body {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color:rgb(113, 193, 199);
    margin: 0;
    width: 100%;
    height: 100vh;
    font-family: 'Nunito', sans-serif;
}

/* Container utama */
.container {
    display: flex;
    flex-direction: column; /* Tambahkan ini agar item dalam container ditata secara vertikal */
    justify-content: center;
    align-items: center;
    background: rgba(255, 255, 255, 0.15);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);
    border-radius: 10px;
    padding: 20px;
}

/* Center QR Code */
.row {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%; /* Pastikan QR Code berada di tengah */
}

/* Form styling */
form {
    display: flex;
    flex-wrap: wrap;
    gap: 25px; /* Menambahkan jarak antar elemen */
    justify-content: center;
    padding-bottom: 10px;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 5px;
    font-size: 14px;
    background: rgba(255, 255, 255, 0.2);
    color: black;
    outline: none;
    margin: 5px 0; /* Memberikan jarak atas-bawah untuk input */
}

.form-group input::placeholder {
    color: rgba(255, 255, 255, 0.7);
}


/* Table styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 5px;
    overflow: hidden;
}

th, td {
    padding: 10px;
    text-align: center;
    color: black;
}

h2 {
    color: black;
    text-align: center;
}

/* Responsif untuk layar kecil */
@media (max-width: 600px) {
    .container {
        width: 90%;
    }

    form {
        flex-direction: column;
    }

    .form-group input {
        width: 100%;
    }
}

        </style>
    </head>
    <body>
        <div class="container">
            <h2>Scan QR Code Here</h2>
            <div class="row mt-5">
              {!! $qrcode !!}
            </div>
        </div>
    </body>
</html>
