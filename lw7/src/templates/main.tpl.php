<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8"/>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
  <link rel="stylesheet" href="css/styles.css"/>
  <title>Моя страница</title>
</head>
<body>
  <header class="nav-container">   
    <nav class="nav">
      <a class="nav__link nav__link_about-me" href="#">Обо мне</a>
      <a class="nav__link nav__link_hobby" href="#hobby">Мое хобби</a>
      <a class="nav__link nav__link_video" href="#film">Любимые фильмы</a>
    </nav>
  </header>
  <div class="main-container">
    <div class="part-one">
      <div class="part-one__wrapper">
        <img class="part-one__image" alt="photo" src="img/photo.png">
        <div class="quote-container">
          <blockquote class="quote-container__blockquote">
            Мы берем на себя много, потому что мало чего боимся
          </blockquote>
          <cite class="quote-container__cite">— Том Демарко. Deadline</cite>
          <h1 class="quote-container__name">Коскина Ирина</h1>
        </div>
      </div>
      <div class="part-one__wrapper">
        <div class="left-column">
          <div class="left-column__title">Любимые писатели:</div>
          <ul class="left-column__list">
            <li class="left-column__item">Айзек Азимов</li>
            <li class="left-column__item">Говард Лавкрафт</li>
            <li class="left-column__item">Дмитрий Глуховский</li>
            <li class="left-column__item">Чак Паланик</li>
          </ul>
          <div class="left-column__title">Любимые фильмы:</div>
          <ol class="left-column__list">
            <li class="left-column__item">Шоу Трумэна</li>
            <li class="left-column__item">Малхолланд Драйв</li>
            <li class="left-column__item">Семь жизней</li>
            <li class="left-column__item">Гравитация</li>
          </ol>
        </div>
        <div class="right-column">
          <p class="right-column__text">
            В 1930-е годы прошлого века физик Джордж Гамоу из университета штата 
            Колорадо начал публиковать мини‑сериал рассказов о неком мистере Томпкинсе, 
            банковском клерке средних лет. Мистер Томпкинс, как явствовало из этих 
            историй, интересовался современной наукой. 
          </p>
          <div id="hobby"></div>
          <h2 class="right-column__title">Мое хобби</h2>
          <p class="right-column__text">
            Он регулярно посещал вечерние лекции местного профессора и, разумеется, 
            всегда засыпал на самом интересном месте. <br> А когда просыпался, 
            то обнаруживал себя в каком-нибудь параллельном мире, где один из основных 
            законов физики действовал не так, как в его мире.
          </p>
          <a class="right-column__link" href="https://vk.com/randervnd">Напиши мне</a>
        </div>
      </div>
    </div>
    <div id="film"></div>
    <div class="part-two">
      <div class="film-container">
        <h2 class="film-container__title">Любимые фильмы</h2>
        <div class="film-columns">
          <div class="film-columns__film">
            <img class="film-columns__image" src="img/film1.png" alt="Побег из Шоушенка">
            <h3 class="film-columns__title">Побег из Шоушенка</h3>
            <p class="film-columns__description">
              Успешный банкир Энди Дюфрейн обвинен в убийстве собственной жены и 
              ее любовника. Оказавшись в тюрьме под названием Шоушенк, он сталкивается 
              с жестокостью и беззаконием, царящими по обе стороны решетки. Каждый, кто 
              попадает в эти стены, становится их рабом до конца жизни. Но Энди, 
              вооруженный живым умом и доброй душой, отказывается мириться с приговором 
              судьбы и начинает разрабатывать невероятно дерзкий план своего освобождения.
            </p>
          </div>
          <div class="film-columns__film">
            <img class="film-columns__image" src="img/movie_two.png" alt="Наркоз">
            <h3 class="film-columns__title">Наркоз</h3>
            <p class="film-columns__description">
              Клай Бересфорд вынужден лечь под нож. Однако в процессе операции на сердце 
              он неожиданно приходит в себя. Находясь в парализованном состоянии, будучи 
              не в силах пошевелить ни рукой, ни ногой, он, тем не менее, чувствует каждое 
              касание скальпеля к своей плоти…
            </p>
          </div>
          <div class="film-columns__film">
            <img class="film-columns__image" src="img/movie_three.png" alt="Астрал">
            <h3 class="film-columns__title">Астрал</h3>
            <p class="film-columns__description">
              Джош и Рене переезжают со своими детьми в новый дом, но не успевают толком 
              распаковать вещи, как начинаются странные события. Необъяснимо перемещаются 
              предметы, в детской звучат странные звуки… Но в настоящий ужас приходят 
              родители, когда их десятилетний сын Далтон впадает в кому. Все усилия врачей 
              в больнице помочь мальчику безуспешны.
            </p>
          </div>
          <div class="film-columns__film">
            <img class="film-columns__image" src="img/movie_four.png" alt="Гравитация">
            <h3 class="film-columns__title">Гравитация</h3>
            <p class="film-columns__description">
              Доктор Райан Стоун, блестящий специалист в области медицинского инжиниринга, 
              отправляется в свою первую космическую миссию под командованием ветерана 
              астронавтики Мэтта Ковальски, для которого этот полет — последний перед 
              отставкой. Но во время, казалось бы, рутинной работы за бортом случается 
              катастрофа.<br> Шаттл уничтожен, а Стоун и Ковальски остаются совершенно одни; 
              они находятся в связке друг с другом, и все, что они могут, — это двигаться 
              по орбите в абсолютно черном пространстве без всякой связи с Землей и 
              какой-либо надежды на спасение.
            </p>
          </div>
        </div>
        <div class="button">
          <button class="film-container__button">Все фильмы</button>
        </div>
      </div>
    </div>
    <div class="header-container">
      <h2 class="header-container__title">Напиши мне</h2>
    </div>
    <form class="form" method="POST">
      <?php if (isset($args["sent"])): ?>
        <p class="form__feedback"><?php echo $args["sent"]; ?></p>
      <?php endif; ?>

      <div class="form__title form__title_name">Ваше имя</div>
      <?php if (isset($args["errors"]["name_error"])): ?>
        <label class="form__errors"><?php echo $args["errors"]["name_error"]; ?></label>
      <?php endif; ?>
      <input class="form__input" name="name" required type="text" value="<?php echo $args["data"]["name"] ?? ""; ?>" />
      <div class="form__title form__title_email">Ваш email</div>
      <?php if (isset($args["errors"]["email_error"])): ?>
        <label class="form__errors"><?php echo $args["errors"]["email_error"]; ?></label>
      <?php endif; ?>
      <input class="form__input" name="email" required type="text" value="<?php echo $args["data"]["email"] ?? ""; ?>" />
      <div class="form__title form__title_country">Откуда вы?</div>
      <div class="form__select">
        <select class="form__input country" name="country">
          <option value="Russia">Россия</option>
          <option value="USA">США</option>
        </select>
      </div>
      <div class="form__title form__title_gender">Ваш пол</div>
      <input class="radio" type="radio" name="gender" value="male" id="genderMale"/>
      <label class="gender" for="genderMale">Мужской</label>
      <input class="radio" type="radio" name="gender" value="female" id="genderFemale"/>
      <label class="gender" for="genderFemale">Женский</label>
      <div class="form__title form__title_message">Ваше сообщение</div>
      <?php if (isset($args["errors"]["message_error"])): ?> 
        <label class="form__errors"><?php echo $args["errors"]["message_error"]; ?></label>
      <?php endif; ?>
      <textarea class="form__input form__text" name="message" required></textarea>
      <input class="submit film-container__button" type="submit"/>
    </form>
  </div>
  <footer class="footer">
    <div class="footer__title">
      © 2006-2018 Поволжский государственный технологический университет, ФГБОУ ВО «ПГТУ»
    </div>
  </footer>
</body>
</html>