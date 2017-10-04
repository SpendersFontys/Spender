<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class apiCompanyController extends Controller
{
    public function returnAllCompanies()
    {
    	$companies = Company::all();
		return $companies;
    }

    public function returnCompanyById($id)
    {
    	$company = Company::find($id);
		return $company;
    }
}
