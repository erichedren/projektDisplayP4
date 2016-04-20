<?php
    namespace projektDisplay\util;

    /**
     * Some utility methods.
     */
    final class Util {

        const SYMBOL_PREFIX = "projektDisplay_";
        /**
         * This function should be called first in any PHP page receiving a HTTP request.
         */
        public static function initRequest() {
            spl_autoload_register(function ($class) {
                require_once 'classes/' . \str_replace('\\', '/', $class) . '.php';
            });

            session_start();
            self::defineConstants();
        }

        private static function defineConstants() {
            self::defineConstant('MSG_KEY', 'msg');
            self::defineConstant('NICK_KEY', 'nickName');
            self::defineConstant('TIMESTAMP_KEY', 'timestamp');
            self::defineConstant('VIEWS', 'resources/views/');
            self::defineConstant('FRAGMENTS', 'resources/fragments/');
        }

        private static function defineConstant($param, $value) {
            define(self::SYMBOL_PREFIX . $param, $value);
        }

    }
?>


