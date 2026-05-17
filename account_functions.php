<?php
create_account();
/**
 * PARAMAETERS: 
 * account_id => integer
 * account_name => string 
 * industry_type => string
 * annual_revenue => float 
 * employee_count => integer
 * website => string 
 * phone_number => integer
 * billing_address => strings and integers 
 * is_active => boolean 
 */

function create_account() {
  printf("Creating Your Acccount. Please enter the required details: \n").PHP_EOL;
  $account_id = readline("Enter your account ID:").PHP_EOL;
  $account_name = readline("Account Name: ").PHP_EOL;
  $industry_type = readline("Industry Type: ").PHP_EOL;
  $annual_revenue = readline("Annual Reveue ").PHP_EOL;
  $employee_count = readline("Employee Count: ").PHP_EOL;
  $website = readline("Account Website: ").PHP_EOL;
  $phone_number = readline("Company contact number: ").PHP_EOL;
  $account_file = fopen("$account_id.txt","w") or die("Error: Unable to create your file. Please try again later!");
  fwrite($account_file,$account_id);
  fwrite($account_file,$account_name);
  fwrite($account_file,$industry_type);
  fwrite($account_file,$annual_revenue);
  fwrite($account_file,$employee_count);
  fwrite($account_file,$website);
  fwrite($account_file,$phone_number);

  
}

function retrieve_account() {
  printf("To retrieve your account, please enter your account number: ");
}

function update_account(){
  printf("---Update Account---");
}

function delete_account(){
  printf("Delete account:");
}

function account_queries(){
  print("--Account Queries--");
}



?>