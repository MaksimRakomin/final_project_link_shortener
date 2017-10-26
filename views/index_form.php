<div class="h1">
        <h1>Сервис сокращения ссылок</h1>
    </div>
    <div id="accordion">
<!--Первая секция аккордиона НАЧАЛО-->
      <h3 class="h3_form">Цифровой код сокращения ссылки</h3>
      <div class="block">
        <p class="p_block">Если вы желаете сократить ссылку и при этом использовать числовую конфигурацию ключа воспользуйтесь этой формой:</p>
        <form action="number.php" id="form_numder" method="post">
            <fieldset>
            <div class="form-group">
                <input autocomplete="off" autofocus class="form-control" name="long_link" placeholder="Ваша длинная ссылка" type="url"/>
            </div>
            <div class="form-group">
                <input autocomplete="off" autofocus class="form-control" name="short_link" placeholder="Ключ короткой ссылки в числовом формате" type="number"/>
            </div>       
            <div class="form-group">
                <button class="btn btn-default" type="submit">
                    Получить короткую ссылку
                </button>
            </div>
        </fieldset>
        </form>
      </div>
      <!--Первая секция аккордиона КОНЕЦ-->
      <!--Вторая секция аккордиона НАЧАЛО-->
      <h3 class="h3_form">Текстовый код сокращения ссылки</h3>
      <div class="block">
        <p class="p_block">Если вы желаете сократить ссылку и при этом использовать текстовую конфигурацию ключа воспользуйтесь этой формой:</p>
        <form action="number.php" id="form_text" method="post">
            <fieldset>
            <div class="form-group">
                <input autocomplete="off" autofocus class="form-control" name="long_link" placeholder="Ваша длинная ссылка" type="url"/>
            </div>
            <div class="form-group">
                <input autocomplete="off" autofocus class="form-control" name="short_link" placeholder="Ключ короткой ссылки в текстовом формате" type="text"/>
            </div>       
            <div class="form-group">
                <button class="btn btn-default" type="submit">
                    Получить короткую ссылку
                </button>
            </div>
        </fieldset>
        </form>
      </div>
      <!--Вторая секция аккордиона КОНЕЦ-->
      <!--Третья секция аккордиона НАЧАЛО-->
      <h3 class="h3_form">Произвольный код сокращения ссылки</h3>
      <div class="block">
        <p class="p_block">Если вы желаете сократить ссылку и при этом конфигурация ключа не имеет значения воспользуйтесь этой формой:</p>
        <form action="random.php" id="form_random" method="post">
            <fieldset>
            <div class="form-group">
                <input autocomplete="off" autofocus class="form-control" name="long_link" placeholder="Ваша длинная ссылка" type="url"/>
            </div>        
            <div class="form-group">
                <button class="btn btn-default" type="submit">
                    Получить короткую ссылку
                </button>
            </div>
        </fieldset>
        </form>

  <!--Третья секция аккордиона КОНЕЦ-->