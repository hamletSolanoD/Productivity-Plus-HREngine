<?php
namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class EmployeesFilter extends ApiFilter{
    protected $safeParms = [
        'uuid' => ['eq'],
        'firstname' => ['eq'],
        'paternalsurname' => ['eq'],
        'maternalsurname' => ['eq'],
        'gender' => ['eq'],
        'phone' => ['eq'],
        'email' => ['eq'],
        'birthdate' => ['eq', 'gt', 'lt'],
        'birthstate' => ['eq'],
        'matrimonialregime' => ['eq'],
        'maritalstatus' => ['eq'],
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '≤',
        'gt' => '>',
        'gte' => '≥',
    ];
    
}