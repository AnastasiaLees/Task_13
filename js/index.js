/** проверка на число */ const isNumber = (num) => typeof num === 'number' && !isNaN(num);
/** модальное окно аутентификации */ let loginInputWindow = document.querySelector('#loginInputSection');
 
/** JSON от сервера */ const json = JSON.parse(document.querySelector('#data-php').getAttribute('data-json'));
const auth = json['auth']; // авторизация
const login = json['login']; // логин
const authTime = json['authtime']; // время авторизации
const exitCount = parseInt(json['exit']); //** число выходов активного пользователя из личного кабинета */
const visitCount = json['visit']; /** число обновлений страницы активным пользователем */

/** кнопка входа-выхода в шапке главной страницы */ let headerBtn = document.querySelector('.header__btn');
headerBtn.value = auth ? 'Выйти' : 'Войти';
headerBtn.addEventListener('click', function(){
    if(this.value=='Войти') loginInputWindow.className = 'modal modal_active';
    else window.open("../scriptes/exit.php", "_self");
});

// ***** Формирование имени пользователя и времени входа *****
document.querySelector('.header__user').textContent = auth ? `Здравствуйте, ${login} (Время входа: ${formatHoursAndMinutes(authTime)})` : 'Здравствуйте, Гость!';

