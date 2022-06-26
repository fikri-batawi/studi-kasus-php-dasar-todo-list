<?php
require_once './Model/TodoList.php';
require_once './BusinessLogic/RemoveTodoList.php';
require_once './Helper/Input.php';

function ViewRemoveTodoList(){
  echo "Menghapus TodoList" . PHP_EOL;
  $pilihan = input("Masukan nomer todo (Tekan x untuk batal)");

  if($pilihan == "x"){
    echo "Batal menghapus todo" . PHP_EOL;
  }else{
    $success = removeTodoList($pilihan);
    if($success){
      echo "Berhasil menghapus todo nomor $pilihan" . PHP_EOL;
    }else{
      echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
    }
  }
}