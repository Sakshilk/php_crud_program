<?php

// files required 
require "PrintAccountMenu.php";
require "PrintContactMenu.php";


print_menu();

global $UserMainChoice;

function print_menu()
{
  print ("----MAIN MENU----") . PHP_EOL;
  print ("1.Accounts") . PHP_EOL;
  print ("2.Contacts") . PHP_EOL;
  print ("0.Exit") . PHP_EOL;
  $UserMainChoice = readline("Please enter your choice:") . PHP_EOL;
  switch ($UserMainChoice) {
    case 1:
      print_account_menu();
      break;
    case 2:
      print_contact_menu();
      break;
    case 3:
      echo "Exiting the program....";
      exit(0);
      break;
    default:
      echo "Please enter the correct choice!";
      print_menu();
  }
}
