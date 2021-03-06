<?php

namespace AM2Studio\Laravel\SeoMeta;

use Illuminate\Database\Eloquent\Model;

class SeoMeta extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['model_id', 'model_type', 'key', 'value'];

    public function getTitle()
    {
        return '"' . $this->key . '"=' . $this->value . ' for model ' . $this->model_type . '(' . $model_id. ')';
    }

    /*
     * Relations start
     */
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function model()
    {
        return $this->belongsTo($this->model_type, 'model_id');
    }
}
