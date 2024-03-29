# Практическое задание по модулю 11. Введение в PHP

Выполнил студент oнлайн-школы Skillfactory курса Профессия Fullstack веб-разработчик на JavaScript и PHP

Сухачев Илья

## Задание 1. Таблица истинности PHP

У нас на входе есть 2 операнда — A и B. Они могут принимать значения 0 или 1. Используя эти знания и знания основ PHP, HTML и CSS, сделаем страницу с демонстрацией таблицы истинности для этих операций.

Ссылка на решение: [ex1.php](ex1.php)

Пример выполнения:

![image1](https://github.com/cookieru/phppromod11les7/blob/main/images/191404.png?raw=true)

### Выводы

По полученой странице мы видим, что логические операции отработали как ожидалось:

- отрицание __(!)__ инвертировало ложь в истину, а истину в ложь;
- дизъюнкция __(||)__, оно же "логическое ИЛИ" возвращало истину если хотя бы один из его операндов являлся истиной;
- коньюкция __(&&)__, оно же "логическое И" возвращало ложь если хотя бы один из его операндов являлся ложью;
- исключающее ИЛИ __(xor)__, возвращал истину только если операнды не равны по значению.

При этом мы обратили на особенность вывода булевых значений при использовании PHP: _Если переменная была истиной то выводилась строка __"1"__, а если была ложью то выводилась __пустая строка__._

## Задание 2. Таблица сравнения

Ниже приведена матрица с различными значениями по оси Y и X соответственно. Используя знания основ PHP, HTML и CSS продемонстрируем различия между гибким сравнением == и жестким сравнением === в PHP.

Ссылка на решение: [ex2.php](ex2.php)

Пример выполнения:

![image2](https://github.com/cookieru/phppromod11les7/blob/main/images/191519.png?raw=true)

### Выводы

По полученой странице мы видим, что две таблицы значительно отличаются:

1. В первой мы видим как работает неявное приведение перемменных. Сами операнды были разных типов, но интерпритатор их все равно обработал и выдал результаты сравнений. Согласно документации мы такой вывод и ожидали.
2. Во второй таблице мы видим, что таблица заполнилось лишь по одной диагональной линии. Все потому, что при жестком сравнении проверяются не только значения переменных, но и их тип.
