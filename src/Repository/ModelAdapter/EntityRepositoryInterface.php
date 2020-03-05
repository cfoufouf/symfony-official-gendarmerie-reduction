<?php

declare(strict_types = 1);

namespace App\Repository\ModelAdapter;

use App\Entity\EntityInterface;
use Doctrine\Persistence\ObjectRepository;

/**
 * This interface signals that all repositories needs a save method according to the business logic.
 * @author  Gaëtan Rolé-Dubruille <gaetan.role@gmail.com>
 */
interface EntityRepositoryInterface
{
    public function getRepository(string $className): ObjectRepository;
    public function save(EntityInterface $entity): EntityInterface;
    public function update(EntityInterface $entity): EntityInterface;
    public function delete(EntityInterface $entity): void;
}
