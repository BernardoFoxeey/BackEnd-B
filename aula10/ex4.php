<?php
interface MeioDeNotificacao {
    public function enviar();
}

class Email implements MeioDeNotificacao {
    public function enviar() {
        return "Enviando email...\n";
    }
}

class Sms implements MeioDeNotificacao {
    public function enviar() {
        return "Enviando SMS...\n";
    }
}

function notificar(MeioDeNotificacao $meio) {
    echo $meio->enviar();
}
