<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace common\helpers;

/**
 * Description of Tools
 *
 * @author longnt
 */
class Tools {

    public static function convertTitle($text) {
        $text = trim(strip_tags($text));
        $text = htmlspecialchars($text);

        $CLEAN_URL_REGEX = '*([\s$+,/:=\?@"\'<>%{}|\\^~[\]`\r\n\t\x00-\x1f\x7f]|(?(?<!&)#|#(?![0-9]+;))|&(?!#[0-9]+;)|(?<!&#\d|&#\d{2}|&#\d{3}|&#\d{4}|&#\d{5});)*s';
        $text = preg_replace($CLEAN_URL_REGEX, '-', strip_tags($text));
        $text = trim(preg_replace('#-+#', '-', $text), '-');

        $code_entities_match = array('\\', '&quot;', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '+', '{', '}', '|', ':', '"', '<', '>', '?', '[', ']', '', ';', "'", ',', '.', '_', '/', '*', '+', '~', '`', '=', ' ', '---', '--', '--');
        $code_entities_replace = array('', '', '-', '-', '', '', '', '-', '-', '', '', '', '', '', '', '', '-', '', '', '', '', '', '', '', '', '', '-', '', '-', '-', '', '', '', '', '', '-', '-', '-', '-');
        $text = str_replace($code_entities_match, $code_entities_replace, $text);

        $chars = array("a", "A", "e", "E", "o", "O", "u", "U", "i", "I", "d", "D", "y", "Y");
        $uni [0] = array("á", "à", "ạ", "ả", "ã", "â", "ấ", "ầ", "ậ", "ẩ", "ẫ", "ă", "ắ", "ằ", "ặ", "ẳ", "� �", "ả", "á", "ặ");
        $uni [1] = array("Á", "À", "Ạ", "Ả", "Ã", "Â", "Ấ", "Ầ", "Ậ", "Ẩ", "Ẫ", "Ă", "Ắ", "Ằ", "Ặ", "Ẳ", "� �");
        $uni [2] = array("é", "è", "ẹ", "ẻ", "ẽ", "ê", "ế", "ề", "ệ", "ể", "ễ", "ệ");
        $uni [3] = array("É", "È", "Ẹ", "Ẻ", "Ẽ", "Ê", "Ế", "Ề", "Ệ", "Ể", "Ễ");
        $uni [4] = array("ó", "ò", "ọ", "ỏ", "õ", "ô", "ố", "ồ", "ộ", "ổ", "ỗ", "ơ", "ớ", "ờ", "ợ", "ở", "� �");
        $uni [5] = array("Ó", "Ò", "Ọ", "Ỏ", "Õ", "Ô", "Ố", "Ồ", "Ộ", "Ổ", "Ỗ", "Ơ", "Ớ", "Ờ", "Ợ", "Ở", "� �");
        $uni [6] = array("ú", "ù", "ụ", "ủ", "ũ", "ư", "ứ", "ừ", "ự", "ử", "ữ", "ù");
        $uni [7] = array("Ú", "Ù", "Ụ", "Ủ", "Ũ", "Ư", "Ứ", "Ừ", "Ự", "Ử", "Ữ");
        $uni [8] = array("í", "ì", "ị", "ỉ", "ĩ");
        $uni [9] = array("Í", "Ì", "Ị", "Ỉ", "Ĩ");
        $uni [10] = array("đ");
        $uni [11] = array("Đ");
        $uni [12] = array("ý", "ỳ", "ỵ", "ỷ", "ỹ");
        $uni [13] = array("Ý", "Ỳ", "Ỵ", "Ỷ", "Ỹ");

        for ($i = 0; $i <= 13; $i++) {
            $text = str_replace($uni[$i], $chars[$i], $text);
        }

        $characters = '0123456789abcdefghijklmnopqrstuvwxyz-';
        $textReturn = '';
        for ($i = 0; $i <= strlen($text); $i++) {
            if (isset($text[$i])) {
                if (preg_match("/{$text[$i]}/i", $characters)) {
                    $textReturn .= $text[$i];
                }
            }
        }

        $textReturn = strtolower($textReturn);
        return $textReturn;
    }

    public static function encodeId($id) {
        return \Yii::$app->hahsids->encode($id);
    }

    public static function decodeId($str) {
        $decode = \Yii::$app->hahsids->decode($str);
        if ($decode)
            return $decode[0];
        else
            return 0;
    }

    public static function convertTime($time) {
        $str = "";
        $diff = time() - $time;
        if ($diff < 60) {
            $str = "Mới đây";
        } elseif ($diff >= 60 && $diff <= 3600) {
            $str = floor($diff / 60) . " phút trước";
        } elseif (date("Y-m-d") == date("Y-m-d", $time)) {
            $str = "Hôm nay lúc " . date("H:i", $time);
        } elseif (date("Y-m-d") == date("Y-m-d", $time + (24 * 3600))) {
            $str = "Hôm qua lúc " . date("H:i", $time);
        } elseif ((date("Y-m-d", time() - (24 * 3600)) > date("Y-m-d", $time)) && (date("Y-m-d", time() - 7 * (24 * 3600)) < date("Y-m-d", $time))) {
            $w = date("w", $time);
            $th = '';
            switch ($w) {
                case 1:
                $th = 'T2';
                break;
                case 2:
                $th = 'T3';
                break;
                case 3:
                $th = 'T4';
                break;
                case 4:
                $th = 'T5';
                break;
                case 5:
                $th = 'T6';
                break;
                case 6:
                $th = 'T7';
                break;
                default:
                $th = 'CN';
                break;
            }
            $str = $th . " lúc " . date("H:i", $time);
        } else {
            $str = date("d-m-Y", $time);
        }
        return $str;
    }

    public static function monney($string) {
        $string = (int) $string;
        $cash = preg_replace("/\./", "", $string);
        $thecash = (int) $cash;
        if (strlen($cash) > 3) {
            $thecash = strrev($cash);
            $rev = '';
            for ($i = 0; $i < strlen($thecash); $i++) {
                $rev .= $thecash[$i];
                if (($i > 0) && (($i + 1) % 3 == 0)) {
                    $rev .= '.';
                }
            }
            $thecash = strrev($rev);
            if (stripos($thecash, '.') == 0) {
                $thecash = substr($thecash, 1);
            }
        }
        return $thecash;
    }

    // public static function cutText($str, $length, $ext = "  . . .") {
    //     $string = trim($str);
    //     if (!$string) {
    //         return '';
    //     }
    //     if ((mb_strlen($string) < $length) || ($length <= 0)) {
    //         return $string;
    //     }
    //     $s2 = mb_substr($string, 0, $length);
    //     return trim($s2) . $ext;
    // }

    public static function cutText($str, $lengthmin, $lengthmax, $ext = "  . . ." ){
        $string = trim($str);
        if (mb_strlen($string) > $lengthmin) {
            for ($i = $lengthmin + 1 ; $i <= $lengthmax ; $i++) { 
                $first = ord(mb_substr($string, $i, -1));
                if($first == 32) {
                    $text = mb_substr($string, 0, $i);
                    $string = $text . $ext;
                    return $string;
                }
            }
            return $string;     
        }
        return $string;
    }

}
