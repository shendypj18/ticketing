<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
  protected $table = 'ticket';
  protected $primaryKey = 'id_tiket';
  protected $fillable = ['id_tiket','nama_tiket','jumlah_tiket','harga_tiket'];
}
