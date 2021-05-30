<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ApiDetails extends Enum
{
//    const api_key = "67135648d5e4439aabc488dafca92025";
    const api_key = "97c28eb4eca74e18a05fe4639d1315c6";
    const api_url = "https://newsapi.org/v2/";
    const api_country = "in";
    const top_headlines = "top-headlines";
    const search_everything = "everything";
    const search_headlines = 2;
}
