<?php
/*

add tables for tests, subcategories, question, choices

tests should include test id and user id of creator, also name, subject

subcategories should include test id and user id of creator and name, and subcategory id

question should include test id, subcategory id, question type, and question id

choices should include test id, subcategory id, if the correct answer or not, and question id, and choices id



DONE remove zipcode from registration form and user database
DONE add admin class to user database
DONE make default user user instead of admin
DONE change session to also look at value of privvy field and make it so only an admin can edit anything
DONE seperate permissions of endusers and admin (what they can access on the site)

create test taking environment for endusers
session which saves test session per user,
session saves all questions offered to user for this test, and their categories, and the users, incorrect or correct answers
make the randomized questions selected for the users test predetermined? so can save them easier to session.

create test result page for endusers
with email results to self button (emailing to users signup email)

create test making environment for admin

create test selection screen for both admin and endusers, 
with admins having the ability to edit or delete the tests
create the index view for this, a Tests.php controller and a test_model.php file with appropriate filling
check for user admin status for the delete buttons.
add routes in routes.php
make a create test view file.






















*/
?>