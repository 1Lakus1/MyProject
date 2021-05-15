<?php

namespace Framework\Core;

class Session
{
    public function setName(string $name): void
    {
        session_name($name);
    }

    public function getName(): string
    {
        return session_name();
    }

    public function setId($id): void
    {
        session_id($id);
    }

    public function getId(): string
    {
        return session_id();
    }

    public function cookieExists(): bool
    {
        return (bool)$_COOKIE;
    }

    public function sessionExists(): bool
    {
        return isset($_SESSION);
    }

    public function start(): bool
    {
        if (session_status() === PHP_SESSION_NONE) {
            return session_start();
        } else {
            return 0;
        }
    }

    public function destroy(): void
    {
        session_destroy();
    }

    public function setSavePath(string $savePath): void
    {
        session_save_path($savePath);
    }

    public function set(string $key, $value): void
    {
        $_SESSION[$key] = $value;
    }

    public function get(string $key)
    {
        return $_SESSION[$key];
    }

    public function contains(string $key): bool
    {
        return isset($_SESSION[$key]);
    }

    public function delete(string $key): void
    {
        unset($_SESSION[$key]);
    }
}
