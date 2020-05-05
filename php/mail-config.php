<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param string $mailgunDomain your mailgun private api key.
 * @param string $mailgunApiKey your mailgun domain relay.
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

//mailgun API Key authorization

$mailgunApiKey = "pubkey-2d97ea6954e8805c1e726b80606112a4";
$mailgunDomain = "natwebdesigning.com";


// your Google reCAPTCHA keys here
// your Google reCAPTCHA keys here
$siteKey = '6LcdBewUAAAAAOv34FT5vcib0TSdj6t6sFc4Rw_I';
$secret = '6LcdBewUAAAAAJ8SzP3vMZRZa-yzAYI3rybCF-cI';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = [ "nohemi5270@gmail.com" => "Nohemi Tarango"];
$MAIL_RECIPIENT = ["nohemi5270@gmail.com"];
