<?php

namespace Drupal\Tests\my_module\Kernel;

use Drupal\KernelTests\Core\Entity\EntityKernelTestBase;

class ArticleRepositoryTest extends EntityKernelTestBase {

  /** @test */
  public function it_returns_blog_posts() {
    $this->assertCount(1, $articles);
  }

}