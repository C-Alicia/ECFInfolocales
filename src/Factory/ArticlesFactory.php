<?php

namespace App\Factory;

use App\Entity\Articles;
use App\Repository\ArticlesRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Articles>
 *
 * @method static Articles|Proxy createOne(array $attributes = [])
 * @method static Articles[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Articles|Proxy find(object|array|mixed $criteria)
 * @method static Articles|Proxy findOrCreate(array $attributes)
 * @method static Articles|Proxy first(string $sortedField = 'id')
 * @method static Articles|Proxy last(string $sortedField = 'id')
 * @method static Articles|Proxy random(array $attributes = [])
 * @method static Articles|Proxy randomOrCreate(array $attributes = [])
 * @method static Articles[]|Proxy[] all()
 * @method static Articles[]|Proxy[] findBy(array $attributes)
 * @method static Articles[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Articles[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static ArticlesRepository|RepositoryProxy repository()
 * @method Articles|Proxy create(array|callable $attributes = [])
 */
final class ArticlesFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            // TODO add your default values here (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories)
            'title' => self::faker()->unique()->sentence(),
            'Excerpt' => self::faker()->text(),
            'description' => self::faker()->text(),
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Articles $articles): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Articles::class;
    }
}
