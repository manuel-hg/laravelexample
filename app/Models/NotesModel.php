<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotesModel extends Model
{
    use HasFactory;

    protected $table = "notes"; // nombre tabla
    protected $fillable = ["title", "description", "estado"]; // campos que van a ser complementables  (que va a ocupar el modelo)
    protected $guarded = ["created_at", "updated_at"]; // campos que no van a ser complementables (que no va a ocupar el modelo)
    protected $tasts = [ // reglas de tipos
        "example7" => "double"
    ];
    protected $hidden = ["created_at", "updated_at"]; // campos ocultos en el modelo
}
