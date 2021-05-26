<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RuangSeminar | Informasi Seminar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="<?= ($base) ?>assets/css/linktree.css">
</head>

<body>
    <div class="header-inner section-inner my-5">
        <h1 class="site-title">
            <a href="https://ruangseminar.id" rel="home">
                <img src="<?= ($base) ?>assets/image/logo.jpg" style="width: 100px;" class="rounded-circle mx-auto d-block mb-3" />
                @RuangSeminar.id
            </a>
        </h1>
        <p class="site-description">Rekanan Event Digital Terbaikmu</p>
    </div>
    <div class="container">
        <?php foreach (($urlData?:[]) as $number=>$url): ?>
            <div class="row mb-4">
                <a class="btn btn-dark col-12 py-3" href="<?= ($base) ?>seminar/<?= ($url['slug']) ?>" target="_blank" role="button">
                    Personal Blog
                </a>
            </div>
        <?php endforeach; ?>
        <div class="row mb-4">
            <div class="col-6">
                <div class="row">
                    <a class="btn btn-dark col mr-3 py-3" href="http://youtube.com/c/RuangSeminartv" target="_blank" role="button">
                        <i class="fab fa-youtube"></i> Youtube
                    </a>
                </div>
            </div>

            <div class="col-6">
                <div class="row">
                    <a class="btn btn-dark col ml-3 py-3" href="https://www.instagram.com/ruangseminar" target="_blank" role="button">
                        <i class="fab fa-instagram"></i> Instagram
                    </a>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-6">
                <div class="row">
                    <a class="btn btn-dark col mr-3 py-3" href="https://api.whatsapp.com/send?phone=6281235719735&text=Halo%20Virda%20RuangSeminar%20Saya%20mau%20tanya%20nih,%20tentang" target="_blank" role="button">
                        <i class="fab fa-whatsapp"></i> Contact Person: Virda
                    </a>
                </div>
            </div>

            <div class="col-6">
                <div class="row">
                    <a class="btn btn-dark col ml-3 py-3" href="https://api.whatsapp.com/send?phone=6281559887346&text=Halo%20Tiwi%20RuangSeminar%20Saya%20mau%20tanya%20nih,%20tentang" target="_blank" role="button">
                        <i class="fab fa-whatsapp"></i> Contact Person: Elok
                    </a>
                </div>
            </div>
        </div>

    </div>
</body>

</html>