<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{

    /**
     * Returns the Company a Platform is associated to.
     * 
     * @return Object
     */
    public function getCompany()
    {
        return Company::where('id', '=', $this->company_id)->first() ?? '';
    }

    /**
     * Returns the Logo Image for a Platform.
     * 
     * @return String
     */
    public function getLogoImg()
    {
        return Logo::where('id', '=', $this->logo_id)->first()->image ?? '';
    }

    
}
