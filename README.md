# Фильтрация продуктов
## Описание
    Проект для выполнения тестового задания. Разработать API backend на фреймворке Laravel  В качестве БД использовать MySQL, Postgresql. Ожидаемое время выполнения 4 часа. Результат должен быть выложен на github

## Требуемый функционал:

Необходимо реализовать “каталог товаров”. Товар: название, цена, количество. Свойства (опции) товара: название. Свойства товара должны быть произвольными т е заполняться в БД


Реализовать фильтрацию списка товаров с множественным выбором, например GET /products?properties[свойство1][]=значение1_своства1&properties[свойство1][]=значение2_своства1&properties[свойство2][]=значение1_свойства2.


Нужен api GET метод получения списка товаров (“каталог товаров”) пагинированных по 40

## Установка

1. #### Скопируйте репозиторий:
   * `git clone https://github.com/MaximZayats/aiogram-django-template`

2. #### В файле .env заполните настройки для соединения с БД

2. #### Запустите миграции:
    * `php artisan migrate`

3. #### Для наполнения сайта тестовыми данными выполните
    * `php artisan db:seed`

4. #### Запустите сервер
    * `php artisan serve`

5. На главной странице будет пример двух ссылок с фильтрованными товарами по первому свойству из БД и без фильтррв. Результат отдается в виде json.


