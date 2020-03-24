<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $companies = Company::paginate(10);
        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $company = new Company();
        return view('Companies.create', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $company = Company::create($this->validateRequest());
        $this->storeImage($company);
        return redirect('companies');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
        $company->update($this->validateRequest());
        return redirect('companies/'.$company->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
        $company->delete();
        return redirect('companies');
    }

    private function validateRequest(){
        return request()->validate([

            'name' => 'required',
            'email' => 'required',
            'logo' => 'sometimes|file|image|max:5000',
            'website' => '',

        ]);
    }

    private function storeImage($company){
        if(request()->has('logo')){
            $company->update([
                'logo' => request()->logo->store('uploads', 'public'),
            ]);

            $logo = Image::make(public_path('storage/'.$company->logo))->fit(100,100);
            $logo->save();
        }
    }
}
