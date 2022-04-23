<?php

namespace App\View\Components\notification;

use Illuminate\View\Component;

class TopRightAlert extends Component {
    public $sessionName;

    public function __construct($sessionName) {
        $this->sessionName = $sessionName;
    }

    public function forgotSession() {
        session()->forget($this->sessionName);
    }

    public function render() {
        return view('components.notification.top-right-alert');
    }
}
