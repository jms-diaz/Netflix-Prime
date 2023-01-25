<?php
class FormSanitizer
{

    public static function santizeFormString($inputText)
    {
        $inputText = strip_tags($inputText);
        $inputText = trim($inputText);
        $inputText = strtolower($inputText);
        $inputText = ucfirst($inputText);
        return $inputText;
    }
    public static function santizeFormUsername($inputText)
    {
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText);
        return $inputText;
    }
    public static function sanitizeFormEmail($inputText)
    {
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText);
        return $inputText;
    }

    public static function santizeFormPassword($inputText)
    {
        $inputText = strip_tags($inputText);
        return $inputText;
    }
}
?>