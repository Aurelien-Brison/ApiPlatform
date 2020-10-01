<?php 

namespace App\tests\Unit;

use App\Entity\User;
use App\Entity\Article;
use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();

        $this->article = new Article();
    }

    public function testGetName(): void
    {
        $value = 'Super name de test';

        $response = $this->article->setName($value);

        self::assertInstanceOf(Article::class, $response);
        self::assertEquals($value, $this->article->getName());
    }

    public function testGetContent(): void
    {
        $value = 'Super content de test';

        $response = $this->article->setContent($value);

        self::assertInstanceOf(Article::class, $response);
        self::assertEquals($value, $this->article->getContent());
    }

    public function testGet() : void
    {
        $value = new User();

        $response = $this->article->setAuthor($value);

        self::assertInstanceOf(Article::class, $response);
        self::assertInstanceOf(User::class, $this->article->getAuthor());
    }
}