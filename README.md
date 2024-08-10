1. Создание гостя
URL: /api/guests
Метод: POST
Заголовки:
Content-Type: application/json
Тело запроса:
json
{
  "first_name": "John",
  "last_name": "Doe",
  "email": "john.doe@example.com",
  "phone": "+71234567890",
  "country": "Russia"
}
Ответ:
json
{
  "id": 1,
  "first_name": "John",
  "last_name": "Doe",
  "email": "john.doe@example.com",
  "phone": "+71234567890",
  "country": "Russia"
}
2. Получение списка гостей
URL: /api/guests
Метод: GET
Ответ:
json
[
  {
    "id": 1,
    "first_name": "John",
    "last_name": "Doe",
    "email": "john.doe@example.com",
    "phone": "+71234567890",
    "country": "Russia"
  }
]
3. Получение гостя по ID
URL: /api/guests/{id}
Метод: GET
Ответ:
json
{
  "id": 1,
  "first_name": "John",
  "last_name": "Doe",
  "email": "john.doe@example.com",
  "phone": "+71234567890",
  "country": "Russia"
}
4. Обновление гостя
URL: /api/guests/{id}
Метод: PUT
Заголовки:
Content-Type: application/json
Тело запроса:
json
{
  "first_name": "Jane",
  "last_name": "Doe",
  "email": "jane.doe@example.com",
  "phone": "+71234567891",
  "country": "Russia"
}
Ответ:
json
{
  "id": 1,
  "first_name": "Jane",
  "last_name": "Doe",
  "email": "jane.doe@example.com",
  "phone": "+71234567891",
  "country": "Russia"
}
5. Удаление гостя
URL: /api/guests/{id}
Метод: DELETE
Ответ:
Код ответа 204 (No Content)
Заголовки отладки (для уровня Middle)

В каждом ответе сервера добавляются заголовки для отладки:

X-Debug-Time — время выполнения запроса в миллисекундах.
X-Debug-Memory — использование памяти в Кб.
Пример:

http
HTTP/1.1 200 OK
Content-Type: application/json
X-Debug-Time: 12ms
X-Debug-Memory: 256Kb

{
  "id": 1,
  "first_name": "John",
  "last_name": "Doe",
  "email": "john.doe@example.com",
  "phone": "+71234567890",
  "country": "Russia"
}
