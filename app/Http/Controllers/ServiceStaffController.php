<?php

namespace App\Http\Controllers;

use App\Repositories\ServiceStaffRepository;
use Illuminate\Http\Request;

class ServiceStaffController extends Controller
{
    private $repository;

    public function __construct(ServiceStaffRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Add new service, which employee can give
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->repository->create($request->all());
        } catch(\Exception $ex) {
            return response($ex);
        }

        return response('OK', 200);
    }
}
