<?php

namespace App\Repositories\Transaction;

use App\Models\Transaction;
use App\Repositories\Eloquent;
use function Symfony\Component\Translation\t;

class TransactionRepositoryImplement extends Eloquent implements TransactionRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(Transaction $model)
    {
        $this->model = $model;
    }

    /**
     * get transaction by user id
     * @param $id
     * @return mixed
     */
    public function getByUserId($id)
    {
        return $this->model->where("user_id", $id)->get();
    }

    public function allTransactionDateNewly()
    {
        return $this->model->orderBy("created_at", "desc")->get();
    }
}
