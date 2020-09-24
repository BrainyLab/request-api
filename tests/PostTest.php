<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Request\Methods\Post;

final class PostTest extends TestCase
{
  public function testRequestPostMethod(): void
  {
    $this->assertInstanceOf(
      Post::class,
      'Instance Class Post Method'
    );
  }
}
