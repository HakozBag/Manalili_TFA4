<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS Login</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <main class="form-card">
        <h1>POS Login</h1>

        <?php if (session()->has('error')): ?>
            <div class="validation-errors">
                <?= esc(session('error')) ?>
            </div>
        <?php endif; ?>

        <form class="customer-form" action="<?= site_url('login') ?>" method="post">
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="username">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    value="<?= esc(old('username')) ?>"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                >
            </div>

            <button type="submit">Log In</button>
        </form>
    </main>
</body>
</html>