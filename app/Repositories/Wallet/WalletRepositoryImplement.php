<?php

namespace App\Repositories\Wallet;

use App\Models\Wallet;
use \App\Repositories\Eloquent;

class WalletRepositoryImplement extends Eloquent implements WalletRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(Wallet $model)
    {
        $this->model = $model;
    }

    public function getByUserId($id)
    {
        return $this->model->where("user_id", $id)->first();
    }

}
