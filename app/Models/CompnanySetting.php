<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $company_name
 * @property mixed $company_nice_name
 * @property mixed $twitter
 * @property mixed $facebook
 * @property mixed $address
 * @property mixed $phones
 * @property mixed $website
 * @property mixed $email
 * @method static find(int $int)
 * @method static where(string $string, string $string1, int $int)
 */
class CompnanySetting extends Model
{
    protected $table = 'companysetting';
    protected $fillable = [
      'id',
      'company_name',
      'company_nice_name',
      "company_logo",
      "twitter",
      "facebook",
      "address",
      "phones",
      "website",
      "email",
    ];


}
