<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Our Team</title>
    <style>
        body {
            background-image: url('bgabout.jpeg'); /* Ganti dengan path ke gambar background utama */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .team-section {
            text-align: center;
            padding: 50px 20px;
            width: 100%;
            max-width: 1200px;
            background-color: rgba(255, 255, 255, 0.9); /* Opacity untuk membuat konten lebih mudah dibaca */
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .team-section h2 {
            font-size: 36px;
            margin-bottom: 10px;
        }
        .team-section p {
            font-size: 16px;
            color: #666;
            margin-bottom: 40px;
        }
        .team-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .team-member {
            background-color: white; /* Default background color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            overflow: hidden;
            width: 300px; /* Fixed width for uniform size */
            text-align: center; /* Center align content */
            margin-bottom: 20px; /* Space between team members */
        }
        .team-member:nth-child(1) {
            background-color: #e6ffe6; /* Warna hijau soft untuk Rechin Zaqia Aurista */
        }
        .team-member:nth-child(2) {
            background-color: #ffd9e6; /* Warna pink soft untuk Anindya Lutfia Apsari */
        }
        .team-member:nth-child(3) {
            background-color: #cce6ff; /* Warna biru soft untuk Galardhia Zain Azzahra */
        }
        .team-member:hover {
            transform: scale(1.05);
        }
        .image-container {
            overflow: hidden;
            border-radius: 10px;
            height: 160px; /* Fixed height for image container */
        }
        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Maintain aspect ratio */
            transition: transform 0.3s ease;
        }
        .team-member:hover .image-container img {
            transform: scale(1.1);
        }
        .team-member h3 {
            font-size: 24px;
            margin: 20px 0 10px;
            white-space: nowrap; /* Menghindari pemisahan nama menjadi beberapa baris */
        }
        .team-member p {
            font-size: 20px;
            color: #888;
        }
        .back-button {
            margin-top: 20px;
            text-align: center;
        }
        .back-button a.btn-primary {
            background-color: orange; /* Ubah warna background tombol menjadi orange */
            border-color: orange; /* Ubah warna border (jika diperlukan) */
        }
    </style>
</head>
<body>
    <section class="team-section">
        <h2>Our Team</h2>
        <p>Ahli Desain: Mengerti kebutuhan desain untuk mencapai hasil cetak yang maksimal</p>
        <div class="team-container">
            <div class="team-member">
                <div class="image-container">
                    <img src="rere.jpeg">
                </div>
                <h3>Rechin Zaqia Aurista</h3>
                <p>L200220087</p>
            </div>
            <div class="team-member">
                <div class="image-container">
                    <img src="uninn.jpg" >
                </div>
                <h3>Anindya Lutfia Apsari</h3>
                <p>L200220093</p>
            </div>
            <div class="team-member">
                <div class="image-container">
                    <img src="dhia.jpg">
                </div>
                <h3>Galardhia Zain Azzahra </h3>
                <p>L200220099</p>
            </div>
        </div>
        <div class="back-button">
            <a href="index.php" class="btn btn-primary">Back to Home</a>
        </div>
    </section>
</body>
</html>
