<?php

namespace Intercom;

class IntercomMe {

  /** @var IntercomClient */
  private $client;

  /**
   * IntercomTags constructor.
   * @param IntercomClient $client
   */
  public function __construct($client)
  {
    $this->client = $client;
  }

  /**
   * List current user
   * @see https://developers.intercom.com/reference#list-segments
   * @param array $options
   * @return mixed
   * @throws \GuzzleHttp\Exception\GuzzleException
   */
  public function getMe($options = [])
  {
    return $this->client->get("me", $options);
  }
}
