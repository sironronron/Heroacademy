<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    use HasFactory;

    protected $table = 'support_tickets';

    protected $fillable = [
        'user_id', 'subject', 'email', 'type', 'message', 'ip_address', 'priority', 'status', 'remarks', 'support_user_id'  
    ];

    public function sender()
    {
        $this->belongsTo('App\Models\User', 'user_id');
    }

    public function supportStaff()
    {
        $this->belongsTo('App\Models\User', 'support_user_id');
    }
}
