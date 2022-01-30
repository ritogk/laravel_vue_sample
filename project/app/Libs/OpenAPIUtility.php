<?php

namespace App\Libs;

class OpenAPIUtility
{

    /**
     * 「連想配列の一覧」を「OpenApiModel形式のcontainer一覧」に変換
     *
     * @param string $model_path モデルクラスのパス
     * @param array $dicstonaries 変換元の一覧
     * @return array
     */
    static function dicstionariesToModelContainers(string $model_path, array $dicstonaries): array
    {
        $converted = [];
        foreach ($dicstonaries as $key => $dictionary) {
            $converted[] = self::dicstionaryToModelContainer($model_path, $dictionary);
        }
        return $converted;
    }

    /**
     * 「連想配列」を「OpenApiModel形式のcontainer」に変換
     *
     * @param string $model_path モデルクラスのパス
     * @param array $items 変換元の一覧
     * @return object
     */
    static function dicstionaryToModelContainer(string $model_path, array $dictionary): object
    {
        $dictionary = self::snakeDictTocamelDict($dictionary);
        $model = new $model_path(
            $dictionary
        );
        return json_decode(json_encode($model));
    }

    /**
     * 「スネークケースの連想配列」を「キャメルケースの連想配列」に変換
     *
     * @param array $array
     * @return array
     */
    static function snakeDictTocamelDict(array $array): array
    {
        $results = [];
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $results[\Illuminate\Support\Str::camel($key)] = self::snakeDictTocamelDict($value);
            } else {
                $results[\Illuminate\Support\Str::camel($key)] = $value;
            }
        }
        return $results;
    }
}
