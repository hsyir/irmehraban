<?php
/**
 * Created by PhpStorm.
 * User: 5729906803
 * Date: 2/22/2020
 * Time: 1:40 PM
 */

namespace App\Classes\FakerProviders;

class PersianFaker extends \Faker\Provider\Text
{
    /**s
     * generates text string in arabic
     *
     * @example 'از تاریخ‌الشعرا را بکوبند روی نبش دیوار کوچه‌شان. تابلوی مدرسه.'
     * @param  integer                   $maxNbChars
     * @param  integer                   $indexSize
     * @return string
     * @throws \InvalidArgumentException
     */
    public function realText($maxNbChars = 200, $indexSize = 2)
    {
        if ($maxNbChars < 10) {
            throw new \InvalidArgumentException('maxNbChars must be at least 10');
        }

        if ($indexSize < 1) {
            throw new \InvalidArgumentException('indexSize must be at least 1');
        }

        if ($indexSize > 5) {
            throw new \InvalidArgumentException('indexSize must be at most 5');
        }

        $words = $this->getConsecutiveWords($indexSize);
        $result = array();
        $resultLength = 0;
        // take a random starting point
        $next = static::randomKey($words);
        while ($resultLength < $maxNbChars && isset($words[$next])) {
            // fetch a random word to append
            $word = static::randomElement($words[$next]);

            // calculate next index
            $currentWords = explode(' ', $next);

            $currentWords[] = $word;
            array_shift($currentWords);
            $next = implode(' ', $currentWords);

            if ($resultLength == 0 && !preg_match('/^[\x{0600}-\x{06FF}]/u', $word)) {
                continue;
            }
            // append the element
            $result[] = $word;
            $resultLength += strlen($word) + 1;
        }

        // remove the element that caused the text to overflow
        array_pop($result);

        // build result
        $result = implode(' ', $result);

        return $result.'.';
    }






    /**
     * License: Creative Commons Attribution-ShareAlike License
     *
     * Title: مدیر مدرسه
     * Author: جلال آل‌احمد
     * Language: Persian
     *
     * @see http://fa.wikisource.org/wiki/%D9%85%D8%AF%DB%8C%D8%B1_%D9%85%D8%AF%D8%B1%D8%B3%D9%87
     * @var string
     */

    protected static $baseText = <<<'EOT'

کوچک قهرمان من

فرزند ناز من

وقتی با آب و تاب

از درس و مشق برایم می‌گویی

غرق تو می‌شوم

قربان نگاهت می‌شوم

كوچک رويایی من

دنيا اگر خودش را بكشد نمي‌تواند

به عشق من نسبت به تو شك كند

تمام بودنت را حس می كنم

فرزندم
آرزویم این است :
نتراود اشک در چشم تو هرگز مگر از شوق زیاد
نرود لبخند از عمق نگاهت هرگز
و به اندازه هر روز تو عاشق باشی
عاشقِ آنکه تو را می خواهد و به لبخند تو از خویش رها می گردد
و تو را دوست بدارد به همان اندازه

اگر باران بودم آنقدر می باریدم تا غبار غم را از دلت پاک کنم

اگر اشک بودم مثل باران بهاری به پایت می گریستم

اگر گل بودم شاخه ای از وجودم را تقدیم وجود عزیزت می کردم

اگر عشق بودم آهنگ دوست داشتن را برایت می نواختم

ولی افسوس که نه بارانم نه اشک نه گل و نه عشق

اما هر چه هستم دوستت دارم فرزندم
نفس من ناز دلم

دختر من/ پسرک من

نفس من بـه نفس شـما بنداست

یک روز نبودنتان زمین و زمان را بـه هم می ریزد


به خاطر تو هم شده همیشه آبی می مانم

به خاطر تو هم شده تمام روزهای بعد از این مهربانتر خواهم شد

دلم می خواهد زودتر دستهایت را بگیرم

زودتر روی دستهایم تکانت دهم بخوابی

زودتر برایت با زبان کودکانه قصه بگویم


و من حرص هایم را سر بیخیالی خالی کنم

EOT;


    public function foodTitle(){
        $foods=explode(PHP_EOL,self::$foods);
        $count=count($foods);
        return $foods[random_int(0,$count-1)];
    }


    protected static $foods="آش
اشکنه
باقلاپلو
بریان (بریون)
ترشی
حلوا
خاگینه
خورش قیمه
سمبوسه
شربت
شله زرد
آبگوشت
شیربرنج
شیرین پلو
عدس پلو
هلیم
فرنی
عدسی
کاچی
کباب
کله پاچه
کلوچه
کوفته
آلبالوپلو
دلمه
دمپختک
رشته پلو
کوکو
زرشک پلو
سبزی پلو
کتلت
کلم پلو
کله جوش
کمه‌جوش
لوبیا پلو
میرزاقاسمی
نخودپلو
یتیمچه
ترخینه
ته چین
کباب چنجه
فسنجان
شیشلیک
قورمه سبزی
تخم مرغ گوجه
سوسیس بندری
پلو گوجه
کشک بادمجان
هلیم بادمجان";



}
