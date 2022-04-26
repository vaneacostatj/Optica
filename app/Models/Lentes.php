<?php 
namespace App\Models;

use CodeIgniter\Model;

class Lentes extends Model{
    protected $table      = 'lentes';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['imagen','descripcion','valor'];
}