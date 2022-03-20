<?php

    class FlashMessage {

        private $messageType;
        private $message;

        public  function sweetalert($typeicon, $message, $timer = 2500) {

            return " Swal.fire({
            position: 'top-center',
            icon: '$typeicon',
            title:'$message' ,
            showConfirmButton: false,
            timer: $timer
            });";

        }

        private const standrMessageType = array("success", "warning", "primary", "danger", "info", "light", 'dark');

        /**

        * setMessage function

        *

        * @param [string] $message

        * @param [string] $messageType

        * @return void

        */

        public function setMessage($message, $messageType) {

            $this->message = $message;
            $this->messageType = $messageType;
            $this->messageOption();

        }

        public function messageOption() {

            switch ($this->messageType) {

                case "success":
                        $this->success();
                        break;

                case "warning":
                        $this->warning();
                        break;

                case "question":
                        $this->question();
                        break;

                case "error":
                        $this->error();
                        break;

                case "info":
                        $this->info();
                        break;

            };

        }

        /**

        * Undocumented function

        *

        * @return void

        */

        private function success() {

            $_SESSION['success_message'] = $this->sweetalert('success', $this->message);

        }

        private function warning() {

            $_SESSION['warning_message'] = $this->sweetalert('warning', $this->message);

        }

        private function question() {

            $_SESSION['question_message'] = $this->sweetalert('question', $this->message);

        }

        private function error() {

            $_SESSION['error_message'] = $this->sweetalert('error', $this->message);

        }

        private function info() {

            $_SESSION['info_message'] = $this->sweetalert('info', $this->message);

        }

        public function printMessage() {

            if (isset($_SESSION['success_message'])) {

                echo $_SESSION['success_message'];
                $_SESSION['success_message'] = '';

            }

            if (isset($_SESSION['warning_message'])) {

                echo   $_SESSION['warning_message'];
                $_SESSION['warning_message'] = '';

            }

            if (isset($_SESSION['question_message'])) {

                echo $_SESSION['question_message'];
                $_SESSION['question_message'] = '';

            }

            if (isset($_SESSION['error_message'])) {

                echo $_SESSION['error_message'];
                $_SESSION['error_message'] = '';

            }

            if (isset($_SESSION['info_message'])) {

                echo $_SESSION['info_message'];
                $_SESSION['info_message'] = '';

            }

        }

    }