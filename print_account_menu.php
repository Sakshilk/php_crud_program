<?php
require "account_functions.php";
require "exit_function.php";
require "account_functions.php";
require "contact_functions.php";
require "exit_function.php";

function print_account_menu()
{
  print "1. Create Account ".PHP_EOL;
  print "2. Retrieve Account ".PHP_EOL;
  print "3. Update Account ".PHP_EOL;
  print "4. Delete Account ".PHP_EOL;
  print "5. Queries ".PHP_EOL;
  print "0. Exit ".PHP_EOL;
  print "8. Back to Main Menu".PHP_EOL;
  
  $account_choice = readline("Enter your choice: ").PHP_EOL;
  
  switch($account_choice) {
    case 1:
      create_account();
      break;
    case 2:
      retrieve_account();
      break;
    case 3:
      update_account();
      break;
    case 4:
      delete_account();
      break;
    case 5:
      account_queries();
      break;
    case 0:
      exit(0);
      break;
    case 8:
      exit_to_main_menu();
      break;
    default:
      printf("Please enter the correct choice!");
      break;
  }
  
}

?>























?>