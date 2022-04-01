<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table ='transaksi';

    protected $fillable = [
        'id_barang',
        'id_pelanggan',
        'totalpesanan',
        'tanggalpesanan',
    ];

    public function barang()
    {
        return $this->belongsTo('App\barang','id_barang');
    }
    public function pelanggan()
    {
        return $this->belongsTo('App\pelanggan','id_pelanggan');
    }
}
