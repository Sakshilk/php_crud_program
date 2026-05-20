<?php

// files required 
require "PrintAccountMenu.php";
require "print_contact_menu.php";
require "exit_function.php";
require "contact_functions.php";
require "account_functions.php";

//function call to print menu to the user 
print_menu();

//user's input choice is a global variable because i want to access the variable from other functions. Is there an alternate way?
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



