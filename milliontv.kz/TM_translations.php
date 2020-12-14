<?php
// Класс выбора языка
class transformer
{
    public $langID; // Индкс языка
    public $nameLang; // Название языка
    public $titlePage;

    function __construct($idl) {
        $this->langID=$idl;
        $this->setNameLang();
    }

    // Определяем имя языка по id
    function setNameLang()
    {
        switch ($this->langID)
        {
            case 1: $this->nameLang="Русский"; break;
            case 2: $this->nameLang="Қазақ"; break;
        }
    }
}

class menueHeader extends transformer
{
    public $main;
    public $flagfile;
    public $lenta;
    function __construct($idl) {
        parent::__construct($idl);
        $this->setTitle();
    }

    // решаем с титулом индекса
    function setTitle()
    {
        switch ($this->langID)
        {
            case 1:
                $this->main="Главная";
                $this->flagfile="flag_rus.png";
                $this->lenta="Лента новостей";
                break;
            case 2:
                $this->main="Басты бет";
                $this->flagfile="flag_kz.png";
                $this->lenta="Жаңалықтар тізбегі";
                break;
        }
    }

    function chLang()
    {
        switch ($this->langID)
        {
            case 1:
                return 2;
                break;
            case 2:
                return 1;
                break;
        }
    }
}

class indexPage extends transformer
{
    public $chouseLang;
    public $prodolgitBtn;
    public $uslovie;

    function __construct($idl) {
        parent::__construct($idl);
        $this->setTitle();
    }

    // решаем с титулом индекса
    function setTitle()
    {
        switch ($this->langID)
        {
            case 1:
                $this->titlePage="Кто возьмет миллион?";
                $this->chouseLang="ВЫБЕРИТЕ ЯЗЫК";
                $this->prodolgitBtn="Продолжить";
                $this->uslovie="При условии победы в игре, у вас есть возможность выиграть <b>еженедельный денежный приз</b>.";
                break;
            case 2:
                $this->titlePage="Кім миллион алады?";
                $this->chouseLang="ТІЛДІ ТАҢДАҢЫЗ";
                $this->prodolgitBtn="Жалғастыру";
                $this->uslovie="Егер сіз ойында жеңсеңіз, сізде <b>апта сайынғы ақшалай сыйлық</b> ұтып алуға мүмкіндігіңіз бар.";
                break;
        }
    }

}

// пропускаем из за некоторых заморочек
class authPage extends transformer
{
    public $vhod;
    public $memory;
    public $forgotPas;
    public $reg;
    function __construct($idl) {
        parent::__construct($idl);
        $this->setTitle();
    }

    // решаем с титулом индекса
    function setTitle()
    {
        switch ($this->langID)
        {
            case 1:
                $this->vhod="Войти";
                $this->memory="Запомнить меня на этом компьютере";
                $this->forgotPas="Забыли свой пароль?";
                $this->reg="Регистрация";
                break;
            case 2:
                $this->vhod="Кіру";
                $this->memory="Мені осы компьютерде есте сақтаңыз";
                $this->forgotPas="Құпия сөзді ұмыттыңыз ба?";
                $this->reg="Тіркеу";
                break;
        }
    }

}

class registrPage extends transformer
{
    public $vremParol;
    public $zapomnite;
    public $autorized;
    public $returntogamses;
    function __construct($idl) {
        parent::__construct($idl);
        $this->setTitle();
    }

    // решаем с титулом индекса
    function setTitle()
    {
        switch ($this->langID)
        {
            case 1:
                $this->titlePage="Регистрация";
                $this->vremParol="Ваш временный пароль";
                $this->zapomnite="Запомните или запишите его";
                $this->autorized="Вы зарегистрированы на сервере и успешно авторизованы.";
                $this->returntogamses="Вернуться к играм";
                break;
            case 2:
                $this->titlePage="Тіркеу";
                $this->vremParol="Сіздің уақытша пароліңіз";
                $this->zapomnite="Есіңізде болсын немесе жазып алыңыз";
                $this->autorized="Сіз серверде тіркелдіңіз және сәтті авторизацияладыңыз.";
                $this->returntogamses="Ойындарға оралу";
                break;
        }
    }

}

