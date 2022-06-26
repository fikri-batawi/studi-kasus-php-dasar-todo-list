<?php
require_once './View/ViewRemoveTodoList.php';
require_once './BusinessLogic/AddTodoList.php';
require_once './BusinessLogic/ShowTodoList.php';

addTodoList("Muhammad");
addTodoList("Fikri");
addTodoList("19");

ViewRemoveTodoList();
showTodoList();

ViewRemoveTodoList();
showTodoList();
