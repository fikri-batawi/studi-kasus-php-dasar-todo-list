<?php
require_once './Model/TodoList.php';
require_once './BusinessLogic/AddTodoList.php';
require_once './View/ViewShowTodoList.php';

function viewAddTodoList(){
  echo "Menambah TodoList".PHP_EOL;
  $todo = input("Masukan Todo (Tekan x untuk batal)");

  if($todo == "x"){
    echo "Batal menambah todo" . PHP_EOL;
  }else{
    addTodoList($todo);
  }
}