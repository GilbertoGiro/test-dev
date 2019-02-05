<?php

namespace App\Utilities;

use Illuminate\Database\Eloquent\Model;

class Str
{
    /**
     * Method to convert camelcase to underscore
     *
     * @param $input
     * @return string
     */
    public static function from_camel_case($input)
    {
        preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $input, $matches);
        $ret = $matches[0];
        foreach ($ret as &$match) {
            $match = $match == strtoupper($match) ? strtolower($match) : lcfirst($match);
        }
        return implode('_', $ret);
    }

    /**
     * Generate Alias from String (Unique name)
     *
     * @param string $str
     * @param Model $model
     * @return string
     */
    public static function generateAlias(string $str, Model $model)
    {
        // Replacing Special Chars
        $unwanted_array = array('Š' => 's', 'š' => 's', 'Ž' => 'z', 'ž' => 'z', 'À' => 'a', 'Á' => 'a', 'Â' => 'a', 'Ã' => 'a', 'Ä' => 'a', 'Å' => 'a', 'Æ' => 'a', 'Ç' => 'c', 'È' => 'e', 'É' => 'e',
            'Ê' => 'e', 'Ë' => 'e', 'Ì' => 'i', 'Í' => 'i', 'Î' => 'i', 'Ï' => 'i', 'Ñ' => 'N', 'Ò' => 'o', 'Ó' => 'o', 'Ô' => 'o', 'Õ' => 'o', 'Ö' => 'o', 'Ø' => 'o', 'Ù' => 'u',
            'Ú' => 'u', 'Û' => 'u', 'Ü' => 'u', 'Ý' => 'y', 'Þ' => 'b', 'ß' => 'Ss', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c',
            'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
            'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'þ' => 'b', 'ÿ' => 'y');
        $result = strtolower(strtr($str, $unwanted_array));
        $result = str_replace(' ', '-', $result);

        $i = 1;
        $condition = false;
        while (!$condition) {
            $aux = $result . '-' . $i;
            $exists = $model::where('alias', $aux)->first();
            if (!$exists) {
                $condition = true;
                continue;
            }
            $i++;
        }
        return $aux;
    }
}