class enterPage extends transformer
{
    public $vremPar;
    public $voiti;
    function __construct($idl) {
        parent::__construct($idl);
        $this->setTitle();
    }

    // решаем с титулом индекса
    function setTitle()
    {
        switch ($this->langID)
        {
            case 1:
                $this->titlePage="Вход";
                $this->vremPar="Введите временный пароль";
                $this->voiti="Войти";
                break;
            case 2:
                $this->titlePage="Кіру";
                $this->vremPar="Уақытша құпия сөзді енгізіңіз";
                $this->voiti="Кіру";
                break;
        }
    }

}

class politicsPage extends transformer
{
    public $opis;
    public $soglas;
    function __construct($idl) {
        parent::__construct($idl);
        $this->setTitle();
    }

    // решаем с титулом индекса
    function setTitle()
    {
        switch ($this->langID)
        {
            case 1:
                $this->titlePage="Политика конфиденциальности";
                $this->opis="РУ. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, 
            making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
            obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, 
            discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" 
            (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular 
            during the Renaissance. Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, 
            from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. 
            Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, 
            written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. Hampden-Sydney College in 
            Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of 
            the word in classical literature, discovered the undoubtable source. Lorem Ipsum";
                $this->soglas="Согласен";
                break;
            case 2:
                $this->titlePage="Құпиялылық саясаты";
                $this->opis="КЗ. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, 
            making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
            obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, 
            discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" 
            (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular 
            during the Renaissance. Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, 
            from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. 
            Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, 
            written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. Hampden-Sydney College in 
            Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of 
            the word in classical literature, discovered the undoubtable source. Lorem Ipsum";
                $this->soglas="Мен келісемін";
                break;
        }
    }

}

class regsucPage extends transformer
{
    public $opisReg;
    public $proitiIgru;
    public $proiti;
    public $poluchit;
    function __construct($idl) {
        parent::__construct($idl);
        $this->setTitle();
    }

    // решаем с титулом индекса
    function setTitle()
    {
        switch ($this->langID)
        {
            case 1:
                $this->titlePage="Успешная регистрация";
                $this->opisReg="Вы удачно зарегистрировались, напоминаем что на первые 5 вопросов на раздумья вам дается 15 секунд, на раздумье следующих вопросов у вас есть 30 секунд.";
                $this->proitiIgru="Вы успешно зарегистрировались на сайте"; //Пройти игру перед тем как получить доп. бонусы?
                $this->proiti="Играть";//Пройти;
                $this->poluchit="Получить";
                break;

            case 2:
                $this->titlePage="Сәтті тіркеуден өтті";
                $this->opisReg="Сіз сәтті тіркелдіңіз, алғашқы 5 сұраққа сізге 15 секунд уақыт беріледі, ал келесі сұрақтар туралы ойлануға 30 секунд уақыт беріледі.";
                $this->proitiIgru="Қосымша бонустарды алмай тұрып ойынды аяқтаңыз ба?";
                $this->proiti="Арқылы өту";
                $this->poluchit="Алу үшін";
                break;
        }
    }

}

class buyPage extends transformer
{
    public $buy5game;
    public $stoy1;
    public $stoy2;
    public $karta;
    function __construct($idl) {
        parent::__construct($idl);
        $this->setTitle();
    }

    // решаем с титулом индекса
    function setTitle()
    {
        switch ($this->langID)
        {
            case 1:
                $this->titlePage="Покупка игры";
                $this->buy5game="Купить 5 игр";
                $this->stoy1="Стоимость";
                $this->stoy2="750 тенге";
                $this->karta="Оплатить картой";
                break;
            case 2:
                $this->titlePage="Ойын сатып алу";
                $this->buy5game="5 ойын сатып алыңыз";
                $this->stoy1="Құны";
                $this->stoy2="750 теңге";
                $this->karta="Карточкамен төлеңіз";
                break;
        }
    }

}

class mainGamePage extends transformer
{
    public $newgame;
    function __construct($idl) {
        parent::__construct($idl);
        $this->setTitle();
    }

    // решаем с титулом индекса
    function setTitle()
    {
        switch ($this->langID)
        {
            case 1:
                $this->titlePage="Добро пожаловать в игру!";
                $this->newgame="Начать игру";
                break;
            case 2:
                $this->titlePage="Ойынға қош келдіңіз!";
                $this->newgame="Ойынды бастаңыз";
                break;
        }
    }

}

class newsPage extends transformer
{
    public $newslent;
    function __construct($idl) {
        parent::__construct($idl);
        $this->setTitle();
    }

    // решаем с титулом индекса
    function setTitle()
    {
        switch ($this->langID)
        {
            case 1:
                $this->titlePage="Новости";
                $this->newslent="Лента новостей";
                $this->component="3";
                break;
            case 2:
                $this->titlePage="Жаңалықтар";
                $this->newslent="Жаңалықтар тізбегі";
                $this->component="6";
                break;
        }
    }
}

class FAQPage extends transformer
{
    public $newslent;
    function __construct($idl) {
        parent::__construct($idl);
        $this->setTitle();
    }

    // решаем с титулом индекса
    function setTitle()
    {
        switch ($this->langID)
        {
            case 1:
                $this->titlePage="Часто задаваемые вопросы";
                $this->component="4";
                break;
            case 2:
                $this->titlePage="Жиі қойылатын сұрақтар";
                $this->component="5";
                break;
        }
    }

}

class afterLostPage extends transformer
{
    public $vidiopr;
    public $buy5game;
    public $zakazkart;
    function __construct($idl) {
        parent::__construct($idl);
        $this->setTitle();
    }

    // решаем с титулом индекса
    function setTitle()
    {
        switch ($this->langID)
        {
            case 1:
                $this->titlePage="Проигрыш";
                $this->vidiopr="Просмотреть видеоролик";
                $this->buy5game="Купить 5 игр";
                $this->zakazkart="Заказать карту";
                break;
            case 2:
                $this->titlePage="Жоғалту";
                $this->vidiopr="Бейнені қараңыз";
                $this->buy5game="5 ойын сатып алыңыз";
                $this->zakazkart="Карточкаға тапсырыс беріңіз";
                break;
        }
    }

}

class cartOformPage extends transformer
{
    public $kartOform;
    public $kartOpis;
    public $blizotdel;
    function __construct($idl) {
        parent::__construct($idl);
        $this->setTitle();
    }

    // решаем с титулом индекса
    function setTitle()
    {
        switch ($this->langID)
        {
            case 1:
                $this->titlePage="Заказать карту";
                $this->kartOform="Оформление карты";
                $this->kartOpis="Чтобы заказать карту нужны удостоверение личности и подпись. Для того, чтобы приобрести карту Сбербанк, надо обратиться в ближайший филиал Банка.";
                $this->blizotdel="Посмотреть ближайшее отделение на карте";
                break;
            case 2:
                $this->titlePage="Карточкаға тапсырыс беріңіз";
                $this->kartOform="Банк карточкасын шығару";
                $this->kartOpis="Карточкаға тапсырыс беру үшін сізге жеке куәлік және қолтаңба қажет. Сбербанк картасын сатып алу үшін сіз банктің ең жақын бөлімшесіне хабарласуыңыз керек.";
                $this->blizotdel="Картадан ең жақын филиалды қараңыз";
                break;
        }
    }

}

class congratPage extends transformer
{
    public $str1;
    public $str2;
    public $kartinfo;
    public $gameback;
    function __construct($idl) {
        parent::__construct($idl);
        $this->setTitle();
    }

    // решаем с титулом индекса
    function setTitle()
    {
        switch ($this->langID)
        {
            case 1:
                $this->titlePage="Поздравляем!";
                $this->str1="";
                $this->str2="игр для вас";
                $this->kartinfo="Ваша карта будет готова позже.";
                $this->gameback="Вернуться к игре";
                break;
            case 2:
                $this->titlePage="Құттықтаймыз!";
                $this->str1="Сізге";
                $this->str2="ойын";
                $this->kartinfo="Сіздің картаңыз кейінірек дайын болады.";
                $this->gameback="Ойынға оралу";
                break;
        }
    }

}

class lossPage extends transformer
{
    public $lostmess;
    public $priobresti;
    public $dalee;
    function __construct($idl) {
        parent::__construct($idl);
        $this->setTitle();
    }

    // решаем с титулом индекса
    function setTitle()
    {
        switch ($this->langID)
        {
            case 1:
                $this->titlePage="Проигрыш";
                $this->lostmess="К сожалению, вы проиграли";
                $this->priobresti="Сыграйте еще раз";
                $this->dalee="Далее";
                break;
            case 2:
                $this->titlePage="Жоғалту";
                $this->lostmess="Кешіріңіз, сіз ұтылдыңыз";
                $this->priobresti="Бірақ сіз басқа ойын сатып ала аласыз.";
                $this->dalee="Тағы";
                break;
        }
    }

}

class winPage extends transformer
{
    public $pozdr;
    public $pozdrmess;
    public $dalee;
    function __construct($idl) {
        parent::__construct($idl);
        $this->setTitle();
    }

    // решаем с титулом индекса
    function setTitle()
    {
        switch ($this->langID)
        {
            case 1:
                $this->titlePage="Победа";
                $this->pozdr="Поздравляем!";
                $this->pozdrmess="Вы прошли игру, ответили на 15 вопросов из 15. Чем больше игр вы пройдете - тем больше у вас будет шанс выиграть 10 000 тенге.";
                $this->dalee="Делее";
                break;
            case 2:
                $this->titlePage="Жеңіс";
                $this->pozdr="Құттықтаймыз!";
                $this->pozdrmess="Сіз ойынды аяқтадыңыз, 15 сұрақтың 15-іне жауап бердіңіз, қанша ойынды аяқтасаңыз, соғұрлым 10000 теңге ұтып алуыңыз мүмкін болады.";
                $this->dalee="Тағы";
                break;
        }
    }

}

class gamePage extends transformer
{
    public $pravotvet;
    function __construct($idl) {
        parent::__construct($idl);
        $this->setTitle();
    }

    // решаем с титулом индекса
    function setTitle()
    {
        switch ($this->langID)
        {
            case 1:
                $this->titlePage="Кто возьмет миллион?";
                $this->pravotvet="Возможно правильный вариант ответа";
                break;
            case 2:
                $this->titlePage="Кім миллион алады?";
                $this->pravotvet="Мүмкін дұрыс жауап";
                break;
        }
    }

}

class profilePage extends transformer
{
    public $idpolz;
    public $nomtel;
    public $name;
    public $fam;
    public $pol;
    public $polm;
    public $polg;
    public $dr;
    public $kvpr;
    public $kvost;
    public $nastr;
    public $sigrGame;
    public $kvprKZ;
    public $kvproig;
    public $kvproigKZ;
    function __construct($idl) {
        parent::__construct($idl);
        $this->setTitle();
    }

    // решаем с титулом индекса
    function setTitle()
    {
        switch ($this->langID)
        {
            case 1:
                $this->titlePage="Профиль игрока";
                $this->idpolz="ID пользователя";
                $this->nomtel="Номер телефона";
                $this->name="Имя";
                $this->fam="Фамилия";
                $this->pol="Пол";
                $this->polm="Мужской";
                $this->polg="Женский";
                $this->dr="Дата рождения";
                $this->kvpr="Кол-во пройденных игр на Русском языке";
                $this->kvost="Кол-во оставшихся игр";
                $this->nastr="Настройки";
                $this->sigrGame="Кол-во сыгранных игр";
                $this->kvprKZ="Кол-во пройденных игр на Казахском языке";
                $this->kvproig="Кол-во проигранных игр на Русском языке";
                $this->kvproigKZ="Кол-во проигранных игр на Казахском языке";
                break;
            case 2:
                $this->titlePage="Ойыншы профилі";
                $this->idpolz="Пайдаланушы ID";
                $this->nomtel="Телефон нөмірі";
                $this->name="Аты";
                $this->fam="Тегі";
                $this->pol="Жынысы";
                $this->polm="Еркек";
                $this->polg="Әйел";
                $this->dr="туған күні";
                $this->kvpr="Орыс тілінде аяқталған ойын саны";
                $this->kvost="Ойындардың саны аяқталды";
                $this->nastr="Параметрлер";
                $this->sigrGame="Ойындар саны";
                $this->kvprKZ="Қазақ тіліндегі аяқталған ойын саны";
                $this->kvproig="Орыс тілінде жоғалған ойындар саны";
                $this->kvproigKZ="Қазақ тіліндегі жоғалған ойындар саны";
                break;
        }
    }
}

class setProfilePage extends transformer
{
    public $idpolz;
    public $nomtel;
    public $name;
    public $fam;
    public $pol;
    public $polm;
    public $polg;
    public $dr;
    public $kvpr;
    public $kvost;
    public $nastr;
    public $jazint;
    public $sendNot;
    public $ofert;
    public $skach;
    public $sohr;
    function __construct($idl) {
        parent::__construct($idl);
        $this->setTitle();
    }

    // решаем с титулом индекса
    function setTitle()
    {
        switch ($this->langID)
        {
            case 1:
                $this->titlePage="Настройка профиля игрока";
                $this->idpolz="ID пользователя";
                $this->nomtel="Номер телефона";
                $this->name="Имя";
                $this->fam="Фамилия";
                $this->pol="Пол";
                $this->polm="Мужской";
                $this->polg="Женский";
                $this->dr="Дата рождения";
                $this->kvpr="Кол-во пройденных игр";
                $this->kvost="Кол-во оставшихся игр";
                $this->nastr="Настройки";
                $this->jazint="Язык интерфейса";
                $this->sendNot="Присылать уведомления";
                $this->ofert="Оферта";
                $this->skach="Скачать";
                $this->sohr="Сохранить";
                break;
            case 2:
                $this->titlePage="Ойыншы профилін баптау";
                $this->idpolz="Пайдаланушы ID";
                $this->nomtel="Телефон нөмірі";
                $this->name="Аты";
                $this->fam="Тегі";
                $this->pol="Жынысы";
                $this->polm="Еркек";
                $this->polg="Әйел";
                $this->dr="туған күні";
                $this->kvpr="Ойындардың саны аяқталды";
                $this->kvost="Ойындардың саны аяқталды";
                $this->nastr="Параметрлер";
                $this->jazint="Интерфейс тілі";
                $this->sendNot="Хабарландырулар жіберу";
                $this->ofert="Ұсыныс";
                $this->skach="Жүктеу";
                $this->sohr="Сақтау";
                break;
        }
    }
}

class watchVideo extends transformer
{
    public $v1;
    public $v2;
    public $v3;
    public $smotrvid;
    public $smotrdokonca;
    public $bonusG;
    function __construct($idl) {
        parent::__construct($idl);
        $this->setTitle();
    }

    // решаем с титулом индекса
    function setTitle()
    {
        switch ($this->langID)
        {
            case 1:
                $this->titlePage="Просмотр видео";
                $this->v1="Видео 1";
                $this->v2="Видео 2";
                $this->v3="Видео 3";
                $this->smotrvid="Просмотри данное видео до конца, чтобы получить 3 бесплатные игры";
                $this->smotrdokonca="Досмотри видео до конца и получи 3 бесплатные игры.";
                $this->bonusG="Вы получили 3 бонусных игры";
                break;
            case 2:
                $this->titlePage="Бейнені қарау";
                $this->v1="1-бейне";
                $this->v2="2-бейне";
                $this->v3="3-бейне";
                $this->smotrvid="3 тегін ойын алу үшін осы бейнені соңына дейін қараңыз";
                $this->smotrdokonca="Бейнені соңына дейін қарап, 3 тегін ойын алыңыз.";
                $this->bonusG="Сіз 3 бонустық ойын алдыңыз";
                break;
        }
    }

}
?>