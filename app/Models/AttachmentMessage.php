<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachmentMessage extends Model
{
    use HasFactory;

    protected $table = 'attachment_message';

    protected $fillable = [
        'ticket_message',
        'file_path',
        'file_type'
    ];

    public function message()
    {
        return $this->belongsTo(TicketMessage::class, 'ticket_message');
    }
}
