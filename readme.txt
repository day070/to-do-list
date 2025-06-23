Informasi Sistem

FrondEnd : HTML, CSS, dan JavaScript
BackEnd  : PHP
DataBase : MySql

Struktur DataBase

name  : todolist

table : task
1.id          |int      | (11) | primary key
2.tabel       |varchar  | (60) | not null
3.status      |enum     | (5)  | ('open','close')
create_date   |timestamp| (0)  | current_timestamp

Fitur:
1.Manage To Do List 