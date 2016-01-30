<?php

/* 
 * Author: Wouter Brookhuis
 * Description: The main file for my portfolio system, based on the portfolio project
 * 
 * 
 * About user data:
 * User data is stored in the session variable 'user' --> $_SESSION['user'];
 * 
 * About pages:
 * All pages get shown in the menu, UNLESS their name field is NULL
 * 
 * 
 * DATABASE TABLES OVERVIEW:
 * 
 * PAGE(
 * id INT NOT NULL, 
 * parentId INT NULL, 
 * name VARCHAR(30) NULL, 
 * content TEXT NULL,
 * CONSTRAINT PK_PAGE PRIMARY KEY (id),
 * CONSTRAINT FK_PAGE_PARENT FOREIGN KEY (parentId) REFERENCES PAGE(id)
 * );
 * 
 * 
 * USER(
 * id INT NOT NULL,
 * firstname VARCHAR(40) NULL, 
 * lastname VARCHAR(40) NULL,
 * username VARCHAR(40) NOT NULL,
 * email VARCHAR(50) NOT NULL,
 * password VARCHAR(255) NOT NULL,
 * type ENUM('admin') NOT NULL DEFAULT 'admin',
 * CONSTRAINT PK_USER PRIMARY KEY (id),
 * );
 * 
 * TODO: More user types
 * TODO: Tables for images, videos, etc.
 * 
 */

//Start that session baby!
//Note: I don't recall writing the above comment
session_start();

/*
 * Constants
 */
define("PF_HOST", "127.0.0.1");
define("PF_USER", "portfolio");
define("PF_PASS", "systeem");

define("PF_DB_NAME", "portfolio-systeem");

/*
 * Functions
 */

/*
 * Connect to the database
 */
function pf_connect()
{
    return mysqli_connect(PF_HOST, PF_USER, PF_PASS, PF_DB_NAME);
}

/*
 * Check if the currently logged in user has a type provided by the arguments of this function
 * Takes a series of strings as arguments
 */
function pf_user_is_of_type()
{
    if(func_num_args() > 0 && isset($_SESSION['user']))
    {
        return in_array($_SESSION['user']['type'], func_get_args());
    }
    return false;
}

/*
 * Checks if a user is logged in in the current session. Should not be a function, but whatever
 */
function pf_logged_in()
{
    return isset($_SESSION['user']);
}

/*
 * Adds a new user account, provided it is possible to do so
 */
function pf_add_user($username, $email, $password, $firstname, $lastname, $type)
{
    //TODO: Everything
    return false;
}

/*
 * Converts an array of old portfolio user data into our new format
 */
function pf_convert_user_data($oldUserData)
{
    $newUserData = [
        'id' => $oldUserData['gebruikersId'],
        'username' => $oldUserData['gebruikersnaam'],
        'email' => $oldUserData['eMail'],
        'password' => $oldUserData['wachtwoord'],
        'firstname' => $oldUserData['voornaam'],
        'lastname' => $oldUserData['achternaam'],
        'type' => $oldUserData['rol']];
    //Make sure we get a valid user type returned
    //TODO: Update once we have all user types implemented
    switch($newUserData['type'])
    {
        case 'admin': break;
        default: $newUserData['type'] = 'admin'; break;
    }
    return $newUserData;
}