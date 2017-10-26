<!--
<div>
    <h2>Ваша ссылка готова:</h2>
    <div><?= "<p> http://public/".$link["short_link"]."</p>" ?></div>
</div>
<div>
    <a href="index.php">Вернуться на главную стараницу</a>
</div>
-->



<div>
    <h2 class="h3_form">Ваша ссылка готова:</h2>
    <div class="block" id="textarea-example">
        <?="<p class='p_block'>http://public/".$link["short_link"]."</p>"?>
        <a class="btn-clipboard" data-clipboard-target="#textarea-example"><img class="copy" src="img/copy.png"></a>
        <script>
            new Clipboard('.btn-clipboard'); // Не забываем инициализировать библиотеку на нашей кнопке
        </script>
    </div>
</div>
<div >
    <a class="link" href="index.php">Вернуться на главную стараницу</a>
</div>














