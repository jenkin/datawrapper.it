<?php

/*
 * template for the Datawrapper activation email
 */

$activation_mail = <<<MAIL

Ciao $name,

grazie per esserti registrato/a su Datawrapper ($domain)!

Ora basta un click sul link seguente per attivare il tuo nuovo account.

$activationLink

A presto!
MAIL;
