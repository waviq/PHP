<?php 
$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('sign up for a Larabook account');

$I->amOnPage('/');
$I->click('Sign Up');
$I->seeCurrentUrlEquals('/register');

$I->fillField('Username:', 'Waviq');
$I->fillField('Email:', 'waviq.subkhi@gmail.com');
$I->fillField('Password:', 'Waviq');
$I->fillField('Password Confirmation:', 'Waviq');
$I->click('Sign Up');

$I->seeCurrentUrlEquals('');
$I->see('Welcome to Larabook');
$I->seeRecord('users',[
    'username'=>'waviq',
    'email'=>'waviq.subkhi@gmail.com'
]);

