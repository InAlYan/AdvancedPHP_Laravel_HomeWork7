# Продвинутое программирование на PHP — Laravel
## Домашняя работа №7

---

В этой практической работе вы будете разрабатывать контроллер, который позволит выводить информацию об одном и обо всех пользователях из базы данных, сохранять данные о новом пользователе в БД, а также создавать PDF с информацией о пользователе.
### 1. Установите новое приложение Laravel и настройте подключение к базе данных. Напомним, что создать новое приложение можно с помощью команды composer:

composer create-project laravel/laravel crud

Добавьте необходимые переменные окружения в ENV-файл корневого каталога приложения.

---
![ENV файл](storage/app/private/img/1_0.png "ENV файл")

---
![ENV файл](storage/app/private/img/1_1.png "ENV файл")
![database](storage/app/private/img/1_2.png "database")


---

### 2. Создайте новую модель Eloquent c помощью команды:

php artisan make:model User -mfsc

Напомним, что флаг -mfsc создаст модель, наполнитель, контроллер и файл миграции.
После опишите схему базы данных в методе up() файла .app/Http/Models/User.php.

---
![Model User](storage/app/private/img/2_0.png "Model User")

---
![create user model](storage/app/private/img/2_1.png "create user model")

---

После описания схемы таблицы базы данных запустите миграцию.
---
![migration](storage/app/private/img/2_2.png "migration")

---
![database state](storage/app/private/img/2_3.png "database state")

---

### 3. Создайте необходимые роуты в файле web.php. Ваше приложение должно содержать минимум четыре эндпоинта:
   — для получения всех пользователей из БД;
   — получения одного пользователя через id, переданный в параметрах роута;
   — записи нового пользователя в базу данных;
   — получения данных о пользователе в виде PDF-файла.

---
![Роуты](storage/app/private/img/3_0.png "Роуты")

---
![Роуты](storage/app/private/img/3_1.png "Роуты")

---

### 4. Создайте новый blade-шаблон. В blade-шаблоне создайте форму, которая будет отправлять данные о работнике. Важно, чтобы поля HTML-формы были сопоставимы с полями таблицы базы данных. При отправке запроса экземпляр класса request должен содержать данные об имени, фамилии и адресе электронной почты пользователя.
   Форма blade-шаблона должна содержать CSRF-токен, поля формы должны быть обязательны к заполнению (используйте атрибут required).

---
![блэйд шаблон](storage/app/private/img/4_0.png "блэйд шаблон")

---

### 5. В контроллере UserController.php опишите функцию store, которая будет сохранять данные из вашей HTML-формы. Добавьте валидацию.

---
![Функция store](storage/app/private/img/5_0.png "Функция store")

---

Дополнительно. Добавьте валидацию на количество символов (максимальное количество символов — 50) для полей Name и Surname. Для почты добавьте валидацию в виде регулярного выражения на соответствие виду example@mail.com.

---
![Функция store](storage/app/private/img/5_1.png "Функция store")

---

### 6. Добавьте соответствующие методы index и get, которые будут возвращать данные обо всех пользователях и об одном пользователе по переданному id. Опционально можете возвращать ответ в формате JSON.

---
![Методы index и get](storage/app/private/img/6_0.png "Методы index и get")

---
![Методы index и get](storage/app/private/img/6_1.png "Методы index и get")

---

### 7. Чтобы генерировать PDF-документ, вам понадобится DOMPDF-пакет, который является сторонней библиотекой. Для его установки выполните команду:

composer require barryvdh/laravel-dompdf

— В файле composer.json добавьте строку с указанным пакетом.
— Запустите команду composer update.
— Добавьте необходимый Service Provider и Facade в файл config/app.php.

---
![pdf](storage/app/private/img/7_0.png "pdf")

---
![pdf](storage/app/private/img/7_1.png "pdf")
![pdf](storage/app/private/img/7_2.png "pdf")

---

### 8. Создайте новый контроллер для работы с PDF:

php artisan make:controller PdfGeneratorController

---
![PdfGeneratorController](storage/app/private/img/8_0.png "PdfGeneratorController")

---

### 9. Опишите функцию index, которая будет возвращать новый PDF-файл.

---
![index of PdfGeneratorController](storage/app/private/img/9_0.png "index of PdfGeneratorController")

---
![index of PdfGeneratorController](storage/app/private/img/9_1.png "index of PdfGeneratorController")
![index of PdfGeneratorController](storage/app/private/img/9_2.png "index of PdfGeneratorController")
![index of PdfGeneratorController](storage/app/private/img/9_3.png "index of PdfGeneratorController")

---

### 10. Измените роут Route::get(‘/resume’) таким образом, чтобы он принимал id в виде параметра. Обновите функцию «index» так, чтобы PDF формировался на основе данных из таблицы по переданному id.

---
![новый метод index of PdfGeneratorController](storage/app/private/img/10_0.png "новый метод index of PdfGeneratorController")
![новый метод index of PdfGeneratorController](storage/app/private/img/10_1.png "новый метод index of PdfGeneratorController")
![новый метод index of PdfGeneratorController](storage/app/private/img/10_2.png "новый метод index of PdfGeneratorController")
![новый метод index of PdfGeneratorController](storage/app/private/img/10_3.png "новый метод index of PdfGeneratorController")
![новый метод index of PdfGeneratorController](storage/app/private/img/10_4.png "новый метод index of PdfGeneratorController")

---

