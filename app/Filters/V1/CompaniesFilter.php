<?php
namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class CompaniesFilter extends ApiFilter{
    protected $safeParms = [
        'uuid' => ['eq'],
        'rfc' => ['eq'],
        'employerregistry' => ['eq'],
        'businessname' => ['eq'],
        'tradename' => ['eq'],
        'legalrepresentative' => ['eq'],
        'phone' => ['eq'],
        'email' => ['eq'],
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '≤',
        'gt' => '>',
        'gte' => '≥',
    ];
    
}