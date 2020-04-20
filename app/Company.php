<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'company';

    /**
     * Returns all the platforms produced by this company.
     * 
     * @return Object
     */
    public function getPlatformsByCompany()
    {
        return Platform::where('company_id', '=', $this->id)->get() ?? '';
    }
}
