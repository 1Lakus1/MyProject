<?php

namespace Framework\Core;

class Session
{
    public function __construct()
    {
        $this->setSavePath(DOCUMENT_ROOT . '/App/Sessions');
    }

    public function setName(string $name): void
    {
        if ($this->sessionExists()) {
            session_name($name);
        }
    }

    public function getName(): string
    {
        if ($this->sessionExists()) {
            return session_name();
        }
    }

    public function setId($id): void
    {
        if ($this->sessionExists()) {
            session_id($id);
        }
    }

    public function getId(): string
    {
        if ($this->sessionExists()) {
            return session_id();
        }
    }

    public function cookieExists(): bool
    {
        return (bool)$_COOKIE;
    }

    public function sessionExists(): bool
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            return true;
        } else {
            return false;
        }
    }

    public function start(): bool
    {
        if (session_status() === PHP_SESSION_NONE) {
            return session_start();
        } else {
            return false;
        }
    }

    public function destroy(): void
    {
        session_start();
        session_destroy();
    }

    public function setSavePath(string $savePath): void
    {
        session_save_path($savePath);
    }

    public function set(string $key, $value): void
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            $_SESSION[$key] = $value;
        }
    }

    public function get(string $key)
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            return $_SESSION[$key];
        }
    }

    public function contains(string $key): bool
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            return isset($_SESSION[$key]);
        } else {
            return false;
        }
    }

    public function delete(string $key): void
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            unset($_SESSION[$key]);
        }
    }
}
