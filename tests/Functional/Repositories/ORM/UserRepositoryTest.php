<?php
declare(strict_types=1);

namespace Tests\App\Functional\Repositories\ORM;

use App\Database\Entities\User;
use App\Repositories\Doctrine\ORM\UserRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Tests\App\Tools\TestCases\AbstractDatabaseTestCase;

/**
 * @covers \App\Repositories\Doctrine\ORM\UserRepository
 */
final class UserRepositoryTest extends AbstractDatabaseTestCase
{
    /**
     * Test entity class.
     *
     * @return void
     *
     * @throws \ReflectionException
     */
    public function testEntityClass(): void
    {
        $repository = $this->app->get(UserRepository::class);

        $method = $this->getMethodAsPublic(UserRepository::class, 'getEntityClass');

        self::assertEquals(User::class, $method->invoke($repository));
    }

    /**
     * Test find by first name.
     *
     * @return void
     *
     * @throws \Exception
     */
    public function testFindByFirstName(): void
    {
        
    }
}
