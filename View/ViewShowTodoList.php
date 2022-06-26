<?php
require_once './Model/TodoList.php';
require_once './BusinessLogic/ShowTodoList.php';
require_once './Helper/Input.php';
require_once './View/ViewAddTodoList.php';
require_once './View/ViewRemoveTodoList.php';

function ViewShowTodoList(){
  while(true){
    showTodoList();
    echo "MENU" . PHP_EOL;
    echo "1. Tambah TodoList" . PHP_EOL;
    echo "2. Hapus TodoList" . PHP_EOL;
    echo "x. Keluar" . PHP_EOL;
  
    $pilihan = input("Pilih");
    if($pilihan == "1"){
      viewAddTodoList();
    }elseif($pilihan == "2"){
      viewRemoveTodoList();
    }elseif($pilihan == "x"){
      break;
    }else{
      echo "Pilihan tidak di mengerti" . PHP_EOL;
    }
  }

  echo "Sampai Jumpa Lagi" . PHP_EOL;
}

