<?php

    class ApiModel{

        public static function suma($value1, $value2){
            $resultado = $value1 + $value2;
            return $resultado;
        }

        public static function resta($value1, $value2){
            $resultado = $value1 - $value2;
            return $resultado;
        }
        
        public static function multiplicacion($value1, $value2){
            $resultado = $value1 * $value2;
            return $resultado;
        }

        public static function division($value1, $value2){
            $resultado = $value1 / $value2;
            return $resultado;
        }


    }