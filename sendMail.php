<?php

class sendMail
{
	public $mail_exp;
	public $sujet;
	public $message;
	public $email_good = '/^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/'; 

	public function __construct()
	{
		$this->mail_exp = htmlspecialchars($_POST['de']);
		$this->sujet = htmlspecialchars($_POST['sujet']);
		$this->message = htmlspecialchars($_POST['message']);
	}

	public function verifmail()
	{
		if(preg_match($this->email_good, $this->mail_exp) == 0)
		{
			return false;
		}
		if(preg_match($this->email_good, $this->mail_exp) == 1)
		{
			return true;
		}
	}



	public function returnResult()
	{
		$mail = $this->verifmail();
		$header = 'From : ' . $this->mail_exp;

		if($this->mail_exp == "" || $this->sujet == "" || $this->message == "" )
		{
			echo "champ not good";
		}
		else if($mail == false)
		{
			echo "mail not good";
		}
		else 
		{
			mail('jerome.cyrus@epitech.eu', $this->sujet, $this->message, $header);
			echo "good";
		}
	}
}

$mail = new sendMail();
$mail->returnResult()
?>