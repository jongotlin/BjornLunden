<?php

namespace JGI\BjornLunden\Provider;

use GuzzleHttp\Client;
use JGI\BjornLunden\Credentials;
use JGI\BjornLunden\Exception\BjornLundenHttpException;
use JGI\BjornLunden\Model\Article;
use JGI\BjornLunden\Normalizer\ArticleNormalizer;

class ArticleProvider extends BaseProvider implements ProviderInterface
{
    /**
     * @return Article[]
     */
    public function all(): array
    {
        $data = $this->get('article/');

        $articles = [];
        foreach ($data as $row) {
            $articles[] = ArticleNormalizer::denormalize($row);
        }

        return $articles;
    }

    /**
     * @param Article $article
     *
     * @return Article
     */
    public function create(Article $article): Article
    {
        $data = ArticleNormalizer::normalize($article);

        $result = $this->post('article/', $data);

        return ArticleNormalizer::denormalize($result);
    }

    /**
     * @param Article $article
     *
     * @return Article
     */
    public function update(Article $article): Article
    {
        $data = ArticleNormalizer::normalize($article);

        return $this->updateFromArray($data);
    }

    /**
     * @param array $array
     *
     * @return Article
     */
    public function updateFromArray(array $array): Article
    {
        $result = $this->put('article/', $array);

        return ArticleNormalizer::denormalize($result);
    }

    /**
     * @param string $id
     *
     * @return Article|null
     */
    public function find(string $id): ?Article
    {
        try {
            $result = $this->get('article/' . $id);
        } catch (BjornLundenHttpException $exception) {
            if ($exception->getError()->isProbablyNotFound() || $exception->getCode() == 400) {
                return null;
            }

            throw $exception;
        }

        return ArticleNormalizer::denormalize($result);
    }
}
