<?php

namespace Controller;

use App\Http\Controllers\Controller;
use Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function setCompanyName(Company $company, Request $request)
    {
        $company->fill($request);
        $company->save();

        return $company;
    }

    public function getCompanyName()
    {
        $company = DB::table('company')->select('name')->get();

        return $company;
    }
}
