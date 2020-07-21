<?php 
    // Allow the config
    define('__CONFIG__', true);
    // Require the config
    require_once "inc/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-quiv="X-UI-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/css/uikit.min.css" />
</head>
<body>
    <div class="uk-section uk-container">
        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
        <form class="uk-form-stacked js-login">

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text">Email</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="email" required="required" placeholder="email@email.com">
                    </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text">Password</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-horizontal-text" type="password" required="required" placeholder="Your password">
                    </div>
            </div>

            <div class="uk-margin">
                <button class="uk-button uk-button-default" type="submit">Login</button>
            </div>

        </form>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.5/dist/js/uikit-icons.min.js"></script>
</html>