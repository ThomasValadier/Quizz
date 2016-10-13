<?php

class mail
{

    private $destinataire;
    private $sujet;
    private $entete;
    private $message;

    public function __construct($destinataire = null, $sujet = null, $message = null)
    {
        $this->destinataire = $destinataire;
        $this->sujet = $sujet;
        $this->message = $message;
        $this->entete = 'MIME-Version: 1.0' . "\r\n";
        $this->entete .= 'From: thomas.valadier.2@gmail.com' . "\n";
        $this->entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $this->entete .= 'Content-Transfer-Encoding: 8bit';
    }

    public function getDestinataire()
    {
        return $this->destinataire;
    }

    public function setDestinataire($destinataire)
    {
        $this->destinataire = $destinataire;
    }

    public function getEntete()
    {
        return $this->entete;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getSujet()
    {
        return $this->sujet;
    }

    public function setEntete($entete)
    {
        $this->entete = $entete;
    }


    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function setDesinataire($desinataire)
    {
        $this->destinataire = $desinataire;
    }


    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
    }

    public function send()
    {
        mail($this->destinataire, $this->sujet, $this->message, $this->entete);
    }

    public function mailIns($cle, $id)
    {
        $this->setMessage('<!DOCTYPE html>
<html>
<header>
    <meta charset="utf-8">
   </header>
<body>
<p>Bienvenue sur le site de toto,</p>
</br>
</br>
<p>Pour confirmer la création de votre compte veuillez cliquer sur le lien ci dessous.</p>
</br>
</br>

<a href="http://localhost/quizz/controllers/activation.php?user=' . $id . '&cle=' . $cle . '">Cliquez ici pour activer votre compte!</a><br>


<p>--------------------------------------------------------------------</p>
<p>Ceci est un mail automatique, Merci de ne pas y répondre.</p>

</body>
</html>');
        $this->setSujet('Confirmation d\'inscription') ;
        $this->send();

    }

    public function mailForget($cle)
    {
        $this->message =
            '<!DOCTYPE html>
<html>
<header>
    <meta charset="utf-8">
   </header>
<body>
<p>Bonjour,</p>
</br>
</br>
<p>Pour changer votre mot de passe, veuillez cliquer sur le lien suivant.</p>
</br>
</br>

<a href="http://localhost/quizz/modif.php?cle=' . $cle . '">Cliquez ici pour modifier votre mot de passe</a><br>


<p>--------------------------------------------------------------------</p>
<p>Ceci est un mail automatique, Merci de ne pas y répondre.</p>

</body>
</html>';

        $this->sujet = 'Oublie de mot de passe';
        $this->send();
        echo '<script>alert("Un mail de réinitialisation vous a été envoyé.")</script>';
    }


}