<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class SubItem extends Model
{

    protected static function booted(): void
    {
        static::creating(function (SubItem $subItem) {
            $subItem->title = $subItem->catalogue->title;
        });
    }

    public function catalogue(): BelongsTo
    {
        return $this->belongsTo(Catalogue::class);
    }

    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }
}
