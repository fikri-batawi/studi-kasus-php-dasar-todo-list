<?php

require_once './Model/TodoList.php';
require_once './BusinessLogic/AddTodoList.php';
require_once './BusinessLogic/ShowTodoList.php';

addTodoList("Belajar PHP Dasar");
addTodoList("Belajar PHP OOP");
addTodoList("Belajar PHP Database");
showTodoList();