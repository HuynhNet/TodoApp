<?php

namespace App\View\Components\Notification;

use Illuminate\View\Component;

class TopEndAlert extends Component {
    public $sessionName;

    public function __construct($sessionName) {
        $this->sessionName = $sessionName;
    }

    public function forgotSession($sessionName) {
        session()->forget($sessionName);
    }

    public function render() {
        return view('components.notification.top-end-alert');
    }
}
