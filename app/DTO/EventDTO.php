<?php

namespace App\DTO;

readonly class EventDTO
{
    public function __construct(
        public string $id,
        public string $name,
        public string $start,
        public string $end,
        public string $created_at
    ) {}
}
