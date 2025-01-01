<?php

namespace App\DTO;

readonly class PlayerDTO
{
    public function __construct(
        public string $id,
        public string $first_name,
        public string $last_name,
        public string $gender,
        public string $country,
        public string $membership,
        public string $last_active,
        public string $created_at
    ) {}
}
