<?php
namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ClientsFilter extends ApiFilter{
    protected $safeParms = [
        'uuid' => ['eq'],
        'type' => ['eq'],
        'rfc' => ['eq'],
        'firstname' => ['eq'],
        'paternalsurname' => ['eq'],
        'maternalsurname' => ['eq'],
        'gender' => ['eq'],
        'birthdate' => ['eq'],
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