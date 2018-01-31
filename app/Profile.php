<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id';
    protected $keyType = 'integer';
    public $incrementing = false;


    protected $fillable = [
        'id', 'jenis_kelamin', 'pekerjaan', 'alamat', 'telp', 'linkedin', 'angkatan',
    ];

    /**
     * Sembunyikan data yang tidak boleh diakses umum.
     *
     * @var array
     */
    protected $hidden = [
        'alamat', 'no_telp',
    ];

    /**
     * Mendapatkan data User yang berelasi dengan Profile
     */
    public function user()
    {
        return $this->belongsTo('App\User','id','id');
    }
}