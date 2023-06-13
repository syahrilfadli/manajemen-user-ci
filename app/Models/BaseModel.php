<?php

namespace App\Models;

use CodeIgniter\Model;
use Ramsey\Uuid\Uuid;

class BaseModel extends Model
{
    protected $uuids = true;

    protected function generateUUID(): string
    {
        return Uuid::uuid4()->toString();
    }
}
