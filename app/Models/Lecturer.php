<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Lecturer extends Model
{
    use HasFactory;
    // $fillable wajib diisi dengan atribut tabelnya
    protected $fillable = ['nip', 'nama', 'keilmuan'];
}
