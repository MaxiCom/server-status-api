<?php

namespace App\Factory;

use App\Entity\ActiveUserCount;
use App\Repository\ActiveUserCountRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<ActiveUserCount>
 *
 * @method        ActiveUserCount|Proxy                     create(array|callable $attributes = [])
 * @method static ActiveUserCount|Proxy                     createOne(array $attributes = [])
 * @method static ActiveUserCount|Proxy                     find(object|array|mixed $criteria)
 * @method static ActiveUserCount|Proxy                     findOrCreate(array $attributes)
 * @method static ActiveUserCount|Proxy                     first(string $sortedField = 'id')
 * @method static ActiveUserCount|Proxy                     last(string $sortedField = 'id')
 * @method static ActiveUserCount|Proxy                     random(array $attributes = [])
 * @method static ActiveUserCount|Proxy                     randomOrCreate(array $attributes = [])
 * @method static ActiveUserCountRepository|RepositoryProxy repository()
 * @method static ActiveUserCount[]|Proxy[]                 all()
 * @method static ActiveUserCount[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static ActiveUserCount[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static ActiveUserCount[]|Proxy[]                 findBy(array $attributes)
 * @method static ActiveUserCount[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static ActiveUserCount[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class ActiveUserCountFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'count' => self::faker()->randomNumber(),
            'createdAt' => \DateTimeImmutable::createFromMutable(self::faker()->dateTime()),
            'serverId' => self::faker()->randomNumber(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(ActiveUserCount $activeUserCount): void {})
        ;
    }

    protected static function getClass(): string
    {
        return ActiveUserCount::class;
    }
}
