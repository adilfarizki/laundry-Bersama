<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';

    protected $guard = [];

    // protected $fillable = ['id_outlet','kode_invoice','id_member',
    // 'tgl','batas_waktu','tanggal_bayar','biaya_tambahan','diskon',
    // 'pajak','baru','dibayar','id_user'];

    public function member()
    {
        return $this->hasOne(Member::class,'id_member','id');
    }
}
