<?php
class BaseModel
{
    protected string $key = 'base';
    protected array $seed = [];

    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION[$this->key])) {
            $_SESSION[$this->key] = $this->seed;
        }
    }

    public function all(): array
    {
        return array_values($_SESSION[$this->key]);
    }

    public function find(int $id): ?array
    {
        return $_SESSION[$this->key][$id] ?? null;
    }

    public function add(array $data): int
    {
        $ids = array_keys($_SESSION[$this->key]);
        $id = $ids ? max($ids) + 1 : 1;
        $data['id'] = $id;
        $_SESSION[$this->key][$id] = $data;
        return $id;
    }

    public function delete(int $id): void
    {
        unset($_SESSION[$this->key][$id]);
    }
}
