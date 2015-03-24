<?php 
$I = new FunctionalTester($scenario);
$I->am('a Larabook member');
$I->wantTo('login to my Larabook account');
$I->wantTo('login to my Larabook account');

$I->haveAnAccount(['email=>foo@example.com','password'=>'foo']);
$I->amOnPage('/login');
$I->fillField('email', 'foo@example.com');
$I->fillField('password', 'foo');
$I->click('Sign In');

$I->signIn();

$I->seeInCurrentUrl('/statuses');
$I->see('welcome back !');
