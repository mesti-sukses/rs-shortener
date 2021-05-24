<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
    <link rel="stylesheet" href="<?= ($base) ?>assets/css/admin.css">
</head>

<body>
    <div class="wrapper">
        <h1>Daftar URL Shortener</h1>

        <table id="keywords" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th><span>URL</span></th>
                    <th><span>Redirect</span></th>
                    <th><span>Aksi</span></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (($urlData?:[]) as $number=>$url): ?>
                    <tr>
                        <td class="lalign">
                            <a href="<?= ($base) ?>seminar/<?= ($url['slug']) ?>">
                                <?= ($url['slug'])."
" ?>
                            </a>
                        </td>
                        <td><?= ($url['url']) ?></td>
                        <td>
                            <a href="<?= ($base) ?>admin/edit/<?= ($url['id']) ?>" class="button">Edit</a>
                            <a href="<?= ($base) ?>admin/delete/<?= ($url['id']) ?>" class="button button-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="wrapper">
        <form action="<?= ($base) ?>simpan" method="POST">
            <?php if (isset($currentData)): ?>
                
                    <h1>Edit URL Shortener</h1>
                    <input type="hidden" value="<?= ($currentData[0]['id']) ?>" name="id">
                
                <?php else: ?>
                    <h1>Tambahkan URL Shortener</h1>
                
            <?php endif; ?>
            <div class="input-field">
                <p class="input-container">
                    <?php if (isset($currentData)): ?>
                        
                            <input name="slug" type="text" id="input-username" class="login-input" value="<?= ($currentData[0]['slug']) ?>">
                        
                        <?php else: ?>
                            <input name="slug" type="text" id="input-username" class="login-input">
                        
                    <?php endif; ?>
                    <label for="input-username" unselectable="on">Slug</label>
                </p>
                <p class="input-container">
                    <?php if (isset($currentData)): ?>
                        
                            <input name="url" type="text" id="input-url" class="login-input" value="<?= ($currentData[0]['url']) ?>">
                        
                        <?php else: ?>
                            <input name="url" type="text" id="input-url" class="login-input">
                        
                    <?php endif; ?>
                    <label for="input-url" unselectable="on">URL</label>
                </p>
            </div>
            <button type="submit" class="button">Tambahkan</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".login-input").each(function() {
                if ($(this).val() != "") {
                    $(this).parent().addClass("animation");
                }
            });
        });

        //Add animation when input is focused
        $(".login-input").focus(function() {
            $(this).parent().addClass("animation animation-color");
        });

        //Remove animation(s) when input is no longer focused
        $(".login-input").focusout(function() {
            if ($(this).val() === "")
                $(this).parent().removeClass("animation");
            $(this).parent().removeClass("animation-color");
        })
    </script>
</body>

</html>