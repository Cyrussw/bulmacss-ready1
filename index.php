<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Sairus</title>
</head>

<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28" alt="logo">
            </a>

            <a role="button" id="burger" class="navbar-burger" aria-label="menu" aria-expanded="false"
                data-target="burger">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbar" class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item">
                    Ana Sayfa
                </a>
                <div class="navbar-item">

                    <div class="buttons">
                        <a class="button is-primary">
                            <strong>Kayıt Ol</strong>
                        </a>
                        <a class="button is-light">
                            Giriş Yap
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <nav class="breadcrumb is-centered" aria-label="breadcrumbs">
        <ul>
            <li><a href="#">Site Adı</a></li>
            <li><a href="#">Ana Sayfa</a></li>
            <li class="is-active"><a href="#" aria-current="page">Hoşgeldiniz!</a></li>
        </ul>
    </nav>
    <br>
    <section class="section">
        <div class="container has-text-centered">
            <h1 class="title is-size-1">Hoşgeldiniz!</h1><br>
            <h2 class="subtitle is-size-3">Merhaba! Yeni web site örneğine hoş geldiniz. Burada yapabilicekleriniz
                şimdilik sınırlı olsada ileri zamanlarda yeni özellikler ekleyeceğiz!</h2>

            <div class="columns">
                <div class="column">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">
                                Ekip Üye 1
                            </p>
                            <button class="card-header-icon" aria-label="more options">
                                <span class="icon">
                                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </button>
                        </header>
                        <div class="card-content">
                            <div class="content">
                                İsim Soyisim || Kullanıcı Adı
                                <a href="#">Instagram: @kullaniciadi</a>. <a href="#">Discord: url</a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">
                                Ekip Üye 2
                            </p>
                            <button class="card-header-icon" aria-label="more options">
                                <span class="icon">
                                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </button>
                        </header>
                        <div class="card-content">
                            <div class="content">
                                İsim Soyisim || Kullanıcı Adı
                                <a href="#">Instagram: @kullaniciadi</a>. <a href="#">Discord: url</a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">
                                Ekip Üye 3
                            </p>
                            <button class="card-header-icon" aria-label="more options">
                                <span class="icon">
                                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </button>
                        </header>
                        <div class="card-content">
                            <div class="content">
                                İsim Soyisim || Kullanıcı Adı
                                <a href="#">Instagram: @kullaniciadi</a>. <a href="#">Discord: url</a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer" style="margin-top: 215px;">
        <div class="content has-text-centered">
            <p>
                <a href="#">Site sahibi adı yada Ekip Adı</a> tarafından oluşturulan <strong>Site Adı</strong>.
                Kaynak
                kodları
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a> ile lisanslanmıştır.
                Bu web site içeriği <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA
                    4.0</a>
                ile
                lisanslanmıştır.
            </p>
        </div>
    </footer>

    <script src="pages/js/script.js"></script>
</body>

</html>