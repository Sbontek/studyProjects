<?php
/*

DONE add tables for tests, subcategories, question, choices

DONE tests should include test id and user id of creator, also name, subject

DONE subsections should include test id and user id of creator and name, and subcategory id

DONE question should include test id, subcategory id, question type, and question id

DONE choices should include test id, subcategory id, if the correct answer or not, and question id, and choices id



DONE remove zipcode from registration form and user database
DONE add admin class to user database
DONE make default user user instead of admin
DONE change session to also look at value of privvy field and make it so only an admin can edit anything
DONE seperate permissions of endusers and admin (what they can access on the site)
DONE add tests selection screeen to header(made clickable link)
DONE make test selection screen
DONE make test_model
DONE make test_controller

DONE create test taking environment for endusers
DONE create form with question id and answers
DONE post form to next question button

DONE create test making environment for admin

DONE create test selection screen for both admin and endusers, 
DONE with admins having the ability to edit or delete the tests
DONE create the index view for this, a Tests.php controller and a test_model.php file with appropriate filling
DONE check for user admin status for the delete buttons.
DONE add routes in routes.php
DONE make a create test view file.










NEXT UP
$_SESSION['quiz'][$test_id][$question_id] = $answer_id;  (in tests/take view file)
in controller set question_id with answer in session
when on final page, with no questions left, check answers correct, 
check answer_id if is_correct, 
sort result by subsection and print result
create test result page for endusers
with email results to self button (emailing to users signup email)
session which saves test session per user,
session saves all questions offered to user for this test, and their categories, and the users, incorrect or correct answers
make the randomized questions selected for the users test predetermined? so can save them easier to session.




















*/
?>