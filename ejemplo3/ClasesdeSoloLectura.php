<?php // PHP 8.2+
readonly class UserData {
    public string $name;
    public int $age;
    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function withAge(int $age): self {
        return new self($this->name, $age);
    }
}

$user = new UserData("Ivan", 26);
echo "Nombre inicial: " . $user->name . "\n";

$user2 = $user->withAge(27);
echo "Nueva edad en nuevo objeto: " . $user2->age . "\n";

