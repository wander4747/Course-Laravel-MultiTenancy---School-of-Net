<?php


namespace App\Tenant;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TenantScope implements Scope
{

    public function apply(Builder $builder, Model $model)
    {
        $company = \Tenant::getTenant();
        if ($company) {
            //$companyId = \Auth::user()->company_id; //efeito colateral
            $builder->where('company_id', $company->id);
        }
    }
}
