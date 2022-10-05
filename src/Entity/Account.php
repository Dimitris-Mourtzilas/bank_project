<?php

namespace App\Entity;

use App\Repository\AccountRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AccountRepository::class)]
class Account
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $account_balance = null;

    #[ORM\Column(length: 25)]
    private ?string $date_created = null;

    #[ORM\ManyToOne(inversedBy: 'accounts')]
    private ?User $account_holder = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAccountBalance(): ?float
    {
        return $this->account_balance;
    }

    public function setAccountBalance(float $account_balance): self
    {
        $this->account_balance = $account_balance;

        return $this;
    }

    public function getDateCreated(): ?string
    {
        return $this->date_created;
    }

    public function setDateCreated(string $date_created): self
    {
        $this->date_created = $date_created;

        return $this;
    }

    public function getAccountHolder(): ?User
    {
        return $this->account_holder;
    }

    public function setAccountHolder(?User $account_holder): self
    {
        $this->account_holder = $account_holder;

        return $this;
    }
}
