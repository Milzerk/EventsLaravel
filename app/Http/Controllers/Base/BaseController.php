<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use App\Http\Services\Base\BaseService;

abstract class BaseController extends Controller {

    /**
     * @var BaseService
     */
    protected $baseService;

    /**
     * Constrói o objeto para a manipulação
     * @param BaseService $baseService
     * @return void
     */
    public function __construct(BaseService $baseService) {
        $this->baseService = $baseService;
    }
}