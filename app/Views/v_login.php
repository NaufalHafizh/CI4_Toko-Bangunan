<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="fw-bolder">LOGIN</h3>
                        <hr>
                        <?php if (session()->getFlashdata('msg')) : ?>
                            <div class="alert alert-danger alert-dismissible fade show">
                                <?= session()->getFlashdata('msg') ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>
                        <?php
                        if (session()->getFlashData('error')) {
                        ?>
                            <?php
                            foreach (session()->getFlashData('error') as $error) {
                            ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <p><?= $error ?></p>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            <?php  } ?>
                        <?php } ?>
                        <form action="/login/loginAuth" method="POST">
                            <?= csrf_field() ?>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" value="<?= old('username') ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary fw-bolder">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>