<?php
session_start();

// proteksi login
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pusat Kuiz - Balla Makassar</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f6f6f6;
    }

    /* HERO */
    .quiz-hero {
      background: linear-gradient(135deg, #7b1e2b, #b32639);
      color: white;
      padding: 80px 20px;
      text-align: center;
    }

    .quiz-hero h1 {
      font-weight: 700;
    }

    /* BUTTON BACK */
    .back-btn {
      position: absolute;
      top: 20px;
      left: 20px;
    }

    .back-btn a {
      background: rgba(255,255,255,0.15);
      color: white;
      padding: 10px 18px;
      border-radius: 12px;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
      backdrop-filter: blur(6px);
      border: 1px solid rgba(255,255,255,0.2);
    }

    .back-btn a:hover {
      background: rgba(255,255,255,0.25);
      color: white;
    }
    
    /* CARD QUIZ */
    .quiz-card {
      border: none;
      border-radius: 18px;
      transition: 0.3s ease;
      box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    }

    .quiz-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    }

    .quiz-icon {
      font-size: 40px;
    }

    .btn-quiz {
      background: #7b1e2b;
      color: white;
      border-radius: 10px;
    }

    .btn-quiz:hover {
      background: #5c1520;
      color: white;
    }

    footer {
      background: #111;
      color: #aaa;
      padding: 20px;
      margin-top: 50px;
    }
  </style>
</head>

<body>

<!-- ================= HERO ================= -->

 <!-- TOMBOL KEMBALI -->
  <div class="back-btn">
    <a href="index.html">← Kembali ke Beranda</a>
  </div>

<section class="quiz-hero">
  <h1>Pusat Kuiz Balla Makassar</h1>
  <p>Jelajahi dan uji pengetahuanmu tentang Makassar melalui berbagai kategori kuiz interaktif</p>
</section>

<!-- ================= INTRO ================= -->
<section class="py-5">
  <div class="container text-center">
    <h2 class="fw-bold">Pilih Jenis Kuiz</h2>
    <p class="text-muted">
      Setiap kuiz memiliki fokus pembelajaran berbeda. Mulai dari sejarah hingga kuliner khas Makassar.
    </p>
  </div>
</section>

<!-- ================= QUIZ MENU ================= -->
<section class="pb-5">
  <div class="container">

    <div class="row g-4">

      <!-- GENERAL -->
      <div class="col-lg-4 col-md-6">
        <div class="card quiz-card p-4 h-100 text-center">
          <div class="quiz-icon">🌍</div>
          <h4 class="fw-bold mt-3">Kuiz General</h4>
          <p class="text-muted">
            Menjelajahi gambaran umum Kota Makassar: sejarah singkat, budaya dasar, dan identitas kota.
          </p>
          <a href="kuis.general.html" class="btn btn-quiz mt-auto">
            Mulai Kuiz
          </a>
        </div>
      </div>

      <!-- SEJARAH -->
      <div class="col-lg-4 col-md-6">
        <div class="card quiz-card p-4 h-100 text-center">
          <div class="quiz-icon">📜</div>
          <h4 class="fw-bold mt-3">Kuiz Sejarah</h4>
          <p class="text-muted">
            Menguji pengetahuan tentang sejarah Makassar dari masa kerajaan hingga modern.
          </p>
          <a href="kuis-sejarah.html" class="btn btn-quiz mt-auto">
            Mulai Kuiz
          </a>
        </div>
      </div>

      <!-- BUDAYA -->
      <div class="col-lg-4 col-md-6">
        <div class="card quiz-card p-4 h-100 text-center">
          <div class="quiz-icon">🎭</div>
          <h4 class="fw-bold mt-3">Kuiz Budaya</h4>
          <p class="text-muted">
            Menguji pemahaman tentang adat, tradisi, seni, dan nilai budaya Makassar.
          </p>
          <a href="kuis.budaya.html" class="btn btn-quiz mt-auto">
            Mulai Kuiz
          </a>
        </div>
      </div>

      <!-- KULINER -->
      <div class="col-lg-4 col-md-6">
        <div class="card quiz-card p-4 h-100 text-center">
          <div class="quiz-icon">🍲</div>
          <h4 class="fw-bold mt-3">Kuiz Kuliner</h4>
          <p class="text-muted">
            Mengenal makanan khas Makassar seperti Coto, Konro, Pallubasa, dan sejarahnya.
          </p>
          <a href="kuis.kuliner.html" class="btn btn-quiz mt-auto">
            Mulai Kuiz
          </a>
        </div>
      </div>

      <!-- BAHASA -->
      <div class="col-lg-4 col-md-6">
        <div class="card quiz-card p-4 h-100 text-center">
          <div class="quiz-icon">🗣️</div>
          <h4 class="fw-bold mt-3">Kuiz Bahasa</h4>
          <p class="text-muted">
            Menguji pemahaman bahasa Makassar, aksara lontara, dan ungkapan tradisional.
          </p>
          <a href="kuis-bahasa.html" class="btn btn-quiz mt-auto">
            Mulai Kuiz
          </a>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ================= FOOTER ================= -->
<footer class="text-center">
  © 2026 Balla Makassar | Pusat Kuiz Edukasi Budaya
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>