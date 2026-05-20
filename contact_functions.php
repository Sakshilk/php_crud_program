<?php
/**
 * PARAMAETERS: 
 * contact_id => integer
 * first_name => string 
 * last_name => string
 * email => char 
 * mobile_no => integer
 * job_title => string 
 * date_of_birth => integer
 * linked_in_profile => strings and integers 
 * is_primary_contact => boolean 
 */

function create_contact() {
  printf("Creating Contacts . Please enter the required details:\n").PHP_EOL;
  $contact_id = readline("Contact ID :").PHP_EOL;
  $first_name = readline("First name ID :").PHP_EOL;
  $last_name = readline("Last Name :").PHP_EOL;
  $email = readline("Email :").PHP_EOL;
  $mobile_no = readline("Mobile No: ").PHP_EOL;
  $job_title = readline("Job Title: ").PHP_EOL;
  $date_of_birth = readline("DOB: ").PHP_EOL;
  $linkedIn_profile = readline("LinkedIn Profile: ").PHP_EOL;
  $is_primary_contact = readline("Primary Contact? ").PHP_EOL;
  $contact_file = fopen("$contact_id.txt","w") or die("Error: Unable to open file. Please try again later!");
  fwrite($contact_file,$contact_id);
  fwrite($contact_file,$first_name);
  fwrite($contact_file,$last_name);
  fwrite($contact_file,$email);
  fwrite($contact_file,$mobile_no);
  fwrite($contact_file,$job_title);
  fwrite($contact_file,$date_of_birth);
  fwrite($contact_file,$linkedIn_profile);
  fwrite($contact_file,$is_primary_contact);
  fclose($contact_file);
  printf("Successfully created Contact ");
  
}

function retrieve_contact() {
  printf("To retrieve your contact, please enter your account number: ");
}

function update_contact(){
  printf("---Update Account---");
}

function delete_contact(){
  printf("Delete account:");
}

function contact_queries(){
  print("--Contact Queries--");
}



