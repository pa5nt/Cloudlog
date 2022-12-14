<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('Non è permesso l\'accesso diretto allo script');

$lang['email_must_be_array'] = 'Il metodo di convalida dell\'e-mail deve essere passato a un array.';
$lang['email_invalid_address'] = 'Indirizzo email non valido: %s';
$lang['email_attachment_missing'] = 'Impossibile individuare il seguente allegato e-mail: %s';
$lang['email_attachment_unreadable'] = 'Impossibile aprire questo allegato: %s';
$lang['email_no_from'] = 'Impossibile inviare la posta senza l\'intestazione "Da".';
$lang['email_no_recipients'] = 'Devi includere i destinatari: A, Cc, o Ccn';
$lang['email_send_failure_phpmail'] = 'Impossibile inviare e-mail utilizzando PHP mail(). Il tuo server potrebbe non essere configurato per inviare posta utilizzando questo metodo.';
$lang['email_send_failure_sendmail'] = 'Impossibile inviare e-mail utilizzando PHP Sendmail. Il tuo server potrebbe non essere configurato per inviare posta utilizzando questo metodo.';
$lang['email_send_failure_smtp'] = 'Impossibile inviare e-mail utilizzando PHP SMTP. Il tuo server potrebbe non essere configurato per inviare posta utilizzando questo metodo.';
$lang['email_sent'] = 'Il tuo messaggio è stato inviato correttamente utilizzando il seguente protocollo: %s';
$lang['email_no_socket'] = 'Impossibile aprire un socket su Sendmail. Si prega di controllare le impostazioni.';
$lang['email_no_hostname'] = 'Non hai specificato un nome host SMTP.';
$lang['email_smtp_error'] = 'Si è verificato il seguente errore SMTP: %s';
$lang['email_no_smtp_unpw'] = 'Errore: è necessario assegnare un nome utente e una password SMTP.';
$lang['email_failed_smtp_login'] = 'Impossibile inviare il comando AUTH LOGIN. Errore: %s';
$lang['email_smtp_auth_un'] = 'Impossibile autenticare il nome utente. Errore: %s';
$lang['email_smtp_auth_pw'] = 'Impossibile autenticare la password. Errore: %s';
$lang['email_smtp_data_failure'] = 'Impossibile inviare i dati: %s';
$lang['email_exit_status'] = 'Codice stato uscita: %s';
