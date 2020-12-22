<?php

declare(strict_types=1);

namespace JGI\BjornLunden\Tests\Provider;

use JGI\BjornLunden\BjornLunden;
use JGI\BjornLunden\Credentials;
use JGI\BjornLunden\Exception\BjornLundenHttpException;
use JGI\BjornLunden\Model\Article;
use JGI\BjornLunden\Provider\ArticleProvider;
use PHPUnit\Framework\TestCase;

class ArticleProviderTest extends TestCase
{
    use ProviderTestTrait;

    /**
     * @test
     */
    public function it_returns_an_array_of_articles()
    {
        $json = file_get_contents(__DIR__ . '/json/articles.json');

        $articleProvider = new ArticleProvider(
            $this->createHttpClientMock($json),
            $this->createCredentialsMock()
        );
        $articles = $articleProvider->all();

        $this->assertIsArray($articles);
        $this->assertCount(21, $articles);
        $article = $articles[0];
        $this->assertInstanceOf(Article::class, $article);
    }

    /**
     * @test
     */
    public function it_returns_null_when_not_found()
    {
        $json = file_get_contents(__DIR__ . '/json/resource_not_found.json');

        $articleProvider = new ArticleProvider(
            $this->createHttpClientMock($json, 400),
            $this->createCredentialsMock()
        );
        $article = $articleProvider->find('123unknown');

        $this->assertEquals(null, $article);
    }

    /**
     * @test
     */
    public function it_creates_an_article()
    {
        $json = file_get_contents(__DIR__ . '/json/article.json');

        $articleProvider = new ArticleProvider(
            $this->createHttpClientMock($json),
            $this->createCredentialsMock()
        );
        $article = new Article();
        $newArticle = $articleProvider->create($article);

        $this->assertInstanceOf(Article::class, $newArticle);
    }

    /**
     * @test
     */
    public function it_updates_an_article()
    {
        $json = file_get_contents(__DIR__ . '/json/article.json');

        $articleProvider = new ArticleProvider(
            $this->createHttpClientMock($json),
            $this->createCredentialsMock()
        );

        $article = new Article();
        $newArticle = $articleProvider->update($article);

        $this->assertInstanceOf(Article::class, $newArticle);
    }

    /**
     * @test
     */
    public function it_updates_an_article_from_array()
    {
        $json = file_get_contents(__DIR__ . '/json/article.json');

        $articleProvider = new ArticleProvider(
            $this->createHttpClientMock($json),
            $this->createCredentialsMock()
        );

        $newArticle = $articleProvider->updateFromArray([]);

        $this->assertInstanceOf(Article::class, $newArticle);
    }
}
