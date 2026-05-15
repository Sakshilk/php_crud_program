<?php

class Account
{
  public int $number;
  public String $name;
}
$account = new Account();
$account->number = readline("Enter the account number:");
if ($account->number)
  $account->name = readline("\nEnter the account name:");

echo $account->number;
echo $account->name;
