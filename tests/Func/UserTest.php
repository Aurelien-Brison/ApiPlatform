<?php 

namespace App\tests\Func;


use App\tests\Func\AbstractEndPoint;
use Symfony\Component\HttpFoundation\Request;

class UserTest extends AbstractEndPoint
{
    public function testGetUsers():void 
    {
       dd($this->getResponseFromRequest(Request::METHOD_GET, '/api/users'));
    }
}