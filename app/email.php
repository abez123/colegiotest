<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class email extends Model {

    /**
     * Fillable fields for a new email
     * @Var array
     */
    protected $fillable = [
        'id_usuario',
        'titulo',
        'descripcion',
        'tipomemo',
        'filename',
        'mime',
        'original_filename',
        'nombre',

    ];
    /**
     * @param array $attributes
     * @return static
     * open new email
     */
    Public static function open(array $attributes)
    {
        return new static($attributes);

    }

    /**
     * @param string
     * set email to template
     */
    Public function useTemplate($template)

    {
        $this->template=$template;

        return $this;
    }

}
